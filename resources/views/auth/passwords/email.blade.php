@extends("web.layouts.master")
@section('content')
{{-- <div class="forgotMain mainDiv text-center">
    <div class="col-lg-12 text-center mt5">
        <h1>Forgot Your Password?</h1>
        <div class="col-lg-4 offset-lg-4">
            <p class="mb3">Enter your Email address associated with your account and we`ll send you a link to reset your password.</p>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
                <input id="email" type="email" class=" @error('email') is-invalid @enderror col-lg-4 offset-lg-4 mt1" name="email" value="{{ old('email') }}" required placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

           <div class="form-group row mb-5">
            <div class="col-md-4 offset-mt-2">
                <button type="submit"  >
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
            </div>
    </form>
</div> --}}
<div class="forgotMain mainDiv text-center">
    <div class="col-lg-12 text-center mt5">
    <h1>Forgot Your Password?</h1>
    <div class="col-lg-4 offset-lg-4">
    <p class="mb3">Enter your Email address associated with your account and we`ll send you a link to reset your password.</p>
    </div>
    </div>
        <div class="pDiv">
            @if (session('status'))
                <div class="col-lg-4">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="col-lg-4 offset-lg-4 mt1">
                    <input type="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-4 offset-lg-4 mt2">
                    <button type="submit"  >
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
