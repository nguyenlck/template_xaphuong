<?php
function gavias_vinor_form_contact_message_feedback_form_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id) {

  // Name
   $form['name']['#prefix'] = '<div class="form-group">';
  $form['name']['#suffix'] = '</div>';
  $form['name']['#attributes']['placeholder'][] = $form['name']['#title'].'*';
  $form['name']['#attributes']['class'][] = 'form-control';
  unset($form['name']['#title']);

  // Mail
  $form['mail']['#prefix'] = '<div class="form-group">';
  $form['mail']['#suffix'] = '</div>';
  $form['mail']['#attributes']['placeholder'][] = $form['mail']['#title'].'*';
  $form['mail']['#attributes']['class'][] = 'form-control';
  unset($form['mail']['#title']);


  // Subject
  $form['subject']['widget'][0]['value']['#attributes']['class'][] = 'form-control';
  $form['subject']['widget'][0]['value']['#attributes']['placeholder'][] = $form['subject']['widget'][0]['#title'].'*';
  $form['subject']['widget'][0]['#title'] = '';
  unset($form['subject']['widget'][0]['value']['#title']);
  $form['subject']['widget'][0]['#prefix'] = '<div class="form-group">';
  $form['subject']['widget'][0]['#suffix'] = '</div>';

  // Message
  $form['message']['widget'][0]['value']['#attributes']['class'][] = 'form-control';
  $form['message']['widget'][0]['value']['#attributes']['placeholder'][] = $form['message']['widget'][0]['#title'].'*';
  $form['message']['widget'][0]['#title'] = '';
  unset($form['message']['widget'][0]['value']['#title']);
  $form['message']['widget'][0]['#prefix'] = '<div class="form-group">';
   $form['message']['widget'][0]['#suffix'] = '</div>';

  // Submit
  $form['actions']['#prefix'] = '<div class="clearfix">';
  $form['actions']['#suffix'] = '</div>';
  $form['actions']['submit']['#attributes']['class'][] = 'btn';
  $form['actions']['submit']['#attributes']['class'][] = 'btn-theme';
  $form['actions']['submit']['#attributes']['class'][] = 'pull-right';

}