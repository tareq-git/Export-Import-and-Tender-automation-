<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Seller Banks</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='<?php echo e(route("sellerBank.create")); ?>'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>
                </ul>
            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th data-breakpoints="xs">Swift COde</th>
                        <th data-breakpoints="xs">Branch</th>


                    </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $sellerBanks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sellerBank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($sellerBank->name); ?></td>
                            <td><?php echo e($sellerBank->swift_code); ?></td>
                            <td><?php echo e($sellerBank->branch_add); ?></td>

                            <td>
                                <a href="<?php echo e(route('sellerBank.edit', $sellerBank->id)); ?>"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                            </td>

                            <td>
                                <form action="<?php echo e(route('sellerBank.destroy', $sellerBank)); ?>" method="post">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/banks/sellerBanks/sellerBank.blade.php ENDPATH**/ ?>