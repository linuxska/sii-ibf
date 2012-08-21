<?php
/*
 * Menú de acciones para el actor servicio_social.
 *
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>
<li class="menu_role">
    <ul class="menu_sub">
        <li class="menu_header last"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Servicio Social</a></li>
        
        <li class="menu_sub_role">
            <ul class="menu_sub">
                <li class="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Inscripciones</a></li>
                
            </ul>
        </li>

        <li class="menu_sub_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>">Catálogos</a></li>
                <li class="app <?php echo in_array('curso_secretaria', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@curso_curso_secretaria') ?>" class="alternate">Cursos</a></li>
                <li class="app <?php echo in_array('alumno', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@alumno') ?>" class="alternate">Alumno</a></li>
            </ul>
        </li>
    </ul>
</li>