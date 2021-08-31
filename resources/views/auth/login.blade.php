@extends('frontend.main_master')
@section('head')
<title>GrowSup-Login</title>
@endsection
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/login.css') }}">


    <section class="sec-block" style="margin-top: 8%;">
        <div class="services-section" style="background-size: 1920px 1524px;">
            <div class="login-wrap">
                <div class="login-html">
                    
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif


                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"
                        style="color: black;">Sign In</label>
                    <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"
                        style="color: black;">Forgot Password</label>
                    <div class="login-form">
                        <div class="sign-in-htm">

                            <form method="POST" action="{{ isset($guard) ? url($guard . '/login') : route('login') }}">
                                @csrf
                                <div class="group">
                                    <label for="user" class="label" style="color: black;">Email</label>
                                    <input type="text" class="input" id="email" name="email" :value="old('email')" autofocus
                                        required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label" style="color: black;">Password</label>
                                    <input class="input" data-type="password" id="password" type="password" name="password"
                                        required>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign In">
                                </div>
                            </form>

                            <div class="group">

                                <a href="{{ route('register') }}"> <input type="submit" class="button"
                                        value="Registration"></button></a>
                            </div>
                            <div class="hr"></div>
                        </div>
                        <div class="for-pwd-htm">

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="group">
                                    <label for="user" class="label">Username or Email</label>
                                    <input class="input" id="email" type="email" name="email" :value="old('email')" required
                                        autofocus>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Reset Password">
                                </div>
                            </form>
                            <div class="hr"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
