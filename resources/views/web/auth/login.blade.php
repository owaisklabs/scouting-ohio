@extends('web.layouts.master')

@section('content')
           <div class="loginMain mainDiv text-center">
               <form method="POST" action="{{route('web_login')}}">
                @csrf
                <div class="col-lg-12 text-center mt5">
                    <h1>Hey! We're Glad You're Back!</h1>
                    <p class="mb3">Sign into Your Account</p>
                </div>
                <div class="pDiv">
                <div class="col-lg-4 offset-lg-4 mt1">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="col-lg-4 offset-lg-4 mt1">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="col-lg-4 offset-lg-4 mt1 d-flex justify-content-between">
                    <div class="remember">
                        <label class="container2">Remember me
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="forgot">
                        <a href="{{ route('password.request') }}" target="_blank">Forgot password?</a>
                    </div>
                </div>
            </form>
                <div class="col-lg-4 offset-lg-4 mt3">
                    <button type="submit">Sign In</button>
                </div>
                <div class="col-lg-4 offset-lg-4 mt2 ">
                    <div class="newHere text-center">
                        New here? <a href="{{route('web_register')}}">Click here</a> to get started!
                    </div>
                </div>
                </div>
            </div>
@endsection


