<?php

/**
 * @file
 * Contains \Drupal\shortcut\Form\SwitchShortcutSet.
 */

namespace Drupal\shortcut\Form;

use Drupal\Component\Utility\String;
use Drupal\Core\Access\AccessInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\shortcut\Entity\ShortcutSet;
use Drupal\shortcut\ShortcutSetStorageInterface;
use Drupal\user\UserInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Builds the shortcut set switch form.
 */
class SwitchShortcutSet extends FormBase {

  /**
   * The account the shortcut set is for.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $user;

  /**
   * The shortcut set storage.
   *
   * @var \Drupal\shortcut\ShortcutSetStorageInterface
   */
  protected $shortcutSetStorage;

  /**
   * The current route match.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $routeMatch;

  /**
   * Constructs a SwitchShortcutSet object.
   *
   * @param \Drupal\shortcut\ShortcutSetStorageInterface $shortcut_set_storage
   *   The shortcut set storage.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The current route match.
   */
  public function __construct(ShortcutSetStorageInterface $shortcut_set_storage, RouteMatchInterface $route_match) {
    $this->shortcutSetStorage = $shortcut_set_storage;
    $this->routeMatch = $route_match;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.manager')->getStorage('shortcut_set'),
      $container->get('current_route_match')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'shortcut_set_switch';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, UserInterface $user = NULL) {
    $account = $this->currentUser();

    $this->user = $user;

    // Prepare the list of shortcut sets.
    $options = array_map(function (ShortcutSet $set) {
      return String::checkPlain($set->label());
    }, $this->shortcutSetStorage->loadMultiple());

    $current_set = shortcut_current_displayed_set($this->user);

    // Only administrators can add shortcut sets.
    $add_access = $account->hasPermission('administer shortcuts');
    if ($add_access) {
      $options['new'] = $this->t('New set');
    }

    $account_is_user = $this->user->id() == $account->id();
    if (count($options) > 1) {
      $form['set'] = array(
        '#type' => 'radios',
        '#title' => $account_is_user ? $this->t('Choose a set of shortcuts to use') : $this->t('Choose a set of shortcuts for this user'),
        '#options' => $options,
        '#default_value' => $current_set->id(),
      );

      $form['label'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Label'),
        '#title_display' => 'invisible',
        '#description' => $this->t('The new set is created by copying items from your default shortcut set.'),
        '#access' => $add_access,
      );
      $form['id'] = array(
        '#type' => 'machine_name',
        '#machine_name' => array(
          'exists' => array($this, 'exists'),
          'replace_pattern' => '[^a-z0-9-]+',
          'replace' => '-',
        ),
        // This ID could be used for menu name.
        '#maxlength' => 23,
        '#states' => array(
          'required' => array(
            ':input[name="set"]' => array('value' => 'new'),
          ),
        ),
        '#required' => FALSE,
      );

      if (!$account_is_user) {
        $default_set = $this->shortcutSetStorage->getDefaultSet($this->user);
        $form['new']['#description'] = $this->t('The new set is created by copying items from the %default set.', array('%default' => $default_set->label()));
      }

      $form['#attached'] = array(
        'library' => array('shortcut/drupal.shortcut.admin'),
      );

      $form['actions'] = array('#type' => 'actions');
      $form['actions']['submit'] = array(
        '#type' => 'submit',
        '#value' => $this->t('Change set'),
      );
    }
    else {
      // There is only 1 option, so output a message in the $form array.
      $form['info'] = array(
        '#markup' => '<p>' . $this->t('You are currently using the %set-name shortcut set.', array('%set-name' => $current_set->label())) . '</p>',
      );
    }

    return $form;
  }

  /**
   * Determines if a shortcut set exists already.
   *
   * @param string $id
   *   The set ID to check.
   *
   * @return bool
   *   TRUE if the shortcut set exists, FALSE otherwise.
   */
  public function exists($id) {
    return (bool) $this->shortcutSetStorage->getQuery()
      ->condition('id', $id)
      ->execute();
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if ($form_state['values']['set'] == 'new') {
      // Check to prevent creating a shortcut set with an empty title.
      if (trim($form_state['values']['label']) == '') {
        $this->setFormError('new', $form_state, $this->t('The new set label is required.'));
      }
      // Check to prevent a duplicate title.
      if (shortcut_set_title_exists($form_state['values']['label'])) {
        $this->setFormError('label', $form_state, $this->t('The shortcut set %name already exists. Choose another name.', array('%name' => $form_state['values']['label'])));
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $account = $this->currentUser();

    $account_is_user = $this->user->id() == $account->id();
    if ($form_state['values']['set'] == 'new') {
      // Save a new shortcut set with links copied from the user's default set.
      /* @var \Drupal\shortcut\Entity\ShortcutSet $set */
      $set = $this->shortcutSetStorage->create(array(
        'id' => $form_state['values']['id'],
        'label' => $form_state['values']['label'],
      ));
      $set->save();
      $replacements = array(
        '%user' => $this->user->label(),
        '%set_name' => $set->label(),
        '@switch-url' => $this->url($this->routeMatch->getRouteName(), array('user' => $this->user->id())),
      );
      if ($account_is_user) {
        // Only administrators can create new shortcut sets, so we know they have
        // access to switch back.
        drupal_set_message($this->t('You are now using the new %set_name shortcut set. You can edit it from this page or <a href="@switch-url">switch back to a different one.</a>', $replacements));
      }
      else {
        drupal_set_message($this->t('%user is now using a new shortcut set called %set_name. You can edit it from this page.', $replacements));
      }
      $form_state['redirect_route'] = array(
        'route_name' => 'shortcut.set_customize',
        'route_parameters' => array(
          'shortcut_set' => $set->id(),
        ),
      );
    }
    else {
      // Switch to a different shortcut set.
      /* @var \Drupal\shortcut\Entity\ShortcutSet $set */
      $set = $this->shortcutSetStorage->load($form_state['values']['set']);
      $replacements = array(
        '%user' => $this->user->label(),
        '%set_name' => $set->label(),
      );
      drupal_set_message($account_is_user ? $this->t('You are now using the %set_name shortcut set.', $replacements) : $this->t('%user is now using the %set_name shortcut set.', $replacements));
    }

    // Assign the shortcut set to the provided user account.
    $this->shortcutSetStorage->assignUser($set, $this->user);
  }

  /**
   * Checks access for the shortcut set switch form.
   *
   * @param \Drupal\user\UserInterface $user
   *   (optional) The owner of the shortcut set.
   *
   * @return mixed
   *   AccessInterface::ALLOW, AccessInterface::DENY, or AccessInterface::KILL.
   */
  public function checkAccess(UserInterface $user = NULL) {
    $account = $this->currentUser();
    $this->user = $user;

    if ($account->hasPermission('administer shortcuts')) {
      // Administrators can switch anyone's shortcut set.
      return AccessInterface::ALLOW;
    }

    if (!$account->hasPermission('access shortcuts')) {
      // The user has no permission to use shortcuts.
      return AccessInterface::DENY;
    }

    if (!$account->hasPermission('switch shortcut sets')) {
      // The user has no permission to switch anyone's shortcut set.
      return AccessInterface::DENY;
    }

    if ($this->user->id() == $account->id()) {
      // Users with the 'switch shortcut sets' permission can switch their own
      // shortcuts sets.
      return AccessInterface::ALLOW;
    }
    return AccessInterface::DENY;
  }

}
