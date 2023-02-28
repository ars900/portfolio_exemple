@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Blog Category All</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Blog Category All Data </h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Blog Category </th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($blogCategories as $item)
                            <tr>
                                <td> {{ $item->id}} </td>
                                <td> {{ $item->blog_category }} </td>
                                <td>
                                    <form action="{{ route('blog_category.destroy', $item->id) }}" method="post" class=" mt-2">
                                        <button class="btn btn-danger sm" type="submit" title="Delete Data"> <i class="fas fa-trash-alt"></i> </button>
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row mb-3">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Add Blog Category</h4>
                            </div>
                            <div class="col-sm-10">
                                <a href="{{ route('blog_category.create') }}"> <input type="button" class="btn btn-info waves-effect waves-light" value="Add "></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
