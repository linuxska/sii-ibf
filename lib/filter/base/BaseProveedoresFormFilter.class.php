<?php

/**
 * Proveedores filter form base class.
 *
 * @package    ibfcelaya
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseProveedoresFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombreempresa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'giro'          => new sfWidgetFormFilterInput(),
      'direccion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'entrecalles'   => new sfWidgetFormFilterInput(),
      'colonia'       => new sfWidgetFormFilterInput(),
      'cp'            => new sfWidgetFormFilterInput(),
      'ciudad'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tellocal'      => new sfWidgetFormFilterInput(),
      'telmovil'      => new sfWidgetFormFilterInput(),
      'idnextel'      => new sfWidgetFormFilterInput(),
      'correo'        => new sfWidgetFormFilterInput(),
      'observaciones' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombreempresa' => new sfValidatorPass(array('required' => false)),
      'giro'          => new sfValidatorPass(array('required' => false)),
      'direccion'     => new sfValidatorPass(array('required' => false)),
      'entrecalles'   => new sfValidatorPass(array('required' => false)),
      'colonia'       => new sfValidatorPass(array('required' => false)),
      'cp'            => new sfValidatorPass(array('required' => false)),
      'ciudad'        => new sfValidatorPass(array('required' => false)),
      'tellocal'      => new sfValidatorPass(array('required' => false)),
      'telmovil'      => new sfValidatorPass(array('required' => false)),
      'idnextel'      => new sfValidatorPass(array('required' => false)),
      'correo'        => new sfValidatorPass(array('required' => false)),
      'observaciones' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proveedores_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proveedores';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'nombreempresa' => 'Text',
      'giro'          => 'Text',
      'direccion'     => 'Text',
      'entrecalles'   => 'Text',
      'colonia'       => 'Text',
      'cp'            => 'Text',
      'ciudad'        => 'Text',
      'tellocal'      => 'Text',
      'telmovil'      => 'Text',
      'idnextel'      => 'Text',
      'correo'        => 'Text',
      'observaciones' => 'Text',
    );
  }
}
