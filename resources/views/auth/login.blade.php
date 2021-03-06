@extends('layouts.app')

@section('content')
<!-- Sign In Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <form method="POST" action="{{ route('login') }}" autocomplete="off">
                @csrf
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Base</h3>
                        </a>
                        <h3>Sign In</h3>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com"  name="email" value="{{ old('email') }}" autocomplete="email">
                        <label for="floatingInput">Email address</label>
                    </div>

                    @error('floatingInput')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
                        <label for="floatingPassword">Password</label>
                        
                        @error('floatingPassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>

                            {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1 remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">Remember me</label> --}}
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot Password</a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
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
