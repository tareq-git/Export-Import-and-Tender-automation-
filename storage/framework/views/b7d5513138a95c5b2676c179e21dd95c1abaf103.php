<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <!-- Basic Example | Horizontal Layout -->

        <!-- #END# Basic Example | Vertical Layout -->
        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">

                    <?php if(count($errors) > 0): ?>

                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert bg-red alert-dismissible" role="alertdialog">
                                    <li>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <?php echo e($error); ?>

                                    </li>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>

                    <div class="header">

                        <h2>New Catalogue</h2>
                    </div>


                        <form action="<?php echo e(route('catalogue.store')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>


                            <div class="row clearfix body">

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="seller-profile"> Select Seller Profile</label>
                                        <select class="form-control show-tick" name="seller" required>
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($seller->id); ?>"><?php echo e($seller->business_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="body table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <td></td>
                                            <th data-breakpoints="xs">Photo</th>
                                            <th>Name</th>
                                            <th data-breakpoints="xs">code/SKU</th>
                                            <th data-breakpoints="xs">HS Code</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <input type="checkbox"  id="<?php echo e($product->id); ?>" value="<?php echo e($product->id); ?>"  class="chk-col-green" name="ids[]"/>
                                                    <label for="<?php echo e($product->id); ?>"></label>
                                                </td>

                                                <td>
                                                    <img src="<?php echo e(Storage::url($product->photo)); ?>" height="50" width="50" alt="">
                                                </td>

                                                <td><?php echo e($product->name); ?></td>
                                                <td><?php echo e($product->code_sku); ?></td>
                                                <td><?php echo e($product->hs_code); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                </div>


                            </div>

                            <div class="body ">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float form-group">
                                            <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Next">
                                            <a href="<?php echo e(route('catalogue.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Form Example With Validation -->
    </div>


<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/catalogues/newCatalogue.blade.php ENDPATH**/ ?>