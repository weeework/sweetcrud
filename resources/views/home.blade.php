@extends('layouts.admin.app')

@section('content')
    <!-- Page-Title -->
    @include('layouts.admin.partials._bread', ['data' => empty($bread) ? '' : $bread])

    <div class="row">
        <div class="col-lg-3">
            <div class="card-box">
                <div class="bar-widget">
                    <div class="table-box">
                        <div class="table-detail">
                            <div class="iconbox bg-purple">
                                <i class="icon-layers"></i>
                            </div>
                        </div>

                        <div class="table-detail">
                            <h4 class="m-t-0 m-b-5"><b>Partnership</b></h4>
                            <h5 class="text-muted m-b-0 m-t-0">Partner Splash, Promo, Banner</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card-box">
                <div class="bar-widget">
                    <div class="table-box">
                        <div class="table-detail">
                            <div class="iconbox bg-inverse">
                                <i class="icon-layers"></i>
                            </div>
                        </div>


                        <div class="table-detail">
                            <h4 class="m-t-0 m-b-5"><b>Customer</b></h4>
                            <h5 class="text-muted m-b-0 m-t-0">Customer, Orders</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card-box">
                <div class="bar-widget">
                    <div class="table-box">
                        <div class="table-detail">
                            <div class="iconbox bg-warning">
                                <i class="icon-layers"></i>
                            </div>
                        </div>

                        <div class="table-detail">
                            <h4 class="m-t-0 m-b-5"><b>Data Master</b></h4>
                            <h5 class="text-muted m-b-0 m-t-0">Users, Jobs, Architects, Gallery</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card-box">
                <div class="bar-widget">
                    <div class="table-box">
                        <div class="table-detail">
                            <div class="iconbox bg-purple">
                                <i class="icon-layers"></i>
                            </div>
                        </div>

                        <div class="table-detail">
                            <h4 class="m-t-0 m-b-5"><b>Settings</b></h4>
                            <h5 class="text-muted m-b-0 m-t-0">Cities, Company</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row Menu-->

    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title"><b>Chart by Category</b></h4>

                <div id="combine-chart"></div>
            </div>
        </div>



        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="m-t-0 m-b-30 header-title"><b>Chart by Status</b></h4>

                <div id="combine-chart-2"></div>
            </div>
        </div>
    </div>
    <!-- End row C3-2-->
@endsection
