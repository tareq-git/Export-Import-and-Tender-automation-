@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Seller Banks</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='{{ route("sellerBank.create") }}'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>
                </ul>
            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th data-breakpoints="xs">Swift COde</th>
                        <th data-breakpoints="xs">Branch</th>


                    </tr>
                    </thead>

                    <tbody>
                    @foreach($sellerBanks as $sellerBank)
                        <tr>
                            <td>{{$sellerBank->name}}</td>
                            <td>{{$sellerBank->swift_code}}</td>
                            <td>{{$sellerBank->branch_add}}</td>

                            <td>
                                <a href="{{ route('sellerBank.edit', $sellerBank->id) }}"><button type="button" class="btn-sm  btn-raised btn-success waves-effect">Edit</button></a>
                            </td>

                            <td>
                                <form action="{{ route('sellerBank.destroy', $sellerBank)}}" method="post">
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
