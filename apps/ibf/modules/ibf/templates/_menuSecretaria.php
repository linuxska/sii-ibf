<?php
/*
 * Menú de acciones para el actor secretaria.
 * 
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
<li class="menu_role">
    <ul class="menu_sub">
        <li class="menu_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Secretaria</a></li>
        <li class="app <?php echo in_array('miembro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@miembro') ?>" class="alternate">Dir. de Miembros</a></li>
        <li class="app <?php echo in_array('iglesia', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@iglesia') ?>" class="alternate">Dir. de Iglesias</a></li>
        <li class="app <?php echo in_array('proveedor', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@proveedor') ?>" class="alternate">Proveedores</a></li>
    </ul>
</li>

