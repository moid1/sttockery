@extends('website.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 70px;margin-top:70px">
                <div class="card-body">
                    <form action="{{ route('register') }}" class="checkout__form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Register</h5>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="checkout__form__input">
                                            <p>Name<span>*</span></p>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
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

                                    <div class="col-lg-6 col-md-6 col-sm-6">
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

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="checkout__form__input">
                                            <p>Confirm Password <span>*</span></p>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="checkout__form__input">
                                            <p>Account Type <span>*</span></p>
                                           <select class="select-form-control" name="account_type">
                                            <option value="" disabled>Please select account type</option>
                                            {{-- //downloader --}}
                                            <option value="1">I want to download</option>
                                            {{-- //uploader --}}
                                            <option value="2">I want to contribute</option>
                                           </select>
                                        </div>
                                    </div>


                                    <div class="col-md-12 w-100 text-center" style="width: 100%">
                                        <button type="submit" class="site-btn">
                                            {{ __('Register') }}
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