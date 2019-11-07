<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-md-12 col-sm-6 text-center">
                        <address>
                            <strong>Company Name: <?php echo e($catalogue->name); ?></strong><br>
                            Company Address: <?php echo e($catalogue->company_address); ?><br>
                            Factory Address: <?php echo e($catalogue->factory_address); ?><br>
                            Phone No: <?php echo e($catalogue->phone); ?> &nbsp; &nbsp; Email: <?php echo e($catalogue->email); ?>

                        </address>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                <thead>
                                    <tr><th>#</th>
                                        <th>Code</th>
                                        <th>Photo</th>
                                        <th>Description</th>
                                        <th>MOQ</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $catalogueItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$catalogueItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>

                                        <td><?php echo e($catalogueItem->code_sku); ?></td>

                                        <td>
                                            <img src="<?php echo e(url('storage/'.$catalogueItem->photo)); ?>" height="50" width="50">

                                        </td>


                                        <td><?php echo e($catalogueItem->description); ?></td>
                                        <td><?php echo e($catalogueItem->moq); ?></td>
                                        <td><?php echo e($catalogueItem->price); ?></td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class=" col-md-1 text-right">
                        <a href="<?php echo e(route('catalogue.print', $catalogue->id)); ?>" target="_blank" class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                    </div>
                    
                        
                    
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/catalogues/viewCatalogue.blade.php ENDPATH**/ ?>