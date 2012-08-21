<?php

class sfGuardLoginForm extends sfGuardFormSignin {

  public function configure()
  {
    $this->setWidgets(array(
      'username' => new sfWidgetFormInput(array('label'=>'Usuario')),
      'password' => new sfWidgetFormInput(array('label'=>'Contraseña'), array('type' => 'password')),
      'remember' => new sfWidgetFormInputCheckbox(array('label'=>'¿Recordar?')),
    ));

    $this->setValidators(array(
      'username' => new sfValidatorString(array(), array('required' =>  'Requerido.', 'invalid'=>'Inválido.')),
      'password' => new sfValidatorString(array(), array('required' =>  'Requerido.', 'invalid'=>'Inválido.')),
      'remember' => new sfValidatorBoolean(),
    ));

    $this->validatorSchema->setPostValidator(new sfGuardValidatorUser());

    $this->widgetSchema->setNameFormat('signin[%s]');
  }
}
