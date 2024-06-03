

<?php $__env->startSection('base'); ?>
<div class="text-center">
    <h1></h1>
</div>
<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <h5 class="card-title mb-0 text-center">Today Attendance</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Employee Name</th>
                        <th>checkin-time</th>
                        <th>Checkout Time </th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $attendanceData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($attendance->date); ?></td>
                        <td><?php echo e($attendance->employee_name); ?></td>
                        <td><?php echo e($attendance->checkin_time); ?></td>
                        <td><?php echo e($attendance->checkout_time); ?></td>
                        <td><?php echo e($attendance->status); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/admin/atten-perdate.blade.php ENDPATH**/ ?>