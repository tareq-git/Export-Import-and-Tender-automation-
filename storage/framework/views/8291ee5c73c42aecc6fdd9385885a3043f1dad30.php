<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Catalogues</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='<?php echo e(route("catalogue.create")); ?>'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-plus"> Create</i> </button></li>
                </ul>

            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th data-breakpoints="xs">Email</th>
                        <th data-breakpoints="xs">Phone</th>
                        <th data-breakpoints="xs">Factory Address</th>

                    </tr>
                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $catagogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$catagogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($catagogue->name); ?></td>
                            <td><?php echo e($catagogue->email); ?></td>
                            <td><?php echo e($catagogue->phone); ?></td>
                            <td><?php echo e($catagogue->factory_address); ?></td>

                            <td>
                                <a href="<?php echo e(route('catalogue.show', $catagogue->id)); ?>"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">View</button></a>
                            </td>

                            <td>
                                <form action="<?php echo e(route('catalogue.destroy', $catagogue)); ?>" method="post">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/catalogues/catalogue.blade.php ENDPATH**/ ?>