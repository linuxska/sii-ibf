<?php
//Campo Ujieres-telefono puede ser mini 6 
/**
 * Miembro form.
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class MiembroForm extends BaseMiembroForm
{

	 protected $ciudad = ARRAY(
        'Celaya' => 'Celaya', 'Salvatierra' => 'Salvatierra', 'Tarimoro' => 'Tarimoro', 'Apaseo el Alto' => 'Apaseo el Alto', 'Apaseo el grande' => 'Apaseo el Grande', 'Villagran' => 'Villagran', 'Comonfort' => 'Comonfort');    
 	 protected $sexo = ARRAY(
         'Masculino' => 'Masculino', 'Femenino' => 'Femenino');    
 
  public function configure()
  {
  	    parent::configure();
        
        $this->setWidget('ciudad', new sfWidgetFormChoice(array('choices' => $this->ciudad)));
        $this->setWidget('sexo', new sfWidgetFormChoice(array('choices' => $this->sexo)));
        
        $this->validatorSchema['nombre']->setMessage('required', 'Requerido');
        $this->validatorSchema['apaterno']->setMessage('required', 'Requerido');
        $this->validatorSchema['amaterno']->setMessage('required', 'Requerido');
        $this->validatorSchema['direccion']->setMessage('required', 'Requerido');
        $this->validatorSchema['ciudad']->setMessage('required', 'Requerido');
       
        $this->validatorSchema['cp']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
       
        $this->setValidator('ciudad', new sfValidatorChoice(array('choices' => array_keys($this->ciudad), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('sexo', new sfValidatorChoice(array('choices' => array_keys($this->sexo), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
	    	$this->setValidator('correo', new sfValidatorEmail(array('max_length' => 128, 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));       

        $this->setValidator('telmovil', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{10}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('telcasa', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setDefault('ciudad', 'Celaya');
	    $this->setDefault('ministerio','21');
		
	   
		
		
		$this->widgetSchema['fechabautismo'] = new  sfWidgetFormJQueryDate(array(
		 'culture' => 'es',
		 'config' => "
		  {firstDay: 1,
		   dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
      	  }",
      	  'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 50, date('Y', time())), range(date('Y', time()) - 50, date('Y', time())))
                ))));
		$this->widgetSchema['cumpleanios'] = new  sfWidgetFormJQueryDate(array(
		 'culture' => 'es',
		 'config' => "
		  {firstDay: 1,
		   dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'], 
           monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
      	  }",
      	  'date_widget' => new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                ))));

		/*$this->setWidget('cumpleanios', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
        )));
		*/

        $this->widgetSchema->setHelps(array(
            'cp' => '#####',
            'telcasa' => '##########',
            'telmovil' => '##########',
            'correo' => 'human@ejemplo.com',
            'cumpleanios' => 'DD-MM',
            'fechabautismo' => 'DD-MM-AÑO',
            'entrecalles' => 'Vg. Entre Av Lazaro Cardenas y Morelos ',
            ));

        $this->widgetSchema['observaciones'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));
  }
}
