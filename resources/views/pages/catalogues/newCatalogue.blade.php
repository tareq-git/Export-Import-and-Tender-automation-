@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <!-- Basic Example | Horizontal Layout -->

        <!-- #END# Basic Example | Vertical Layout -->
        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">

                    @if (count($errors) > 0)

                        <ul>
                            @foreach ($errors->all() as $error)
                                <div class="alert bg-red alert-dismissible" role="alertdialog">
                                    <li>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        {{ $error }}
                                    </li>
                                </div>
                            @endforeach
                        </ul>
                    @endif

                    <div class="header">

                        <h2>New Catalogue</h2>
                    </div>


                        <form action="{{route('catalogue.store')}}" method="POST">
                            {{csrf_field()}}

                            <div class="row clearfix body">

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="seller-profile"> Select Seller Profile</label>
                                        <select class="form-control show-tick" name="seller" required>
                                            <option value="">Select</option>
                                            @foreach($sellers as $seller)
                                                <option value="{{$seller->id}}">{{$seller->business_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

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

                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"  id="{{$product->id}}" value="{{$product->id}}"  class="chk-col-green" name="ids[]"/>
                                                    <label for="{{$product->id}}"></label>
                                                </td>

                                                <td>
                                                    <img src="{{Storage::url($product->photo)}}" height="50" width="50" alt="">
                                                </td>

                                                <td>{{$product->name}}</td>
                                                <td>{{$product->code_sku}}</td>
                                                <td>{{$product->hs_code}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>


                            </div>

                            <div class="body ">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float form-group">
                                            <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Next">
                                            <a href="{{route('catalogue.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Form Example With Validation -->
    </div>


@endsection






