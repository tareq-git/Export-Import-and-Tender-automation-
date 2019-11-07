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


        <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card">

                <div class="header">
                    <h2 class="text-secondary"> Add new Product</h2>
                </div>


                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">


                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" placeholder="Product Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="code_sku" placeholder="Code / SKU"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="description" placeholder="Product Description" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hs_code" placeholder="HS Code" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hs_code_bd" placeholder="HS Code Bd" />
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
                                        <div class="imagePreview"></div>
                                        <label class="btn btn-primary">
                                            Upload <input type="file" class="uploadFile img" name="image" style="width: 0px;height: 0px;overflow: hidden;" required>
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
                                <div class="form-line">
                                    <input type="text" class="form-control" name="unit" placeholder="Unit"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="net_weight" placeholder="New Weight"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="gross_weight" placeholder="Gross Weight" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cbm" placeholder="CBM Per Unit" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Price Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cost_of product" placeholder="Cost Of Product Per Unit"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cost_of_packing" placeholder="Cost Of Packing Per Unit"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cash_incentive" placeholder="Cash Incentive / Duty Draw Back" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Create" onchange="upImg()">
                                <a href="<?php echo e(route('product.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/products/newProduct.blade.php ENDPATH**/ ?>