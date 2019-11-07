@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">

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

        <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="card">

                <div class="header">
                    <h2 class="text-secondary"> Edit Product</h2>
                </div>


                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">



                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Product Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="{{$product->name }}"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Code / SKU</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="code_sku" value="{{$product->code_sku}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Product Description</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="description" value="{{$product->description}}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">HS Code</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hs_code" value="{{$product->hs_code }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">HS Code Bd</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hs_code_bd" value="{{$product->hs_code_bd}}" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Product Photo</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="row">
                                    <div class="col-sm-2 imgUp">
                                        <div class="imagePreview">
                                            <img id="default" src="{{(url('storage/'.$product->photo))}}" height="100%" width="100%" style="background-color: white">
                                        </div>
                                        <label class="btn btn-primary">
                                            Upload <input type="file" class="uploadFile img" name="image"  style="width: 0px;height: 0px;overflow: hidden;" required>
                                        </label>
                                    </div>
                                </div>  <!-- row -->

                            </div>
                        </div>


                    </div>


                    <h2 class="card-inside-title">Weight Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Unit</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="unit" value="{{$product->unit }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">New Weight</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="net_weight" value="{{$product-> net_weight}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Gross Weight</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="gross_weight" value="{{$product->gross_weight }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">CBM Per Unit</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cbm" value="{{$product->cbm }}" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Price Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Cost Of Product Per Unit</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cost_of_product" value="{{$product->cost_of_product}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Cost Of Packing Per Unit</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cost_of_packing" value="{{$product->cost_of_packing }}"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Cash Incentive / Duty Draw Back</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cash_incentive" value="{{$product->cash_incentive }}" />
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update" onchange="upImg()">
                                <a href="{{route('product.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>

@endsection



