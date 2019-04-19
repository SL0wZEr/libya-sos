<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-72329424-5"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-72329424-5');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta property="og:title" content="أرقام الطوارئ والمساعدة">
        <meta property="og:description" content="أرقام الطوارئ والمساعدة في ليبيا">
        <meta property="og:image" content="https://sos.ly/assets/images/site-thumbnail.jpg">
        <meta property="og:url" content="https://sos.ly">
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="أرقام الطوارئ والمساعدة"/>
        <meta name="twitter:description" content="أرقام الطوارئ والمساعدة في ليبيا" />
        <meta name="twitter:image" content="https://sos.ly/assets/images/site-thumbnail.jpg" />
        <meta name="description" content="أرقام الطوارئ والمساعدة في ليبيا">
        <meta name="keywords" content="الدفاع المدني, فريق الطوارئ, الإسعاف, ليبيا">
        <title>أرقام الطوارئ والمساعدة</title>

        <meta name="apple-mobile-web-app-title" content="SOS">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body class="bg-light rtl">
        <main role="main" class="container">
            @include('_layouts.partials.header')
            @yield('body')
        </main>

        @include('_layouts.partials.footer')
    </body>
</html>
