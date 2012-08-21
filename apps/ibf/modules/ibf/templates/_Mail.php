<?php use_helper('Asset') ?>
<?php use_helper('Url') ?>

<div class="mail_wrapper">
    <div class="mail_header" style=" text-align:center;background-color:#5377B1;height:150px;">
        <?php echo image_tag(image_path('mail/header.png', true), array('alt'=>'Centro de Idiomas', 'style'=>'height:150px;width:800px;'))?>
    </div>
    <div class="mail_content" style="height:300px;margin:10px;padding:10px;text-align:justify;">
        <?php echo $template ?>
    </div>
    <div class="mail_footer" style="border-top: 1px #BFBCB6 solid;clear:both;text-align:center;color:grey;padding: 10px 10px 10px 10px;font-size:0.8em;">
        <p>&copy; 2010<?php echo date('Y', time()) > '2010' ? sprintf(' - %s.', date('Y', time())) : sprintf('.'); ?>
            <a style="color:inherit;text-decoration:none;border-bottom:1px grey dotted;" href="http://www.itc.mx/">Instituto Tecnológico de Celaya</a>.
            <a style="color:inherit;text-decoration:none;border-bottom:1px grey dotted;" href="http://dgtyv.net/">Departamento de Gestión Tecnológica y Vinculación</a>.</p>
        <p class="mail_itc" style="float:left;width:50%">Av. Tecnológico y A. García Cubas S/N A.P.57, C.P. 38010, Celaya, Guanajuato, México.<br />Conmutador: 01(461) 611 75 75 | Fax: 01(461) 611 79 79</p>
        <p class="mail_dgtyv" style="float:right;width:50%">Av. A. García Cubas N. 1200, C.P. 38010, Celaya, Guanajuato, México.<br />Conmutador: 01(461) 617 77 70 | Fax: 01(461) 617 77 70 ext. 2109</p>
        <p class="mail_navbar" style="clear:both;">
            <a style="color:inherit;text-decoration:none;border-bottom:1px grey dotted;" href="<?php echo url_for('@legal', true) ?>">Nota Legal</a> |
            <a style="color:inherit;text-decoration:none;border-bottom:1px grey dotted;" href="mailto:<?php echo sprintf("%s <%s>", sfConfig::get('app_sf_guard_extra_plugin_name_from'), sfConfig::get('app_sf_guard_extra_plugin_mail_from'))?> ">Contacto</a> |
            <a style="color:inherit;text-decoration:none;border-bottom:1px grey dotted;" href="<?php echo url_for('@about', true) ?>">Acerca de</a></p>
    </div>
</div>
