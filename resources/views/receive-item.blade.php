@extends('partials.main')
@section('content')

    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Receive Item</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Receive Items</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
            
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                            <form class="needs-validation" action="/receive-item" method="post" novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom01">Item Name</label>
                                            <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="First Name" value="Pen" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom04">Item Code</label>
                                            <select class="form-control" name="item_code" id="validationCustom04" required>
                                                @foreach($receive as $data)
                                                    <option value="{{ $data->item_code }}">{{ $data->item_code }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a department.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom03">Receive By</label>
                                            <input type="text" class="form-control" name="received_by" id="validationCustom03" placeholder="Pen" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom03">Receive To</label>
                                            <input type="text" class="form-control" name="received_to" id="validationCustom03" placeholder="Pen" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="validationCustom03">Quantity</label>
                                            <input type="text" class="form-control" name="quantity" id="validationCustom03" placeholder="10" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                    
                                        
                                    </div>
                                    <div class="mb-3 input-block">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /Row -->
	

@endsection