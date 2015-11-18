<?php
/**
 * @file
 * Contains \Drupal\quotesapi\Controller\QuotesController.
 */

namespace Drupal\quotesapi\Controller;

use Drupal\Core\Controller\ControllerBase;

class QuotesController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
    );
  }
  public function settings() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('To do... content of the admin page.'),
    );
  }

}
?>
