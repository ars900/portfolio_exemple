@extends('admin.admin_master')
@section('admin')
<div class="page-content">
     <div class="container-fluid">
         <div class="row">
               <div class="col-12">
                   <div class="card">
                         <div class="card-body">
                              <h4 class="card-title">Home Slide Page </h4>
                              <form method="post" action="{{ route('home_slider.update', $homeSlider) }}" enctype="multipart/form-data">
                                 @csrf
                                  @method('PUT')
                                  <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input name="title" class="form-control" type="text" value="{{ $homeSlider->title }}"  id="example-text-input">
                                        </div>
                                  </div>
                                  <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                                        <div class="col-sm-10">
                                            <input name="short_title" class="form-control" type="text" value="{{ $homeSlider->short_title }}"  id="example-text-input">
                                        </div>
                                  </div>
                                     <div class="row mb-3">
                                       <label for="example-text-input" class="col-sm-2 col-form-label">Video URL </label>
                                       <div class="col-sm-10">
                                           <input name="video_url" class="form-control" type="text" value="{{ $homeSlider->video_url }}"  id="example-text-input">
                                       </div>
                                  </div>
                                  <div class="row mb-3">
                                       <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image </label>
                                       <div class="col-sm-10">
                                           <input name="home_slide" class="form-control" type="file"  id="image">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                       <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                       <div class="col-sm-10">
                                            <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($homeSlider->home_slide))? url( $homeSlider->home_slide):url('upload/no_image.jpg') }}" alt="Card image cap">
                                       </div>
                                  </div>
                                  <input type="submit" class="btn btn-info waves-effect waves-light" value="Update">
                              </form>
                         </div>
                   </div>
               </div>
         </div>
     </div>
</div>


@endsection
