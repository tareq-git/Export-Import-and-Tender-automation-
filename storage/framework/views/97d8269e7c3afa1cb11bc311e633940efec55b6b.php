<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All CNF Profiles</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='<?php echo e(route("cnf.create")); ?>'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-plus"> Create</i> </button></li>
                </ul>
            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th data-breakpoints="xs">Address</th>
                        <th data-breakpoints="xs">Phone No</th>
                        <th data-breakpoints="xs">email</th>
                        <th data-breakpoints="xs">Registration No</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $cnfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cnf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($cnf->name); ?></td>
                            <td><?php echo e($cnf->address); ?></td>
                            <td><?php echo e($cnf->phone); ?></td>
                            <td><?php echo e($cnf->email); ?></td>
                            <td><?php echo e($cnf->reg_no); ?></td>

                            <td>
                                <a href="<?php echo e(route('cnf.edit', $cnf->id)); ?>"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('cnf.destroy', $cnf)); ?>" method="post">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/cnfs/cnf.blade.php ENDPATH**/ ?>