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

            <form action="<?php echo e(route('sellerBank.update',$sellerBanks->id )); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>

                <div class="card">

                    <div class="header">
                        <h2 class="text-secondary"> Edit Seller Bank</h2>
                    </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Bank Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="<?php echo e($sellerBanks->name); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Bank Branch</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="branch"  value="<?php echo e($sellerBanks->branch); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Account Name</label>

                                <div class="form-line">
                                    <input type="text" class="form-control" name="acc_name" value="<?php echo e($sellerBanks->acc_name); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Account Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="acc_num" value="<?php echo e($sellerBanks->acc_num); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Swift Code</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="swift_code" value="<?php echo e($sellerBanks->swift_code); ?>" required/>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h2 class="card-inside-title">Other Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Branch Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="branch_add" value="<?php echo e($sellerBanks->branch_add); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">BIN Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="bin_no"  value="<?php echo e($sellerBanks->bin_num); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Currency</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="currency" value="<?php echo e($sellerBanks->currency); ?>" required/>
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Email Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="<?php echo e($sellerBanks->email); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Phone Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone_no" value="<?php echo e($sellerBanks->phone_no); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">RM Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="rm_name" value="<?php echo e($sellerBanks->rm_name); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">RM Mobile Number</label>

                                <div class="form-line">
                                    <input type="text" class="form-control" name="rm_mobile_num" value="<?php echo e($sellerBanks->rm_mobile_num); ?>" required/>
                                </div>
                            </div>
                        </div>

                    </div>





                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Uddate">
                                <a href="<?php echo e(route('sellerBank.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/banks/sellerBanks/editSellerBank.blade.php ENDPATH**/ ?>