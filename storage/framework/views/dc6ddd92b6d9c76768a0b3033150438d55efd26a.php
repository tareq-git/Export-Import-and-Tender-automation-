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
<body class="theme-green">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">        
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <p>Please Wait</p>
        <div class="m-t-30"><img src="<?php echo e(asset('images/tedfo.png')); ?>" width="48" height="48" alt="Tedfo Docs"></div>
    </div>
</div>
<!-- Overlay For Sidebars -->

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="<?php echo e(asset('images/tedfo.png')); ?>" width="20" height="20"> </a>
            <a class="navbar-brand" href="/">T Docs</a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?php echo e(asset('assetss/images/xs/avatar1.jpg')); ?>" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name"><?php echo e(Auth::user()->name); ?></div>
            <div class="email"><?php echo e(Auth::user()->email); ?></div>
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li> <a href="/"><i class="zmdi zmdi-home">
                </i><span>Dashboard</span></a>
            </li>

            <li> <a href="#" class="menu-toggle"><i class="zmdi zmdi-accounts"></i><span>Profiles</span></a>
                <ul class="ml-menu">
                    <li><a href="<?php echo e(route('buyer.index')); ?>">Buyer</a> </li>
                    <li><a href="<?php echo e(route('seller.index')); ?>">Seller</a> </li>
                    <li><a href="<?php echo e(route('shipper.index')); ?>">Shipper</a> </li>
                </ul>
            </li>


            <li><a href="#" class="menu-toggle"><i class="zmdi zmdi-money-box"></i><span>Banks</span></a>
                <ul class="ml-menu">
                    <li><a href="<?php echo e(route('buyerBank.index')); ?>">Buyer Bank</a> </li>
                    <li><a href="<?php echo e(route('sellerBank.index')); ?>">Seller Bank</a> </li>
                </ul>
            </li>


            <li> <a href="<?php echo e(route('cnf.index')); ?>"><i class="zmdi zmdi-boat"></i><span>CNF</span> </a> </li>
            <li><a href="<?php echo e(route('product.index')); ?>"><i class="zmdi zmdi-codepen"></i><span>Product</span> </a></li>
            <li><a href="<?php echo e(route('catalogue.index')); ?>"><i class="zmdi zmdi-library"></i><span>Catalogue</span> </a></li>

            <li><a href="#" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Documents</span></a>
                <ul class="ml-menu">

                    <a href="#" class="menu-toggle"><i class="zmdi zmdi-file"></i><span>Sales Documents</span></a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo e(route('proforma.index')); ?>">Proforma Invoice</a> </li>
                        <li><a href="<?php echo e(route('quotation.index')); ?>"> Quotation</a> </li>
                        <li><a href="<?php echo e(route('purchaseOrder.index')); ?>"> Purchase Order</a> </li>
                        <li><a href="<?php echo e(route('orderConfirmation.index')); ?>"> Order Confirmation</a> </li>
                    </ul>

                    <a href="#" class="menu-toggle"><i class="zmdi zmdi-file"></i><span>Shipping Documents</span></a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo e(route('commercialInvoice.index')); ?>">Commercial Invoice</a></li>
                        <li><a href="#"> Packing List</a> </li>
                        <li><a href="<?php echo e(route('certificate.index')); ?>"> Certificate of Origin</a></li>
                        <li><a href="#"> Packing List for Customer</a> </li>
                        <li><a href="#"> Packing List for Buyer</a> </li>
                    </ul>

                </ul>
            </li>

            <li><a href="#"><i class="zmdi zmdi-receipt"></i><span>Report</span> </a></li>
            <li><a href="<?php echo e(route('logout')); ?>"><i class="zmdi zmdi-sign-in text-danger"></i><span class="text-danger">LogOut</span> </a></li>
        </ul>
            
    </div>
    <!-- #Menu --> 
</aside>    
<!-- Right Sidebar -->





<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <small class="text-muted"> Welcome to T Docs</small>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i></a></li>

                    <?php for($i = 1; $i <= count(Request::segments()); $i++): ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))); ?>">
                                 <?php echo e(strtoupper(Request::segment($i))); ?>

                            </a>
                        </li>
                    <?php endfor; ?>

                </ul>
            </div>
        </div>
    </div>


    <div class="container-fluid">
         <?php echo $__env->yieldContent('content'); ?>
    </div>
</section>
<!-- Jquery Core Js --> 

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
 <?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/layouts/master.blade.php ENDPATH**/ ?>