<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagamento</title>
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </head>
    <body>
    <div class="container">
        <div id="app">
            <div class="col-10" style="margin: auto">
               <success pay-status="{{ $status ?? 0 }}"></success>
            </div>
        </div>
    </div>
    <script src="{{ secure_asset('js/app.js') }}"></script>
    </body>
</html>
