@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Plan List')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Validity</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($plans as $plan)
                            <tr>
                                {{-- <td>{{ $plan->id }}</td> --}}
                                <td>{{ $plan->plan_name ?? '' }}</td>
                                <td>{{ $plan->plan_desc ?? ''}}</td>
                                <td>{{ $plan->price ?? ''}}</td>
                                <td>{{ $plan->validity ?? ''}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm"
                                        href="javascript:void(0);"  data-bs-toggle="modal"
                                        data-bs-target="#editModal-{{ $plan->id }}">
                                        <span class="btn-label">
                                            <i class="icons-edit"></i>
                                        </span>
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            <!-- edit Modal -->
<div class="modal fade" id="editModal-{{ $plan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class=""  action="{{route('plan.update',['id'=>$plan->id ?? ''])}}" method="POST">
                    @csrf


                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Plan Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter First Name"
                                    value="{{ $plan->name ?? '' }}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Plan Description</label>
                                <input type="text" class="form-control" name="desc" value="{{ $plan->desc ?? '' }}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter Last Name"
                                    value="{{ $plan->price  ?? ''}}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Validity</label>
                                <input type="text" class="form-control" name="validity" placeholder="Enter Email"
                                    value="{{ $plan->validity ?? '' }}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@stop

@section('page-styles')
<!-- <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}"> -->
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}" />
<style>
td.details-control {
    background: url('../assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}

tr.shown td.details-control {
    background: url('../assets/images/details_close.png') no-repeat center center;
}
</style>
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
@stop
