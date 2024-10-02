<div class="iq-navbar-header navs-bg-color pr-hide">
    <div class="container-fluid iq-container pb-0">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb gap-2 heading-font m-0">
                        <?php if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('demo_admin')): ?>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('backend.home')); ?>">Home</a></li>
                        <?php elseif(auth()->user()->hasRole('doctor')): ?>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('backend.doctor-dashboard')); ?>">Home</a></li>
                        <?php elseif(auth()->user()->hasRole('receptionist')): ?>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('backend.receptionist-dashboard')); ?>">Home</a></li>
                        <?php elseif(auth()->user()->hasRole('vendor')): ?>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('backend.vendor-dashboard')); ?>">Home</a></li>
                        <?php endif; ?>
                            <li><i class="ph ph-caret-double-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__($module_title ?? '')); ?></li>
                        </ol>
                    </nav>
                    <div>  
                    <?php if(auth()->user()->hasRole('admin')|| auth()->user()->hasRole('vendor')): ?>
                        <a href="javascript:void(0)" class="btn btn-secondary d-flex align-items-center gap-2" create-title="<?php echo e(__('messages.create')); ?> <?php echo e(__('messages.appointment')); ?>" id="appointment-button"><i class="ph ph-plus align-middle"></i> <?php echo e(__('messages.appointment')); ?></a>                      
                    </div> 
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/jastis/Downloads/clinicapp-main/resources/views/components/partials/sub-header.blade.php ENDPATH**/ ?>