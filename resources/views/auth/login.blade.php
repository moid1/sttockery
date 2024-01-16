@extends('website.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 70px;margin-top:70px">
                <div class="card-body">
                    <form action="{{ route('login') }}" class="checkout__form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Login</h5>
                                <div class="row">
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="checkout__form__input">
                                            <p>Email <span>*</span></p>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                        </div>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="checkout__form__input">
                                            <p>Password<span>*</span></p>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    <a href="{{ route('forget.password.get') }}" style="float: right">Forgot Password?</a>
                                    </div>
                                   


                                    <div class="col-md-12 w-100 text-center" style="width: 100%">
                                        <button type="submit" class="site-btn">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection