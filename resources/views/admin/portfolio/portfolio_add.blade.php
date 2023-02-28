@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ Route::currentRouteNamed('portfolio.create') ? __('Add Portfolio Page') : __('Edit Portfolio Page')  }}</h4>
                        <form method="post" action="{{ Route::currentRouteNamed('portfolio.create') ? route('portfolio.store') : route('portfolio.update',$portfolio) }}" enctype="multipart/form-data">
                            @csrf
                            @method(Route::currentRouteNamed('portfolio.create') ? 'POST' : 'PUT')
                            <div class="row mb-3">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Name</label>
                                  <div class="col-sm-10">
                                      <input name="name" class="form-control" value = "{{ old('name') ?? (isset($portfolio) ? $portfolio->name : '')  }}"type="text" id="example-text-input">
                                      @error('name')
                                      <span class="text-danger"> {{ $message }} </span>
                                      @enderror
                                  </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Title </label>
                                 <div class="col-sm-10">
                                      <input name="title" class="form-control" value = "{{ old('title') ?? (isset($portfolio) ? $portfolio->title : '')  }}" type="text" id="example-text-input">
                                   @error('title')
                                     <span class="text-danger"> {{ $message }} </span>
                                   @enderror
                                 </div>
                            </div>
                            <div class="row mb-3">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Image </label>
                                  <div class="col-sm-10">
                                       <input name="image" class="form-control" type="file" id="image">
                                  </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                <div class="col-sm-10">
                                   <img id="showImage" class="rounded avatar-lg" src="{{ old(url('upload/no_image.jpg')) ?? (isset($blog) ? asset($blog->image) : url('upload/no_image.jpg')) }}" alt="Card image cap">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
