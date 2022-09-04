<?php
  namespace Drupal\custom\Controller;
  use Drupal\Core\Controller\ControllerBase;

  class CustomController extends ControllerBase{
    public function createCustomer()
    {
      $form = \Drupal::formBuilder()->getForm('Drupal\custom\Form\CusForm');
      //$renderForm = \Drupal::service('renderer')->render($form);

      return[
        '#theme'=>'custom-template',
        '#items'=>$form,
        '#title'=>'Customer Form'
      ];
    }
  }
