<form action="<?php echo e($url ?? ''); ?>" id="quick-action-form" class="form-disabled d-flex gap-3 align-items-stretch">
  <?php echo csrf_field(); ?>
  <?php echo e($slot); ?>

  <input type="hidden" name="message_change-featured" value="Are you sure you want to perform this action?">
  <input type="hidden" name="message_change-status" value="Are you sure you want to perform this action?">
  <input type="hidden" name="message_delete" value="Are you sure you want to delete it?">
  <button class="btn btn-gray" id="quick-action-apply"><?php echo e(__('messages.apply')); ?></button>
</form>
<?php /**PATH /Users/jastis/Downloads/clinicapp-main/resources/views/components/backend/quick-action.blade.php ENDPATH**/ ?>