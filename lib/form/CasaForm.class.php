<?php

/**
 * Casa form.
 *
 * @package    ibfcelaya
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
class CasaForm extends BaseCasaForm
{
  protected $ciudad = ARRAY(
        'Hermosillo'=>'Hermosillo','Celaya' => 'Celaya', 'Salvatierra' => 'Salvatierra', 'Tarimoro' => 'Tarimoro', 'Apaseo el Alto' => 'Apaseo el Alto', 'Apaseo el grande' => 'Apaseo el Grande', 'Villagran' => 'Villagran', 'Comonfort' => 'Comonfort','Queretaro' => 'Queretaro','Cortazar' => 'Cortazar');    
  protected $zona = ARRAY(
        'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G','H' => 'H','I' => 'I','J' => 'J', 'K' => 'K', 'L' => 'L');      	
  protected $matrimonios = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
  protected $jovenes = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
  protected $jovencitas = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
  protected $peques = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
  protected $colchonetas = ARRAY(
        '0' => '0','1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31','32' => '32','33' => '33','34' => '34','35' => '35','36' => '36','37' => '37','38' => '38','39' => '39','40' => '40','41' => '41','42' => '42','43' => '43','44' => '44','45' => '45','46' => '46','47' => '47','48' => '48','49' => '49','50' => '50');      	
  protected $iglesia = ARRAY(
        '0' =>'0','1' =>'1','2' =>'2','3' =>'3','4' =>'4','5' =>'5','6' =>'6','7' =>'7','8' =>'8','9' =>'9','10' =>'10','11' =>'11','12' =>'12','13' =>'13','14' =>'14','15' =>'15','16' =>'16','17' =>'17','18' =>'18','19' =>'19','20' =>'20','21' =>'21','22' =>'22','23' =>'23','24' =>'24','25' =>'25','26' =>'26','27' =>'27','28' =>'28','29' =>'29','30' =>'30','31' =>'31','32' =>'32','33' =>'33','34' =>'34','35' =>'35','36' =>'36','37' =>'37','38' =>'38','39' =>'39','40' =>'40','41' =>'41','42' =>'42','43' =>'43','44' =>'44','45' =>'45','46' =>'46','47' =>'47','48' =>'48','49' =>'49','50' =>'50','51' =>'51','52' =>'52','53' =>'53','54' =>'54','55' =>'55','56' =>'56','57' =>'57','58' =>'58','59' =>'59','60' =>'60','61' =>'61','62' =>'62','63' =>'63','64' =>'64','65' =>'65','66' =>'66','67' =>'67','68' =>'68','69' =>'69','70' =>'70','71' =>'71','72' =>'72','73' =>'73','74' =>'74','75' =>'75','76' =>'76','77' =>'77','78' =>'78','79' =>'79','80' =>'80','81' =>'81','82' =>'82','83' =>'83','84' =>'84','85' =>'85','86' =>'86','87' =>'87','88' =>'88','89' =>'89','90' =>'90','91' =>'91','92' =>'92','93' =>'93','94' =>'94','95' =>'95','96' =>'96','97' =>'97','98' =>'98','99' =>'99','100' =>'100');
   protected $ruta = ARRAY(
        'Ruta 1' => 'Ruta 1', 'Ruta 2' => 'Ruta 2', 'Ruta 3' => 'Ruta 3', 'Ruta 4' => 'Ruta 4', 'Ruta 5' => 'Ruta 5', 'Ruta 6' => 'Ruta 6', 'Ruta 7' => 'Ruta 7', 'Ruta 8' => 'Ruta 8', 'Ruta 9' => 'Ruta 9', 'Ruta 10' => 'Ruta 10', 'Ruta 11' => 'Ruta 11', 'Ruta 12' => 'Ruta 12', 'Ruta 13' => 'Ruta 13', 'Ruta 14' => 'Ruta 14', 'Ruta 15' => 'Ruta 15','Ruta 16' => 'Ruta 16','Ruta 17' => 'Ruta 17','Ruta 18' => 'Ruta 18','Ruta 19' => 'Ruta 19','Ruta 20' => 'Ruta 20');        
  
 	public function configure() {
        parent::configure();
        unset($this['id'],$this['totalpersonas'],$this['coordenadas']);
        
        
        $this->setWidget('ciudad', new sfWidgetFormChoice(array('choices' => $this->ciudad)));
        $this->setWidget('zona', new sfWidgetFormChoice(array('choices' => $this->zona)));
        $this->setWidget('matrimonios', new sfWidgetFormChoice(array('choices' => $this->matrimonios)));
        $this->setWidget('jovenes', new sfWidgetFormChoice(array('choices' => $this->jovenes)));
        $this->setWidget('jovencitas', new sfWidgetFormChoice(array('choices' => $this->jovencitas)));
        $this->setWidget('peques', new sfWidgetFormChoice(array('choices' => $this->peques)));
	      $this->setWidget('colchonetas', new sfWidgetFormChoice(array('choices' => $this->colchonetas)));
       	$this->setWidget('iglesia', new sfWidgetFormChoice(array('choices' => $this->iglesia)));
        //$this->setWidget('ruta', new sfWidgetFormChoice(array('choices' => $this->ruta)));

        $this->validatorSchema['nombre']->setMessage('required', 'Requerido');
        $this->validatorSchema['apaterno']->setMessage('required', 'Requerido');
        $this->validatorSchema['amaterno']->setMessage('required', 'Requerido');
        $this->validatorSchema['direccion']->setMessage('required', 'Requerido');
        $this->validatorSchema['ciudad']->setMessage('required', 'Requerido');
       

        $this->validatorSchema['cp']->setMessage('max_length', '"%value%" es muy grande (máximo %max_length% caracteres).');
       
        $this->setValidator('ciudad', new sfValidatorChoice(array('choices' => array_keys($this->ciudad), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('zona', new sfValidatorChoice(array('choices' => array_keys($this->zona), 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido.')));
        $this->setValidator('cp', new sfValidatorRegex(array('pattern' => '/^[0-9]{5}+$/', 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. El valor debe ser de 5 dígitos.')));
       
        $this->setValidator('telmovil', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('telcasa', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setDefault('ciudad', 'Celaya');
	      $this->setDefault('ministerio','32');

        $this->widgetSchema->setHelps(array(
            'cp' => 'Formato a 5 digitos numericos sin espacios #####',
            'ruta' => 'Numero de la ruta ##',
            'telcasa' => 'Formato mayor 6 digitos numericos como minimo sin espacios ##########',
            'telmovil' => 'Formato a 10 digitos sin numericos espacios sin 044 ##########'
            ));

        $this->widgetSchema['observaciones'] = new sfWidgetFormTextareaTinyMCE(
        array('theme'=>'advanced','width'=>50,'height'=>50,'config'=>'language:"es",theme_advanced_toolbar_location:"bottom",
             theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator",
             theme_advanced_buttons2 : "fontselect,fontsizeselect,separator,bullist,numlist,separator,outdent,indent,separator",
             theme_advanced_buttons3 : "",
             theme_advanced_statusbar_location : "none"
                    '));

      }
        protected function doSave($con = null) {
          
          $matrimonios=2;
          $total = $this->getValue('jovenes')+$this->getValue('iglesia')+$this->getValue('jovencitas')+$this->getValue('peques')+($this->getValue('matrimonios')*$matrimonios);
          $this->object->setTotalpersonas($total);

          parent::doSave($con);  
        }
}
