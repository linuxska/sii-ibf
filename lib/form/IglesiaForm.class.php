<?php

/**
 * Iglesia form.
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class IglesiaForm extends BaseIglesiaForm
{
  
  	public function configure() {
        parent::configure();

 
 
     $this->setWidget('nombrearchivo', new sfWidgetFormInputFile());
     $this->setValidator('nombrearchivo', new sfValidatorFile(array(
     'mime_types' => 'web_images',
     'required' => false,
     'path' => sfConfig::get('sf_upload_dir').'/fotos',
     )));
     
     $this->validatorSchema['ciudad']->setMessage('required', 'Requerido');
     $this->validatorSchema['estado']->setMessage('required', 'Requerido');
     $this->validatorSchema['pais']->setMessage('required', 'Requerido');
     $this->setValidator('telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
     $this->setValidator('movil', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
     $this->setValidator('cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
     $this->setValidator('correo', new sfValidatorEmail(array('max_length' => 128, 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. me@example.com')));  
     $this->widgetSchema->setHelps(array(
            'cp' => 'Formato a 5 digitos numericos sin espacios #####',
            'telefono' => 'Formato a 10 digitos sin numericos espacios sin 044 ##########',
            'movil' => 'Formato a 10 digitos sin numericos espacios sin 01 ##########',
            'correo' => 'human@ejemplo.com'
            ));

     $this->setDefault('pais', 'México  ');   

  	 $this->widgetSchema['observaciones'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));

      }
  }
	
