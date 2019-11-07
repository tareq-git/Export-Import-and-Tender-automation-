<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <form action="<?php echo e(route('catalogue.update', $seller->id)); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <?php echo method_field('PATCH'); ?>
                <div class="row">
                    <div class="col-md-12 col-sm-6 text-center">
                        <address>
                            <strong>Company Name: <?php echo e($seller->business_name); ?></strong><br>
                            Company Address: <?php echo e($seller->office_add); ?><br>
                            Factory Address: <?php echo e($seller->factory_add); ?><br>
                            Phone No: <?php echo e($seller->phone_no); ?> &nbsp; &nbsp; Email: <?php echo e($seller->email); ?>

                        </address>
                    </div>
                </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code/SKU</th>
                                        <th>Photo</th>
                                        <th>Description</th>
                                        <th>MOQ</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key); ?></td>

                                            <td>
                                                <input type="hidden" value="<?php echo e($id); ?>" name="ids[]">
                                                <?php echo e(\App\Product::find($id)->code_sku); ?>

                                            </td>

                                            <td>
                                                <img src="<?php echo e(Storage::url(\App\Product::find($id)->photo)); ?>" height="50" width="50" alt="Img">
                                            </td>



                                            <td>
                                                <?php echo e(\App\Product::find($id)->description); ?>

                                            </td>

                                            <td class="col-sm-1">
                                                <input type="text" class="form-control" name="moqs<?php echo e(\App\Product::find($id)->id); ?>"  value="1"  required/>
                                            </td>
                                            <td class="col-sm-1">
                                                <input type="text" class="form-control" name="prices<?php echo e(\App\Product::find($id)->id); ?>" value="<?php echo e(\App\Product::find($id)->cost_of_product); ?>" required/>

                                            </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Create">
                                <a href="<?php echo e(route('catalogue.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/catalogues/editCatalogue.blade.php ENDPATH**/ ?>