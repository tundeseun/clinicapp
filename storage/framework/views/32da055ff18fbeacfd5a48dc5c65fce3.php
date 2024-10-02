<?php if($data->email_verified_at): ?> 

<span class="badge booking-status bg-success-subtle p-2"><?php echo e(__('employee.msg_verified')); ?> </span>
                  
<?php else: ?>

 <span href="<?php echo e(route("backend.doctor.verify-doctor", $data->id)); ?>" id="delete-<?php echo e($module_name); ?>-<?php echo e($data->id); ?>" class="text-capitalize badge bg-danger-subtle p-2" data-type="ajax" data-method="GET" data-token="<?php echo e(csrf_token()); ?>" data-bs-toggle="tooltip" title="<?php echo e(__('Verify')); ?>" data-confirm="<?php echo e(__('messages.verify_account')); ?>"> Verify </span>

<?php endif; ?><?php /**PATH /Users/jastis/Downloads/clinicapp-main/Modules/Clinic/Resources/views/backend/doctor/verify_action.blade.php ENDPATH**/ ?>