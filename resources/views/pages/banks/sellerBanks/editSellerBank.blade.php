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

            <form action="{{route('sellerBank.update',$sellerBanks->id )}}" method="post">
                @csrf
                @method('PATCH')

                <div class="card">

                    <div class="header">
                        <h2 class="text-secondary"> Edit Seller Bank</h2>
                    </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Bank Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="{{$sellerBanks->name}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Bank Branch</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="branch"  value="{{$sellerBanks->branch}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Account Name</label>

                                <div class="form-line">
                                    <input type="text" class="form-control" name="acc_name" value="{{$sellerBanks->acc_name}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Account Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="acc_num" value="{{$sellerBanks->acc_num}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Swift Code</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="swift_code" value="{{$sellerBanks->swift_code}}" required/>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h2 class="card-inside-title">Other Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Branch Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="branch_add" value="{{$sellerBanks->branch_add}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">BIN Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="bin_no"  value="{{$sellerBanks->bin_num}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Currency</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="currency" value="{{$sellerBanks->currency}}" required/>
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Email Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="{{$sellerBanks->email}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Phone Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone_no" value="{{$sellerBanks->phone_no}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">RM Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="rm_name" value="{{$sellerBanks->rm_name}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">RM Mobile Number</label>

                                <div class="form-line">
                                    <input type="text" class="form-control" name="rm_mobile_num" value="{{$sellerBanks->rm_mobile_num}}" required/>
                                </div>
                            </div>
                        </div>

                    </div>





                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Uddate">
                                <a href="{{route('sellerBank.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>

@endsection

