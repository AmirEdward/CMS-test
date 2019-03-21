@extends('admin.layouts.app')

@section('content')

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <h2 class="text-center mb-50">Welcome Admin</h2>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="center-block">
                            Categories Count
                        </div>
                        <span class="badge badge-primary">{{ count($categories) }}</span>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">News</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="center-block">
                            News Count
                        </div>
                        <span class="badge badge-primary">{{ count($news) }}</span>
                    </div>
                </div>
            </div>
        </div>
@endsection