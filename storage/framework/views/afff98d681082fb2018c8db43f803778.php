

<?php $__env->startSection('base'); ?>
<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <h5  style="font-weight: bold;"  class="card-title mb-0 text-center">LEAVE  APPLICATION</h5>
                    </div>
                </div>
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>Leave Type</th>
                                <th>Date</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Days</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $leaveApplications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                   
                                    <td><?php echo e($leave->employee_name); ?></td>
                                    <td><?php echo e($leave->typeleave); ?></td>
                                    <td><?php echo e($leave->date); ?></td>
                                    <td><?php echo e($leave->startdate); ?></td>
                                    <td><?php echo e($leave->enddate); ?></td>
                                    <td><?php echo e($leave->totaldays); ?></td>
                                    <td><?php echo e($leave->reason); ?></td>
                                    <td>
                                    <form method="POST" action="<?php echo e(url('/leave/approve/'.$leave->id)); ?>">
        <?php echo csrf_field(); ?>
        <select name="status" class="form-select" onchange="this.form.submit()">
            <option value="0" <?php if($leave->status == 0): ?> selected <?php endif; ?> class="btn btn-danger">Pending</option>
            <option value="1" <?php if($leave->status == 1): ?> selected <?php endif; ?> class="btn btn-success">Accept</option>
            <option value="2" <?php if($leave->status == 2): ?> selected <?php endif; ?> class="btn btn-warning">Reject</option>
        </select>
    </form>
</td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/admin/leavestatus.blade.php ENDPATH**/ ?>