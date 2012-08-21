<?php
/*
 * Si se desea agregar otro usuario al sistema -actor. Debe añadir su credencial correspondiente aquí.
 * 
 * Independientemente de la credencial, todo usuario tiene la opción de cerrar sesión.
 */
?>
<div id="menu" class="menus">
    <ul class="menu_list">
        <style type="text/css">
            li.nobk:hover{background-color: white !important;}
        </style>
        <li class="app nobk" style="border:1px black none;text-align:center;height:9px;"><span class="flip" style="padding-left:10px;padding-right:10px;background-color:#17608A;color:white;height:9px;" title="Ocultar menu">&Delta;</span></li>
        <?php
        if ($sf_user->hasCredential('admin')) {
            include_partial('ibf/menuAdmin');
        }
        if ($sf_user->hasCredential('pastor')) {
            include_partial('ibf/menuPastor');
        }
        if ($sf_user->hasCredential('secretaria')) {
            include_partial('ibf/menuSecretaria');
        }
        if ($sf_user->hasCredential('diacono')) {
            include_partial('ibf/menuDiacono');
        }
        if ($sf_user->hasCredential('hospedaje')) {
            include_partial('ibf/menuHospedaje');
        }
        ?>
        <li class="app <?php echo in_array('changepassword', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@change_password') ?>" class="alternate">Cambiar contraseña</a></li>
        <li class="app last"><a href="<?php echo url_for('sf_guard_signout') ?>" class="alternate">Salir Hno(a). [<span class="username"><?php echo $sf_user ?></span>]</a></li>
    </ul>
</div>