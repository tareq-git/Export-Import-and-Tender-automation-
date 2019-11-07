@extends('layouts.master')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <form action="{{route('catalogue.update', $seller->id)}}" method="POST">
                    {{csrf_field()}}
                    @method('PATCH')
                <div class="row">
                    <div class="col-md-12 col-sm-6 text-center">
                        <address>
                            <strong>Company Name: {{$seller->business_name}}</strong><br>
                            Company Address: {{$seller->office_add}}<br>
                            Factory Address: {{$seller->factory_add}}<br>
                            Phone No: {{$seller->phone_no}} &nbsp; &nbsp; Email: {{$seller->email}}
                        </address>
                    </div>
                </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code/SKU</th>
                                        <th>Photo</th>
                                        <th>Description</th>
                                        <th>MOQ</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($ids as $key=>$id)
                                        <tr>
                                            <td>{{$key}}</td>

                                            <td>
                                                <input type="hidden" value="{{$id}}" name="ids[]">
                                                {{\App\Product::find($id)->code_sku}}
                                            </td>

                                            <td>
                                                <img src="{{Storage::url(\App\Product::find($id)->photo)}}" height="50" width="50" alt="Img">
                                            </td>



                                            <td>
                                                {{\App\Product::find($id)->description}}
                                            </td>

                                            <td class="col-sm-1">
                                                <input type="text" class="form-control" name="moqs{{\App\Product::find($id)->id}}"  value="1"  required/>
                                            </td>
                                            <td class="col-sm-1">
                                                <input type="text" class="form-control" name="prices{{\App\Product::find($id)->id}}" value="{{\App\Product::find($id)->cost_of_product}}" required/>

                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Create">
                                <a href="{{route('catalogue.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
