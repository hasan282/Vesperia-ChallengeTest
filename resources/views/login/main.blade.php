@extends('layout.basic')

@section('body_class', 'login-page')

@section('div_class', 'login-box')

@section('body')

    <div class="mx-auto mb-3" style="max-width:100px">
        <a href="/" class="link-transparent">
            <img class="img-fluid" src="/image/icon/icon-128.png">
        </a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <p class="text-info">The login system is not yet available. Please press the login button below to continue.</p>

            <a href="/operational-risk" class="btn btn-primary btn-block text-bold">
                <i class="fas fa-sign-in-alt mr-2"></i>Login
            </a>

        </div>
    </div>

@endsection
