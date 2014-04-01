<?php

namespace Drupal\hello\Controller;

class HelloController {
  public function content($argument1 = NULL) {
    return array(
      '#type' => 'markup', 
      '#markup' => t('Hello. ') . $argument1, 
    ); 
  } 
}