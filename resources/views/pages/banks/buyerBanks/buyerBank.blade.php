@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="text-secondary"> All Buyer Banks</h2>
                <ul class="header-dropdown m-r--5">
                    <li> <button onclick="window.location='{{ route("buyerBank.create") }}'" class="btn-sm btn-raised bg-lime waves-effect"> <i class="zmdi zmdi-account-add"> Create</i> </button></li>
                </ul>
            </div>

            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th data-breakpoints="xs">Swift Code</th>
                        <th data-breakpoints="xs">Branch</th>


                    </tr>
                    </thead>

                    <tbody>
                    @foreach($buyerBanks as $buyerBank)
                        <tr>
                            <td>{{$buyerBank->name}}</td>
                            <td>{{$buyerBank->swift_code}}</td>
                            <td>{{$buyerBank->branch_add}}</td>

                            <td>
                                <a href="{{ route('buyerBank.edit', $buyerBank->id) }}"><button type="button" class="btn-sm  btn-raised btn-success waves-effect" >Edit</button></a>
                            </td>

                            <td>
                                <form action="{{ route('buyerBank.destroy', $buyerBank)}}" method="post">
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
