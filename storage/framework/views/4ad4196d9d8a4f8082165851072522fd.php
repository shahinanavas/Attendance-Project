
<?php $__env->startSection('base'); ?>

<div class="text-center">
    <h1>TEAM</h1>
</div>
<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <h5 class="card-title mb-0 text-center">Edit Employee</h5>
    </div>
    <div class="card-body">
        <form class="row g-3" action="/home/employeeupdate/<?php echo e($view->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="col-md-6">
                <label class="form-label">Employee Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo e($view->name); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="employee_address"><?php echo e($view->employee_address); ?></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">Aadhar Number</label>
                <input type="text" class="form-control" name="aadhar_no" value="<?php echo e($view->aadhar_no); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" value="<?php echo e($view->dob); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Qualification</label>
                <select class="form-select" name="qualification">
                    <option value="diploma" <?php echo e($view->qualification == 'diploma' ? 'selected' : ''); ?>>Diploma</option>
                    <option value="ug" <?php echo e($view->qualification == 'ug' ? 'selected' : ''); ?>>UG</option>
                    <option value="pg" <?php echo e($view->qualification == 'pg' ? 'selected' : ''); ?>>PG</option>
                    <option value="phd" <?php echo e($view->qualification == 'phd' ? 'selected' : ''); ?>>Phd</option>
                </select>
            </div>
            <div class="col-md-6"> 
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone_no" value="<?php echo e($view->phone_no); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Designation</label>
                <input type="text" class="form-control" name="designation" value="<?php echo e($view->designation); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Type</label>
                <select class="form-select" name="emptype">
                    <option value="Permanent" <?php echo e($view->emptype == 'Permanent' ? 'selected' : ''); ?>>Permanent</option>
                    <option value="Probation Period" <?php echo e($view->emptype == 'Probation Period' ? 'selected' : ''); ?>>Probation Period</option>
                    <option value="Intern" <?php echo e($view->emptype == 'Intern' ? 'selected' : ''); ?>>Intern</option>
                    <option value="Trainee" <?php echo e($view->emptype == 'Trainee' ? 'selected' : ''); ?>>Trainee</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Join Date</label>
                <input type="date" class="form-control" name="join_date" value="<?php echo e($view->join_date); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary" value="<?php echo e($view->salary); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Salary Date</label>
                <input type="date" class="form-control" name="salary_date" value="<?php echo e($view->salary_date); ?>">
            </div>
            
            <!-- Submit and Cancel buttons -->
            <div class="text-center">
                <button type="submit" class="btn btn-info">Update</button>
                <a href="/home/employees" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/Admin/employeeedit.blade.php ENDPATH**/ ?>