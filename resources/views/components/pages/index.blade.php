@extends('adminlte::page')

@section('content_header')
    {{$header ?? ""}}
@stop

@section('content')
    <section class="pb-5">
        <!-- Alerta de Atulizações -->
        <x-alert.alert />

        <!-- Inicio de Componentização do Conteiner -->
        {{$body ?? ""}}

        <div class="row justify-content-center">
            {!!$paginate ?? ""!!}
        </div>
    </section>
@stop

@section('js')
<script>
    $(document).ready(function() {
            $('.js-select').select2({
                theme: 'bootstrap-5'
            });
        });
</script>
@endsection