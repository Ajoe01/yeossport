<?php

namespace Drupal\social_login\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

/**
 * Displays a Social Login block.
 *
 * @Block(
 *   id = "social_login_block",
 *   admin_label = @Translation("Social Login"),
 * )
 */
class SocialLoginBlock extends BlockBase {

  /**
   * Disables the cache for this block.
   */
  public function getCacheMaxAge() {
    return 0;
  }

  /**
   * Indicates whether the block should be shown.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   Instance of the user's account.
   *
   * @return \Drupal\Core\Access\AccessResult
   *   Returns access result for the account.
   */
  public function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIf($account->isAnonymous());
  }

  /**
   * Returns the Social Login Block.
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\social_login\Form\SocialLoginBlock');
  }

}
