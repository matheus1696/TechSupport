@extends('adminlte::page')
@section('title', __('adminlte::adminlte.verify') )

@section('content')

    <div class="p-3 row justify-content-center align-items-center min-vh-75">
        <div class="col-xl-4 col-lg-6 col-10">
            {{-- Card Box --}}
            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                {{-- Card Header --}}
                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                    <h3 class="float-none text-center card-title">
                        {{ __('adminlte::adminlte.verify_message') }}
                    </h3>
                </div>

                {{-- Card Body --}}
                <div class="card-body login-card-body {{ config('adminlte.classes_auth_body', '') }}">
                    @if(session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('adminlte::adminlte.verify_email_sent') }}
                        </div>
                    @endif

                    <p>
                        {{ __('adminlte::adminlte.verify_check_your_email') }}
                        <span class="text-danger">
                            {{ __('adminlte::adminlte.verify_messagem_spam') }}
                        </span>
                    </p>
                    <p class="mt-3 mb-0">{{ __('adminlte::adminlte.verify_if_not_recieved') }}</p>
                </div>

                {{-- Card Footer --}}
                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-block btn-outline-success">
                            {{ __('adminlte::adminlte.verify_request_another') }}
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop