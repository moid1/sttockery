@extends('website.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-bottom: 70px;margin-top:70px">
                    <div class="card-body">
                        <form action="{{ route('forget.password.post') }}" class="checkout__form" method="POST">
                            @csrf
                            <div class="checkout__form__input">
                                <p>Email <span>*</span></p>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @if ($errors->has('email'))
                                    <span class="text-danger" style="color: red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="col-md-12 w-100 text-center" style="width: 100%">
                                <button type="submit" class="site-btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
