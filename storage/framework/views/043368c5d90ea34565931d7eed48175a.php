

<?php $__env->startSection('base'); ?>
<main class="col px-0 py-0">
    <div class="container">
        <!-- Search Form -->
        <div class="row mt-3">
            <div class="col-md-6">
                <form  method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by Client Name or YY-MM-DD" value="<?php echo e(request()->query('search')); ?>">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Payment Details Table -->
        <div class="card shadow mt-3">
            <div class="card-header bg-dark text-white">
                <h5 class="card-title mb-0 text-center">Payments</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th>Client Name</th>
                                <th>Amount Paid</th>
                                <th>Date  Time</th>
                                <th>Payment Method</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($payment->client_name); ?></td>
                                    <td><?php echo e($payment->amount_paid); ?></td>
                                    <td><?php echo e($payment->payment_date); ?></td>
                                    <td><?php echo e($payment->payment_method); ?></td>
                                    
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <!-- Client Balance Table -->
        <div class="card shadow mt-3">
            <div class="card-header bg-dark text-white">
                <h5 class="card-title mb-0 text-center">Client Balances</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Client Name</th>
                                <th>Total Amount</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>     
                                <td><?php echo e($client->client_name); ?></td>                              
                                    <td><?php echo e($client->total_amount); ?></td>
                                    <td><?php echo e($client->balance); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_project\projectmain\resources\views/admin/client_payments.blade.php ENDPATH**/ ?>