<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagamento</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
    <div class="container">
        <div id="app">
            <div class="col-10" style="margin: auto">
                <error></error>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
