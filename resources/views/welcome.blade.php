<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi Quiniela MercadoLibre | Rusia 2018</title>
        <link rel="stylesheet" href="{{ mix("/css/app.min.css") }}">
    </head>
    <body>


        <div class="content">

            <div class="container">

                <div class="ornato-header"></div>

                <figure class="busca-gloria"></figure>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        @isset($agency)
                            <a href="{{ url("{$agency}/enter") }}" class="btn btn-default register-button">Regístrate</a>
                        @endisset
                    </div>
                    <div class="col-sm-2"></div>
                </div>

                <div class="bumper"></div>

                <figure class="logo-ml"></figure>

                @isset($agency)
                    <div class="_footer logo-{{ $agency }}"></div>
                @endisset
                <div class="ornato-footer"></div>

            </div>
        </div>
    </body>

    <script type="application/javascript" src="{{ mix("/js/app.min.js") }}"></script>
</html>
