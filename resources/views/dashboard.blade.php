@extends('layouts.layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My JointLIVE - Dashboard') }}</div>
  
                <div class="card-body">
                    @if (Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
  
                    <h3>Welcome</h3>
                    <a class="btn btn-primary" href="{{ url('students') }}">Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection