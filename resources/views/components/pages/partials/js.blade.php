<!-- Maskphone (81) 99999-8888 -->
<script src="{{asset('assets/js/maskphone.js')}}"></script>

<!-- Configuração do Select2 -->
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2({
            theme: "bootstrap4"
        });
    });

    $(document).ready(function() {
        $('.select2-multiple').select2({
            theme: "bootstrap4"
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

<script src="https://cdn.tailwindcss.com"></script>