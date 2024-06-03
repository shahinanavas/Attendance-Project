

<?php $__env->startSection('base'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header">Today's Work Report</div>
                <a href="<?php echo e(url('/work-report')); ?>" class="btn btn-primary me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                    </svg> ADD
                </a>
                <div class="card-body">
                    <?php if($work_report): ?>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" value="<?php echo e($current_date); ?>" name="date" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="check_in" class="col-md-4 col-form-label text-md-right">Check-In Time</label>
                            <div class="col-md-6">
                                <input id="check_in" type="time" class="form-control" name="check_in" value="<?php echo e($work_report->check_in); ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="check_out" class="col-md-4 col-form-label text-md-right">Check-Out Time</label>
                            <div class="col-md-6">
                                <input id="check_out" type="time" class="form-control" name="check_out" value="<?php echo e($work_report->check_out); ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="work_report" class="col-md-4 col-form-label text-md-right">Work Report</label>
                            <div class="col-md-6">
                                <textarea id="work_report" class="form-control" name="work_report" rows="4" readonly><?php echo e($work_report->work_report); ?></textarea>
                            </div>
                        </div>
                    <?php else: ?>
                        <p>No work report found for today.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Employee.base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/employee/viewreport.blade.php ENDPATH**/ ?>