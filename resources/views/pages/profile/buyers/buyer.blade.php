@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Buyers</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='{{ route("buyer.create") }}'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>
                </ul>
            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th data-breakpoints="xs">Office</th>
                        <th data-breakpoints="xs">Phone No</th>
                        <th data-breakpoints="xs">email</th>

                    </tr>
                    </thead>

                    <tbody>
                        @foreach($buyers as $buyer)
                            <tr>
                                <td>{{$buyer->business_name}}</td>
                                <td>{{$buyer->office_add}}</td>
                                <td>{{$buyer->phone_no}}</td>
                                <td>{{$buyer->email}}</td>

                                <td>
                                    <a href="{{ route('buyer.edit', $buyer->id) }}"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                                </td>
                                <td>
                                    <form action="{{ route('buyer.destroy', $buyer)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-sm  btn-raised btn-danger waves-effect">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
