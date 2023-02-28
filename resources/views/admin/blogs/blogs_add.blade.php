@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ Route::currentRouteNamed('blog.create') ? __('Add Blog Page') : __('Edit Blog Page')  }} </h4>
                        <form method="post" action="{{ Route::currentRouteNamed('blog.create') ? route('blog.store') : route('blog.update',$blog) }}" enctype="multipart/form-data">
                            @csrf
                            @method(Route::currentRouteNamed('blog.create') ? 'POST' : 'PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                                <div class="col-sm-10">
                                    <select name="blog_category_id" class="form-select" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}" {{ old('blog_category_id') && old('blog_category_id') === $cat->id ? 'selected' : (isset($blog) && $blog->blog_category_id === $cat->id ? 'selected' : '') }}> {{$cat->blog_category}} </option>
                                        @endforeach
                                    </select>
                               </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title </label>
                                <div class="col-sm-10">
                                    <input name="title" value="{{ old('title') ?? (isset($blog) ? $blog->title : '')  }}" class="form-control" type="text" id="example-text-input">
                                    @error('title')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags </label>
                                <div class="col-sm-10">
                                    <input name="tags" value="{{ old('tags') ?? (isset($blog) ? $blog->tags : '')  }}" class="form-control" type="text" data-role="tagsinput">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Description </label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="description">{{ old('description') ?? (isset($blog) ? $blog->description : '')  }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image </label>
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
                                  <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
