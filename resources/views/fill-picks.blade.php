<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Participa en la Quiniela MercadoLibre | Rusia 2018</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">

                <div class="ornato-header"></div>

                <figure class="busca-gloria"></figure>

                <div class="title m-b-md">

                    <div class="col-sm-12">

                        <h1>Llena tus picks</h1>

                        <form id="entryForm" class="formComponent" action="{{ url("{$agency}/enter") }}" method="POST">

                            <label for="first_name"></label>
                            <input type="first_name" name="first_name" id="first_name">

                            <label for="last_name"></label>
                            <input type="last_name" name="last_name" id="last_name">

                            <label for="email"></label>
                            <input type="email" name="email" id="email">

                            <a type="submit" href="{{ url("{$agency}/thanks") }}" class="btn btn-default register-button">Continuar</a>

                        </form>

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