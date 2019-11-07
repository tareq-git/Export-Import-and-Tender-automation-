<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Order Confirmations</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>
                </ul>

            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Buyer Name</th>
                        <th data-breakpoints="xs">Seller Name</th>
                        <th data-breakpoints="xs">Purchase No</th>
                        <th data-breakpoints="xs">Purchase Date</th>
                        <th data-breakpoints="xs">Delivery  Date</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php for($i= 1; $i< 10 ; $i++): ?>
                        <tr>
                            <td> <?php echo e($i); ?></td>
                            <td> buyer <?php echo e($i); ?> </td>
                            <td> Seller <?php echo e($i); ?> </td>
                            <td> <?php echo e($i); ?>635 </td>
                            <td> 1<?php echo e($i); ?>/3/2019 </td>
                            <td> 1<?php echo e($i); ?>/5/2019 </td>
                            <td>
                                <a href="#"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                            </td>

                            <td>
                                <form action="#" method="#">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn-sm  btn-raised btn-danger waves-effect">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endfor; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/orderConfirmations/orderConfirmation.blade.php ENDPATH**/ ?>