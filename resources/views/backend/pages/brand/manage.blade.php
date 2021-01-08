@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage All Brands</h4>
          <p class="mg-b-0">Our Ecommercs web site All Brands manage page.</p>
        </div>
  	</div>

  	<div class="br-pagebody">
        <div class="row row-sm">
          	<div class="col-sm-12 col-xl-0">
          		<!-- Body Content Start -->
          		<div class="card bd-0 shadow-base">
	              <div class="d-md-flex justify-content-between pd-25">
	                <div>
	                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Manage All Brands</h6>
	                </div>
	              </div>

	              <div class="pd-l-25 pd-r-15 pd-b-25">
	              	<div class="bd rounded table-responsive">
		              	<!-- Table Content Start -->
		              	<table id="datatable" class="table table-striped table-hover table-bordered" style="width:100%">
						  <thead>
						    <tr>
						      <th scope="col">#Sl.</th>
						      <th scope="col">Image</th>
						      <th scope="col">Name</th>
						      <th scope="col">Slug</th>
						      <th scope="col">Description</th>
						      <th scope="col">Is Featured</th>
						      <th scope="col">Status</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@php $i = 1; @endphp
						  	@foreach($brands as $brand)

						    <tr>
						      <th scope="row">{{ $i }}</th>
						      <td>
						      	<div class="box-image">
						      		@if(!is_null($brand->image))
							      	<img src="{{asset('Backend/img/brand')}}/{{$brand->image}}" width="40">
							      	@else
							      	No Thumbnail
							      	@endif
							     </div>
						      </td>
						      <td>{{ $brand->name }}</td>
						      <td>{{ $brand->slug }}</td>
						      <td>{{ $brand->description }}</td>
						      <td>
						      	@if($brand->is_featured == 1)
						      	<span class="badge badge-success">Yes</span>
						      	@else
						      	<span class="badge badge-warning">NO</span>
						      	@endif
						      </td>
						         <td>
						      	@if($brand->status == 1)
						      	<span class="badge badge-success">Active</span>
						      	@else
						      	<span class="badge badge-danger">InActive</span>
						      	@endif
						      </td>
						      <td>
						      	<div class="action-icons">
						      		<ul><li><a href="{{route('brand.edit', $brand->id)}}"><i class="fa fa-edit"></i></a></li></ul>
						      		<ul><li><a href="" data-toggle="modal" data-target="#deleteBrand{{$brand->id}}"><i class="fa fa-trash"></i></a></li></ul>

						      		<!-- Delete modal start-->
									<div class="modal fade" id="deleteBrand{{$brand->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Do you want to Delete the Brand?</h5>
									       		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            	</button>
									      </div>
	
											<div class="modal-body">
												<form action="{{ route('brand.destroy', $brand->id)}}" method="POST">
												@csrf
													<div class="delete-option text-center" >
												        <ul>
												            <li><input type="submit" name="delete" value="Delete" class="btn btn-danger"></li>
												             <li><button type="button" class="btn btn-primary" data-dismiss="modal">Cancle</button></li>
												        </ul>
												    </div>
												</form>
											</div>
									    </div>
									  </div>
									</div>
									<!-- Delete modal end-->
						      	</div>
						      </td>
						    </tr>
						    @php $i++; @endphp
						    @endforeach

						  </tbody>
						</table>
		              	<!-- Table Content End -->
	              	</div>
	              </div>
	            </div>
          		<!-- Body Content End -->
          	</div>
        </div>
    </div>

@endsection