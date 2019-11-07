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

            <form action="{{route('shipper.update',$shipper->id )}}" method="post">
                @csrf
                @method('PATCH')
                <div class="card">

                    <div class="header">
                        <h2 class="text-secondary"> Edit Shipper profile</h2>
                    </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Business Name</label>
                                <div class="form-line input-group-prepend">
                                    <input type="text" class="form-control" name="business_name" value="{{$shipper->business_name}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Office Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="office_add" value="{{$shipper->office_add}}" required/>
                                </div>
                            </div>


                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Factory Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="factory_add" value="{{$shipper->factory_add}}" required/>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="card-inside-title">Business Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">BIN / VAT NO </label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="bin_vat_no" value="{{$shipper->bin_vat_no}}" required/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">ERC No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="erc_no" value="{{$shipper->erc_no}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Date</label>
                                <div class="form-line">
                                    <input type="date" class="date form-control" name="ercDate" value="{{$shipper->erc_date}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">IRC No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="irc_no" value="{{$shipper->irc_no}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Date</label>
                                <div class="form-line">
                                    <input type="date" class="date form-control" name="irc_date"  value="{{$shipper->irc_date}}" required/>
                                </div>
                            </div>
                        </div>


                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Company Phone No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_phone_no" value="{{$shipper->phone_no}}" required/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Company Fax No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_fax_no" value="{{$shipper->fax_no}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Company Email</label>
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_email" value="{{$shipper->email}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Contact Person</label>
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_contact_person" value="{{$shipper->contact_person}}" required/>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update">
                                <a href="{{route('shipper.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>

@endsection


