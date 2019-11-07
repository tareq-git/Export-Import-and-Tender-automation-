<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicon-->



    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link href="<?php echo e(asset('assetss/plugins/animate-css/animate.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('assetss/plugins/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetss/plugins/jvectormap/jquery-jvectormap-2.0.3.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assetss/plugins/morrisjs/morris.css')); ?>" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assetss/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetss/css/color_skins.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/productPage.css')); ?>">



</head>
<body onload="print()" class="theme-green">


<div class="container">
    <div class="card">
        <div class="body">
            <div class="row">
                <div class="col-md-12 col-sm-6 text-center">
                    <address>
                        <strong>Company Name: <?php echo e($catalogue->name); ?></strong><br>
                        Company Address: <?php echo e($catalogue->company_address); ?><br>
                        Factory Address: <?php echo e($catalogue->factory_address); ?><br>
                        Phone No: <?php echo e($catalogue->phone); ?> &nbsp; &nbsp; Email: <?php echo e($catalogue->email); ?>

                    </address>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                            <thead>
                            <tr><th>#</th>
                                <th>Code</th>
                                <th>Photo</th>
                                <th>Description</th>
                                <th>MOQ</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $catalogueItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$catalogueItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>

                                    <td><?php echo e($catalogueItem->code_sku); ?></td>

                                    <td>
                                        <img src="<?php echo e(url('storage/'.$catalogueItem->photo)); ?>" height="50" width="50">

                                    </td>


                                    <td><?php echo e($catalogueItem->description); ?></td>
                                    <td><?php echo e($catalogueItem->moq); ?></td>
                                    <td><?php echo e($catalogueItem->price); ?></td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>

        </div>

    </div>

</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->


<script src="<?php echo e(asset('assetss/bundles/libscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo e(asset('assetss/bundles/vendorscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->

<script src="<?php echo e(asset('assetss/bundles/jvectormap.bundle.js')); ?>"></script> <!-- JVectorMap Plugin Js -->
<script src="<?php echo e(asset('assetss/bundles/morrisscripts.bundle.js')); ?>a"></script><!-- Morris Plugin Js -->
<script src="<?php echo e(asset('assetss/bundles/sparkline.bundle.js')); ?>"></script> <!-- Sparkline Plugin Js -->
<script src="<?php echo e(asset('assetss/bundles/knob.bundle.js')); ?>"></script> <!-- Jquery Knob Plugin Js -->

<script src="<?php echo e(asset('assetss/js/pages/index.js')); ?>"></script>
<script src="<?php echo e(asset('assetss/js/pages/charts/jquery-knob.min.js')); ?>"></script>



<script src="<?php echo e(asset('assetss/plugins/jquery-validation/jquery.validate.js')); ?>"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo e(asset('assetss/plugins/jquery-steps/jquery.steps.js')); ?>"></script> <!-- JQuery Steps Plugin Js -->

<script src="<?php echo e(asset('assetss/bundles/mainscripts.bundle.js')); ?>"></script><!-- Custom Js -->
<script src="<?php echo e(asset('assetss/js/pages/forms/form-wizard.js')); ?>"></script>


<script src="<?php echo e(asset('js/productPage.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/pages/catalogues/print.blade.php ENDPATH**/ ?>