<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('after-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(mix('modules/constant/style.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <div class="table-content mb-5">
        <?php if (isset($component)) { $__componentOriginal57a22d33ea7984d606412297cfe33b67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57a22d33ea7984d606412297cfe33b67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.section-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <div class="d-flex flex-wrap gap-3">
                <?php if(auth()->user()->can('edit_doctors') || auth()->user()->can('delete_doctors')): ?>
                    <?php if (isset($component)) { $__componentOriginal9c2603df095322fce98f15251ab0847f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2603df095322fce98f15251ab0847f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.quick-action','data' => ['url' => ''.e(route("backend.$module_name.bulk_action")).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.quick-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route("backend.$module_name.bulk_action")).'']); ?>
                        <div class="">
                            <select name="action_type" class="form-control select2 col-12" id="quick-action-type"
                                style="width:100%">
                                <option value=""><?php echo e(__('messages.no_action')); ?></option>
                                <?php if(Auth::user()->can('edit_doctors')): ?>
                                    <option value="change-status"><?php echo e(__('messages.status')); ?></option>
                                <?php endif; ?>
                                <?php if(Auth::user()->can('delete_doctors')): ?>
                                    <option value="delete"><?php echo e(__('messages.delete')); ?></option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="select-status d-none quick-action-field" id="change-status-action">
                            <select name="status" class="form-control select2" id="status" style="width:100%">
                                <option value="" selected><?php echo e(__('messages.select_status')); ?></option>
                                <option value="1"><?php echo e(__('messages.active')); ?></option>
                                <option value="0"><?php echo e(__('messages.inactive')); ?></option>
                            </select>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c2603df095322fce98f15251ab0847f)): ?>
<?php $attributes = $__attributesOriginal9c2603df095322fce98f15251ab0847f; ?>
<?php unset($__attributesOriginal9c2603df095322fce98f15251ab0847f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c2603df095322fce98f15251ab0847f)): ?>
<?php $component = $__componentOriginal9c2603df095322fce98f15251ab0847f; ?>
<?php unset($__componentOriginal9c2603df095322fce98f15251ab0847f); ?>
<?php endif; ?>
                <?php endif; ?>
                <div>
                    <button type="button" class="btn btn-primary" data-modal="export">
                        <i class="ph ph-download-simple me-1"></i> <?php echo e(__('messages.export')); ?>

                    </button>
                    
                    
                    
                </div>
            </div>

             <?php $__env->slot('toolbar', null, []); ?> 
                <div>
                    <div class="datatable-filter">
                        <select name="column_status" id="column_status" class="select2 form-control" data-filter="select"
                            style="width: 100%">
                            <option value=""><?php echo e(__('messages.all')); ?></option>
                            <option value="0" <?php echo e($filter['status'] == '0' ? 'selected' : ''); ?>>
                                <?php echo e(__('messages.inactive')); ?></option>
                            <option value="1" <?php echo e($filter['status'] == '1' ? 'selected' : ''); ?>>
                                <?php echo e(__('messages.active')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control dt-search" placeholder="<?php echo e(__('messages.search')); ?>..."
                        aria-label="Search" aria-describedby="addon-wrapping">
                </div>

                <button class="btn btn-secondary d-flex align-items-center gap-1 btn-group" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i
                        class="ph ph-funnel"></i><?php echo e(__('messages.advance_filter')); ?></button>

                <?php if(Auth::user()->can('add_doctors')): ?>
                    <?php if (isset($component)) { $__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.offcanvas','data' => ['target' => '#form-offcanvas','title' => ''.e(__('Create')).' '.e(__($create_title)).'','class' => ' d-flex align-items-center gap-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.offcanvas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['target' => '#form-offcanvas','title' => ''.e(__('Create')).' '.e(__($create_title)).'','class' => ' d-flex align-items-center gap-1']); ?><?php echo e(__('messages.new')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8)): ?>
<?php $attributes = $__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8; ?>
<?php unset($__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8)): ?>
<?php $component = $__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8; ?>
<?php unset($__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8); ?>
<?php endif; ?>
                <?php endif; ?>


             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57a22d33ea7984d606412297cfe33b67)): ?>
<?php $attributes = $__attributesOriginal57a22d33ea7984d606412297cfe33b67; ?>
<?php unset($__attributesOriginal57a22d33ea7984d606412297cfe33b67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57a22d33ea7984d606412297cfe33b67)): ?>
<?php $component = $__componentOriginal57a22d33ea7984d606412297cfe33b67; ?>
<?php unset($__componentOriginal57a22d33ea7984d606412297cfe33b67); ?>
<?php endif; ?>
        <table id="datatable" class="table table-responsive">
        </table>
    </div>

    <div data-render="app">

        <doctor-offcanvas type="<?php echo e(__('staff')); ?>" default-image="<?php echo e(default_file_url()); ?>"
            create-title="<?php echo e(__('messages.create')); ?> <?php echo e(__($create_title)); ?>"
            edit-title="<?php echo e(__('messages.edit')); ?> <?php echo e(__($create_title)); ?>"
            :customefield="<?php echo e(json_encode($customefield)); ?>">
        </doctor-offcanvas>
        <doctor-details-offcanvas>
        </doctor-details-offcanvas>
        <clinic-list-form-offcanvas></clinic-list-form-offcanvas>
        <employee-slot-mapping-form-offcanvas></employee-slot-mapping-form-offcanvas>
        <change-password create-title="Change Password"></change-password>

        <div data-render="app">
            <doctor-session-offcanvas create-title="<?php echo e(__('messages.create')); ?> <?php echo e(__($module_title)); ?>"
                edit-title="<?php echo e(__('messages.edit')); ?> <?php echo e(__($module_title)); ?>">
            </doctor-session-offcanvas>
        </div>

        <send-push-notification create-title="Send Push Notification"></send-push-notification>
    </div>
    <?php if (isset($component)) { $__componentOriginalda1c96c62b8380f4858a938b2701631b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda1c96c62b8380f4858a938b2701631b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.advance-filter','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.advance-filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('title', null, []); ?> 
            <h4><?php echo e(__('service.lbl_advanced_filter')); ?></h4>
         <?php $__env->endSlot(); ?>
        <?php if (! (auth()->user()->hasRole('doctor'))): ?>
            <div class="form-group datatable-filter">
                <label class="form-label" for="doctor_name"><?php echo e(__('clinic.doctor_name')); ?></label>
                <input type="text" name="doctor_name" id="doctor_name" class="form-control"
                    placeholder="<?php echo e(__('service.all')); ?> <?php echo e(__('clinic.doctors')); ?>">


            </div>
            <div class="form-group datatable-filter">
                <label class="form-label" for="email"><?php echo e(__('clinic.lbl_Email')); ?></label>
                <input type="text" name="email" id="email" class="form-control"
                    placeholder="<?php echo e(__('service.all')); ?> <?php echo e(__('clinic.lbl_Email')); ?>">

            </div>
            <div class="form-group datatable-filter">
                <label class="form-label" for="contact"><?php echo e(__('clinic.lbl_contact_number')); ?></label>
                <input type="text" name="contact" id="contact" class="form-control"
                    placeholder="<?php echo e(__('service.all')); ?> <?php echo e(__('clinic.lbl_contact_number')); ?>">

            </div>

            <div class="form-group datatable-filter">
                <label class="form-label w-100" for="column_clinic"><?php echo e(__('clinic.lbl_gender')); ?></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                        data-filter="select" />
                    <label class="form-check-label" for="male"> <?php echo e(__('clinic.lbl_male')); ?> </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                        data-filter="select" />
                    <label class="form-check-label" for="female"> <?php echo e(__('clinic.lbl_female')); ?> </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="intersex" value="intersex"
                        data-filter="select" />
                    <label class="form-check-label" for="intersex"> <?php echo e(__('Intersex')); ?> </label>
                </div>
            </div>
        <?php endif; ?>
        <?php if (! (auth()->user()->hasRole('receptionist'))): ?>
            <div class="form-group datatable-filter">
                <label class="form-label" for="column_clinic"><?php echo e(__('clinic.lbl_clinic_center')); ?></label>
                <select name="column_clinic" id="column_clinic" class="form-control select2" data-filter="select">
                    <option value=""><?php echo e(__('service.all')); ?> <?php echo e(__('clinic.singular_title')); ?></option>
                    <?php $__currentLoopData = $clinic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clinic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($clinic->id); ?>"><?php echo e($clinic->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        <?php endif; ?>
        <?php if(multiVendor() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('demo_admin'))): ?>
            <div class="form-group datatable-filter">
                <label class="form-label" for="vendor"><?php echo e(__('clinic.clinic_admin')); ?></label>
                <select name="vendor" id="vendor" class="form-control select2" data-filter="select">
                    <option value=""><?php echo e(__('service.all')); ?> <?php echo e(__('clinic.clinic_admin')); ?></option>
                    <?php $__currentLoopData = $vendor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($vendor->id); ?>"><?php echo e($vendor->full_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        <?php endif; ?>
        <button type="reset" class="btn btn-danger" id="reset-filter">Reset</button>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda1c96c62b8380f4858a938b2701631b)): ?>
<?php $attributes = $__attributesOriginalda1c96c62b8380f4858a938b2701631b; ?>
<?php unset($__attributesOriginalda1c96c62b8380f4858a938b2701631b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda1c96c62b8380f4858a938b2701631b)): ?>
<?php $component = $__componentOriginalda1c96c62b8380f4858a938b2701631b; ?>
<?php unset($__componentOriginalda1c96c62b8380f4858a938b2701631b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('before-scripts'); ?>
    <script>
        const module_name = '<?php echo e($module_name); ?>'
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script src="<?php echo e(mix('modules/clinic/script.js')); ?>"></script>
    <script src="<?php echo e(asset('js/form-offcanvas/index.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/form-modal/index.js')); ?>" defer></script>
    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>
    <script type="text/javascript" defer>
        const columns = [{
                name: 'check',
                data: 'check',
                title: '<input type="checkbox" class="form-check-input" name="select_all_table" id="select-all-table" onclick="selectAllTable(this)">',
                width: '0%',
                exportable: false,
                orderable: false,
                searchable: false,
            },
            {
                data: 'doctor_id',
                name: 'doctor_id',
                title: "<?php echo e(__('clinic.lbl_name')); ?>",
                orderable: true,
                searchable: true,
            },

            {
                data: 'mobile',
                name: 'mobile',
                title: "<?php echo e(__('clinic.lbl_phone_number')); ?>"
            },
            <?php if (! (auth()->user()->hasRole('receptionist'))): ?>
                {
                    data: 'clinic_id',
                    name: 'clinic_id',
                    title: "<?php echo e(__('clinic.lbl_clinic_center')); ?>",
                    orderable: false,
                    searchable: false,
                },
            <?php endif; ?> {
                data: 'email_verified_at',
                name: 'email_verified_at',
                orderable: false,
                searchable: false,
                title: "<?php echo e(__('clinic.lbl_verification_status')); ?>"
            },



            <?php if(auth()->user()->can('edit_doctors')): ?>

                {
                    data: 'status',
                    name: 'status',
                    orderable: true,
                    searchable: true,
                    title: "<?php echo e(__('clinic.lbl_status')); ?>"
                },
            <?php endif; ?>

            {
                data: 'updated_at',
                name: 'updated_at',
                width: '15%',
                visible: false
            },
        ]

        const actionColumn = [{
            data: 'action',
            name: 'action',
            width: '5%',
            orderable: false,
            searchable: false,
            title: "<?php echo e(__('clinic.lbl_action')); ?>"
        }]

        const customFieldColumns = JSON.parse(<?php echo json_encode($columns, 15, 512) ?>)

        let finalColumns = [
            ...columns,
            ...customFieldColumns,
            ...actionColumn

        ]
        document.addEventListener('DOMContentLoaded', (event) => {
            let selectedGender = null;

            $('input[name="gender"]').change(function() {
                selectedGender = $(this).val();
            });

            $('#doctor_name').on('input', function() {
                window.renderedDataTable.ajax.reload(null, false);
            });
            $('#email').on('input', function() {
                window.renderedDataTable.ajax.reload(null, false);
            });
            $('#contact').on('input', function() {
                window.renderedDataTable.ajax.reload(null, false);
            });
            initDatatable({
                url: '<?php echo e(route("backend.$module_name.index_data")); ?>',
                finalColumns,
                orderColumn: [
                    [6, 'desc']
                ],
                advanceFilter: () => {
                    const doctorNameFilter = $('#doctor_name').val();
                    const emailFilter = $('#email').val();
                    const contactFilter = $('#contact').val();
                    return {
                        clinic_name: $('#column_clinic').val(),
                        doctor_name: doctorNameFilter,
                        contact: contactFilter,
                        email: emailFilter,
                        vendor_id: $('#vendor').val(),
                        gender: selectedGender
                    }
                }
            });
            $('#reset-filter').on('click', function(e) {
                $('#column_clinic, #doctor_name, #contact, #email, #vendor').val('');
                $('input[name="gender"]').prop('checked', false);
                selectedGender = null;
                window.renderedDataTable.ajax.reload(null, false);
            });
        });

        function resetQuickAction() {
            const actionValue = $('#quick-action-type').val();
            if (actionValue != '') {
                $('#quick-action-apply').removeAttr('disabled');

                if (actionValue == 'change-status') {
                    $('.quick-action-field').addClass('d-none');
                    $('#change-status-action').removeClass('d-none');
                } else {
                    $('.quick-action-field').addClass('d-none');
                }
            } else {
                $('#quick-action-apply').attr('disabled', true);
                $('.quick-action-field').addClass('d-none');
            }
        }

        $('#quick-action-type').change(function() {
            resetQuickAction()
        });

        $(document).on('update_quick_action', function() {
            // resetActionButtons()
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jastis/Downloads/clinicapp-main/Modules/Clinic/Resources/views/backend/doctor/index.blade.php ENDPATH**/ ?>