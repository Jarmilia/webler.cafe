@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center artContent">
        <div class="col-md-8">
            <div class="card noborder margin-top2">
                <div class="card-header text-bigger text-gold dark-backg center">{{ __('Logge dich in dein Konto ein') }}</div>

                <div class="card-body dark-backg text-creme">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row dark-backg text-creme">
                            <label for="email" class="col-md-4 col-form-label text-md-right dark-backg text-creme text1-2rem">{{ __('E-Mail Adresse') }}</label>

                            <div class="col-md-6 dark-backg text-creme">
                                <input id="email" type="email" class="form-control dark-backg text-creme @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback dark-backg text-creme" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row dark-backg text-creme">
                            <label for="password" class="col-md-4 col-form-label text-md-right dark-backg text-creme text1-2rem">{{ __('Passwort') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control dark-backg text-creme @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback dark-backg text-creme" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row dark-backg text-creme">
                            <div class="col-md-6 offset-md-4 dark-backg text-creme">
                                <div class="form-check dark-backg text-creme">
                                    <input class="form-check-input dark-backg text-creme login-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label dark-backg text-creme text1-2rem" for="remember">
                                        {{ __('Daten merken') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 dark-backg text-creme">
                            <div class="col-md-8 offset-md-4 dark-backg text-creme">
                                <button type="submit" class="btn dark-backg text-creme hover-gold text-bigger hover-letterspace hover-border">
                                    {{ __('Einloggen') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link dark-backg text-creme hover-gold hover-letterspace hover-border" href="{{ route('password.request') }}">
                                        {{ __('Passwort vergessen?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
