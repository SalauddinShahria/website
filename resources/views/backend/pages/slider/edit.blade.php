@extends ('backend.layout.template')

@section ('body')

	<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New Slider</h4>
          <p class="mg-b-0">Our Ecommercs web site All Slider manage page.</p>
        </div>
  	</div>

  	<div class="br-pagebody">
        <div class="row row-sm">
          	<div class="col-sm-12 col-xl-0">
          		<!-- Body Content Start -->
          		<div class="card bd-0 shadow-base">
	              <div class="d-md-flex justify-content-between pd-25">
	                <div>
	                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New Slider</h6>
	                </div>
	              </div>

	              <div class="pd-l-25 pd-r-15 pd-b-25">
	              	<div class="row">
	              		<div class="col-sm-6 col-xl-6">
	              			<form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
			              		<!-- This is the Security Tocken + No one can Ebad this Form using iframe tag -->
			              		@csrf

			              		<div class="form-group">
			              			<label>Slider Title</label>
			              			<input type="text" name="title" class="form-control" autocomplete="off" required="required" value="{{$slider->title}}">
			              		</div>

			              		<div class="form-group">
			              			<label>Sub-title</label>
			              			<input type="text" name="subtitle" class="form-control" autocomplete="off" required="required" value="{{$slider->subtitle}}">
			              		</div>

			              		<div class="form-group">
			              			<label>Button Text</label>
			              			<input type="text" name="button_text" class="form-control" autocomplete="off" required="required" value="{{$slider->button_text}}">
			              		</div>

			              		<div class="form-group">
			              			<label>Button URL</label>
			              			<input type="text" name="button_url" class="form-control" autocomplete="off" required="required" value="{{$slider->button_url}}">
			              		</div>

			            </div>
			            <div class="col-sm-6 col-xl-6">

			              		<div class="form-group">
			              			<label>Description</label>
			              			<textarea name="description" class="form-control" required="required" rows="10">{{$slider->description}}</textarea>
			              		</div>

			              		<div class="form-group">
			              			<label>Image</label>
			              			@if(!is_null($slider->image))
								      	<img src="{{asset('Backend/img/slider')}}/{{$slider->image}}" width="40">
							      	@else
							      	No Thumbnail
								     @endif
		              			<input type="file" name="image" class="form-control-file">
			              		</div>
						</div>
						<div class="form-group">
	              			<input type="submit" name="addSlider" class="btn btn-primary" value="Add New Slider">
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