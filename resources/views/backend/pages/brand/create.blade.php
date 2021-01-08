@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New Brand</h4>
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
	                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New Brand</h6>
	                </div>
	              </div>

	              <div class="pd-l-25 pd-r-15 pd-b-25">
	              	<div class="row">
	              		<div class="col-sm-6 col-xl-6">
	              			<form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
			              		<!-- This is the Security Tocken + No one can Ebad this Form using iframe tag -->
			              		@csrf

			              		<div class="form-group">
			              			<label>Name</label>
			              			<input type="text" name="name" class="form-control">
			              		</div>

			              		<div class="form-group">
			              			<label>Is Featured</label>
			              			<select name="is_featured" class="form-control">
			              				<option value="0">Please Select the Featured Status</option>
			              				<option value="1">Yes Featured</option>
			              				<option value="0">No Featured</option>
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
			              			<label>Brand Image / Logo</label>
			              			<input type="file" name="image" class="form-control-file">
			              		</div>
	              		</div>
	              		<div class="col-sm-6 col-xl-0">

		              			<div class="form-group">
			              			<label>Description</label>
			              			<textarea name="description" class="form-control" rows="10"></textarea>
			              		</div>

		              			<div class="form-group">
			              			<input type="submit" name="addBrand" class="btn btn-primary btn-block" value="Add New Brand">
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