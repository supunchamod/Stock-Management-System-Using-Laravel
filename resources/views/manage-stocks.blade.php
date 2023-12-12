@extends('partials.main')
@section('content')

<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Manage Stocks</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Stocks</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="/add-stocks" class="btn add-btn"><i class="fa-solid fa-plus"></i> Create Stocks</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif				
				<div class="content container-fluid">
				
				<div class="row">
					<div class="col-md-12">
						<div>
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										    <th>Id</th>
											<th>Name</th>
											<th>Item Code</th>
											<th>Category</th>
											<th>Quantity</th>
											<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>

								@foreach( $stocks as $data)

									<tr>
										<td>{{$data->id}}</td>
										<td>{{$data->name}}</td>
										<td>{{$data->item_code}}</td>
										<td>{{$data->category}}</td>
										<td>{{$data->quantity}}</td>
										<td class="text-end">
										<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="{{ route('stocks.update', $data->id) }}"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
												<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_department_{{ $data->id }}"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
											</div>
											</div>
										</td>
									</tr>
									<div class="modal fade" id="delete_department_{{ $data->id }}" tabindex="-1" aria-labelledby="delete_departmentLabel_{{ $data->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete_departmentLabel_{{ $data->id }}">Delete Stocks</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete the department "{{ $data->name }}"?</p>
                                                        <form action="{{ route('stocks.destroy', $data->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete Department</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

			@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->
			
	
									

			<!-- /Delete Department Modal -->
			

@endsection