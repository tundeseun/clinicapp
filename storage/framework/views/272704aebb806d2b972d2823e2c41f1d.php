<div class="d-flex gap-3 align-items-center">
  <img src="<?php echo e($data->profile_image ?? default_user_avatar()); ?>" alt="avatar" class="avatar avatar-40 rounded-pill">
  <div class="text-start">
    <h6 class="m-0"><?php echo e($data->full_name ?? default_user_name()); ?></h6>
    <span><?php echo e($data->email ?? '--'); ?></span>
  </div>
</div>
<?php /**PATH /Users/jastis/Downloads/clinicapp-main/Modules/Clinic/Resources/views/backend/doctor/user_id.blade.php ENDPATH**/ ?>