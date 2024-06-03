
<?php $__env->startSection('base'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1>Task Schedule Report</h1>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <canvas id="taskScheduleChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    var ctx = document.getElementById('taskScheduleChart').getContext('2d');
    var taskScheduleChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php $__currentLoopData = $taskSchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taskSchedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    '<?php echo e($taskSchedule->taskname); ?> - <?php echo e($taskSchedule->employee_name); ?>', // Task name with employee name
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            datasets: [{
                label: 'Status',
                data: [
                    <?php $__currentLoopData = $taskSchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taskSchedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        '<?php echo e($taskSchedule->status_percentage); ?>', // Status percentages
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Status (%)'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Task Name - Employee Name'
                    }
                }
            }
        }
    });
</script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/admin/report.blade.php ENDPATH**/ ?>