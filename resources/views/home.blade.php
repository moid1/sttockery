@extends('layouts.app')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-account"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">{{$dataArray['customersCount']}}</span>
                        Total Customers
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                    <div class="mini-stat-info text-right text-white">
                       
                       Total Orders
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">{{$dataArray['totalUploads']}}</span>
                      Total Uploads
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-15 header-title">Recent Users</h4>
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>

                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user['name']}}</td>
                                        <td>{{$user['email']}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div><!-- container-fluid -->


</div>
@endsection