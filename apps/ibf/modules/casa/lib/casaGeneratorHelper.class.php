<?php

/**
 * casa module helper.
 *
 * @package    ibfcelaya
 * @subpackage casa
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: helper.php 12474 2008-10-31 10:41:27Z fabien $
 */
class casaGeneratorHelper extends BaseCasaGeneratorHelper
{
	public function linkToReporte() {
        return sprintf('<a href="%s">Reporte</a>', url_for('@casa_reporte'));
    }
}
