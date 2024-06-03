

<?php $__env->startSection('base'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title mb-0">Task Details</h5>
                </div>
                <div class="card-body">
                    <p><strong>Project Name:</strong> <?php echo e($task->name); ?></p>
                    <p><strong>Task Name:</strong> <?php echo e($task->taskname); ?></p>
                    <p><strong>Assigned To:</strong> <?php echo e($task->assigned_to_name); ?></p>
                    <p><strong>Description:</strong> <?php echo e($task->taskdescription); ?></p>
                    <p><strong>Allocation Date:</strong> <?php echo e($task->allocationdate); ?></p>
                    <p><strong>Deadline Date:</strong> <?php echo e($task->deadlinedate); ?></p>
                    <div class="d-flex justify-content-between align-items-center"> <!-- Flex container for inline elements -->
                        <button class="btn btn-primary" onclick="showReminderDialog('<?php echo e($task->deadlinedate); ?>')">Show Reminder</button>
                        <form method="POST" action="<?php echo e(url('/taskupdate/'.$task->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <select name="status" onchange="this.form.submit()" id="statusSelect<?php echo e($task->id); ?>" class="btn btn-primary">
                                <option class="btn btn-danger" value="0" <?php if($task->status == 0): ?> selected <?php endif; ?>>Pending</option>
                                <option class="btn btn-primary" value="1" <?php if($task->status == 1): ?> selected <?php endif; ?>>In Progress</option>
                                <option class="btn btn-success" value="2" <?php if($task->status == 2): ?> selected <?php endif; ?>>Completed</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reminder Modal inside the loop -->
        <div class="modal fade" id="reminderModal<?php echo e($task->id); ?>" tabindex="-1" role="dialog" aria-labelledby="reminderModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color: #add8e6;"> <!-- Light blue background color -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="reminderModalLabel">Task Reminder</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Your task with deadline on <strong><?php echo e($task->deadlinedate); ?></strong> is approaching!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script>
    function showReminderDialog(deadlineDate) {
        var currentDate = new Date();
        var deadline = new Date(deadlineDate);
        // Compare current date with deadline
        if (currentDate >= deadline) {
            // Extracting the task id from the element id
            var taskId = event.target.id.replace('statusSelect', '');
            // Show the reminder modal if the deadline has passed
            $('#reminderModal' + taskId).modal('show');
        } else {
            // Optional: Add custom logic if you want to handle reminders for future deadlines
            console.log("This task's deadline is in the future.");
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/employee/tasks.blade.php ENDPATH**/ ?>