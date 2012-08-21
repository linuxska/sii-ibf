<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Miembro->getId(), 'miembro_edit', $Miembro) ?>
</td>
<td class="sf_admin_text sf_admin_list_td___Ministerio">
  <?php echo link_to($Miembro->get_Ministerio(), 'miembro_edit', $Miembro) ?>
</td>
<td class="sf_admin_text sf_admin_list_td___nombre">
  <?php echo link_to($Miembro->get_Nombre(), 'miembro_edit', $Miembro) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_sexo">
  <?php echo $Miembro->getSexo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_direccion">
  <?php echo $Miembro->getDireccion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_colonia">
  <?php echo $Miembro->getColonia() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cp">
  <?php echo $Miembro->getCp() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ciudad">
  <?php echo $Miembro->getCiudad() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telcasa">
  <?php echo $Miembro->getTelcasa() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telmovil">
  <?php echo $Miembro->getTelmovil() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_cumpleanios">
  <?php echo false !== strtotime($Miembro->getCumpleanios()) ? format_date($Miembro->getCumpleanios(), "P") : '&nbsp;' ?>
</td>
