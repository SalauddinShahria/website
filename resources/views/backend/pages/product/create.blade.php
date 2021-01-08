@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New Product</h4>
          <p class="mg-b-0">Our Ecommercs web site All Product manage page.</p>
        </div>
  	</div>

  	<div class="br-pagebody">
        <div class="row row-sm">
          	<div class="col-sm-12 col-xl-0">
          		<!-- Body Content Start -->
          		<div class="card bd-0 shadow-base">
	              <div class="d-md-flex justify-content-between pd-25">
	                <div>
	                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New Product</h6>
	                </div>
	              </div>

	              <div class="pd-l-25 pd-r-15 pd-b-25">
	              			<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
			              		<!-- This is the Security Tocken + No one can Ebad this Form using iframe tag -->
			              		@csrf

			              		<div class="container-fluid">
			              			<div class="row">
			              				<!-- First Column -->
			              				<div class="col-sm-4">

			              					<div class="form-group">
						              			<label>Product Title</label>
						              			<input type="text" name="title" class="form-control">
						              		</div>

						              		<div class="form-group">
						              			<label>Regular Price</label>
						              			<input type="text" name="regular_price" class="form-control">
						              		</div>

						              		<div class="form-group">
						              			<label>Offer Price</label>
						              			<input type="text" name="offer_price" class="form-control">
						              		</div>

						              		<div class="form-group">
						              			<label>Quantity</label>
						              			<input type="number" name="quantity" class="form-control">
						              		</div>

						              		<div class="form-group">
						              			<label>SKU Code</label>
						              			<input type="text" name="sku_code" class="form-control">
						              		</div>

			              				</div>

			              				<!-- Middle Column -->
			              				<div class="col-sm-4">

			              					<div class="form-group">
												<label>Featured Product?</label>
												<select name="featured_item" class="form-control">
													<option value="0">Please Select the Featured Status</option>
													<option value="1">Yes Featured</option>
													<option value="0">No Featured</option>
												</select>
											</div>

											<div class="form-group">
												<label>Product Name</label>
												<select name="brand_id" class="form-control">
													<option value="0">Please Select the Product Brand</option>
													@foreach($brands as $brand)
														<option value="{{$brand->id}}">{{$brand->name}}</option>
													@endforeach
												</select>
											</div>

											<div class="form-group">
												<label>Product Category</label>
												<select name="category_id" class="form-control">
													<option value="0">Please Select the Product Category</option>
													@foreach ( App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', 0)->get() as $parent_cat )
														<option value="{{$parent_cat->id}}">{{$parent_cat->name}}</option>

														@foreach ( App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', $parent_cat->id)->get() as $child )
															<option value="{{$child->id}}">-- {{$child->name}}</option>
														@endforeach
													@endforeach
												</select>
											</div>

											<div class="form-group">
						              			<label>Status</label>
						              			<select name="status" class="form-control">
						              				<option value="0">Please Select the Status</option>
						              				<option value="1">Active</option>
						              				<option value="0">Inactive</option>
						              			</select>
						              		</div>	

						              		<div class="form-group">
						              			<label>Product Type/Condition</label>
						              			<select name="product_type" class="form-control">
						              				<option value="0">Please Select the Product Type/Condition</option>
						              				<option value="1">New</option>
						              				<option value="0">Pre-Owned</option>
						              			</select>
						              		</div>

			              				</div>

			              				<!-- Last Column -->
			              				<div class="col-sm-4">
			              					<div class="form-group">
						              			<label>Produt Short Description</label>
						              			<textarea name="short_desc" class="form-control" rows="5"></textarea>
						              		</div>

						              		<div class="form-group">
						              			<label>Produt Description</label>
						              			<textarea name="desc" class="form-control" rows="5"></textarea>
						              		</div>

						              		<div class="form-group">
						              			<label>Product Tags</label>
						              			<input type="text" name="tags" class="form-control">
						              		</div>

			              				</div>
			              			</div>
			              		</div>

			              		<div class="container-fluid">
			              			<div class="row">
			              				<div class="col-sm-12">

			              					<div class="form-group">
						              			<label>Product Image</label>
						              			<input type="file" name="image" class="form-control-file">
						              		</div>

			              					<div class="form-group">
						              			<input type="submit" name="addProduct" class="btn btn-primary" value="Add New Product">
						              		</div>
			              				</div>
			              			</div>
			              		</div>

			              	</form>
	              </div>
	            </div>
          		<!-- Body Content End -->
          	</div>
        </div>
    </div>

@endsection