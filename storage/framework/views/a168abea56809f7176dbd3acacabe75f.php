

<?php $__env->startSection('base'); ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                        <h5 style="font-weight: bold;" class="card-title mb-0">Employee Dashboard</h5>
                        <div>
                            <?php if($attendance): ?>
                                <?php if($attendance->checkout_time): ?>
                                    <?php if(session('day_salary')): ?>
                                        <!-- Display Day Salary if available -->
                                    <?php endif; ?>
                                    <?php if(session('deduction')): ?>
                                        <!-- Display Deduction if available -->
                                    <?php endif; ?>
                                <?php else: ?>
                                    <form action="<?php echo e(route('employee.checkout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-primary">Checkout</button>
                                    </form>
                                <?php endif; ?>
                            <?php else: ?>
                                <form action="<?php echo e(route('employee.checkin')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-primary">Checkin</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Welcome, <?php echo e(Auth::user()->name); ?>!</p>
                        <p>Today's Date: <?php echo e(now('Asia/Kolkata')->format('Y-m-d')); ?></p>

                        <div class="row mt-4 justify-content-center">
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xl-3 mb-4">
                                <div class="card dash-widget bg-success">
                                    <div class="card-body">
                                        <span class="dash-widget-icon"><i class="fa fa-money"></i></span>
                                        <div class="dash-widget-info">
                                            <span style="color: white;">Current Month's Remaining Salary</span>
                                            <h3 style="color: white;">$<?php echo e(number_format($currentMonthRemainingSalary, 2)); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xl-3 mb-4">
                                <div class="card dash-widget bg-warning">
                                    <div class="card-body">
                                        <span class="dash-widget-icon"><i class="fa fa-money"></i></span>
                                        <div class="dash-widget-info">
                                            <span style="color: white;">Previous Month's Remaining Salary</span>
                                            <h3 style="color: white;">$<?php echo e(number_format($previousMonthRemainingSalary, 2)); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Employee.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/Employee/employeehome.blade.php ENDPATH**/ ?>