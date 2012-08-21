<?php

/**
 * Miembro filter form base class.
 *
 * @package    ibfcelaya
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseMiembroFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ministerio'    => new sfWidgetFormPropelChoice(array('model' => 'Ministerio', 'add_empty' => true)),
      'nombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apaterno'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'amaterno'      => new sfWidgetFormFilterInput(),
      'sexo'          => new sfWidgetFormFilterInput(),
      'direccion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'entrecalles'   => new sfWidgetFormFilterInput(),
      'colonia'       => new sfWidgetFormFilterInput(),
      'cp'            => new sfWidgetFormFilterInput(),
      'ciudad'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telcasa'       => new sfWidgetFormFilterInput(),
      'telmovil'      => new sfWidgetFormFilterInput(),
      'cumpleanios'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fechabautismo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'correo'        => new sfWidgetFormFilterInput(),
      'observaciones' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ministerio'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Ministerio', 'column' => 'id')),
      'nombre'        => new sfValidatorPass(array('required' => false)),
      'apaterno'      => new sfValidatorPass(array('required' => false)),
      'amaterno'      => new sfValidatorPass(array('required' => false)),
      'sexo'          => new sfValidatorPass(array('required' => false)),
      'direccion'     => new sfValidatorPass(array('required' => false)),
      'entrecalles'   => new sfValidatorPass(array('required' => false)),
      'colonia'       => new sfValidatorPass(array('required' => false)),
      'cp'            => new sfValidatorPass(array('required' => false)),
      'ciudad'        => new sfValidatorPass(array('required' => false)),
      'telcasa'       => new sfValidatorPass(array('required' => false)),
      'telmovil'      => new sfValidatorPass(array('required' => false)),
      'cumpleanios'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fechabautismo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'correo'        => new sfValidatorPass(array('required' => false)),
      'observaciones' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('miembro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Miembro';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'ministerio'    => 'ForeignKey',
      'nombre'        => 'Text',
      'apaterno'      => 'Text',
      'amaterno'      => 'Text',
      'sexo'          => 'Text',
      'direccion'     => 'Text',
      'entrecalles'   => 'Text',
      'colonia'       => 'Text',
      'cp'            => 'Text',
      'ciudad'        => 'Text',
      'telcasa'       => 'Text',
      'telmovil'      => 'Text',
      'cumpleanios'   => 'Date',
      'fechabautismo' => 'Date',
      'correo'        => 'Text',
      'observaciones' => 'Text',
    );
  }
}
