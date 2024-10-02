<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((["href"=>"", "target" => "", "icon"=>"ph ph-plus-circle", "title", "small"=>"", "class"=>""]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((["href"=>"", "target" => "", "icon"=>"ph ph-plus-circle", "title", "small"=>"", "class"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


<?php if($href): ?>
<a href='<?php echo e($href); ?>'
    class='btn btn-primary d-flex align-items-center gap-1 <?php echo e(($small=='true')? 'btn-sm' : ''); ?> <?php echo e($class); ?>'
    data-bs-toggle="tooltip"
    title="<?php echo e($title); ?>">
    <i class="<?php echo e($icon); ?>"></i>
    <?php echo e($slot); ?>

</a>
<?php else: ?>
<button type="button"
    class='btn btn-primary d-flex align-items-center gap-1 <?php echo e(($small=='true')? 'btn-sm' : ''); ?> <?php echo e($class); ?>'
    data-crud-id="0"
    title="<?php echo e($title); ?>">
    <i class="<?php echo e($icon); ?>"></i>
    <?php echo e($slot); ?>

</button>
<?php endif; ?>
<?php /**PATH /Users/jastis/Downloads/clinicapp-main/resources/views/components/buttons/offcanvas.blade.php ENDPATH**/ ?>