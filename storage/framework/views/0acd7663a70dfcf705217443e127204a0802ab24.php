<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2> Foo Tables</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button class="btn btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>



                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th data-breakpoints="xs">Last Name</th>
                        <th data-breakpoints="xs">Job Title</th>
                        <th data-breakpoints="xs">BOB</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td><span class="tag tag-danger"> Suspended</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td><span class="tag tag-danger"> Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Cox</td>
                            <td>Author</td>
                            <td>San</td>
                            <td>66</td>
                            <td><span class="tag tag-default">Disabled</span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\WeDevs\Tedfo Docs\Tedfo\resources\views/temp.blade.php ENDPATH**/ ?>