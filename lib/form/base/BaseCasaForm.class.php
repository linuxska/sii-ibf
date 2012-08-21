<?php

/**
 * Casa form base class.
 *
 * @method Casa getObject() Returns the current form's model object
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCasaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'ministerio'    => new sfWidgetFormPropelChoice(array('model' => 'Ministerio', 'add_empty' => false)),
      'nombre'        => new sfWidgetFormInputText(),
      'apaterno'      => new sfWidgetFormInputText(),
      'amaterno'      => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'colonia'       => new sfWidgetFormInputText(),
      'cp'            => new sfWidgetFormInputText(),
      'ruta'          => new sfWidgetFormInputText(),
      'ciudad'        => new sfWidgetFormInputText(),
      'telcasa'       => new sfWidgetFormInputText(),
      'telmovil'      => new sfWidgetFormInputText(),
      'matrimonios'   => new sfWidgetFormInputText(),
      'peques'        => new sfWidgetFormInputText(),
      'jovenes'       => new sfWidgetFormInputText(),
      'jovencitas'    => new sfWidgetFormInputText(),
      'totalpersonas' => new sfWidgetFormInputText(),
      'colchonetas'   => new sfWidgetFormInputText(),
      'iglesia'       => new sfWidgetFormInputText(),
      'zona'          => new sfWidgetFormInputText(),
      'coordenadas'   => new sfWidgetFormInputText(),
      'asignado'      => new sfWidgetFormInputCheckbox(),
      'alternos'      => new sfWidgetFormInputCheckbox(),
      'observaciones' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'ministerio'    => new sfValidatorPropelChoice(array('model' => 'Ministerio', 'column' => 'id')),
      'nombre'        => new sfValidatorString(array('max_length' => 255)),
      'apaterno'      => new sfValidatorString(array('max_length' => 255)),
      'amaterno'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'direccion'     => new sfValidatorString(array('max_length' => 255)),
      'colonia'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cp'            => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'ruta'          => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'ciudad'        => new sfValidatorString(array('max_length' => 255)),
      'telcasa'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'telmovil'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'matrimonios'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'peques'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'jovenes'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'jovencitas'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'totalpersonas' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'colchonetas'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'iglesia'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'zona'          => new sfValidatorString(array('max_length' => 1)),
      'coordenadas'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'asignado'      => new sfValidatorBoolean(),
      'alternos'      => new sfValidatorBoolean(),
      'observaciones' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('casa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Casa';
  }


}
