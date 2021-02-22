@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'User List')


@section('content')


<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li><a href="#addUserModal" class="btn btn-outline-primary float-right" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="icon-plus"></i> Add
                            User</a></li>
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
                                <th>Profile</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id ?? '' }}</td>
                                <td>{{ $user->profile ?? '' }}</td>
                                <td>{{ $user->first_name ?? '' }}</td>
                                <td>{{ $user->last_name ?? '' }}</td>
                                <td>{{ $user->email ?? '' }}</td>
                                <td>{{ $user->mobile ?? '' }}</td>
                                <td>{{ $user->address ?? '' }}</td>
                                <td>
                                    <a class="btn btn-secondary btn-sm"
                                        href="{{ route('users.edit',['id'=>$user->id]) }}" data-bs-toggle="modal"
                                        data-bs-target="#editModal">
                                        <span class="btn-label">
                                            <i class="icons-edit"></i>
                                        </span>
                                        Edit
                                    </a>

                                    <a class="btn btn-success btn-sm" href="{{ route('users.show',['id'=>$user->id]) }}">
                                        <span class="btn-label">
                                            <i class="icons-eye"></i>
                                        </span>
                                        Plan Info
                                    </a>
                                    <a class="btn btn-danger btn-sm"
                                        href="{{ route('users.destroy',['id'=>$user->id]) }}">
                                        <span class="btn-label">
                                            <i class="icons-trash"></i>
                                        </span>
                                        Delete
                                    </a>
                                    <a class="btn btn-warning btn-sm">
                                        <span class="btn-label">
                                            <i class="icons-eye"></i>
                                        </span>
                                        Memebership Transaction
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Button trigger modal -->

<!-- Create Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name"
                                    value="">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Profile</label>
                                <input type="file" class="form-control" name="profile" value="">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name"
                                    value="">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                    value="">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter Password" value="">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Mobile</label>
                                <input type="number" class="form-control" name="mobile"
                                    placeholder="Enter Mobile Number" value="">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">plan</label>
                                <select class="form-control" name="plan_id">
                                    <option value="1">Annual Plan</option>
                                    <option value="2">Half Year Plan</option>

                                </select>
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="first_name"
                                    value="{{ $user->first_name}}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Profile</label>
                                <input type="file" class="form-control" name="profile" value="{{ $user->profile }}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="last_name"
                                    value="{{ $user->last_name }}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email"
                                    value="{{ $user->email }}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password"
                                    value="{{ $user->password }}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">Mobile</label>
                                <input type="number" class="form-control" name="mobile"
                                    value="{{ $user->mobile }}">
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="">plan</label>
                                <input type="number" class="form-control" name="plan"
                                    value="{{ $user->plan }}">
                                <select class="form-control" name="plan_id">
                                    <option value="1">Annual Plan</option>
                                    <option value="2">Half Year Plan</option>

                                </select>
                                <p id="erremail" class="mb-0 text-danger em"></p>
                            </div>
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
