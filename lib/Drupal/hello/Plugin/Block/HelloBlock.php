<?php

namespace Drupal\hello\Plugin\Block;
use Drupal\block\BlockBase;

/**
 * Provides a hello block.
 *
 * @Block(
 *  id = "hello_block",
 *  subject = @Translation("Hello Admin Subject"),
 *  admin_label = @Translation("Hello Admin Label")
 * )
 */
class HelloBlock extends BlockBase {
  /**
   * Implements Drupal\Block\BlockBase::build().
   */
  public function build() {
  	$this->configuration['label'] = t('Hello block config');
  	//$form = \Drupal::formBuilder()->getForm('hello_form');
	  //return array('#markup' => $form);
  	return array('#markup' => t('Hello block content'));
  }
}