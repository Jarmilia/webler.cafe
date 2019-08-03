@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center artContent">
    <div class="col-md-8">
      <div class="card noborder margin-top2">
        <div class="card-header text-bigger text-gold dark-backg center">{{ __('Registriere dich bei webler.cafe') }}</div>

        <div class="card-body dark-backg text-creme">
          <form method="POST" action="{{ route('register') }}">
            @csrf             
            <div class="form-group row dark-backg text-creme">
              <label for="firstname" class="col-md-4 col-form-label text-md-right dark-backg text-creme">{{ __('Vorname') }}</label>
              <div class="col-md-6 dark-backg text-creme">
                <input id="firstname" type="text" class="form-control dark-backg text-creme @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                @error('firstname')
                  <span class="invalid-feedback dark-backg text-creme" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row dark-backg text-creme">
              <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nachname') }}</label>
                <div class="col-md-6 dark-backg text-creme">
                  <input id="lastname" type="text" class="form-control dark-backg text-creme @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                  @error('lastname')
                    <span class="invalid-feedback dark-backg text-creme" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Benutzername') }}</label>
                <div class="col-md-6">
                  <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                  @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

                <div class="form-group row">
                  <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Stadt') }}</label>
                  <div class="col-md-6">
                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                    @error('city')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adresse') }}</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Passwort') }}</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Passwort bestätigen') }}</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn dark-backg text-creme hover-gold text-bigger hover-border">
                          {{ __('Registrieren') }}
                      </button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
