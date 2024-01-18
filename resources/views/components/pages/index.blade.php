@extends('adminlte::page')

@section('title', $title ?? "")

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

<!-- Configuração do Select2 -->
@section('css')
<!-- Styles -->
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('js')
<script>
    $(document).ready(function() {
            $('.js-select').select2({
                theme: 'bootstrap-5'
            });
        });
</script>
@endsection