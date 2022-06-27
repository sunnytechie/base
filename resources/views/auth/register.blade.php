@extends('layouts.app')

@section('content')
    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                        </a>
                        <h3>Sign Up</h3>
                    </div>
                    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingText" name="name" value="{{ old('name') }}" placeholder="Joshua">
                        <label for="floatingText">Username</label>

                        @error('floatingText')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>

                        @error('floatingInput')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-6 form-floating mb-4">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password">
                            <label style="left: 10px" for="floatingPassword">Password</label>
    
                            @error('floatingPassword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword password-confirm" name="password_confirmation" placeholder="Confirm Password">
                            <label style="left: 10px" for="floatingPassword">Confirm Password</label>
                        </div>
                    </div>
                    


                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Terms and conditions</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-primary">Forgot password?</a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                    
                    @if (Route::has('login'))
                        <p class="text-center mb-0">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
                    @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up End -->
@endsection
