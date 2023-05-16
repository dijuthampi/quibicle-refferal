@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}.
                    @if(!empty($user->refferal))                    
                    Your refferel code is <b>{{$user->refferal}}</b>
                    @endif
                    @if($user->name == "Admin")
                    <br><a href="/users">Click here to list the users</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
