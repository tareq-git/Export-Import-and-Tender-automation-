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

            <form action="<?php echo e(route('cnf.update',$cnf->id )); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <div class="card">

                    <div class="header">
                        <h2 class="text-secondary"> Edit CNF profile</h2>
                    </div>

                <div class="body">


                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">

                            <div class="form-group form-float form-group">
                                <label class="text-primary">Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="<?php echo e($cnf->name); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="address" value="<?php echo e($cnf->address); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Contact Person</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact_person" value="<?php echo e($cnf->contact_person); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" value="<?php echo e($cnf->email); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Phone Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone" value="<?php echo e($cnf->phone); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Mobile Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="mobile" value="<?php echo e($cnf->mobile); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Working Port</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="working_port" value="<?php echo e($cnf->working_port); ?>" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Registration Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="reg_no" value="<?php echo e($cnf->reg_no); ?>" required/>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update">
                                <a href="<?php echo e(route('cnf.index')); ?>"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/pages/cnfs/editCnf.blade.php ENDPATH**/ ?>