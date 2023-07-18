<?php

namespace Drupal\socializer;

use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Base Networks service.
 */
class Networks extends ServiceProviderBase {

  /**
   * List of available networks.
   */
  public function networksList(): array {
    return [
      'facebook' => 'Facebook',
      'instagram' => 'Instagram',
      'twitter' => 'Twitter',
      'linkedin' => 'LinkedIn',
      'youtube' => 'YouTube',
      'pinterest' => 'Pinterest',
      'quora' => 'Quora',
      'reddit' => 'Reddit',
      'snapchat' => 'Snapchat',
      'telegram' => 'Telegram',
      'tiktok' => 'TikTok',
      'behance' => 'Behance',
      'bitbucket' => 'BitBucket',
      'drupal' => 'Drupal',
      'github' => 'GitHub',
      'gitlab' => 'GitLab',
      'tumblr' => 'Tumblr',
      'vimeo' => 'Vimeo',
      'vk' => 'VK',
      'flickr' => 'Flickr',
      'rss' => 'RSS',
    ];
  }

}
