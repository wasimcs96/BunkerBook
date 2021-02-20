@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>   @if (auth()->user()->isAdmin())
                superadmin

                 @endif
                  @if (auth()->user()->isUniversity())
                    University

                     @endif
                     @if (auth()->user()->isConsultant())
                     Consultant

                      @endif
                      @if (auth()->user()->isClient())
                      Client

                       @endif
                </h1>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
