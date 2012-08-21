<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title><?php include_slot('title', 'Iglesia Bautista Fundamental')?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".flip").toggle(function(){
            $("#workspace").width('98%');
            $("#show").css('display', 'inline');
        },
        function(){
            $("#workspace").width('80%');
            $("#show").css('display', 'none');
        });
        $(".flip").click(function(){
            $(".menus").slideToggle("slow");
        });
        $("#show").click(function(){
            $('.flip').trigger('click');
        });
    });
</script>
  </head>
  <body>
  <div id="wrapper">
          <div id="header">
              <div id="logos">
                 <img alt="Iglesia Bautista de Celaya" src="/images/logos/banner.jpg" />
              </div>
          </div>
          <div id="content" class="ibf_admin_content">
              <div>
                  <span id="show" style="cursor:pointer;display:none;padding-left:10px;padding-right:10px;background-color:#17608A;color:white" title="Mostrar menu">&nabla;</span>
              </div>
              <?php include_partial('ibf/menu', array('sf_user'=>$sf_user));?>
              <div id="workspace">
                    <?php echo $sf_content ?>
              </div>
          </div>
          <div class="rp_admin_footer">
      <p>&copy; <?php echo date('Y', time());?> <a href="http://www.ibfcelaya.org.mx/">Iglesia Bautista Fundamental de Celaya</a>.
      <p class="rp_admin_ibf">Carretera Celaya-Salvatierra Km 7 Celaya, Gto. 38000.<br />Telefono: 01 461-618-2312| Fax: 01 461-618-2312</p>
      <p class="rp_admin_dev">Desarrollado por Abraham Rafael Rico Moreno.<br /> <a href="http://www.abricolabs.net/">Labs Cafeinne</a>. 461 1433 296 </p>
    </div>
      </div>
  </body>
</html>