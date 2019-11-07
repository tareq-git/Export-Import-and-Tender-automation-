@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Purchase Orders</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>
                </ul>

            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Buyer Name</th>
                        <th data-breakpoints="xs">Buyer Address</th>
                        <th data-breakpoints="xs">Contact Number </th>
                        <th data-breakpoints="xs">Purchase No</th>
                        <th data-breakpoints="xs">Purchase Date</th>
                    </tr>
                    </thead>

                    <tbody>

                    @for($i= 1; $i< 10 ; $i++)
                        <tr>
                            <td> {{$i}}</td>
                            <td> buyer {{$i}} </td>
                            <td> Address {{$i}} </td>
                            <td> 0160000000{{$i}} </td>
                            <td> {{$i}}635 </td>
                            <td> 1{{$i}}-April-2019 </td>
                            <td>
                                <a href="#"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                            </td>

                            <td>
                                <form action="#" method="#">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-sm  btn-raised btn-danger waves-effect">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endfor

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
