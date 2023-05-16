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

                  <table class="col-sm-12">
                    <tr>
                        <th class="col-sm-3">Name</th>
                        <th class="col-sm-3">Refferal</th>
                        <th class="col-sm-2">Points</th>
                        <th class="col-sm-2">Level</th>
                        <th class="col-sm-2">Refferal by</th>
                    </tr>
                    @foreach($userArr as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->refferal}}</td>
                        <td>{{$user->refCount}}</td>
                        <td>{{$user->level}}</td>
                        <td>{{$user->refferedBy}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
