@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo electronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                                                     {{ __('Hemos enviado un link de verificacion a tu  correo electronico .') }}

                        </div>
                    @endif

                    {{ __('Antes de continuar por favor verifica tu correo electronico.') }}
                    {{ __('Si no recibiste  un correo electronico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click aqui para solicitar otro) }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
