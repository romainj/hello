<?php

/**
 * @file
 * Contains \Drupal\hello\Form\HelloAdminForm.
 */
namespace Drupal\hello\Form;
use Drupal\Core\Form\ConfigFormBase;

/**
 * Implements an hello admin form.
 */
class HelloAdminForm extends ConfigFormBase {
  /**
   * {@inheritdoc}.
   */
  public function getFormID() {
    return 'hello_admin_form';
  }
  
  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, array &$form_state) {
    $form['admin_number'] = array(
      '#type' => 'textfield',
      '#title' => 'Your text field',
    );
    
    return parent::buildForm($form, $form_state);
  }
  
  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {
    
  }
  
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    drupal_set_message($this->t('Admin form submitted'));
  }
}