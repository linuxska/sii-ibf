<?php
/*
 * Menú de acciones para el actor admin.
 *
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
<li class="menu_role">
    <ul class="menu_sub">
        <li class="menu_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Administrador</a></li>
        <li class="app <?php echo in_array('sf_guard_user', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_user') ?>" class="alternate">Usuarios</a></li>
        <li class="app <?php echo in_array('sf_guard_group', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_group') ?>" class="alternate">Grupos</a></li>
        <li class="app last <?php echo in_array('sf_guard_permission', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@sf_guard_permission') ?>" class="alternate">Permisos</a></li>
        <li class="menu_sub_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Modulos</li>
                <li class="app <?php echo in_array('miembro', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@miembro') ?>" class="alternate">Dir. de Miembros</a></li>
                <li class="app <?php echo in_array('iglesia', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@iglesia') ?>" class="alternate">Dir. de Iglesias</a></li>
                <li class="app <?php echo in_array('casa', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@casa') ?>" class="alternate">Hospedaje</a></li>
                <li class="app <?php echo in_array('proveedor', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@proveedor') ?>" class="alternate">Proveedores</a></li>
                <li class="app <?php echo in_array('ministerio', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@ministerio') ?>" class="alternate">Ministerios</a></li>
            </ul>
        </li>
    </ul>
</li>