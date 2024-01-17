@extends('adminlte::page')

@section('content')

    <div class="login-box m-auto py-5">

        <div class="login-logo">
            <a href="{{route('home')}}">
                <img src="/assets/img/gest360Logo.png" alt="Gest360 Logo" height="50">
                <b>{{env('APP_NAME')}}</b>
            </a>
        </div>

        <div class="card card-outline card-success elevation-3">
            <div class="card-header ">
                <h3 class="card-title float-none text-center">Sua conta precisa ser verificada</h3>
            </div>

            <div class="card-body login-card-body text-dark">
                Antes de continuar, por favor verifique seu e-mail com o link de confirmação.
                Caso não tenha recebido o e-mail,

                <form class="d-inline" method="POST" action="{{route('verification.resend')}}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                        Clique aqui para solicitar um novo
                    </button>.
                </form>

            </div>
        </div>
    </div>

@stop
