<?php

/**
 * @file
 * Contains \Drupal\form_test\FormTestServiceObject.
 */

namespace Drupal\form_test;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a test form object.
 */
class FormTestServiceObject extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_test_form_test_service_object';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['element'] = array('#markup' => 'The FormTestServiceObject::buildForm() method was used for this form.');

    $form['bananas'] = array(
      '#type' => 'textfield',
      '#default_value' => 'brown',
      '#title' => $this->t('Bananas'),
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t('The FormTestServiceObject::validateForm() method was used for this form.'));
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t('The FormTestServiceObject::submitForm() method was used for this form.'));
    $this->config('form_test.object')
      ->set('bananas', $form_state['values']['bananas'])
      ->save();
  }

}
