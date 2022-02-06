<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Madrasah Hebat Bermartabat, Madrasah Aliyah Al-Karimiyyah Jalan Raya Gapura, Desa Beraji Kec. Gapura Kab. Sumenep Prov. Jawa Timur 69472">

        <meta property="og:title" content="{{ config('app.name', 'MA AL-KARIMIYYAH SUMENEP') }}">
        <meta property="og:description" content="Madrasah Hebat Bermartabat, Madrasah Aliyah Al-Karimiyyah Jalan Raya Gapura, Desa Beraji Kec. Gapura Kab. Sumenep Prov. Jawa Timur 69472">
        <meta property="og:image" content="https://maalkarimiyyah.sch.id/images/logo.png">


        <title inertia>{{ config('app.name', 'MA AL-KARIMIYYAH SUMENEP') }}</title>

        <link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">

        <!-- Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-[Roboto] antialiased bg-gray-100 text-gray-700 min-h-screen">
        @inertia

        @env ('local')
            <script src="http://localhost:8080/js/bundle.js"></script>
        @endenv
    </body>
</html>
