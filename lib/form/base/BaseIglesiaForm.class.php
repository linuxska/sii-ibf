<?php

/**
 * Iglesia form base class.
 *
 * @method Iglesia getObject() Returns the current form's model object
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseIglesiaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nombre_iglesia' => new sfWidgetFormInputText(),
      'nombre_pastor'  => new sfWidgetFormInputText(),
      'apaterno'       => new sfWidgetFormInputText(),
      'amaterno'       => new sfWidgetFormInputText(),
      'direccion'      => new sfWidgetFormInputText(),
      'colonia'        => new sfWidgetFormInputText(),
      'cp'             => new sfWidgetFormInputText(),
      'ciudad'         => new sfWidgetFormInputText(),
      'estado'         => new sfWidgetFormInputText(),
      'pais'           => new sfWidgetFormInputText(),
      'telefono'       => new sfWidgetFormInputText(),
      'movil'          => new sfWidgetFormInputText(),
      'correo'         => new sfWidgetFormInputText(),
      'pagina'         => new sfWidgetFormInputText(),
      'nombrearchivo'  => new sfWidgetFormInputText(),
      'foto'           => new sfWidgetFormInputCheckbox(),
      'observaciones'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre_iglesia' => new sfValidatorString(array('max_length' => 255)),
      'nombre_pastor'  => new sfValidatorString(array('max_length' => 255)),
      'apaterno'       => new sfValidatorString(array('max_length' => 255)),
      'amaterno'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'direccion'      => new sfValidatorString(array('max_length' => 255)),
      'colonia'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cp'             => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ciudad'         => new sfValidatorString(array('max_length' => 255)),
      'estado'         => new sfValidatorString(array('max_length' => 255)),
      'pais'           => new sfValidatorString(array('max_length' => 255)),
      'telefono'       => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'movil'          => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'correo'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pagina'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nombrearchivo'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto'           => new sfValidatorBoolean(array('required' => false)),
      'observaciones'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('iglesia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Iglesia';
  }


}
