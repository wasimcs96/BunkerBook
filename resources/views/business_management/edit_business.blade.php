@extends('layout.master')
@section('parentPageTitle', 'Business')
@section('title', 'Edit Business')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body wizard_validation">
                <form id="wizard_with_validation" action="{{route('business.update',$buisness->id)}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <h3>Basic Details</h3>
                    <fieldset>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label>Select Plan</label>
                                    <select class="form-select" name="plan" aria-label="Default select example"
                                        style="width: -webkit-fill-available;border: solid 1px #ccc;padding: .375rem .75rem;"
                                        required>
                                        <option value="">-- Select Type --</option>
                                        <option value="0" @if(isset($buisness->plan_type) && $buisness->plan_type==0)selected @endif>Standard</option>
                                        <option value="1" @if(isset($buisness->plan_type) && $buisness->plan_type==1)selected @endif>Premium</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 my-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $buisness->name ?? ''  }}" placeholder="Name *" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <?php 
                                $emails = explode(',',$buisness->email);
                            ?>
                            @foreach ($emails as $email)
                           
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email[]" value="{{ $email }}" placeholder="Email *" class="form-control"
                                            required>
                                    </div>
                                </div>
                           
                            @endforeach
                            <div class="custm">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="javascript:void(0);" class="add_button2 btn btn-warning btn-sm"
                                        title="Add field">Add More fields</a>
                                </div>
                            </div>


                            <?php 
                                $categories = explode(',',$buisness->category);
                            ?>
                            <div class="col-md-12 my-3">
                                <label>Select Category</label>
                                <div class="multiselect_div">
                                    <?php $category= App\Models\Category::all(); ?>
                                    <select id="multiselect1" name="category[]" class="selectpicker" multiple
                                        data-live-search="true">
                                        @foreach($category as $cat)
                                        <option value="{{ $cat->id }}" @if(in_array($cat->id,$categories))selected @endif>{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <?php 
                            $website = explode(',',$buisness->website);
                            ?>
                         @foreach($website as $web)
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Website</label>
                                        <input type="text" name="website[]" value="{{ $web }}" class="form-control">
                                    </div>
                                </div>
                            
                            @endforeach
                            <div class="field_wrapper1">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="javascript:void(0);" class="add_button1 btn btn-warning btn-sm"
                                        title="Add field">Add More fields</a>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="number" name="mobile" placeholder="Mobile" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div> -->
                            <?php 
                                $landline = explode(',',$buisness->landline);
                            ?>
                            @foreach($landline as $line)
                         
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Landline</label>
                                        <input type="number" name="landline[]" value="{{ $line }}" class="form-control">
                                    </div>
                                </div>
                           
                            @endforeach
                            <div class="field_wrapper">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="javascript:void(0);" class="add_button btn btn-warning btn-sm"
                                        title="Add field">Add More fields</a>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <input type="text" name="address" id="address" value="{{ $buisness->address ?? ''  }}"
                                        class="form-control geocomplete pac-target-input" placeholder="Enter a location"
                                        autocomplete="off">
                                    <input type="hidden" id="lat" name="lat" value="">
                                    <input type="hidden" id="long" name="lng" value="">

                                    <span class="msg_alert_class" id="addressMsg"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                <label class="control-label">Country</label>
                                    <select name="country" id="country" class="srs-in rounded" value="{{ $buisness->country ?? ''  }}"
                                        style="width: -webkit-fill-available;border: solid 1px #ccc;padding: .375rem .75rem;"
                                        placeholder="Search Any Country .....">
                                        <?php $country=App\Models\Country::all(); ?>
                                        @foreach($country as $count)
                                        <option value="{{ $count->id ?? '' }}">{{ $count->name ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">24/7</label>
                                   <input type="checkbox" name="business_time" id="business_time" value="" class="form-control">
                                   <span class="msg_alert_class" id="start_timeMsg"></span>
                                </div>
                             </div> --}}
                          
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Bussiness Profile</label>
                                    <input type="file" name="business_profile" accept="image/*" class="form-control">
                                </div>
                            </div>
                            <div class="container">
                                <img src="{{ $buisness->business_profile ?? ''  }}" style="width:160px; height:80px;" alt="">
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Featured Banner Image</label>
                                    <input type="file" name="featured_banner_image" accept="image/*"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="container">
                                <img src="{{ $buisness->featured_banner_image ?? ''  }}" style="width:160px; height:80px;" alt="">
                            </div>

                        </div>
                    </fieldset>

                    <h3>Overview Detail</h3>
                    <fieldset>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">About Us</label>

                                <textarea name="about" maxlength="150" minlength="140" class="form-control">{{ $buisness->about }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Ports of Operation</label>

                                <textarea name="ports_of_operation" class="form-control">{{ $buisness->ports_of_operation }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="fancy-checkbox col-md-6" style="display: flex;align-items: flex-end;">
                                <label><input type="checkbox"  id="chkPassport" onclick="myFunction()" @if(isset($buisness->business_time)&&$buisness->business_time == 1)checked @endif name="business_time"
                                        value="1" style="width: 20px; height: 20px;"><span style="font-size: 15px;margin-left: 6px;color: black;">24/7</span></label>
                            </div>
                        </div>
                        <div id="uniname">
                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Operating Hours Start</label>
                                    <input type="time" name="start_time" id="start_time" value="{{ $buisness->start_time ?? ''}}" class="form-control">
                                    <span class="msg_alert_class" id="start_timeMsg"></span>
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Operating Hours End</label>
                                    <input type="time" name="end_time" id="end_time" value="{{ $buisness->end_time ?? ''}}" class="form-control">
                                    <span class="msg_alert_class" id="end_timeMsg"></span>
                                </div>
                            </div>
                        <div>
                      

                              
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Office Hours</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Sunday</label>
                    <select name="sunday" id="sunday" class="form-control">
                        <option value="open" @if(isset($buisness->sunday) && $buisness->sunday=='open')selected @endif>Open</option>
                        <option value="close" @if(isset($buisness->sunday) && $buisness->sunday=='close')selected @endif>Close</option>
                    </select>
                </div>
            </div>
           {{-- <div class="row"> --}}
            <div class="row" id="sundayDiv">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="sunday_start_time" id="sunday_start_time" value="{{ $buisness->sunday_start_time ?? ''}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="sunday_end_time" id="sunday_end_time" value="{{ $buisness->sunday_end_time ?? ''}}" class="form-control">
                    </div>
                </div>
            </div>
           {{-- </div> --}}
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Monday</label>
                    <select name="monday" id="monday" class="form-control">
                        <option value="open" @if(isset($buisness->monday) && $buisness->monday=='open')selected @endif>Open</option>
                        <option value="close" @if(isset($buisness->monday) && $buisness->monday=='close')selected @endif>Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="mondayDiv">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time"name="monday_start_time"id="monday_start_time" value="{{ $buisness->monday_start_time ?? ''}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="monday_end_time" id="monday_end_time" value="{{ $buisness->monday_end_time ?? ''}}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Tuesday</label>
                    <select name="tuesday" id="tuesday" class="form-control">
                        <option value="open" @if(isset($buisness->tuesday) && $buisness->tuesday=='open')selected @endif>Open</option>
                        <option value="close" @if(isset($buisness->tuesday) && $buisness->tuesday=='close')selected @endif>Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="tuesdayDiv" >

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="tuesday_start_time" id="tuesday_start_time" value="{{ $buisness->tuesday_start_time ?? '' }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="tuesday_end_time" id="tuesday_end_time" value="{{ $buisness->tuesday_end_time ?? '' }}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Wednesday</label>
                    <select name="wednesday" id="wednesday" class="form-control">
                        <option value="open" @if(isset($buisness->wednesday) && $buisness->wednesday=='open')selected @endif>Open</option>
                        <option value="close" @if(isset($buisness->wednesday) && $buisness->wednesday=='close')selected @endif>Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="wednesdayDiv" >

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time"name="wednesday_start_time"id="wednesday_start_time" value="{{ $buisness->wednesday_start_time ?? ''}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="wednesday_end_time"  value="{{ $buisness->wednesday_end_time ?? '' }}" id="wednesday_end_time" value="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Thursday</label>
                    <select name="thursday" @if(isset($buisness->thrusday) && $buisness->thrusday=='open')selected @endif id="thursday" class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="thursdayDiv" >

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="thursday_start_time"  value="{{ $buisness->thrusday_start_time ?? ''}}" id="thursday_start_time"value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="thursday_end_time"  value="{{ $buisness->thrusday_end_time ?? ''}}" id="thursday_end_time" value=""class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Friday</label>
                    <select name="friday" id="friday"  @if(isset($buisness->friday) && $buisness->friday=='open')selected @endif class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="fridayDiv" >

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="friday_start_time"  value="{{ $buisness->friday_start_time ?? '' }}" id="friday_start_time" value=""class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="friday_end_time"  value="{{ $buisness->friday_end_time ?? '' }}" id="friday_end_time" value=""class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Saturday</label>
                    <select name="Saturday" id="saturday"  @if(isset($buisness->saturday) && $buisness->saturday=='open')selected @endif class="form-control">
                        <option value="open">Open</option>
                        <option value="close">Close</option>
                    </select>
                </div>
            </div>
            <div class="row" id="saturdayDiv" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours Start</label>
                        <input type="time" name="Saturday_start_time"  value="{{ $buisness->saturday_start_time ?? '' }}" id="Saturday_start_time"value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hours End</label>
                        <input type="time" name="Saturday_end_time"  value="{{ $buisness->saturday_end_time ?? '' }}" id="sunday_end_time" value=""class="form-control">
                    </div>
                    </div>
                </div>
                        </div>

                    </fieldset>

                    <h3>Personal Detail</h3>

                    <fieldset><?php $businestaf = $buisness->businessStaff;?>
                        {{-- {{dd($buisness->businessStaff)}} --}}
                        @if($businestaf->count()>0)
                        <?php $key=1;?>
                        @foreach($businestaf as $staff)
                        
                        <div class="col-md-12">
                           
                                <div class="form-group">
                                    <label class="control-label">Staff Detail</label>
                                    <input type="text" name="staff[{{$key}}][staff_name]" value="{{$staff->staff_name}}" placeholder="Name"
                                        class="form-control my-3">
                                    <input type="text" name="staff[{{$key}}][staff_job_title]" value=""
                                        placeholder="Job title" class="form-control my-3">
                                    <input type="text" name="staff[{{$key}}][staff_email]" value="" placeholder="Email"
                                        class="form-control my-3">
                                    <input type="mobile" name="staff[{{$key}}][staff_mobile]" value="" placeholder="Mobile"
                                        class="form-control my-3">
                                    <input type="text" name="staff[{{$key}}][staff_skype]" value="" placeholder="Skype Id"
                                        class="form-control my-3">
                                    <textarea name="staff[{{$key}}][staff_about]" placeholder="About"
                                        class="form-control my-3"></textarea>
                                    <input type="file" name="staff[{{$key}}][staff_profile]" value="" placeholder="Profile"
                                        accept="image/*" class="form-control my-3">
                                </div>

                           
                        </div>
                        <?php $key++;?>
                        @endforeach
                        @endif
                        <div class="field_wrapper_ my-3">
                            <div class="col-md-12">
                                <div class="field_wrapper_staff">
                                  
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="javascript:void(0);" class="add_staff_button btn btn-warning btn-sm"
                                        title="Add field">Add More Staff</a>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h3>Photos</h3>
                    <fieldset>
                        <div class="form-group">
                            <label class=" form-control-label">Photos </label><br>

                            <div class="upload-btn-wrapper">

                                <!-- <button type="button" class="btn_upload" id="upBtn">Upload a file</button> -->

                                <input type="file" name="business_photos[]" id="photos" class="form-control imageUpload"
                                    multiple>
                            </div>
                            <!-- <input name="" id="photo" type="file" class="dropify-frrr" > -->

                            <div id="preview" class="col-md-12">
                                <?php $busimg = $buisness->businessImage; ?>
                            @foreach($busimg as $image)
                       
                            <div style="margin-left:24px; "  id="{{$image->id}}">
                                <input type="text" class="" value="{{$image->id}}" name="media_id" hidden>
                                  <div class="img-responsive iws">
                                      <a class="light-link" href="{{asset($image->image)}}"><img class="img-fluid rounded" src="{{asset($image->image)}}"  alt="" style="position: relative;   display: inline-block;  width:200px; height:142.82px;"></a>
                                      <br>
                                      <br>

                                      <div class="card-body">
                                          <span class="closes" custom2="{{$image->id}}"  title="Delete" ><a href="javascript:void(0)" id="deleteRecord" custom1="{{$image->id}}" data-id="{{$buisness->id}}" >&times;</a></span>

                                      </div>
                                  </div>
                                </div>
                            @endforeach
                            </div>



                        </div>
                    </fieldset>

                    <h3>Videos</h3>
                    <fieldset>

                       
                            <?php $businesvideo = $buisness->BusinessVideo ?>
                            @foreach($businesvideo as $video)
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Youtube Link</label>
                                    <input type="text" name="youtube_video[]" value="" class="form-control">
                                </div>
                            </div>
                            @endforeach
                            <div class="field_wrapperyoutube_link">
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="javascript:void(0);" class="add_buttonyoutube_link btn btn-warning btn-sm"
                                    title="Add field">Add More fields</a>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-steps/jquery.steps.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<style>


    .iws {
        position: relative;
        display: inline-block;
    
        font-size: 0;
    }
    .iws .closes {
        position: absolute;
        top: 5px;
        right: 8px;
        z-index: 6;
        background-color:#22252a;
        padding: 4px 3px;
    
        color: #000;
        font-weight: bold;
        cursor: pointer;
    
        text-align: center;
        font-size: 22px;
        line-height: 10px;
        border-radius: 50%;
        border:1px solid #22252a;
    }
    .iws:hover .closes {
        opacity: 1;
    }
                    </style>
@stop

@section('page-script')

<script src="{{ asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<!-- Bootstrap Colorpicker Js -->
<script src="{{ asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
<!-- Input Mask Plugin Js -->
<script src="{{ asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
{{-- <script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
<!-- Multi Select Plugin Js --> --}}
{{-- <script src="{{ asset('js/admin/jquery.min.js') }}"></script> --}}
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset('assets/vendor/nouislider/nouislider.js') }}"></script><!-- noUISlider Plugin Js -->
<script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-steps/jquery.steps.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" type="text/javascript"></script>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=y8edi4divxwsplcdd28rzuyx245zbzdndm22yzhuaanemki5">
</script>
{{-- <script src="https://www.matrixmaritimemedia.com/bunkerbook/assets/js/jquery.geocomplete.min.js"></script> --}}


<script src="{{ asset('assets/js/pages/forms/form-wizard.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>

<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

<script type="text/javascript">
$(document).ready(function() {
    var maxField = 5; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = ' <div class="rowField' + x +
                '" ><div class="col-md-9"><div class="form-group"><label class="control-label">Landline</label><input type="number" name="landline[]" value="" class="form-control"> </div></div><div class="col-md-3"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-sm remove_button" id="' +
                x + '">Delete</a></div></div></div>'; //New input field html

            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });


    var add_staff_button = $('.add_staff_button');
    var wrapper_staff = $('.field_wrapper_staff');
    var maxFieldstaff = 100;
    var y = 1;
    var inc = {{$key}};
    $(add_staff_button).click(function() {
        //Check maximum number of input fields
        if (y < maxFieldstaff) {
            y++; //Increment field counter

            var fieldHTML_staff = ' <div class="rowField_staff' + y +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Staff Detail <a href="javascript:void(0);" style="margin-top: 0px;" class="btn btn-danger btn-sm remove_button_staff" id="' +
                y + '">X</a> </label> <input type="text" name="staff[' + inc +
                '][staff_name]"  value="" placeholder="Name" class="my-3 form-control"><input type="text" name="staff[' +
                inc +
                '][staff_job_title]"  value="" placeholder="Job title" class="my-3 form-control"><input type="text" name="staff[' +
                inc +
                '][staff_email]"  value="" placeholder="Email" class="my-3 form-control"><input type="number" name="staff[' +
                inc +
                '][staff_mobile]"  value="" placeholder="Mobile" class="my-3 form-control"><input type="text" name="staff[' +
                inc +
                '][staff_skype]"  value="" placeholder="Skype Id" class="my-3 form-control"><textarea name="staff[' +
                inc +
                '][staff_about]"   placeholder="About" class="my-3 form-control" ></textarea><input type="file" name="staff[' +
                inc +
                '][staff_profile]"   value="" placeholder="Profile" accept="image/*" class="my-3 form-control"> </div></div></div>'; //New input field html

            $(wrapper_staff).append(fieldHTML_staff); //Add field html
            inc++;
        }
    });

    //Once remove button is clicked
    $(wrapper_staff).on('click', '.remove_button_staff', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField_staff' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });

});





jQuery(function() {

    jQuery(document).on("change", "#videos", function()

        {
            var total_file_video = document.getElementById("videos").files.length;

            var divvideo = jQuery("#videopreview video").length;



            for (var j = 0; j < total_file_video; j++) {

                m = divvideo + 1;

                $('#videopreview').append('<div class="img_div col-md-3" id="cancelvideo' + m +
                    '"><span style="cursor:pointer;background: red;color: white;border-radius: 10px;padding: 5px;" class="cancel_cls" onclick="removeVideo(' +
                    m + ')">X</span><video controls width="200"><source src=' + URL.createObjectURL(
                        event.target.files[j]) +
                    ' type="video/mp4"></video><br><input type="file" name="video_orignal[]" class="form-control imageUpload" id="video_orignal' +
                    m + '" accept="video/*" style="display:none;"></div>');

                document.querySelector("#video_orignal" + m).files = document.querySelector("#videos")
                    .files;

            }

            jQuery('#upvideoBtn').html('Add New');

        });

});



function removeVideo(i) {

    var divvideo = jQuery("#videopreview video").length;



    if (divvideo <= 1) {

        jQuery('#upvideoBtn').html('Upload a file');

    }

    jQuery('#cancelvideo' + i).remove();



}
</script>

<script>
function step_2_next() {

    $('#nameMsg').html('');
    var name = $('#name_new').val();
    if (name == '') {
        $('#nameMsg').html('Please enter name.');
        $("#name_new").focus();
        return false;
    }

    $('#addressMsg').html('');
    var address = $('#address').val();
    if (address == '') {
        $('#addressMsg').html('Please enter address.');
        $("#address").focus();
        return false;
    }
    $('#countryMsg').html('');
    var country = $('#country').val();
    if (country == '') {
        $('#countryMsg').html('Please enter country.');
        $("#country").focus();
        return false;
    }




    return false;

}

jQuery(function() {

    jQuery(document).on("change", "#sunday", function() {
        var sunday = $('#sunday').val();

        if (sunday == 'close') {
            $('#sundayDiv').css('display', 'none');
            //$("#sunday_start_time").attr(" ", false);
            //$("#sunday_end_time").attr(" ", false);

        } else {
            $('#sundayDiv').css('display', 'block');
            // $("#sunday_start_time").attr(" ", true);
            //$("#sunday_end_time").attr(" ", true);
        }
    });

    jQuery(document).on("change", "#monday", function() {
        var monday = $('#monday').val();

        if (monday == 'close') {
            $('#mondayDiv').css('display', 'none');


        } else {
            $('#mondayDiv').css('display', 'block');

        }
    });

    jQuery(document).on("change", "#tuesday", function() {
        var tuesday = $('#tuesday').val();

        if (tuesday == 'close') {
            $('#tuesdayDiv').css('display', 'none');


        } else {
            $('#tuesdayDiv').css('display', 'block');

        }
    });
    jQuery(document).on("change", "#wednesday", function() {
        var wednesday = $('#wednesday').val();

        if (wednesday == 'close') {
            $('#wednesdayDiv').css('display', 'none');


        } else {
            $('#wednesdayDiv').css('display', 'block');

        }
    });
    jQuery(document).on("change", "#thursday", function() {
        var thursday = $('#thursday').val();

        if (thursday == 'close') {
            $('#thursdayDiv').css('display', 'none');


        } else {
            $('#thursdayDiv').css('display', 'block');

        }
    });
    jQuery(document).on("change", "#friday", function() {
        var friday = $('#friday').val();

        if (friday == 'close') {
            $('#fridayDiv').css('display', 'none');


        } else {
            $('#fridayDiv').css('display', 'block');

        }
    });
    jQuery(document).on("change", "#saturday", function() {
        var saturday = $('#saturday').val();

        if (saturday == 'close') {
            $('#saturdayDiv').css('display', 'none');


        } else {
            $('#saturdayDiv').css('display', 'block');

        }
    });

});
</script>



<script>
//     $(document).ready(function() {

//        $(".chosen").chosen();
//        $('.chosen-toggle').each(function(index) {
//       console.log(index);
//           $(this).on('click', function(){
//           console.log($(this).parent().find('option').text());
//                $(this).parent().find('option').prop('selected', $(this).hasClass('select')).parent().trigger('chosen:updated');
//           });
//   });
//   });

$(document).ready(function() {
    var maxField = 5; //Input fields increment limitation
    var addButton = $('.add_button1'); //Add button selector
    var wrapper = $('.field_wrapper1'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = ' <div class="rowField1' + x +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Website</label><input type="text" name="website[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-sm remove_button1" id="' +
                x + '">Delete</a></div></div></div>'; //New input field html

            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button1', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField1' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });




});
$(document).ready(function() {
    var maxField = 5; //Input fields increment limitation
    var addButton = $('.add_button2'); //Add button selector
    var wrapper = $('.custm'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = ' <div class="rowField2' + x +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Email</label><input type="email" name="email[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-sm remove_button2" id="' +
                x + '">Delete</a></div></div></div>'; //New input field html

            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button2', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField2' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });




});


$(document).ready(function() {
    var maxField = 5; //Input fields increment limitation
    var addButton = $('.add_buttonyoutube_link'); //Add button selector
    var wrapper = $('.field_wrapperyoutube_link'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = ' <div class="rowField1' + x +
                '" ><div class="col-md-12"><div class="form-group"><label class="control-label">Youtube Link</label><input type="text" name="youtube_video[]" value="" class="form-control"> </div></div><div class="col-md-12"><div class="form-group"><a href="javascript:void(0);" style="margin-top: 28px;" class="btn btn-danger btn-sm remove_buttonyoutube_link" id="' + x + '">Delete</a></div></div></div>'; //New input field html

            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_buttonyoutube_link', function(e) {
        e.preventDefault();
        var current_id = $(this).attr('id');
        console.log(current_id);

        $('.rowField1' + current_id).remove(); //Remove field html
        x--; //Decrement field counter
    });




});
</script>
<script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>

<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>


<script>
$('.dropify-frrr').dropify({
    messages: {
        default: 'Upload Image',
        replace: 'Upload  Image',
        remove: 'Cancel',
        error: 'Sorry,the file is too large'
    }
});
</script>


{{-- <script type="text/javascript">
    $(function () {
        $("#chkPassport").click(function () {
            console.log('sdsdsd');
            if ($(this).is("checked")) {
                $("#uniname").show();
            } else {
                $("#uniname").style('display:none');
            }
        });
    });

    
</script> --}}
<script>
    function myFunction() {
// Get the checkbox
var checkBox = document.getElementById("chkPassport");
// Get the output text
var text = document.getElementById("uniname");

// If the checkbox is checked, display the output text
if (checkBox.checked == true){
text.style.display = "none";
} else {
text.style.display = "block";
}
}
</script>

<script>
    $(document).ready(function(){
    var media_id="";
    $('.closes').on('click',function(){
    
    
        var media_id = $(this).attr('custom2');
    console.log(media_id);
    document.getElementById(media_id).style.display="none";
    console.log(media_id);
            $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
                });
                $.ajax({
                    type: "post",
                    url: "{{route('businessimage.destroy')}}",
                    data: {media_id: media_id},
                    success: function (result) {
                        console.log('success');
    
                    }
                });
    
    
    
    });
    });
     </script>

@stop