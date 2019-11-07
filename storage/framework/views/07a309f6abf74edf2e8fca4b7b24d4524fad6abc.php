<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Proformas</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='<?php echo e(route("proforma.create")); ?>'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Add New</i> </button></li>
                </ul>

            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice No</th>
                        <th data-breakpoints="xs">Buyer Ref no</th>
                        <th data-breakpoints="xs">Delivery Date</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $Proformas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$Proforma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($key); ?></th>
                            <td><?php echo e($Proforma->invoice_no); ?></td>
                            <td><?php echo e($Proforma->buyer_ref_no); ?></td>
                            <td><?php echo e($Proforma->delivery_date); ?></td>


                            <td>
                                <a href="<?php echo e(route('proforma.edit', $Proforma->id)); ?>"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                            </td>

                            <td>
                                <form action="<?php echo e(route('proforma.destroy', $Proforma)); ?>" method="post">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/proformas/proforma.blade.php ENDPATH**/ ?>