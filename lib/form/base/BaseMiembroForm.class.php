<?php

/**
 * Miembro form base class.
 *
 * @method Miembro getObject() Returns the current form's model object
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseMiembroForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'ministerio'    => new sfWidgetFormPropelChoice(array('model' => 'Ministerio', 'add_empty' => false)),
      'nombre'        => new sfWidgetFormInputText(),
      'apaterno'      => new sfWidgetFormInputText(),
      'amaterno'      => new sfWidgetFormInputText(),
      'sexo'          => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'entrecalles'   => new sfWidgetFormInputText(),
      'colonia'       => new sfWidgetFormInputText(),
      'cp'            => new sfWidgetFormInputText(),
      'ciudad'        => new sfWidgetFormInputText(),
      'telcasa'       => new sfWidgetFormInputText(),
      'telmovil'      => new sfWidgetFormInputText(),
      'cumpleanios'   => new sfWidgetFormDate(),
      'fechabautismo' => new sfWidgetFormDate(),
      'correo'        => new sfWidgetFormInputText(),
      'observaciones' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'ministerio'    => new sfValidatorPropelChoice(array('model' => 'Ministerio', 'column' => 'id')),
      'nombre'        => new sfValidatorString(array('max_length' => 255)),
      'apaterno'      => new sfValidatorString(array('max_length' => 255)),
      'amaterno'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sexo'          => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'direccion'     => new sfValidatorString(array('max_length' => 255)),
      'entrecalles'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'colonia'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cp'            => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ciudad'        => new sfValidatorString(array('max_length' => 255)),
      'telcasa'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'telmovil'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cumpleanios'   => new sfValidatorDate(array('required' => false)),
      'fechabautismo' => new sfValidatorDate(array('required' => false)),
      'correo'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'observaciones' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('miembro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Miembro';
  }


}
