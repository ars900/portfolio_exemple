@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Portfolio All</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Portfolio All Data </h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Portfolio Name</th>
                                <th>Portfolio Title</th>
                                <th>Portfolio Image</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($portfolio as $item)
                                <tr>
                                    <td> {{ $item->id}} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->title }} </td>
                                    <td> <img src="{{ asset($item->image) }}" style="width: 60px; height: 50px;"> </td>
                                    <td>
                                        <a href="{{ route('portfolio.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                                        <form action="{{ route('portfolio.destroy', $item->id) }}" method="post" class=" mt-2">
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
                                <h4 class="mb-sm-0">Add Protfolio</h4>
                            </div>
                            <div class="col-sm-10">
                                <a href="{{ route('portfolio.create') }}"> <input type="button" class="btn btn-info waves-effect waves-light" value="Add"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
