@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Blog Category Front </h4> <br><br>

            <form method="post" id="myForm" action="{{ route('store.blog.category') }}" >
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                <div class="form-group col-sm-10">
                    <input name="blog_category" class="form-control" type="text" id="example-text-input">

                </div>
            </div>
            <!-- end row -->


<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Category">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                blog_category: {
                    required : true,
                },
            },
            messages :{
                blog_category: {
                    required : 'Please Enter Blog Category',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>


@endsection


    <div class="card card_create_custom">
        <div class="card-header">
            <div class="form-row">
                <div class="col-md-12">
                    <h5 class="mt-2">{{ Route::currentRouteNamed('department.create') ? __('general.add') : __('general.edit')  }} {{ Route::currentRouteNamed('department.create') ?  __('general.department_id') :  __('general.department_id')  }}</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ Route::currentRouteNamed('department.create') ? route('department.store') : route('department.update', $department) }}" autocomplete="off">
                @csrf
                @method( Route::currentRouteNamed('department.create') ? 'POST' : 'PUT')

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name" class="col-form-label">{{__('general.name')}}</label>
                                <label for="name" class="col-form-label">@lang('general.name')</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? (isset($department) ? $department->name : '')  }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('name') }}</strong></span>
                                @endif
                                @error('name')<span class="error invalid-feedback">{{ $message }}</span>@enderror

                            </div>

                        </div>
                    </div>

                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-green">{{__('general.save')}}</button>
                    <a class="btn btn-dark" href="{{ route('department.index') }}">{{__('general.cancel')}}</a>
                </div>
            </form>
        </div>
    </div>
@endsection
