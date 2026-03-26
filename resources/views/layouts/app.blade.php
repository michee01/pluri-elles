<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', "Pluri'elles SAS - Partenaire RSE")</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-surface text-on-surface font-body">

    <x-navbar />

    <main class="flex-1 w-full">
        @yield('content')
    </main>

    <x-footer />

</body>

</html>
