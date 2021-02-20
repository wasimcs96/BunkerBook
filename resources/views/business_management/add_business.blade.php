@extends('layout.master')
@section('parentPageTitle', 'Business')
@section('title', 'Add New Business')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">

                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="wizard_horizontal">
                    <h2>First Step</h2>
                    <form method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Parent Category</label>
                            <select name="parent_id" class="form-control" >
                                <option value="">--- Select Parent Category ---</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="">-- Select --</option>
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                       </div>
                       <div class="form-group">
                        Upload Category Image
                   <div class="body"id="nb"  >
                      <input type="file" name="image"class="dropify">
                   </div>

                    </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                    <section>

                    </section>
                    <h2>Second Step</h2>
                    <section>

                    </section>
                    <h2>Third Step</h2>
                    <section>

                    </section>
                    <h2>Forth Step</h2>
                    <section>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-steps/jquery.steps.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-steps/jquery.steps.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/form-wizard.js') }}"></script>
@stop
