<?php
$max_width = "";
if (isset($setting['general']['options']['container_max_width_switch']['value']) && $setting['general']['options']['container_max_width_switch']['value'] == 'true') {
    $max_width = $setting['general']['options']['container_max_width_switch']['childs']['container_max_width']['value'];
    $tableAlignment = $setting['general']['options']['table_alignment']['value'];
    $alignment = '';
    if ($tableAlignment === 'left') {
        $alignment = 'margin-right: auto';
    } else {
        if ($tableAlignment === 'right') {
            $alignment = 'margin-left: auto';
        } else {
            if ($tableAlignment === 'center') {
                $alignment = 'margin-left: auto; margin-right: auto';
            }
        }
    }
}
$max_height = "500";
if (isset($setting['general']['options']['container_max_height']['value'])) {
    $max_height = $setting['general']['options']['container_max_height']['value'];
}
?>

<div class="ntb_table_wrapper" data-responsive='<?php esc_attr_e(json_encode($responsive)); ?>'
     id='ninja_table_builder_<?php esc_attr_e($table_id); ?>'
     style="
     <?php esc_attr_e("max-height:$max_height" . "px"); ?>;
     <?php esc_attr_e($max_width != '' ? "max-width: $max_width" . "px;" . $alignment : 'max-width: 1160px'); ?>;">
    <?php
    ninjaTablesPrintSafeVar($ninja_table_builder_html);
    ?>
</div>
