<?php

namespace Drupal\social_wall\Plugin\SocialNetwork;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslationManager;
use Drupal\social_wall\Plugin\SocialNetworkBase;
use Exception;
use Instagram\Api;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class that handles the Instagram feed.
 *
 * @package Drupal\social_wall\Plugin\SocialNetwork
 *
 * @SocialNetwork(
 *   id = "instagram_social_network",
 *   label = @Translation("Instagram social network")
 * )
 */
class InstagramSocialNetwork extends SocialNetworkBase implements ContainerFactoryPluginInterface {

  /**
   * Config Factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   *   This is config factory.
   */
  protected $configFactory;

  /**
   * Time for caching API call data, to prevent "exceeded quota" error.
   *
   * @var int
   */
  protected static $dataCacheTime = 60 * 20;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    TranslationManager $translation_manager,
    CacheBackendInterface $cache_backend,
    LoggerChannelFactoryInterface $logger_factory,
    ConfigFactoryInterface $config_factory) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $translation_manager, $cache_backend, $logger_factory);
    $this->configFactory = $config_factory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('string_translation'),
      $container->get('cache.default'),
      $container->get('logger.factory'),
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getLabel() {
    return 'Instagram';
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $third_party_settings = []) {
    $form = [];

    $form['account_to_retrieve'] = [
      '#type' => 'textfield',
      '#title' => $this->translationManager->translate('Account to retrieve data from (ID)'),
      '#default_value' => $third_party_settings['account_to_retrieve'] ?? '',
      '#required' => TRUE,
    ];

    $form['nb_of_posts'] = [
      '#type' => 'select',
      '#title' => $this->translationManager->translate('Number of posts'),
      '#description' => $this->translationManager->translate('The number of posts to display.'),
      '#options' => array_combine(range(1, 12), range(1, 12)),
      '#default_value' => $third_party_settings['nb_of_posts'] ?? 1,
      '#required' => TRUE,
    ];

    $form['text_length'] = [
      '#type' => 'number',
      '#min' => 0,
      '#title' => $this->translationManager->translate('Maximum text length'),
      '#description' => $this->translationManager->translate('The number of characters you want to show before truncating text. Set to 0 for no limit.'),
      '#default_value' => $third_party_settings['text_length'] ?? 0,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function render() {
    $build = [];

    // Set block cache.
    $build['#cache']['max-age'] = self::getDataCacheTime();

    // Retrieve config.
    $account_to_retrieve = $this->configuration['account_to_retrieve'] ?? '';
    $nb_of_posts = $this->configuration['nb_of_posts'] ?? 1;
    $text_length = $this->configuration['text_length'] ?? 0;

    // If data has been cached, return cached data.
    $cached_results = $this->cacheBackend->get("social_wall_instagram_data_{$account_to_retrieve}_{$nb_of_posts}_{$text_length}");
    if ($cached_results && ($cached_results->valid)) {
      return $cached_results->data;
    }

    try {
      // Retrieve Instagram data.
      $cachePool = new FilesystemAdapter();
      $api = new Api($cachePool);
      $profile = $api->getProfile($account_to_retrieve);
      $medias = $profile->getMedias();

      if (!empty($medias)) {
        $build = [
          '#theme' => 'social_network_instagram_block',
          '#elements' => [],
        ];

        for ($i = 0; $i < $nb_of_posts && $i < count($medias); $i++) {
          $media = $medias[$i];

          // Truncate caption.
          $caption = nl2br(Xss::filter($media->getCaption()));
          if (!empty($caption) && $text_length > 0 && strlen($caption) > $text_length) {
            $caption = substr($caption, 0, $text_length) . '...';
          }

          // Base64 encoded image, to prevent CORS restrictions.
          $image = $media->getDisplaySrc();
          $image_data = base64_encode(file_get_contents($image));

          // Add media to render.
          $build['#elements'][] = [
            'image_url' => 'data: ;base64,' . $image_data,
            'creation_timestamp' => $media->getDate()->getTimestamp(),
            'caption' => ['#markup' => $caption ?? ''],
            'post_url' => $media->getLink(),
          ];
        }
      }

      // Cache block build.
      $this->cacheBackend->set("social_wall_instagram_data_{$account_to_retrieve}_{$nb_of_posts}_{$text_length}", $build, time() + self::getDataCacheTime());
    }
    catch (Exception $e) {
      $this->loggerFactory->get('social_wall')->error('Instagram : @error', ['@error' => $e->getMessage()]);

      // Return last (outdated) data, to prevent empty display.
      if (!empty($cached_results)) {
        $build = $cached_results->data;
      }
    }

    return $build;
  }

}
