<?php if ($sf_user->hasFlash('notice')): ?>
    <div class="flash_notice"><?php echo $sf_user->getFlash('notice')
    ?></div>
<?php endif ?>
<?php if ($sf_user->hasFlash('error')): ?>
    <div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif ?>

<div id = "centro">
    <p>Profesores, pueden usar su nombre de usuario o correo electrónico para 
        recuperar su contraseña. Alumnos, solamente pueden usar su nombre de usuario.</p>
    <p>Su nueva contraseña será enviada a su correo electrónico.</p>
    <p>Personal administrativo, si no recuerdan sus datos de acceso, por favor
        póngase en contacto con el administrador en la siguiente dirección de correo 
        electrónico <a href="mailto:desarrollo_dgtyv@itcelaya.edu.mx">desarrollo_dgtyv@itcelaya.edu.mx</a>.</p>

    <form method="post" action="<?php echo url_for('@recover_password_do') ?>" >
        <table id="sf_admin_container">
            <?php echo $form ?>
        </table>
        <input type="submit" value="Actualizar" />
    </form>
</div>



