<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">

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

        <form action="<?php echo e(route('product.update', $product->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>

            <div class="card">

                <div class="header">
                    <h2 class="text-secondary"> Edit Product</h2>
                </div>


                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">



                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Product Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="<?php echo e($product->name); ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Code / SKU</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="code_sku" value="<?php echo e($product->code_sku); ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Product Description</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="description" value="<?php echo e($product->description); ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">HS Code</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hs_code" value="<?php echo e($product->hs_code); ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">HS Code Bd</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hs_code_bd" value="<?php echo e($product->hs_code_bd); ?>" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Product Photo</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="row">
                                    <div class="col-sm-2 imgUp">
                                        <div class="imagePreview">
                                            <img id="default" src="<?php echo e(Storage::url($product->photo)); ?>" height="100%" width="100%" style="background-color: white">
                                        </div>
                                        <label class="btn btn-primary">
                                            Upload <input type="file" class="uploadFile img" name="image"  style="width: 0px;height: 0px;overflow: hidden;" required>
                                        </label>
                                    </div>
                                </div>  <!-- row -->

                            </div>
                        </div>


                    </div>


                    <h2 class="card-inside-title">Weight Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Unit</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="unit" value="<?php echo e($product->unit); ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">New Weight</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="net_weight" value="<?php echo e($product-> net_weight); ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Gross Weight</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="gross_weight" value="<?php echo e($product->gross_weight); ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">CBM Per Unit</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cbm" value="<?php echo e($product->cbm); ?>" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Price Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Cost Of Product Per Unit</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cost_of_product" value="<?php echo e($product->cost_of_product); ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Cost Of Packing Per Unit</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cost_of_packing" value="<?php echo e($product->cost_of_packing); ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Cash Incentive / Duty Draw Back</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cash_incentive" value="<?php echo e($product->cash_incentive); ?>" />
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update" onchange="upImg()">
                                <a href="<?php echo e(route('product.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/products/editProduct.blade.php ENDPATH**/ ?>