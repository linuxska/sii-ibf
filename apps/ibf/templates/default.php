<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title><?php include_slot('title', 'IBF ')?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="header">
          <div id="logos">
              <img alt="Iglesia Bautista Fundamental" src="/images/logos/banner1.jpg" />
          </div>
      </div>
      <div id="content" class="ci_admin_content">
          <?php echo $sf_content ?>
      </div>
    <div class="rp_admin_footer">
      <p>&copy; <?php echo date('Y', time());?> <a href="http://www.ibfcelaya.org.mx/">Iglesia Bautista Fundamental de Celaya</a>.
      <p class="rp_admin_ibf">Carretera Celaya-Salvatierra Km 7 Celaya, Gto. 38000.<br />Telefono: 01 461-618-2312| Fax: 01 461-618-2312</p>
      <p class="rp_admin_dev">Desarrollado por Abraham Rafael Rico Moreno.<br /> <a href="http://www.abricolabs.net/">Labs Cafeinne</a>. 461 1433 296 </p>
    </div>
  </body>
</html>
