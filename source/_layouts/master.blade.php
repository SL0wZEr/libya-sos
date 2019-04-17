<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="أرقام الطوارئ والمساعدة في ليبيا">
        <meta name="keywords" content="الدفاع المدني, فريق الطوارئ, الإسعاف, ليبيا">
        <title>أرقام الطوارئ والمساعدة</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="bg-light rtl">
        @include('_layouts.partials.nav')

        <main role="main" class="container">
            @include('_layouts.partials.header')
            @yield('body')
        </main>

        <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    </body>
</html>
