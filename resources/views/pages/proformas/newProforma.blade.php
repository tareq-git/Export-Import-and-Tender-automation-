@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <!-- Basic Example | Horizontal Layout -->

        <!-- #END# Basic Example | Vertical Layout -->
        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">
                    <div class="header">
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
                        <h2>New Proforma</h2>
                    </div>
                    <div class="body">

                        <form action="{{route('proforma.store')}}" method="POST">
                            {{csrf_field()}}

                            <div class="row clearfix body">

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="seller-profile"> Select Seller Profile</label>
                                        <select class="form-control show-tick" name="seller" id="seller-profile" required>
                                            <option value="">Select</option>
                                            @foreach($sellers as $seller)
                                                <option value="{{$seller->id}}">{{$seller->business_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="buyer-profile"> Select Bayer Profile</label>
                                        <select class="form-control show-tick" name="buyer" id="buyer-profile" required>
                                            <option value="">Select</option>
                                            @foreach($buyers as $buyer)
                                                <option value="{{$buyer->id}}">{{$buyer->business_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="invoice-no"> Enter Invoice No</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="invoice_no" id="invoice-no">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="invoice-date"> Select Invoice Date</label>
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="invoice_date" id="invoice-date">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="method-of-dispatch"> Method Of Dispatch</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="method_of_dispatch"  id="method-of-dispatch">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="port-of-loading"> Port Of Loading</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="port_of_loading"  id="port-of-loading">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="port-of-discharge"> Port Of Discharge</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="port_of_discharge"  id="port-of-discharge">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="seller-profile"> Type Of Shipment</label>
                                        <select class="form-control show-tick" name="type_of_shipment" required>
                                            <option value="air">Air</option>
                                            <option value="land">Land</option>
                                            <option value="ship">Ship</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="method-of-payment"> Method of Payment</label>
                                        <select class="form-control show-tick" name="method_of_payment" required>
                                            <option value="">select</option>
                                            @foreach($buyerBanks as $buyerBank)
                                                <option value="{{$buyerBank->id}}">{{$buyerBank->id}}</option>
                                            @endforeach



                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group form-float form-group">
                                        <label for="delivery-date"> Select Delivery Date</label>
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="delivery_date" id="delivery-date">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row clearfix body">

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




                                <div class="row clearfix body">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float form-group">
                                            <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Next">
                                            <a href="{{route('proforma.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                                        </div>
                                    </div>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Form Example With Validation -->
    </div>





@endsection





