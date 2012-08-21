<?php use_helper('Debug') ?>

<?php use_stylesheet('sfGuardPlugin/secure.css') ?>

<div class="sfTwrapper">
    <div class="sfTMessageContainer sfTLock">
      <div class="sfTMessageWrap">
        <h1>Credenciales requeridas.</h1>
        <h5>Esta página se encuentra en un área restringida.</h5>
      </div>
    </div>
    <dl class="sfTMessageInfo">
      <dt>Usted no tiene las credenciales apropiadas para acceder a esta página.</dt>
      <dd>Aunque usted ya se encuentra autenticado como: <strong><?php echo $sf_user ?></strong>, esta página requiere credenciales especiales que usted actualmente no tiene.</dd>

      <dt>¿Cómo acceder a esta página?</dt>
      <dd>Usted debe contactar al <strong>administrador</strong>, para solicitar que le conceda la credencial adecuada.</dd>

      <dt>Acciones</dt>
      <dd>
        <ul class="sfTIconList">
          <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Ir a la página anterior</a>.</li>
        </ul>
      </dd>
    </dl>
</div>