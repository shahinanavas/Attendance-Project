

<?php $__env->startSection('base'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h5 style="font-weight: bold;" class="card-title mb-0 text-center">EMPLOYEE SALARIES</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <?php $__currentLoopData = range(1, 12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $monthName = \Carbon\Carbon::createFromFormat('m', $month)->format('F');
                ?>
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h5 style="font-weight: bold;" class="card-title mb-0 text-center">Salary in <?php echo e($monthName); ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Employee Type</th>
                                        <th>Salary</th>
                                        <th>Salary Date</th>
                                        <th>Remaining Salary</th>
                                        <th>Next Salary Date</th>
                                        <th>Status</th>
                                        <th>Mark as Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $salaryData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!is_null($employee->remainingSalaries[$month])): ?>
                                            <tr>
                                                <td><?php echo e($employee->id); ?></td>
                                                <td><?php echo e($employee->name); ?></td>
                                                <td><?php echo e($employee->emptype); ?></td>
                                                <td><?php echo e($employee->salary); ?></td>
                                                <td><?php echo e($employee->remainingSalaries[$month]['date']); ?></td>
                                                <td><?php echo e($employee->remainingSalaries[$month]['amount']); ?></td>
                                                <td><?php echo e($employee->remainingSalaries[$month]['next_salary_date']); ?></td>
                                                <td>
                                                    <?php if($employee->remainingSalaries[$month]['status'] === 'paid'): ?>
                                                        Paid
                                                    <?php else: ?>
                                                        Unpaid
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <form method="POST" action="<?php echo e(url('/admin/mark-salary-paid')); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="employee_id" value="<?php echo e($employee->id); ?>">
                                                        <input type="hidden" name="month" value="<?php echo e($month); ?>">
                                                        <select name="status" onchange="this.form.submit()">
                                                            <option value="unpaid" <?php echo e($employee->remainingSalaries[$month]['status'] !== 'paid' ? 'selected' : ''); ?>>Unpaid</option>
                                                            <option value="paid" <?php echo e($employee->remainingSalaries[$month]['status'] === 'paid' ? 'selected' : ''); ?>>Paid</option>
                                                        </select>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/admin/allmonthsalary.blade.php ENDPATH**/ ?>