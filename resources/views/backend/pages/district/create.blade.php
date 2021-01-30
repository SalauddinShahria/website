@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New District</h4>
          <p class="mg-b-0">Our Ecommercs web site All District manage page.</p>
        </div>
  	</div>

  	<div class="br-pagebody">
        <div class="row row-sm">
          	<div class="col-sm-12 col-xl-0">
          		<!-- Body Content Start -->
          		<div class="card bd-0 shadow-base">
	              <div class="d-md-flex justify-content-between pd-25">
	                <div>
	                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New District</h6>
	                </div>
	              </div>

	              <div class="pd-l-25 pd-r-15 pd-b-25">
	              	<div class="row">
	              		<div class="col-sm-6 col-xl-6">
	              			<form action="{{ route('district.store') }}" method="POST" enctype="multipart/form-data">
			              		<!-- This is the Security Tocken + No one can Ebad this Form using iframe tag -->
			              		@csrf

			              		<div class="form-group">
			              			<label>District Name</label>
			              			<input type="text" name="name" class="form-control" autocomplete="off" required="required">
			              		</div>

			            </div>
			            <div class="col-sm-6 col-xl-6">

			              		<div class="form-group">
			              			<label>Division Name</label>
			              			<select class="form-control" name="division_id">
			              				<option value="0">Please Select the Division Name</option>
			              				@foreach ($divisions as $division)
			              					<option value="{{$division->id}}">{{$division->name}}</option>
			              				@endforeach
			              			</select>
			              		</div>
						</div>
						<div class="form-group">
	              			<input type="submit" name="addDistrict" class="btn btn-primary" value="Add New District">
	              		</div>
			              	</form>

	              	</div>
	              </div>
	            </div>
          		<!-- Body Content End -->
          	</div>
        </div>
    </div>

@endsection