<?php

/**
 * @file
 * Contains \Drupal\Core\Form\FormErrorInterface.
 */

namespace Drupal\Core\Form;

/**
 * Provides an interface for form error handling.
 *
 * @deprecated in Drupal 8.x-dev, will be removed before Drupal 8.0.
 *   Use \Drupal\Core\Form\FormStateInterface directly.
 */
interface FormErrorInterface {

  /**
   * Files an error against a form element.
   *
   * When a validation error is detected, the validator calls this method to
   * indicate which element needs to be changed and provide an error message.
   * This causes the Form API to not execute the form submit handlers, and
   * instead to re-display the form to the user with the corresponding elements
   * rendered with an 'error' CSS class (shown as red by default).
   *
   * The standard behavior of this method can be changed if a button provides
   * the #limit_validation_errors property. Multistep forms not wanting to
   * validate the whole form can set #limit_validation_errors on buttons to
   * limit validation errors to only certain elements. For example, pressing the
   * "Previous" button in a multistep form should not fire validation errors
   * just because the current step has invalid values. If
   * #limit_validation_errors is set on a clicked button, the button must also
   * define a #submit property (may be set to an empty array). Any #submit
   * handlers will be executed even if there is invalid input, so extreme care
   * should be taken with respect to any actions taken by them. This is
   * typically not a problem with buttons like "Previous" or "Add more" that do
   * not invoke persistent storage of the submitted form values. Do not use the
   * #limit_validation_errors property on buttons that trigger saving of form
   * values to the database.
   *
   * The #limit_validation_errors property is a list of "sections" within
   * $form_state['values'] that must contain valid values. Each "section" is an
   * array with the ordered set of keys needed to reach that part of
   * $form_state['values'] (i.e., the #parents property of the element).
   *
   * Example 1: Allow the "Previous" button to function, regardless of whether
   * any user input is valid.
   *
   * @code
   *   $form['actions']['previous'] = array(
   *     '#type' => 'submit',
   *     '#value' => t('Previous'),
   *     '#limit_validation_errors' => array(),       // No validation.
   *     '#submit' => array('some_submit_function'),  // #submit required.
   *   );
   * @endcode
   *
   * Example 2: Require some, but not all, user input to be valid to process the
   * submission of a "Previous" button.
   *
   * @code
   *   $form['actions']['previous'] = array(
   *     '#type' => 'submit',
   *     '#value' => t('Previous'),
   *     '#limit_validation_errors' => array(
   *       array('step1'),      // Validate $form_state['values']['step1'].
   *       array('foo', 'bar'), // Validate $form_state['values']['foo']['bar'].
   *     ),
   *     '#submit' => array('some_submit_function'), // #submit required.
   *   );
   * @endcode
   *
   * This will require $form_state['values']['step1'] and everything within it
   * (for example, $form_state['values']['step1']['choice']) to be valid, so
   * calls to FormErrorInterface::setErrorByName('step1', $form_state, $message)
   * or
   * FormErrorInterface::setErrorByName('step1][choice', $form_state, $message)
   * will prevent the submit handlers from running, and result in the error
   * message being displayed to the user. However, calls to
   * FormErrorInterface::setErrorByName('step2', $form_state, $message) and
   * FormErrorInterface::setErrorByName('step2][groupX][choiceY', $form_state, $message)
   * will be suppressed, resulting in the message not being displayed to the
   * user, and the submit handlers will run despite
   * $form_state['values']['step2'] and
   * $form_state['values']['step2']['groupX']['choiceY'] containing invalid
   * values. Errors for an invalid $form_state['values']['foo'] will be
   * suppressed, but errors flagging invalid values for
   * $form_state['values']['foo']['bar'] and everything within it will be
   * flagged and submission prevented.
   *
   * Partial form validation is implemented by suppressing errors rather than by
   * skipping the input processing and validation steps entirely, because some
   * forms have button-level submit handlers that call Drupal API functions that
   * assume that certain data exists within $form_state['values'], and while not
   * doing anything with that data that requires it to be valid, PHP errors
   * would be triggered if the input processing and validation steps were fully
   * skipped.
   *
   * @param string $name
   *   The name of the form element. If the #parents property of your form
   *   element is array('foo', 'bar', 'baz') then you may set an error on 'foo'
   *   or 'foo][bar][baz'. Setting an error on 'foo' sets an error for every
   *   element where the #parents array starts with 'foo'.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   * @param string $message
   *   (optional) The error message to present to the user.
   *
   * @return mixed
   *   Return value is for internal use only. To get a list of errors, use
   *   FormErrorInterface::getErrors() or FormErrorInterface::getError().
   */
  public function setErrorByName($name, FormStateInterface &$form_state, $message = '');

  /**
   * Clears all errors against all form elements made by FormErrorInterface::setErrorByName().
   *
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function clearErrors(FormStateInterface &$form_state);

  /**
   * Returns an associative array of all errors.
   *
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   An array of all errors, keyed by the name of the form element.
   */
  public function getErrors(FormStateInterface &$form_state);

  /**
   * Returns the error message filed against the given form element.
   *
   * Form errors higher up in the form structure override deeper errors as well
   * as errors on the element itself.
   *
   * @param array $element
   *   The form element to check for errors.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return string|null
   *   Either the error message for this element or NULL if there are no errors.
   */
  public function getError($element, FormStateInterface &$form_state);

  /**
   * Flags an element as having an error.
   */
  public function setError(&$element, FormStateInterface &$form_state, $message = '');

  /**
   * Returns if there have been any errors during build.
   *
   * This will include any forms built during this request.
   *
   * @return bool
   *   Whether there have been any errors.
   */
  public function getAnyErrors();

}
