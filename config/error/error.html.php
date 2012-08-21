<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php $path = sfConfig::get('sf_relative_url_root', preg_replace('#/[^/]+\.php5?$#', '', isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : (isset($_SERVER['ORIG_SCRIPT_NAME']) ? $_SERVER['ORIG_SCRIPT_NAME'] : ''))) ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="title" content="IBF :: SII " />
        <meta name="robots" content="index, follow" />
        <meta name="description" content="Iglesia Bautista Fundamental de Celaya" />
        <meta name="keywords" content="IBF, Iglesia Bautista" />
        <meta name="language" content="es" />
        <title>ITC :: DGTYV :: CI</title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/default/error500.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/ibf/layout.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/sfPropelPlugin/css/global.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/sfPropelPlugin/css/default.css" />
    </head>
    <body>
        <div id="header">
          <div id="logos">
              <img alt="Iglesia Bautista Fundamental" src="/images/logos/banner1.jpg" />
          </div>
      </div>
        <div id="content">
            <div class="sfTContainer">
                <div class="sfTMessageContainer sfTAlert">
                    <div class="sfTMessageWrap">
                        <h1>Se produjo un error.</h1>
                        <h5>El servidor regresó "<?php echo $code ?> <?php echo $text ?>".</h5>
                    </div>
                </div>

                <dl class="sfTMessageInfo">
                    <dt>Algo se ha roto.</dt>
                    <dd>Por favor, envíenos un correo a <strong><a href="mailto:contacto@ibfcelaya.org.mx">contacto@ibfcelaya.org.mx</a></strong> y digamos que estaba haciendo usted cuando sucedió este error. Nosotros lo repararemos tan pronto como sea posible. Sentimos cualquier inconveniente causado.</dd>

                    <dt>Acciones.</dt>
                    <dd>
                        <ul class="sfTIconList">
                            <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Ir a la página anterior</a>.</li>
                            <li class="sfTLinkMessage"><a href="/">Ir al inicio.</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="rp_admin_footer">
          <p>&copy; <?php echo date('Y', time());?> <a href="http://www.ibfcelaya.org.mx/">Iglesia Bautista Fundamental de Celaya</a>.
            <p class="rp_admin_ibf">Carretera Celaya-Salvatierra Km 7 Celaya, Gto. 38000.<br />Telefono: 01 461-618-2312| Fax: 01 461-618-2312</p>
            <p class="rp_admin_dev">Desarrollado por Abraham Rafael Rico Moreno.<br /> <a href="http://www.abricolabs.net/">Labs Cafeinne</a>. 461 1433 296 </p>
      </div>
    </body>
</html>

