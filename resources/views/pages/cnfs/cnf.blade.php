@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All CNF Profiles</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='{{ route("cnf.create") }}'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-plus"> Create</i> </button></li>
                </ul>
            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th data-breakpoints="xs">Address</th>
                        <th data-breakpoints="xs">Phone No</th>
                        <th data-breakpoints="xs">email</th>
                        <th data-breakpoints="xs">Registration No</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($cnfs as $cnf)
                        <tr>
                            <td>{{$cnf->name}}</td>
                            <td>{{$cnf->address}}</td>
                            <td>{{$cnf->phone}}</td>
                            <td>{{$cnf->email}}</td>
                            <td>{{$cnf->reg_no}}</td>

                            <td>
                                <a href="{{ route('cnf.edit', $cnf->id) }}"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                            </td>
                            <td>
                                <form action="{{ route('cnf.destroy', $cnf)}}" method="post">
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
