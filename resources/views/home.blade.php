@extends('layouts.master')

@section('content')


<div class="row clearfix">
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h1>{{Auth::user()->Seller()->count() }} <i class="zmdi zmdi-account">  </i></h1>
                            <p class="text-muted"> Seller Profiles</p>
                            <div class="progress">
                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: {{(Auth::user()->Seller()->count())  }}%;"></div>
                            </div>
                            <span class="text-small">{{(Auth::user()->Seller()->count()) }}% more than last month</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h1>{{Auth::user()->Buyer()->count() }} <i class="zmdi zmdi-accounts">  </i></h1>
                            <p class="text-muted">Buyer Profiles</p>
                            <div class="progress">
                                <div class="progress-bar l-blush" role="progressbar" aria-valuenow="{{Auth::user()->Buyer()->count()}}" aria-valuemin="0" aria-valuemax="100" style="width: {{(Auth::user()->Buyer()->count()) }}%;"></div>
                            </div>
                            <span class="text-small">{{(Auth::user()->Buyer()->count()) }}% more than last month</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h1>{{Auth::user()->Product()->count() }} <i class="zmdi zmdi-plus-box"> </i> </h1>
                            <p class="text-muted">Products</p>
                            <div class="progress">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="{{(Auth::user()->Product()->count()) }}" aria-valuemin="0" aria-valuemax="{{(Auth::user()->Product()->count())}}" style="width: {{(Auth::user()->Product()->count())}}%;"></div>
                            </div>
                            <span class="text-small">{{(Auth::user()->Product()->count()) }}% more than last month</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h1>0 <i class="zmdi zmdi-thumb-up"> </i></h1>
                            <p class="text-muted">Order confirmed</p>
                            <div class="progress">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>
                            <span class="text-small">0% higher than last month</span> </div>
                    </div>
                </div>
            </div>

            {{--<div class="row clearfix">--}}
                {{--<div class="col-sm-12 col-md-12 col-lg-12">--}}
                    {{--<div class="card">--}}
                        {{--<div class="header">--}}
                            {{--<h2>Best Clients</h2>--}}
                        {{--</div>--}}
                        {{--<div class="body table-responsive members_profiles">--}}
                            {{--<table class="table table-hover">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th>Name</th>--}}
                                    {{--<th>Deals</th>--}}
                                    {{--<th>Type</th>--}}
                                    {{--<th>Reviews</th>--}}
                                    {{--<th>Progress</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}


                                {{--<tr>--}}

                                    {{--<td>--}}
                                        {{--<a href="javascript:;">Victoria</a>--}}
                                    {{--</td>--}}
                                    {{--<td>$651</td>--}}
                                    {{--<td>Buyer</td>--}}
                                    {{--<td>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star-half"></i>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="progress" >--}}
                                            {{--<div class="progress-bar l-green" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}

                                {{--<tr>--}}

                                    {{--<td>--}}
                                        {{--<a href="javascript:;">Logan</a>--}}
                                    {{--</td>--}}
                                    {{--<td>$420</td>--}}
                                    {{--<td>Buyer</td>--}}
                                    {{--<td>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star-outline"></i>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="progress" >--}}
                                            {{--<div class="progress-bar l-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}


                                {{--<tr>--}}

                                    {{--<td>--}}
                                        {{--<a href="javascript:;">Isabella</a>--}}
                                    {{--</td>--}}
                                    {{--<td>$350</td>--}}
                                    {{--<td>Seller</td>--}}
                                    {{--<td>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star-outline"></i>--}}
                                        {{--<i class="zmdi zmdi-star-outline"></i>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="progress">--}}
                                            {{--<div class="progress-bar l-amber" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}

                                {{--<tr>--}}

                                    {{--<td>--}}
                                        {{--<a href="javascript:;">Lucas</a>--}}
                                    {{--</td>--}}
                                    {{--<td>$300</td>--}}
                                    {{--<td>Seller</td>--}}
                                    {{--<td>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star-half"></i>--}}
                                        {{--<i class="zmdi zmdi-star-outline"></i>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="progress">--}}
                                            {{--<div class="progress-bar l-blue" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}



                                {{--<tr>--}}

                                    {{--<td>--}}
                                        {{--<a href="javascript:;">Jackson</a>--}}
                                    {{--</td>--}}
                                    {{--<td>$201</td>--}}
                                    {{--<td>Seller</td>--}}
                                    {{--<td>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star"></i>--}}
                                        {{--<i class="zmdi zmdi-star-outline"></i>--}}
                                        {{--<i class="zmdi zmdi-star-outline"></i>--}}
                                        {{--<i class="zmdi zmdi-star-outline"></i>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="progress">--}}
                                            {{--<div class="progress-bar l-parpl" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}




                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

@endsection
