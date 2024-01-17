@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">{{env('APP_NAME')}}</h1>
@stop

@section('content')
    <h3>Permissões</h3>
    <p>
        @can('user')
        <p>Usuário</p>
        @endcan
        @can('bidding')
        <p>Processo Licitatório</p>
        @endcan
        @can('admin')
        <p>Adminstrador</p>
        @endcan
        @can('sysadmin')
        <p>Administrador do Sistema</p>
        @endcan
    </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
