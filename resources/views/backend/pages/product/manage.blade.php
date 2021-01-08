@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle"> 
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage All Products</h4>
          <p class="mg-b-0">Our Ecommercs web site All Products manage page.</p>
        </div>
  	</div>

  	<div class="br-pagebody">
        <div class="row row-sm">
          	<div class="col-sm-12 col-xl-0">
          		<!-- Body Content Start -->
          		<div class="card bd-0 shadow-base">
	              <div class="d-md-flex justify-content-between pd-25">
	                <div>
	                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Manage All Products</h6> 
	                </div>
	              </div>

	              <div class="pd-l-25 pd-r-15 pd-b-25">
	              	<div class="bd rounded table-responsive">
		              	<!-- Table Content Start -->
		              	<table id="datatable" class="table table-striped table-hover table-bordered" style="width:100%">
						  <thead>
						    <tr>
						      <th scope="col">#Sl.</th>
						      <th scope="col">Title</th>
						      <th scope="col">Image</th>
						      <th scope="col">Brand</th>
						      <th scope="col">Category</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Regular Price</th>
						      <th scope="col">Offer Price</th>
						      <th scope="col">Featured</th>
						      <th scope="col">Status</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@php $i = 1; @endphp
						  	@foreach($products as $product)

						    <tr>
						      <th scope="row">{{ $i }}</th>
						      <td>{{ $product->title }}</td>
						      <td>
						      	<div class="box-image">
						      		@if(!is_null($product->image))
							      	<img src="{{asset('Backend/img/product')}}/{{$product->image}}" width="40">
							      	@else
							      	No Thumbnail
							      	@endif
							     </div>
						      </td>
						     
						      {{-- <td>{{ $product->brand->name }}</td>
						      <td>{{ $product->category->name }}</td> --}}
						      <td>{{ $product->quantity }} PCs</td>
						      <td>{{ $product->regular_price }} BDT</td>
						      <td>{{ $product->offer_price }} BDT</td>
						      <td>
						      	@if($product->featured_item == 1)
						      	<span class="badge badge-info">Yes</span>
						      	@else
						      	<span class="badge badge-warning">NO</span>
						      	@endif
						      </td>
						         <td>
						      	@if($product->status == 1)
						      	<span class="badge badge-success">Active</span>
						      	@else
						      	<span class="badge badge-danger">InActive</span>
						      	@endif
						      </td>
						      <td>
						      	<div class="action-icons">
						      		<ul><li><a href="{{route('product.edit', $product->id)}}"><i class="fa fa-edit"></i></a></li></ul>
						      		<ul><li><a href="" data-toggle="modal" data-target="#deleteProduct{{$product->id}}"><i class="fa fa-trash"></i></a></li></ul>

						      		<!-- Delete modal start-->
									<div class="modal fade" id="deleteProduct{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Do you want to Delete the Product?</h5>
									       		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            	</button>
									      </div>
	
											<div class="modal-body">
												<form action="{{ route('product.destroy', $product->id)}}" method="POST">
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