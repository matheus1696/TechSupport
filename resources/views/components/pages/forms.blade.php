@extends('adminlte::page')

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
    <!-- Configuração do Summernote -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
@endsection

@section('js')
    <!-- Configuração do Select2 -->
    <script>
        $(document).ready(function() {
                $('.js-select').select2({
                    theme: 'bootstrap4'
                });
            });
    </script>

    <!-- Configuração do Summernote -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
                $('.summernote').summernote({
                    height: 300,
                    toolbar: [
                        // [groupName, [list of button]]
                        ['style', ['style',]],
                        ['style', ['bold', 'italic', 'underline', 'clear',]],
                        ['color', ['color']],
                        ['fontsize', ['fontsize']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['font', ['superscript', 'subscript']],
                        ['table', ['table','addRowDown', 'addRowUp', 'addColLeft', 'addColRight','delete','deleteRow', 'deleteCol', 'deleteTable']],
                        ['view', ['fullscreen']],
                    ]
                });
            });
    </script>
@endsection