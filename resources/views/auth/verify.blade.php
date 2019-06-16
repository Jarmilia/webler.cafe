@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifiziere deine E-Mail Adresse') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Wir haben ein Verifizierungslink auf deine E-Mail Adresse geschickt.') }}
                        </div>
                    @endif

                    {{ __('Befor du weiter machen kannst, überprüfe dein E-Mail Postfach und klicke auf den Verifizierungslink.') }}
                    {{ __('Falls du die E-Mail nicht erhalten hast') }}, <a href="{{ route('verification.resend') }}">{{ __('klicke bitte hier um ein neues Link zu erhalten.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
