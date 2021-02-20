@extends('frontEnd.layout.master')
@section('title','Book a Consultant')


@section('content')

	<!-- Start header
    ============================================= -->
    @include('frontEnd.layout.header')
    <!-- End header -->

	<div class="clearfix"></div>

	<main class="main">

		<!-- Start Breadcrumb
		=============================================style="background: url(assets/img/breadcrumb/breadcrumb.jpg)"> -->
		<div class="site-breadcrumb" data-background="{{asset('frontEnd/assets/img/partner/brand-5.jpg')}}" >
			<div class="breadcrumb-circle">
				<img src="{{asset('frontEnd/assets/img/header/header-shape-2.png')}}" class="hero-circle-1" alt="thumb">
			</div>
			<div class="container">
                <div class=kkll>
               <img class="ddgghh"src="{{asset('frontEnd/assets/img/team/team-2.jpg')}}" >
                <h2 class="breadcrumb-title">John Wick</h2>
				<ul class="breadcrumb-menu clearfix">
					<li><a href="index.html">About</a></li>
					<li class="active"><span>Since </span> : <span> 01:08:2020</span></li>
                </ul>
                </div>
			</div>
		</div>
		<!-- End  Breadcrumb -->



        </div>
    </div>

		<!-- Start Team-2
		============================================= -->

		<!-- End Team-2 -->

	</main>


<div class="container cta-right" >
    <h2 style="align-content: center">BOOK NOW</h2>
    <div class="form-group">
         <form name="add_name" id="add_name">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">University  Name</label>
                    <input type="text" class=" form-control FulNam" name="name" id="name">
                    <span class="alert alert-error"></span>
                </div>

            </div>
            <div class="col-md-12">

            <div class="input-group mb-3 FulNam" >
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Course</label>
                </div>
                <select class="custom-select FulNamo"  id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>

            <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
            </div>


            <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
            </div>

            <div class="col-md-12">

            <div class="table-responsive" style="width: 100%;     margin-top: 36px;">
                <label for="name">University  Name</label>
                <table class="table table-bordered" id="dynamic_field">
                    <tr>
                        <td> <select id="inputState" class="form-control FulNamo" >
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select></td>
                        <td><button type="button" name="add" id="add" class="btn btn-m">Add More</button></td>
                    </tr>
                </table>
            </div>
        </div>
            <input type="button" name="submit" id="submit" class="btn cus-btn" value="Submit" />

         </form>
    </div>
</div>

@endsection

@section('per_page_script')

<script type="text/javascript">
    $(document).ready(function(){
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;


      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><select id="inputState" class="form-control"><option selected>Choose...</option> <option>...</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });


      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $('#submit').click(function(){
           $.ajax({
                url:postURL,
                method:"POST",
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }
           });
      });


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });
</script>

@endsection
