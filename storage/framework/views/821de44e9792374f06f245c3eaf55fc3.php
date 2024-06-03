

<?php $__env->startSection('base'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="card-title mb-0 text-center">Edit Individual Task</h4>
                </div>
                <div class="card-body">
                    <form action="/taskupdate/<?php echo e($task->id); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label class="form-label text-primary">Project Name</label>
                                <select name="name" class="form-control">
                                    <option value="">Select project name</option>
                                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($project->projectname); ?>" <?php echo e($project->projectname == $task->name ? 'selected' : ''); ?>><?php echo e($project->projectname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-primary">Task AssignTO</label>
                                <select name="assign_to" class="form-control">
                                    <option value="">Select AssignTO</option>
                                    <?php $__currentLoopData = $assigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($assign->id); ?>" <?php echo e($assign->id == $task->assign_to ? 'selected' : ''); ?>><?php echo e($assign->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Task Name</label>
                                <input type="text" class="form-control" name="taskname" value="<?php echo e($task->taskname); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Description</label>
                                <textarea class="form-control" name="taskdescription" rows="3"><?php echo e($task->taskdescription); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="text-primary form-label">Allocation Date</label>
                                <input type="date" name="allocationdate" class="form-control" value="<?php echo e($task->allocationdate); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="text-primary form-label">Deadline Date</label>
                                <input type="date" name="deadlinedate" class="form-control" value="<?php echo e($task->deadlinedate); ?>">
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/admin/taskedit.blade.php ENDPATH**/ ?>