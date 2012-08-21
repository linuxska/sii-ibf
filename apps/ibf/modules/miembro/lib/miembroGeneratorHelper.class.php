<?php

/**
 * miembro module helper.
 *
 * @package    ibfcelaya
 * @subpackage miembro
 * @author     Abraham Rafael Rico Moreno
 * @version    SVN: $Id: helper.php 12474 2008-10-31 10:41:27Z fabien $
 */
class miembroGeneratorHelper extends BaseMiembroGeneratorHelper
{
	public function linkToCumple() {
        return sprintf('<a href="%s">Cumpleaños del mes</a>', url_for('@miembro_cumple'));
    }
}
