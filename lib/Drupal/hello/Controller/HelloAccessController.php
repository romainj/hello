<?php

namespace Drupal\hello\Controller;

class HelloAccessController {
  public function content() {
    return array(
      '#type' => 'markup', 
      '#markup' => t('Hello Access !!!'), 
    ); 
  } 
}