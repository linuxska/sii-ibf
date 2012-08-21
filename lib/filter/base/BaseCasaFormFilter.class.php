<?php

/**
 * Casa filter form base class.
 *
 * @package    ibfcelaya
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseCasaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ministerio'    => new sfWidgetFormPropelChoice(array('model' => 'Ministerio', 'add_empty' => true)),
      'nombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apaterno'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'amaterno'      => new sfWidgetFormFilterInput(),
      'direccion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colonia'       => new sfWidgetFormFilterInput(),
      'cp'            => new sfWidgetFormFilterInput(),
      'ruta'          => new sfWidgetFormFilterInput(),
      'ciudad'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telcasa'       => new sfWidgetFormFilterInput(),
      'telmovil'      => new sfWidgetFormFilterInput(),
      'matrimonios'   => new sfWidgetFormFilterInput(),
      'peques'        => new sfWidgetFormFilterInput(),
      'jovenes'       => new sfWidgetFormFilterInput(),
      'jovencitas'    => new sfWidgetFormFilterInput(),
      'totalpersonas' => new sfWidgetFormFilterInput(),
      'colchonetas'   => new sfWidgetFormFilterInput(),
      'iglesia'       => new sfWidgetFormFilterInput(),
      'zona'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coordenadas'   => new sfWidgetFormFilterInput(),
      'asignado'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'alternos'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'observaciones' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ministerio'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Ministerio', 'column' => 'id')),
      'nombre'        => new sfValidatorPass(array('required' => false)),
      'apaterno'      => new sfValidatorPass(array('required' => false)),
      'amaterno'      => new sfValidatorPass(array('required' => false)),
      'direccion'     => new sfValidatorPass(array('required' => false)),
      'colonia'       => new sfValidatorPass(array('required' => false)),
      'cp'            => new sfValidatorPass(array('required' => false)),
      'ruta'          => new sfValidatorPass(array('required' => false)),
      'ciudad'        => new sfValidatorPass(array('required' => false)),
      'telcasa'       => new sfValidatorPass(array('required' => false)),
      'telmovil'      => new sfValidatorPass(array('required' => false)),
      'matrimonios'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'peques'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'jovenes'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'jovencitas'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'totalpersonas' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'colchonetas'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'iglesia'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'zona'          => new sfValidatorPass(array('required' => false)),
      'coordenadas'   => new sfValidatorPass(array('required' => false)),
      'asignado'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'alternos'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'observaciones' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('casa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Casa';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'ministerio'    => 'ForeignKey',
      'nombre'        => 'Text',
      'apaterno'      => 'Text',
      'amaterno'      => 'Text',
      'direccion'     => 'Text',
      'colonia'       => 'Text',
      'cp'            => 'Text',
      'ruta'          => 'Text',
      'ciudad'        => 'Text',
      'telcasa'       => 'Text',
      'telmovil'      => 'Text',
      'matrimonios'   => 'Number',
      'peques'        => 'Number',
      'jovenes'       => 'Number',
      'jovencitas'    => 'Number',
      'totalpersonas' => 'Number',
      'colchonetas'   => 'Number',
      'iglesia'       => 'Number',
      'zona'          => 'Text',
      'coordenadas'   => 'Text',
      'asignado'      => 'Boolean',
      'alternos'      => 'Boolean',
      'observaciones' => 'Text',
    );
  }
}
