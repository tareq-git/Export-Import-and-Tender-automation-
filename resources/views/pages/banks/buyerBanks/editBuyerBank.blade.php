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


        <form action="{{route('buyerBank.update',$buyerBanks->id )}}" method="post">
            @csrf
            @method('PATCH')
            <div class="card">

                <div class="header">
                    <h2 class="text-secondary"> Edit Buyer Bank</h2>
                </div>

                <div class="body">

                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Bank Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="{{$buyerBanks->name}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Swift Code</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="swift_code"  value="{{$buyerBanks->swift_code}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Branch Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="branch_add" value="{{$buyerBanks->branch_add}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <label class="text-primary">Other Information</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="other_info" value="{{$buyerBanks->other_info}}" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Update">
                                <a href="{{route('buyerBank.index')}}"> <button type="button"  class="btn  btn-raised btn-danger waves-effect">Cancle</button> </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>

@endsection

