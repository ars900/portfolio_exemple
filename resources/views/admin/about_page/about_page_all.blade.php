@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">About Page </h4>
                        <form method="POST" action="{{ route('about.update', $aboutPage) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input name="title" class="form-control" type="text" value="{{ $aboutPage->title }}"  id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                                    <div class="col-sm-10">
                                        <input name="short_title" class="form-control" type="text" value="{{ $aboutPage->short_title }}"  id="example-text-input">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Description </label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="short_description"  class="form-control" rows="5">{{ $aboutPage->short_description }} </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
                                    <div class="col-sm-10">
                                        <input name="about_image" class="form-control" type="file" id="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                    <div class="col-sm-10">
                                      <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($aboutPage->about_image))? url( $aboutPage->about_image):url('upload/no_image.jpg') }}" alt="Card image cap">
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
