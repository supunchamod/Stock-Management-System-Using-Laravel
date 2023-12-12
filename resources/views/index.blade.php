@extends('partials.main')
@section('content')

<!-- Page Content -->
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome !</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa-solid fa-cubes"></i></span>
                    <div class="dash-widget-info">
                        <h3></h3>
                        <span>Manage Stocks</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa-solid fa-dollar-sign"></i></span>
                    <div class="dash-widget-info">
                        <h3></h3>
                        <span>Issue Stocks</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa-solid fa-dollar-sign"></i></span>
                    <div class="dash-widget-info">
                        <h3></h3>
                        <span>Receive Stocks</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /Page Content -->

</div>
<!-- /Page Wrapper -->

@endsection