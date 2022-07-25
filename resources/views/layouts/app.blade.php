
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Demande de Diplome</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="/css/app.css" rel="stylesheet">
        <script charset="utf-8" src="https://cdn.cinetpay.com/seamless/main.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="navigation">
            @include('parts.navbar')
        </div>
        <div class="contenu">
            @yield('content')
        </div>

        <script src="/js/app.js"></script>

    </body>
</html>
