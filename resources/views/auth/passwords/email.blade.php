@extends('layouts.app')

@section('content')
<!-- Sign In Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Base</h3>
                        </a>
                        <h3>Request New Password</h3>
                    </div>

                    <div class="alert-div">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com"  name="email" value="{{ old('email') }}" autocomplete="email">
                        <label for="floatingInput">Email address</label>

                        @error('floatingInput')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">{{ __('Send Password Reset Link') }}</button>
                    @if (Route::has('register'))
                    <p class="text-center mb-0">Don't have an Account? <a href="{{ route('register') }}">Sign Up</a></p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Sign In End -->
@endsection
