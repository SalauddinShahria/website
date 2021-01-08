@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update Product Information</h4>
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
	                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Updaate Product Information</h6>
	                </div>
	              </div>

	              <div class="pd-l-25 pd-r-15 pd-b-25">
	              	<div class="row">
	              		<div class="col-sm-12 col-xl-12">
	              			<form action="{{ route('product.update', $product->id ) }}" method="POST" enctype="multipart/form-data">
		              		<!-- This is the Security Tocken + No one can Ebad this Form using iframe tag -->
		              		@csrf

		              			<div class="container-fluid">
			              			<div class="row">
			              				<!-- First Column -->
			              				<div class="col-sm-4">

			              					<div class="form-group">
						              			<label>Product Title</label>
						              			<input type="text" name="title" class="form-control" value="{{$product->title}}">
						              		</div>

						              		<div class="form-group">
						              			<label>Regular Price</label>
						              			<input type="text" name="regular_price" class="form-control" value="{{$product->regular_price}}">
						              		</div>

						              		<div class="form-group">
						              			<label>Offer Price</label>
						              			<input type="text" name="offer_price" class="form-control" value="{{$product->offer_price}}">
						              		</div>

						              		<div class="form-group">
						              			<label>Quantity</label>
						              			<input type="number" name="quantity" class="form-control" value="{{$product->quantity}}">
						              		</div>

						              		<div class="form-group">
						              			<label>SKU Code</label>
						              			<input type="text" name="sku_code" class="form-control" value="{{$product->sku_code}}">
						              		</div>

			              				</div>

			              				<!-- Middle Column -->
			              				<div class="col-sm-4">

			              					<div class="form-group">
												<label>Featured Product?</label>
												<select name="featured_item" class="form-control">
													<option value="0">Please Select the Featured Status</option>
													<option value="1" @if ($product->featured_item == 1) Selected @endif>Yes Featured</option>
													<option value="0" @if ($product->featured_item == 0) Selected @endif>No Featured</option>
												</select>
											</div>

											<div class="form-group">
												<label>Product Name</label>
												<select name="brand_id" class="form-control">
													<option value="0">Please Select the Product Brand</option>
												</select>
											</div>

											<div class="form-group">
												<label>Product Category</label>
												<select name="category_id" class="form-control">
													<option value="0">Please Select the Product Category</option>
								
												</select>
											</div>

											<div class="form-group">
						              			<label>Status</label>
						              			<select name="status" class="form-control">
						              				<option value="0">Please Select the Status</option>
						              				<option value="1" @if ($product->status == 1) Selected @endif>Active</option>
						              				<option value="0" @if ($product->status == 0) Selected @endif>Inactive</option>
						              			</select>
						              		</div>	

						              		<div class="form-group">
						              			<label>Product Type/Condition</label>
						              			<select name="product_type" class="form-control">
						              				<option value="0">Please Select the Product Type/Condition</option>
						              				<option value="1" @if ($product->product_type == 1) Selected @endif>New</option>
						              				<option value="0" @if ($product->product_type == 0) Selected @endif>Pre-Owned</option>
						              			</select>
						              		</div>

			              				</div>

			              				<!-- Last Column -->
			              				<div class="col-sm-4">
			              					<div class="form-group">
						              			<label>Produt Short Description</label>
						              			<textarea name="short_desc" class="form-control" rows="5" value="{{$product->short_desc}}"></textarea>
						              		</div>

						              		<div class="form-group">
						              			<label>Produt Description</label>
						              			<textarea name="desc" class="form-control" rows="5" value="{{$product->desc}}"></textarea>
						              		</div>

						              		<div class="form-group">
						              			<label>Product Tags</label>
						              			<input type="text" name="tags" class="form-control" value="{{$product->tags}}">
						              		</div>

			              				</div>
			              			</div>
			              		</div>

			              		<div class="container-fluid">
			              			<div class="row">
			              				<div class="col-sm-12">

			              					<div class="form-group">
						              			<label>Product Image</label><br>
						              				@if(!is_null($product->image))
											      	<img src="{{asset('Backend/img/product')}}/{{$product->image}}" width="40">
											      	@else
											      	No Thumbnail
											      	@endif
						              			<input type="file" name="image" class="form-control-file">
						              		</div>

			              					<div class="form-group">
						              			<input type="submit" name="updateProduct" class="btn btn-primary" value="Save Changes">
						              		</div>
			              				</div>
			              			</div>
			              		</div>

			              	</form>
	              		</div>
	              	</div>
	              	
	              </div>
	            </div>
          		<!-- Body Content End -->
          	</div>
        </div>
    </div>

@endsection