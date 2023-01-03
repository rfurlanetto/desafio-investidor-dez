<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('header/header')

    @yield('content')

    @include('footer/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script>
        $('#search').keyup(function() {
            var nomeFiltro = $(this).val().toLowerCase();

            $('.search-noticia').each(function(){
                let noticia = $(this).children('div').children('div').children('h5').children('b').text();
                var corresponde = noticia.toLowerCase().indexOf(nomeFiltro) >= 0;

                let noticiaTexto = $(this).children('div').children('div').children('p').text();
                var corresponde2 = noticiaTexto.toLowerCase().indexOf(nomeFiltro) >= 0;

                $(this).css('display', (corresponde || corresponde2) ? '' : 'none');
            });
        });
    </script>
</body>

</html>
