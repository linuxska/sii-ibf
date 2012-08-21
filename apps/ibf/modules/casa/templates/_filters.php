<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_filter">
  <?php if ($form->hasGlobalErrors()): ?>
    <?php echo $form->renderGlobalErrors() ?>
  <?php endif; ?>

  <form action="<?php echo url_for('casa_collection', array('action' => 'filter')) ?>" method="post">
    <table cellspacing="0">
      <tbody>
                        <?php $first = true ?>
                <?php $action = true ?>
                <?php $i = 0 ?>
                <?php $widgets_total = count($configuration->getFormFilterFields($form)) ?>
                <?php const WIDGET_PER_ROW = 5 ?>
                <?php const MODEL = "casa" ?>

                <tr><td style="background-color:#E7EEF6;font-weight:bold;border:1px solid #DDD;" colspan="<?php echo WIDGET_PER_ROW + 1 ?>">Filtrar</td></tr>
                <?php foreach ($configuration->getFormFilterFields($form) as $name => $field) : ?>
                    <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) : ?>
                        <?php $widgets_total-- ?>
                        <?php continue ?>
                    <?php endif ?>

                    <?php $attributes = $field->getConfig('attributes', array()) ?>
                    <?php $label = $field->getConfig('label') ?>
                    <?php $help = $field->getConfig('help') ?>

                    <?php if ($field->isPartial()): ?>
                        <?php $widgets_total-- ?>
                        <?php include_partial(MODEL . '/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
                    <?php elseif ($field->isComponent()): ?>
                        <?php $widgets_total-- ?>
                        <?php include_component(MODEL, $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
                    <?php else: ?>
                        <?php if ($first) : ?>
                            <?php $first = false ?>
                            <tr class="<?php echo 'sf_admin_form_row sf_admin_' . strtolower($field->getType()) . ' sf_admin_filter_field_' . $name ?>">
                        <?php endif; ?>

                        <td colspan="<?php echo $widgets_total <= 1 ? WIDGET_PER_ROW - $i : 1 ?>">
                            <?php echo $form[$name]->renderLabel($label) ?>

                            <?php echo $form[$name]->renderError() ?>

                            <?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>

                            <?php if ($help || $help = $form[$name]->renderHelp()): ?>
                                <div class="help"><?php echo __($help, array(), 'messages') ?></div>
                            <?php endif; ?>
                        </td>

                        <?php $i++ ?>
                        <?php $widgets_total-- ?>
                        <?php if (($widgets_total <= 1) && $action): ?>
                                <td rowspan="<?php echo ceil(count($configuration->getFormFilterFields($form)) / WIDGET_PER_ROW) ?>" style="border:1px solid #DDD;vertical-align:bottom;text-align:right;">
                                    <?php echo $form->renderHiddenFields() ?>
                                    <?php echo link_to(__('Reestablecer', array(), 'sf_admin'), MODEL . '_collection', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?>
                                    <input type="submit" value="<?php echo __('Filtrar', array(), 'sf_admin') ?>" />
                                </td>
                                <?php $action = false ?>
                        <?php endif ?>
                        <?php if ($i == WIDGET_PER_ROW) :?>
                            <?php if ($action): ?>
                                <td rowspan="<?php echo ceil(count($configuration->getFormFilterFields($form)) / WIDGET_PER_ROW) ?>" style="border:1px solid #DDD;vertical-align:bottom;text-align:right;">
                                    <?php echo $form->renderHiddenFields() ?>
                                    <?php echo link_to(__('Reestablecer', array(), 'sf_admin'), MODEL . '_collection', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?>
                                    <input type="submit" value="<?php echo __('Filtrar', array(), 'sf_admin') ?>" />
                                </td>
                                <?php $action = false ?>
                            <?php endif; ?>
                            </tr>
                            <?php $i = 0 ?>
                            <?php $first = true ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
      </tbody>
    </table>
  </form>
</div>
