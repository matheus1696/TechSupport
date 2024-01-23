@extends('adminlte::page')

@section('title', '')

@section('content_header')
    {{$header ?? ""}}
@stop

@section('content')
    <section>
        <!-- Inicio de Componentização do Conteiner -->
        <x-conteiner>

            <!-- Inicio do Formulário -->
            <form method="POST" action="{{$route}}">
                @csrf @if($method == "edit") @method('PUT') @endif

                <div class="form-row justify-content-between">
                    {{$slot}}
                </div>

                <!-- Inicio de Componentização dos Botões -->
                <x-button.buttonGroup>
                    <!-- Inicio de Componentização dos Botões de Ação -->
                    <x-button.buttonSubmit action="{{$method}}"/>

                    <!-- Inicio de Componentização dos Botões Retorno -->
                    <x-button.buttonBack route="{{$btnBack}}" />
                </x-button.buttonGroup>
            </form>

        </x-conteiner>
    </section>
@stop

@section('css')
    @include('components.pages.partials.css')
@endsection

@section('js')
    @include('components.pages.partials.js')
@endsection