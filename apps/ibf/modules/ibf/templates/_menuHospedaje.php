<?php
/*
 * Menú de acciones para el actor Alumno
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */


?>


<li class="menu_role">
    <ul class="menu_sub">
        <li class="menu_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Ministerio de Hospedaje</a></li>
        <li class="app <?php echo in_array('casa', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@casa') ?>" class="alternate">Casas</a></li>
        <li class="app <?php echo in_array('iglesia', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@iglesia') ?>" class="alternate">Dir. de Iglesias</a></li>
    </ul>
</li>
