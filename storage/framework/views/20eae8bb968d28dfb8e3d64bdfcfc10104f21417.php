<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> New Catalogue</h2>

                <ul class="header-dropdown m-r--5">
                    
                </ul>

            </div>

            <form action="<?php echo e(route('catalogue.store')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>


                <div class="col-sm-12">
                    <div class="form-group form-float form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="title"  placeholder="Catalogue Title" required/>
                        </div>
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
                            <th data-breakpoints="xs">MOQ</th>
                            <th data-breakpoints="xs">Price</th>
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

                                <td class="col-sm-1">
                                    <input type="text" class="form-control" name="moqs<?php echo e($product->id); ?>"  value="1"/>
                                </td>
                                <td class="col-sm-1">
                                    <input type="text" class="form-control" name="prices<?php echo e($product->id); ?>" value="<?php echo e($product->cost_of_product); ?>"/>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Create">
                                <a href="<?php echo e(route('catalogue.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/catalogues/NewCatalogue.blade.php ENDPATH**/ ?>