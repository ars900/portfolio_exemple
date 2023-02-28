@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Multi Image All</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                 <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">Multi Image All</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>About Multi Image</th>
                                    <th>Action</th>
                                </tr>
                              </thead>
                            <tbody>
                                @foreach($allMultiImage as $item)
                                <tr>
                                    <td> {{ $item->id}} </td>
                                    <td> <img src="{{ asset($item->multi_image) }}" style="width: 60px; height: 50px;"> </td>
                                    <td>
                                        <form action="{{ route('multi_image.destroy', $item->id) }}" method="post" class=" mt-2">
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
                                <h4 class="mb-sm-0">Add Multi Image</h4>
                            </div>
                            <div class="col-sm-10">
                                <a href="{{ route('multi_image.create') }}"> <input type="button" class="btn btn-info waves-effect waves-light" value="Add"></a>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>


@endsection
