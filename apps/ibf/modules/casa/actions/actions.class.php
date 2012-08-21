<?php

require_once dirname(__FILE__).'/../lib/casaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/casaGeneratorHelper.class.php';

/**
 * casa actions.
 *
 * @package    ibfcelaya
 * @subpackage casa
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class casaActions extends autoCasaActions
{


   public function executeReporte()
  {

  
  $casas = CasaPeer::doCount(new Criteria());

  $c = new Criteria();
  $c->add(CasaPeer::JOVENES, 0, Criteria::GREATER_THAN);
  $c->addSelectColumn(CasaPeer::JOVENES);

  $criteria = new Criteria;
  $criteria->addAscendingOrderByColumn(CasaPeer::JOVENES);
  $jovenes = CasaPeer::doCount($criteria);

  //var_dump($jovenes); die();
  $matrimonios=1;
  $iglesia=1;
  $niños=1;
  $jovenes=1;
  $señoritas=1;
  $colchonetas=1;
  $config = sfTCPDFPluginConfigHandler::loadConfig();
 
  // pdf object
  $pdf = new TCPDF();
 
  // set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Abraham Rafael Rico Moreno');
  $pdf->SetTitle('Iglesia Bautista Fundamental de Celaya');
  $pdf->SetSubject('Bienvenidos');
  $pdf->SetKeywords('IBF, ibfcelaya, hospedaje, casa, ab');
 
  // set default header data
  $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
 
  // set header and footer fonts
  $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
  //set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
  //set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
  //set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
  // ---------------------------------------------------------
 
  // set default font subsetting mode
  $pdf->setFontSubsetting(true);
 
  // Set font
  // dejavusans is a UTF-8 Unicode font, if you only need to
  // print standard ASCII chars, you can use core fonts like
  // helvetica or times to reduce file size.
  $pdf->SetFont('dejavusans', '', 14, '', true);
 
  // Add a page
  // This method has several options, check the source code documentation for more information.
  $pdf->AddPage();

  
  // Set some content to print
  $html = "Conferencia de la Espada y Fuegos de Evangelismo"."<br/>"."<div aling:'center'>Reporte General de Hospedaje </div>"."Total de casas: ".$casas.
"<br/>"."Total de Grupos (Iglesia): "."N"."<br/>"."Total de Matrimonios: "."N"."<br/>"."Total de niños: "."peques"."<br/>"."Total de Jovenes: "."N"."<br/>"."Total de Señoritas: "."N".
"<br/>"."Total de personas a hospedar: "."N"."<br/>"."Total de Colchonetas repartidas: "."N";
 
  // Print text using writeHTMLCell()
  $pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
 
  // ---------------------------------------------------------
 
  // Close and output PDF document
  // This method has several options, check the source code documentation for more information.
  $pdf->Output('Reporte_General.pdf', 'I');
 
  // Stop symfony process
  throw new sfStopException();

  
  }
  
  public function preExecute()
  {
    $this->configuration = new casaGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new casaGeneratorHelper();

    parent::preExecute();
  }

  public function executeIndex(sfWebRequest $request)
  {
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }

   


  public function executeListImprimir()
  {

  $this->Casa = $this->getRoute()->getObject();
  $nombre=$this->Casa->get_Nombre();
  $calle=$this->Casa->getDireccion();
  $colonia=$this->Casa->getColonia();
  $ciudad=$this->Casa->getCiudad();
  $id=$this->Casa->getId();


  $direccioncompleta=$this->Casa->getFullDireccion();
  $ruta=$this->Casa->getRuta();
  $config = sfTCPDFPluginConfigHandler::loadConfig();

  $pdf = new TCPDF();
   
  // set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Abraham Rafael Rico Moreno');
  $pdf->SetTitle('Iglesia Bautista Fundamental de Celaya');
  $pdf->SetSubject('Bienvenidos');
  $pdf->SetKeywords('IBF, ibfcelaya, hospedaje, casa, ab');
 
  // set default header data
  $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
 
  // set header and footer fonts
  $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
  //set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
  //set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
  //set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
  // ---------------------------------------------------------
 
  // set default font subsetting mode
  $pdf->setFontSubsetting(true);
 
  // Set font
  // dejavusans is a UTF-8 Unicode font, if you only need to
  // print standard ASCII chars, you can use core fonts like
  // helvetica or times to reduce file size.
  $pdf->SetFont('dejavusans', '', 14, '', true);
 
  // Add a page
  // This method has several options, check the source code documentation for more information.
  $pdf->AddPage();
//var_dump($direccioncompleta); die();
 $html3 = '<font size="10" color="#0000FF">Informacion de horarios:'.'<br/>'.'
  El desayuno se servira de: 7:45 a.m. a 8:30 a.m., las Conferencias empezarán a las:  8:40 a.m.'.'<br/>'.'
  La comida se servirá de: 1:30 p.m. – 2:30 p.m.'.'<br/>'.'
  La cena se servirá de: 5:30 p.m. a 6:20 p.m. El culto por las noches empezará a las:  6:30 p.m
  </font>';

  // Set some content to print
  $html = "<br/>"."<strong>Bienvenidos</strong> a la Conferencia de la Espada y Fuegos de Evangelismo"."<br/>"."<br/>"."Le recibe hno(a): "
.$nombre."<br/>"."En calle: ".$calle."            Ruta: ".$ruta."<br/>"."Colonia: ".$colonia."<br/>"." Municipio de: <cite>".$ciudad
." Guanajuato ".$id."</cite><br/>"."<br/>".'<img style="-webkit-user-select: none; cursor: -webkit-zoom-out; " align="middle" height="1000" width="1000"src="http://maps.google.com/maps/api/staticmap?&markers=size:mid%7Ccolor:red%7C'
.$direccioncompleta.'&size=1000x1000&sensor=false"/>'.'<br/>'.$html3;
  // Print text using writeHTMLCell()
  $pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
 
  // ---------------------------------------------------------
 
  // Close and output PDF document
  // This method has several options, check the source code documentation for more information.
  $pdf->Output('Casa_de_'.$nombre.'.pdf', 'I');
 
  // Stop symfony process
  throw new sfStopException();
  }



  public function executeListAsignar(){

  $this->Casa = $this->getRoute()->getObject();

  if($this->Casa->getAsignado()==0){
    $this->Casa->setAsignado(1);
    $this->getUser()->setFlash('notice', "Se ha asigando la casa.");
  }
    else{
    $this->Casa->setAsignado(0);
    $this->getUser()->setFlash('notice', "Se ha liberado la casa."); 
    }
  
  $this->Casa->save();
  $this->redirect('@casa');
  
  }


  public function executeFilter(sfWebRequest $request)
  {
           $this->setPage(1);

        if ($request->hasParameter('_reset')) {
            $this->setFilters($this->configuration->getFilterDefaults());

            $this->redirect('@casa');
        }

        $this->filters = $this->configuration->getFilterForm($this->getFilters());

        $this->filters->bind($request->getParameter($this->filters->getName()));
        if ($this->filters->isValid()) {
            $this->setFilters($this->filters->getValues());

            $this->redirect('@casa');
        }

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();

        $this->setTemplate('index');
    
  }


  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->Casa = $this->form->getObject();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->Casa = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->Casa = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->Casa);
    
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->Casa = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->Casa);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
    //$this->redirect('@casa');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    $this->getRoute()->getObject()->delete();

    $this->getUser()->setFlash('notice', 'La casa fue borrada exitosamente.');

    $this->redirect('@casa');
  }

  public function executeBatch(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    if (!$ids = $request->getParameter('ids'))
    {
      $this->getUser()->setFlash('error', 'Debes de seleccionar al menos un elemento.');

      $this->redirect('@casa');
    }

    if (!$action = $request->getParameter('batch_action'))
    {
      $this->getUser()->setFlash('error', 'Debes seleccionar una accion a ejecutar sobre las casas');

      $this->redirect('@casa');
    }

    if (!method_exists($this, $method = 'execute'.ucfirst($action)))
    {
      throw new InvalidArgumentException(sprintf('You must create a "%s" method for action "%s"', $method, $action));
    }

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($action)))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $validator = new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Casa'));
    try
    {
      // validate ids
      $ids = $validator->clean($ids);

      // execute batch
      $this->$method($request);
    }
    catch (sfValidatorError $e)
    {
      $this->getUser()->setFlash('error', 'A problem occurs when deleting the selected items as some items do not exist anymore.');
    }

    $this->redirect('@casa');
  }

  protected function executeBatchDelete(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');

    $count = 0;
    foreach (CasaPeer::retrieveByPks($ids) as $object)
    {
      $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $object)));

      $object->delete();
      if ($object->isDeleted())
      {
        $count++;
      }
    }

    if ($count >= count($ids))
    {
      $this->getUser()->setFlash('notice', 'Las casas seleccionadas han sido borradas exitosamente.');
    }
    else
    {
      $this->getUser()->setFlash('error', 'A problem occurs when deleting the selected items.');
    }

    $this->redirect('@casa');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'La casa fue creada correctamente ruth aguilar Feliz.' : 'La casa se ha actualizado.';

      $Casa = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $Casa)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' Tu puedes agregar otra casa.');

        $this->redirect('@casa_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect('@casa');
        //$this->redirect(array('sf_route' => 'casa_edit', 'sf_subject' => $Casa));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'No se ha guardado la casa debido a alguno errores.', false);
    }
  }

  protected function getFilters()
  {
    return $this->getUser()->getAttribute('casa.filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }

  protected function setFilters(array $filters)
  {
    return $this->getUser()->setAttribute('casa.filters', $filters, 'admin_module');
  }

  protected function getPager()
  {
    $pager = $this->configuration->getPager('Casa');
    $pager->setCriteria($this->buildCriteria());
    $pager->setPage($this->getPage());
    $pager->setPeerMethod($this->configuration->getPeerMethod());
    $pager->setPeerCountMethod($this->configuration->getPeerCountMethod());
    $pager->init();

    return $pager;
  }

  protected function setPage($page)
  {
    $this->getUser()->setAttribute('casa.page', $page, 'admin_module');
  }

  protected function getPage()
  {
    return $this->getUser()->getAttribute('casa.page', 1, 'admin_module');
  }

  protected function buildCriteria()
  {
    if (null === $this->filters)
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    }

    $criteria = $this->filters->buildCriteria($this->getFilters());

    $this->addSortCriteria($criteria);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_criteria'), $criteria);
    $criteria = $event->getReturnValue();

    return $criteria;
  }

  protected function addSortCriteria($criteria)
  {
    if (array(null, null) == ($sort = $this->getSort()))
    {
      return;
    }

    $column = CasaPeer::translateFieldName($sort[0], BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_COLNAME);
    if ('asc' == $sort[1])
    {
      $criteria->addAscendingOrderByColumn($column);
    }
    else
    {
      $criteria->addDescendingOrderByColumn($column);
    }
  }

  protected function getSort()
  {
    if (null !== $sort = $this->getUser()->getAttribute('casa.sort', null, 'admin_module'))
    {
      return $sort;
    }

    $this->setSort($this->configuration->getDefaultSort());

    return $this->getUser()->getAttribute('casa.sort', null, 'admin_module');
  }

  protected function setSort(array $sort)
  {
    if (null !== $sort[0] && null === $sort[1])
    {
      $sort[1] = 'asc';
    }

    $this->getUser()->setAttribute('casa.sort', $sort, 'admin_module');
  }

  protected function isValidSortColumn($column)
  {
    return in_array($column, BasePeer::getFieldnames('Casa', BasePeer::TYPE_FIELDNAME));
  }
}
