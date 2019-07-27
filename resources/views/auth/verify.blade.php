@extends('layouts.app')

@section('content')
<div class="container dark-backg text-creme">
    <div class="row justify-content-center dark-backg text-creme">
        <div class="col-md-8 dark-backg text-creme">
            <div class="card dark-backg text-creme">
                <div class="card-header dark-backg text-creme">{{ __('Verifiziere deine E-Mail Adresse') }}</div>

                <div class="card-body dark-backg text-creme">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Wir haben ein Verifizierungslink auf deine E-Mail Adresse geschickt.') }}
                        </div>
                    @endif

                    {{ __('Bevor du weiter machen kannst, überprüfe dein E-Mail Postfach und klicke auf den Verifizierungslink.') }}
                    {{ __('Falls du die E-Mail nicht erhalten hast') }}, <a href="{{ route('verification.resend') }}">{{ __('klicke bitte hier um ein neues Link zu erhalten.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
