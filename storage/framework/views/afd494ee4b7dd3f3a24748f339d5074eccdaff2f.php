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

            <form action="<?php echo e(route('buyer.update',$buyer->id )); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <div class="card">

                    <div class="header">
                        <h2 class="text-secondary"> Edit Buyer profile</h2>
                    </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Business Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="business_name" value="<?php echo e($buyer->business_name); ?>" required />

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Office Address</label>
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" name="office_add"><?php echo e($buyer->office_add); ?></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Factory Address</label>
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" name="factory_add"  required > <?php echo e($buyer->factory_add); ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Phone No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone_no" value="<?php echo e($buyer->phone_no); ?>" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Fax Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fax_no" value="<?php echo e($buyer->fax_no); ?>" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" value="<?php echo e($buyer->email); ?>" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Contact Person</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact_person" value="<?php echo e($buyer->contact_person); ?>" required />
                                </div>
                            </div>
                        </div>

                    </div>

                    <h2 class="card-inside-title">Additional Information</h2>

                    <div class="switch">
                        <label>OFF<input type="checkbox" onchange="myFunction()"><span class="lever"></span>ON</label>
                    </div>

                    <div class="row clearfix" id="info" style="display:none">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Other Information</label>
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" name="add_info" value="Other Information" ></textarea>
                                </div>
                            </div>
                            <a href="#"> <i class="zmdi zmdi-plus"> Add More</i></a>
                        </div>
                    </div>


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update">
                                <a href="<?php echo e(route('buyer.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>


<script>

    function myFunction() {
        var x = document.getElementById("info");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

</script>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/profile/buyers/editBuyer.blade.php ENDPATH**/ ?>