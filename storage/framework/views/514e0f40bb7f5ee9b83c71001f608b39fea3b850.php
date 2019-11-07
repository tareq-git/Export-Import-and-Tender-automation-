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

        <form action="<?php echo e(route('buyer.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card">

                <div class="header">
                    <h2 class="text-secondary"> Create new Buyer profile</h2>
                </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="business_name" required >
                                    <label class="form-label">Username</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="office_add" required />
                                    <label class="form-label">Office Address</label>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="factory_add" required />
                                    <label class="form-label">Factory Address</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone_no" required />
                                    <label class="form-label">Phone No</label>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fax_no" placeholder="Fax Number" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact_person" placeholder="Contact Person" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    

                    
                        
                    

                    
                        
                            
                                
                                    
                                
                            
                           
                        
                    


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Create">
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

    function addMore(where) {
        var main = document.getElementById("other-info");
        var cntr = (main.datacntr || 0) + 1;
        main.datacntr = cntr;

        var clone = main.cloneNode(true);
        clone.id = "section" + cntr;
        where.parentNode.insertBefore(clone, where);
    }


</script>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/profile/buyers/newBuyer.blade.php ENDPATH**/ ?>