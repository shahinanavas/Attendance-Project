

<?php $__env->startSection('base'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="card-title mb-0 text-center">Add  Team Task</h4>
                </div>
                <div class="card-body">
                    <form action="/home/cmpstoretask" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label class="form-label text-primary">Project Name</label>
                                <select id="projectname" name="name_project" class="form-control">
    <option value="">Select project name</option>
    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($project->projectname); ?>"><?php echo e($project->projectname); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Team Name</label>
                                <select id="teamname" name="team_name" class="form-control">
                                    <option value="">Select team</option>
                                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=""><?php echo e($team->teamname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Task AssignTO</label>
                                <select name="assigned_to" id="taskassign" class="form-control">
                                    <option value="">Select AssignTO</option>
                                    <?php $__currentLoopData = $assigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=""><?php echo e($assign->member); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Task Name</label>
                                <input type="text" class="form-control" placeholder="Enter your task name" name="task_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Description</label>
                                <input type="text" class="form-control" placeholder="Enter your description" name="task_description">
                            </div>
                            <div class="mb-3">
                                <label class="text-primary form-label">Allocation Date</label>
                                <input type="date" name="allocation_date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="text-primary form-label">Deadline Date</label>
                                <input type="date" name="deadline_date" class="form-control">
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/admin/add-task.blade.php ENDPATH**/ ?>