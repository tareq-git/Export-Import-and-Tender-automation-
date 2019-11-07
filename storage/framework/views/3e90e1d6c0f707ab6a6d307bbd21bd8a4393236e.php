<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <!-- Basic Example | Horizontal Layout -->

        <!-- #END# Basic Example | Vertical Layout -->
        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">
                    <div class="header">
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
                        <h2>New Proforma</h2>
                    </div>
                    <div class="body">

                        <form action="<?php echo e(route('proforma.store')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>


                            <div class="row clearfix body">

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="seller-profile"> Select Seller Profile</label>
                                        <select class="form-control show-tick" name="seller" id="seller-profile" required>
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($seller->id); ?>"><?php echo e($seller->business_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="buyer-profile"> Select Bayer Profile</label>
                                        <select class="form-control show-tick" name="buyer" id="buyer-profile" required>
                                            <option value="">Select</option>
                                            <?php $__currentLoopData = $buyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($buyer->id); ?>"><?php echo e($buyer->business_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="invoice-no"> Enter Invoice No</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="invoice_no" id="invoice-no">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="invoice-date"> Select Invoice Date</label>
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="invoice_date" id="invoice-date">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="method-of-dispatch"> Method Of Dispatch</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="method_of_dispatch"  id="method-of-dispatch">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="port-of-loading"> Port Of Loading</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="port_of_loading"  id="port-of-loading">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="port-of-discharge"> Port Of Discharge</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="port_of_discharge"  id="port-of-discharge">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="seller-profile"> Type Of Shipment</label>
                                        <select class="form-control show-tick" name="type_of_shipment" required>
                                            <option value="air">Air</option>
                                            <option value="land">Land</option>
                                            <option value="ship">Ship</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="method-of-payment"> Method of Payment</label>
                                        <select class="form-control show-tick" name="method_of_payment" required>
                                            <option value="">select</option>
                                            <?php $__currentLoopData = $buyerBanks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyerBank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($buyerBank->id); ?>"><?php echo e($buyerBank->id); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="delivery-date"> Select Delivery Date</label>
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="delivery_date" id="delivery-date">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row clearfix body">

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




                                <div class="row clearfix body">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float form-group">
                                            <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Next">
                                            <a href="<?php echo e(route('proforma.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                                        </div>
                                    </div>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Form Example With Validation -->
    </div>





<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/proformas/newProforma.blade.php ENDPATH**/ ?>