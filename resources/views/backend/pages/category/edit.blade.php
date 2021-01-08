@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Updaate Category Information</h4>
          <p class="mg-b-0">Our Ecommercs web site All Category manage page.</p>
        </div>
  	</div>

  	<div class="br-pagebody">
        <div class="row row-sm">
          	<div class="col-sm-12 col-xl-0">
          		<!-- Body Content Start -->
          		<div class="card bd-0 shadow-base">
	              <div class="d-md-flex justify-content-between pd-25">
	                <div>
	                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Updaate Category Information</h6>
	                </div>
	              </div>

	              <div class="pd-l-25 pd-r-15 pd-b-25">
	              	<div class="row">
	              		<div class="col-sm-6 col-xl-6">
	              			<form action="{{ route('category.update', $category->id ) }}" method="POST" enctype="multipart/form-data">
		              		<!-- This is the Security Tocken + No one can Ebad this Form using iframe tag -->
		              		@csrf

		              		<div class="form-group">
		              			<label>Name</label>
		              			<input type="text" name="name" class="form-control" value="{{ $category->name }}">
		              		</div>

		              		<div class="form-group">
		              			<label>Is Parent</label>
			                  <select name="is_parent" id="" class="form-control">
			                  	<option value="0" @if( $category->is_parent==0) selected @endif>Parent</option>
			                  	@foreach( App\Models\Backend\category::orderBy('name','asc')->where('is_parent',0)->get() as $parentcat )
			                  		<option value="{{ $parentcat->id }}" @if( $parentcat->id==$category->is_parent) selected @endif>{{ $parentcat->name }}</option>
			                  		@foreach( App\Models\Backend\category::orderBy('name','asc')->where('is_parent', $parentcat->id)->get() as $childcat )
			                  			<option value="{{ $childcat->id }}" @if( $childcat->id==$category->is_parent) selected @endif>- {{ $childcat->name }}</option>
			                  		@endforeach
			                  	@endforeach
			                  </select>
		              		</div>

		              		<div class="form-group">
		              			<label>Status</label>
		              			<select name="status" class="form-control">
		              				<option value="0">Please Select the Status</option>
		              				<option value="1" @if ($category->status == 1) Selected @endif>Active</option>
		              				<option value="0" @if ($category->status == 0) Selected @endif>Inactive</option>
		              			</select>
		              		</div>
	              		</div>

	              		<div class="col-sm-6 col-xl-6">

	              			<div class="form-group">
		              			<label>Description</label>
		              			<textarea name="description" class="form-control">{{ $category->description }}</textarea>
		              		</div>

		              			<div class="form-group">
		              				<div class="box-image">
				              			<label>Category Image / Logo</label><br>
				              				@if(!is_null($category->image))
									      	<img src="{{asset('Backend/img/category')}}/{{$category->image}}" width="40">
									      	@else
									      	No Thumbnail
									      	@endif
				              			<input type="file" name="image" class="form-control-file">
				              		</div>
			              		</div>

			              		<div class="form-group">
			              			<input type="submit" name="updateCategory" class="btn btn-primary btn-block" value="Save Changes">
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