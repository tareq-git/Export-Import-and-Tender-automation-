<?php $__env->startSection('content'); ?>


<div class="row clearfix">
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h1><?php echo e(Auth::user()->Seller()->count()); ?> <i class="zmdi zmdi-account">  </i></h1>
                            <p class="text-muted"> Seller Profiles</p>
                            <div class="progress">
                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((Auth::user()->Seller()->count())); ?>%;"></div>
                            </div>
                            <span class="text-small"><?php echo e((Auth::user()->Seller()->count())); ?>% more than last month</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h1><?php echo e(Auth::user()->Buyer()->count()); ?> <i class="zmdi zmdi-accounts">  </i></h1>
                            <p class="text-muted">Buyer Profiles</p>
                            <div class="progress">
                                <div class="progress-bar l-blush" role="progressbar" aria-valuenow="<?php echo e(Auth::user()->Buyer()->count()); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e((Auth::user()->Buyer()->count())); ?>%;"></div>
                            </div>
                            <span class="text-small"><?php echo e((Auth::user()->Buyer()->count())); ?>% more than last month</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h1><?php echo e(Auth::user()->Product()->count()); ?> <i class="zmdi zmdi-plus-box"> </i> </h1>
                            <p class="text-muted">Products</p>
                            <div class="progress">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="<?php echo e((Auth::user()->Product()->count())); ?>" aria-valuemin="0" aria-valuemax="<?php echo e((Auth::user()->Product()->count())); ?>" style="width: <?php echo e((Auth::user()->Product()->count())); ?>%;"></div>
                            </div>
                            <span class="text-small"><?php echo e((Auth::user()->Product()->count())); ?>% more than last month</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h1>0 <i class="zmdi zmdi-thumb-up"> </i></h1>
                            <p class="text-muted">Order confirmed</p>
                            <div class="progress">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>
                            <span class="text-small">0% higher than last month</span> </div>
                    </div>
                </div>
            </div>

            
                
                    
                        
                            
                        
                        
                            
                                
                                
                                    
                                    
                                    
                                    
                                    
                                
                                
                                


                                

                                    
                                        
                                    
                                    
                                    
                                    
                                        
                                        
                                        
                                        
                                        
                                    
                                    
                                        
                                            
                                        
                                    
                                

                                

                                    
                                        
                                    
                                    
                                    
                                    
                                        
                                        
                                        
                                        
                                        
                                    
                                    
                                        
                                            
                                        
                                    
                                


                                

                                    
                                        
                                    
                                    
                                    
                                    
                                        
                                        
                                        
                                        
                                        
                                    
                                    
                                        
                                            
                                        
                                    
                                

                                

                                    
                                        
                                    
                                    
                                    
                                    
                                        
                                        
                                        
                                        
                                        
                                    
                                    
                                        
                                            
                                        
                                    
                                



                                

                                    
                                        
                                    
                                    
                                    
                                    
                                        
                                        
                                        
                                        
                                        
                                    
                                    
                                        
                                            
                                        
                                    
                                




                                
                            
                        
                    
                
            

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tdocs\resources\views/home.blade.php ENDPATH**/ ?>