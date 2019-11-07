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

            <form action="{{route('cnf.update',$cnf->id )}}" method="post">
                @csrf
                @method('PATCH')
                <div class="card">

                    <div class="header">
                        <h2 class="text-secondary"> Edit CNF profile</h2>
                    </div>

                <div class="body">


                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">

                            <div class="form-group form-float form-group">
                                <label class="text-primary">Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="{{$cnf->name}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="address" value="{{$cnf->address}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Contact Person</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact_person" value="{{$cnf->contact_person}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" value="{{$cnf->email}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Phone Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone" value="{{$cnf->phone}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Mobile Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="mobile" value="{{$cnf->mobile}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Working Port</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="working_port" value="{{$cnf->working_port}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Registration Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="reg_no" value="{{$cnf->reg_no}}" required/>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update">
                                <a href="{{route('cnf.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>

@endsection


