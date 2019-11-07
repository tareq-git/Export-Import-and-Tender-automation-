<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Buyers</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='<?php echo e(route("buyer.create")); ?>'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>
                </ul>
            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th data-breakpoints="xs">Office</th>
                        <th data-breakpoints="xs">Phone No</th>
                        <th data-breakpoints="xs">email</th>

                    </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $buyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($buyer->business_name); ?></td>
                                <td><?php echo e($buyer->office_add); ?></td>
                                <td><?php echo e($buyer->phone_no); ?></td>
                                <td><?php echo e($buyer->email); ?></td>

                                <td>
                                    <a href="<?php echo e(route('buyer.edit', $buyer->id)); ?>"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('buyer.destroy', $buyer)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn-sm  btn-raised btn-danger waves-effect">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/profile/buyers/buyer.blade.php ENDPATH**/ ?>