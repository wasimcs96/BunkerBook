@if (session()->has('success'))
<div class="container">
<div class="alert alert-success alert-block">

<button type="button" class="close" data-dismiss="alert">×</button>

<strong>{{session()->get('success')}}</strong>

</div>
</div>
@endif

@if (session()->has('danger'))
<div class="container">
<div class="alert alert-danger alert-block">

<button type="button" class="close" data-dismiss="alert">×</button>

<strong>{{session()->get('danger')}}</strong>

</div>
</div>
@endif

@if (session()->has('error'))
<div class="container">
<div class="alert alert-danger alert-block">

<button type="button" class="close" data-dismiss="alert">×</button>

<strong>{{ session()->get('error') }}</strong>

</div>
</div>
@endif

@if (session()->has('warning'))
<div class="container">
<div class="alert alert-warning alert-block">

<button type="button" class="close" data-dismiss="alert">×</button>

<strong>{{ session()->get('warning') }}</strong>

</div>
</div>
@endif


@if (session()->has('info'))
<div class="container">
<div class="alert alert-info alert-block">

<button type="button" class="close" data-dismiss="alert">×</button>

<strong>{{ session()->get('info') }}</strong>

</div>
</div>
@endif

@if (session()->has('ValidatorError'))
<div class="container">
<div class="alert alert-danger alert-block">

<button type="button" class="close" data-dismiss="alert">×</button>

<strong>{{ session()->get('ValidatorError') }}</strong>

</div>
</div>
@else

@if ($errors->any())
<div class="container">
<div class="alert alert-danger">

<button type="button" class="close" data-dismiss="alert">×</button>
<ul>
@foreach ($errors->all() as $error)
<li>{!! $error !!}</li>
@endforeach
</ul>
</div>
</div>
@endif

@endif