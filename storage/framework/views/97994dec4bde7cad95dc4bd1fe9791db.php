

<?php $__env->startSection('base'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h5 style="font-weight: bold;" class="card-title mb-0 text-center">EMPLOYEE SALARIES</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Employee Type</th>
                                    <th>Remaining Salary</th>
                                    <!-- <th>Next Salary Date</th> -->
                                    <th>Total Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $salaryData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($salary->name); ?></td>
                                    <td><?php echo e($salary->emptype); ?></td>
                                    <td>$<?php echo e($salary->remaining_salary); ?></td>
                                    <!-- <td><?php echo e($salary->next_salary_date); ?></td> -->
                                    <td><?php echo e($salary->salary); ?></td>
                                   
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php if($salaryData->isEmpty()): ?>
                            <div class="text-center">No salary data found.</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/admin/salary-perdate.blade.php ENDPATH**/ ?>