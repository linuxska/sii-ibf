<?php

/**
 * Iglesia filter form base class.
 *
 * @package    ibfcelaya
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseIglesiaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_iglesia' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_pastor'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apaterno'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'amaterno'       => new sfWidgetFormFilterInput(),
      'direccion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colonia'        => new sfWidgetFormFilterInput(),
      'cp'             => new sfWidgetFormFilterInput(),
      'ciudad'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pais'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'       => new sfWidgetFormFilterInput(),
      'movil'          => new sfWidgetFormFilterInput(),
      'correo'         => new sfWidgetFormFilterInput(),
      'pagina'         => new sfWidgetFormFilterInput(),
      'nombrearchivo'  => new sfWidgetFormFilterInput(),
      'foto'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'observaciones'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre_iglesia' => new sfValidatorPass(array('required' => false)),
      'nombre_pastor'  => new sfValidatorPass(array('required' => false)),
      'apaterno'       => new sfValidatorPass(array('required' => false)),
      'amaterno'       => new sfValidatorPass(array('required' => false)),
      'direccion'      => new sfValidatorPass(array('required' => false)),
      'colonia'        => new sfValidatorPass(array('required' => false)),
      'cp'             => new sfValidatorPass(array('required' => false)),
      'ciudad'         => new sfValidatorPass(array('required' => false)),
      'estado'         => new sfValidatorPass(array('required' => false)),
      'pais'           => new sfValidatorPass(array('required' => false)),
      'telefono'       => new sfValidatorPass(array('required' => false)),
      'movil'          => new sfValidatorPass(array('required' => false)),
      'correo'         => new sfValidatorPass(array('required' => false)),
      'pagina'         => new sfValidatorPass(array('required' => false)),
      'nombrearchivo'  => new sfValidatorPass(array('required' => false)),
      'foto'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'observaciones'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('iglesia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Iglesia';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nombre_iglesia' => 'Text',
      'nombre_pastor'  => 'Text',
      'apaterno'       => 'Text',
      'amaterno'       => 'Text',
      'direccion'      => 'Text',
      'colonia'        => 'Text',
      'cp'             => 'Text',
      'ciudad'         => 'Text',
      'estado'         => 'Text',
      'pais'           => 'Text',
      'telefono'       => 'Text',
      'movil'          => 'Text',
      'correo'         => 'Text',
      'pagina'         => 'Text',
      'nombrearchivo'  => 'Text',
      'foto'           => 'Boolean',
      'observaciones'  => 'Text',
    );
  }
}
