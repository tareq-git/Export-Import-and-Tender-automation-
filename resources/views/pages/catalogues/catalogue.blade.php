@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Catalogues</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='{{ route("catalogue.create") }}'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-plus"> Create</i> </button></li>
                </ul>

            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th data-breakpoints="xs">Email</th>
                        <th data-breakpoints="xs">Phone</th>
                        <th data-breakpoints="xs">Factory Address</th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach($catagogues as $key=>$catagogue)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$catagogue->name}}</td>
                            <td>{{$catagogue->email}}</td>
                            <td>{{$catagogue->phone}}</td>
                            <td>{{$catagogue->factory_address}}</td>

                            <td>
                                <a href="{{ route('catalogue.show', $catagogue->id) }}"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">View</button></a>
                            </td>

                            <td>
                                <form action="{{ route('catalogue.destroy', $catagogue)}}" method="post">
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
