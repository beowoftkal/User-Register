<?php
    namespace Drupal\custom\Form;
    use Drupal\Core\Form\FormBase;
    use Drupal\Core\Form\FormStateInterface;
    use Drupal\Core\Database\Database;

    class CusForm extends FormBase{
      /**
       * *{@inheritDoc}
       */
      public function getFormId()
      {
        return 'create_cus';
      }
      /**
       * {@inheritDoc}
       */
      public function buildForm(array $form, FormStateInterface $form_state)
      {

        $ageOption = array(
          '0' => 'Chọn tuổi',
          '10-18' => '10-18',
          '18-30,' => '18-30',
          '30-50' => '30-50'
        );

        $form['name'] = array(
          '#type' => 'textfield',
          '#title'=> t('Họ tên'),
          '#default_value'=> '',
          '#attributes'=> array(
            'placeholder'=>'Họ tên'
          )
        );
        $form['phone'] = array(
          '#type' => 'textfield',
          '#title'=> t('Số điện thoại'),
          '#default_value'=> '',
          '#attributes'=> array(
            'placeholder'=>'số điện thoại'
          )

        );
        $form['email'] = array(
          '#type' => 'textfield',
          '#title'=> t('Email'),
          '#default_value'=> '',

          '#attributes'=> array(
            'placeholder'=>'abc@kyanon.digital'
          )

        );
        $form['age'] = array(
          '#type' => 'select',
          '#title'=> 'Tuổi',
          '#options'=> $ageOption
        );


        $form['describeseft'] = array(
          '#type' => 'textarea',
          '#title'=> 'Mô tả bản thân',
          '#default_value'=> ''


        );


        $form['save'] = array(
          '#type'=> 'submit',
          '#value'=>'Save',
          '#button_type'=>'primary'
        );
        return $form;
      }
         /**
       * {@inheritDoc}
       */
      public function validateForm(array &$form, FormStateInterface $form_state)
      {
        $name = $form_state->getValue('name');
        $phone = $form_state->getValue('phone');
        $email = $form_state->getValue('email');
        $domain = "@kyanon.digital";
        if(trim($name) == ''){
          $form_state->setErrorByName('name', $this->t('tên không được để trống'));
        }
       if(trim($phone) == ''){
          $form_state->setErrorByName('phone', $this->t('số điện thoại không được để trống'));
        }

        if(trim($email) == ''){
          $form_state->setErrorByName('email', $this->t('email không được để trống'));
        }

         if(trim($email) !== ''){
           if (strpos($email, $domain) !== false) {

          } else {
            $form_state->setErrorByName('email', $this->t('trường của bạn không thuộc @kyanon.digital'));
          }
        }
       if($form_state->getValue('age') == '0'){
          $form_state->setErrorByName('age', $this->t('tuổi không được để trống'));
        }
       if($form_state->getValue('age') == '10-18'){
          $form_state->setErrorByName('age', $this->t('bạn chưa đủ tuổi'));
        }

      }
       /**
       * {@inheritDoc}
       */
      public function submitForm(array &$form, FormStateInterface $form_state)
      {
        $postData = $form_state->getValues();


        unset($postData['save'],$postData['form_build_id'],$postData['form_token'],$postData['form_id'],$postData['op']);
        $query = \Drupal::database();
        $query->insert('customer')->fields($postData)->execute();

        \Drupal::messenger()->addMessage(t('đăng ký thành công'), 'status',TRUE);
      }
    }
?>
