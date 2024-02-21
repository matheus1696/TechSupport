<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <main>
        @if ($db->link_desktop)                    
            <div class="d-none d-lg-block col-12">
                <iframe src="{!! $db->link_desktop !!}" frameborder="0" style="min-height: 99vh; width: 100%"></iframe>
            </div>
        @else
            <div class="d-none d-lg-block col-xl-2 col-md-4 col-6">                    
                @include('dashboard.partials.dashboard_card')
            </div>
        @endif

        @if ($db->link_mobile)
            <div class="d-lg-none col-12">                    
                <iframe src="{!! $db->link_mobile !!}" frameborder="0" style="min-height: 100vh; width: 100%"></iframe>
            </div>
        @else  
            <div class="d-lg-none col-xl-2 col-md-4 col-6">                    
                @include('dashboard.partials.dashboard_card')
            </div>
        @endif
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
