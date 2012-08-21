<form action="<?php echo url_for('@change_password_do') ?>" method="post">

<div class="centrado">
<h3>Cambio de contraseña</h3>
	<table id="sf_admin_container">
	<?php echo $form ?>
</table>
<input type="submit" style="margin-top:30px;"  value="Actualizar" />
</div>
</form>	
