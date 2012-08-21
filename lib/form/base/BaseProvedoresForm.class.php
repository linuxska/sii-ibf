<?php

/**
 * Provedores form base class.
 *
 * @method Provedores getObject() Returns the current form's model object
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseProvedoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nombreempresa' => new sfWidgetFormInputText(),
      'giro'          => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'entrecalles'   => new sfWidgetFormInputText(),
      'colonia'       => new sfWidgetFormInputText(),
      'cp'            => new sfWidgetFormInputText(),
      'ciudad'        => new sfWidgetFormInputText(),
      'tellocal'      => new sfWidgetFormInputText(),
      'telmovil'      => new sfWidgetFormInputText(),
      'idnextel'      => new sfWidgetFormInputText(),
      'correo'        => new sfWidgetFormInputText(),
      'observaciones' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombreempresa' => new sfValidatorString(array('max_length' => 255)),
      'giro'          => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'direccion'     => new sfValidatorString(array('max_length' => 255)),
      'entrecalles'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'colonia'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cp'            => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ciudad'        => new sfValidatorString(array('max_length' => 255)),
      'tellocal'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'telmovil'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'idnextel'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'correo'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'observaciones' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('provedores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Provedores';
  }


}
