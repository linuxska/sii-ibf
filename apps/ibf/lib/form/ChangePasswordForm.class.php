<?php

class ChangePasswordForm extends sfGuardUserAdminForm {

  public function configure() {
  	  parent::configure();
  	  unset(
  	  	  $this['username'],
  	  	  $this['is_active'],
  	  	  $this['is_super_admin'],
  	  	  $this['sf_guard_user_permission_list'],
  	  	  $this['sf_guard_user_group_list']
  	  );
  	  
  	  $this->validatorSchema['password']->setOption('required' , true);
  	  $this->validatorSchema['password']->setOption('min_length', 8);
	  $this->validatorSchema['password']->setMessage('min_length', 'Debe contener como mínimo 8 caracteres.');
	  $this->validatorSchema['password']->setMessage('required', 'Este campo no puede dejarse en blanco.');

  	  $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];
	  $this->widgetSchema->setLabels(array(
  		'password'    => 'Nueva contraseña',
  		'password_again'   => 'Repite <br/> Nueva contraseña'
));
  }

}
?>

