<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi Quiniela MercadoLibre | Rusia 2018</title>

    </head>
    <body>

        <div class="flex-center position-ref full-height">

            <div class="content">

                <div class="ornato-header"></div>

                <figure class="busca-gloria"></figure>

                <div class="title m-b-md">
                    <div class="col-sm-12">
                        @isset($agency)
                            <a href="{{ url("{$agency}/enter") }}" class="btn btn-default register-button">Regístrate</a>
                        @endisset
                    </div>
                </div>

                @isset($agency)
                    <div class="ornato-footer logo-{{ $agency }}"></div>
                @endisset

            </div>
        </div>
    </body>

    <link rel="stylesheet" href="{{ mix("/css/app.min.css") }}">
    <script type="application/javascript" src="{{ mix("/js/app.min.js") }}"></script>
</html>
