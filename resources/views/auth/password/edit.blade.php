@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary" >
            <div class="box-header with-border">
                <h3 class="box-title">Change Password</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            <div class="box-body">
            @include('laravel-password-update::bootstrap3.horizontal-form')
            </div>
            </div>
        </div>
    </div>
</div>


@endsection