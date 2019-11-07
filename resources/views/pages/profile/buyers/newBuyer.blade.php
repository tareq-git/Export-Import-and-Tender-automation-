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

        <form action="{{route('buyer.store')}}" method="post">
            @csrf
            <div class="card">

                <div class="header">
                    <h2 class="text-secondary"> Create new Buyer profile</h2>
                </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="business_name" required >
                                    <label class="form-label">Username</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="office_add" required />
                                    <label class="form-label">Office Address</label>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="factory_add" required />
                                    <label class="form-label">Factory Address</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone_no" required />
                                    <label class="form-label">Phone No</label>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fax_no" placeholder="Fax Number" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact_person" placeholder="Contact Person" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<h2 class="card-inside-title">Additional Information</h2>--}}
                    {{--<input type="hidden" id="toogle" value="0" name="toogle">--}}

                    {{--<div class="switch" id="switch">--}}
                        {{--<label>OFF<input type="checkbox" onchange="myFunction()"><span class="lever"></span>ON</label>--}}
                    {{--</div>--}}

                    {{--<div class="row clearfix" id="info" style="display:none">--}}
                        {{--<div class="col-sm-12">--}}
                            {{--<div class="form-group form-float form-group" id="other-info">--}}
                                {{--<div class="form-line">--}}
                                    {{--<textarea rows="1" class="form-control no-resize auto-growth" name="add_info[]" placeholder="Other Information" ></textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                           {{--<a onclick="addMore(this)" id="btn-add-more" class="btn btn-raised waves-effect -sm"> <i class="zmdi zmdi-plus"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Create">
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

    function addMore(where) {
        var main = document.getElementById("other-info");
        var cntr = (main.datacntr || 0) + 1;
        main.datacntr = cntr;

        var clone = main.cloneNode(true);
        clone.id = "section" + cntr;
        where.parentNode.insertBefore(clone, where);
    }


</script>


