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

            <form action="{{route('buyer.update',$buyer->id )}}" method="post">
                @csrf
                @method('PATCH')
                <div class="card">

                    <div class="header">
                        <h2 class="text-secondary"> Edit Buyer profile</h2>
                    </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Business Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="business_name" value="{{$buyer->business_name}}" required />

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Office Address</label>
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" name="office_add">{{$buyer->office_add}}</textarea>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Factory Address</label>
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" name="factory_add"  required > {{$buyer->factory_add}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Phone No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone_no" value="{{$buyer->phone_no}}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Fax Number</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fax_no" value="{{$buyer->fax_no}}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" value="{{$buyer->email}}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Contact Person</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact_person" value="{{$buyer->contact_person}}" required />
                                </div>
                            </div>
                        </div>

                    </div>

                    {{--<h2 class="card-inside-title">Additional Information</h2>--}}

                    {{--<div class="switch">--}}
                        {{--<label>OFF<input type="checkbox" onchange="myFunction()"><span class="lever"></span>ON</label>--}}
                    {{--</div>--}}

                    {{--<div class="row clearfix" id="info" style="display:none">--}}
                        {{--<div class="col-sm-12">--}}
                            {{--<div class="form-group form-float form-group">--}}
                                {{--<label class="text-primary">Other Information</label>--}}
                                {{--<div class="form-line">--}}
                                    {{--<textarea rows="1" class="form-control no-resize auto-growth" name="add_info" value="Other Information" ></textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<a href="#"> <i class="zmdi zmdi-plus"> Add More</i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update">
                                <a href="{{route('buyer.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>

@endsection


<script>

    function myFunction() {
        var x = document.getElementById("info");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

</script>


