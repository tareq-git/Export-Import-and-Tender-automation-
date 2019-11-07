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

        <form action="<?php echo e(route('product.store')); ?>" method="post" >
            <?php echo csrf_field(); ?>

        <div class="card">
            <div class="header">

                <div class="body">

                    <small>Create New Proforma</small>

                    <div class="row clearfix">

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Buyer Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="buyer_name" />
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-2">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Invoice No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="invoice_no"/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-2">

                            <div class="form-group form-float form-group">
                                <label class="text-dark">Invoice Date</label>
                                <div class="form-line">
                                    <input type="date" class="form-control" name="invoice_date"/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-2">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Buyer Reference No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="buyer_ref_no"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Delivery Date</label>
                                <div class="form-line">
                                    <input type="date" class="form-control" name="delivery_date"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Seller Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="Seller_name"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Method of shipping</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="method_of_shipping"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Port Of Loading</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="port_of_loading"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Port Of Discharge</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="port_of_discharge"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Terms Or Conditions</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="terms"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group form-float form-group">
                                <label class="text-dark">Other Conditions</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="other_condition"/>
                                </div>
                            </div>
                        </div>




                    </div>


                    <h2 class="card-inside-title">Product Details</h2>

                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <select class="form-control select" >
                                <option value='elem_1'>elem 1</option>
                                <option value='elem_2'>elem 2</option>
                                <option value='elem_3'>elem 3</option>
                                <option value='elem_4'>elem 4</option>
                                <option value='elem_100'>elem 100</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <fieldset>
                            <table>
                                <tbody id="customTable">

                                </tbody>
                            </table>


                        </fieldset>
                    </div>

                </div>

            </div>
        </div>

        </form>
    </div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/proformas/newProforma.blade.php ENDPATH**/ ?>