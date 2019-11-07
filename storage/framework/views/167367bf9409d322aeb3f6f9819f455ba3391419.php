<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Certificates</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>
                </ul>

            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Consignee name</th>
                        <th data-breakpoints="xs">Invoice No</th>
                        <th data-breakpoints="xs">Ref No</th>
                        <th data-breakpoints="xs">Buyer Ref No</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php for($i= 1; $i< 10 ; $i++): ?>
                        <tr>
                            <td> <?php echo e($i); ?></td>
                            <td> Consignee <?php echo e($i); ?> </td>
                            <td> <?php echo e($i); ?>635 </td>
                            <td> 1<?php echo e($i); ?>435 </td>
                            <td> 1<?php echo e($i); ?>536 </td>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/certificates/certificate.blade.php ENDPATH**/ ?>