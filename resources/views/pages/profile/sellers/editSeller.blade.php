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

            <form action="{{route('seller.update',$seller->id )}}" method="post">
                @csrf
                @method('PATCH')
                <div class="card">

                    <div class="header">
                        <h2 class="text-secondary"> Edit Seller profile</h2>
                    </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Business Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="business_name" value="{{$seller->business_name}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Office Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="office_add" value="{{$seller->office_add}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Business Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="factory_add" value="{{$seller->factory_add}}" required/>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="card-inside-title">Business Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">BIN / VAT NO</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="bin_vat_no" value="{{$seller->bin_vat_no}}" required/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">ERC No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="erc_no" value="{{$seller->erc_no}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">ERC Date</label>
                                <div class="form-line">
                                    <input type="date" class="date form-control" name="ercDate" value="{{$seller->erc_date}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">IRC No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="irc_no" value="{{$seller->irc_no}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">IRC Date Name</label>
                                <div class="form-line">
                                    <input type="date" class="date form-control" name="irc_date" value="{{$seller->irc_date}}" required>
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
                                    <input type="text" class="form-control"  name="company_phone_no" value="{{$seller->phone_no}}" required/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Company Fax No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_fax_no" value="{{$seller->fax_no}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Company Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control"  name="company_email" value="{{$seller->email}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Contact Person</label>
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="contact_person" value="{{$seller->contact_person}}" required/>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update">
                                <a href="{{route('seller.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>

@endsection


