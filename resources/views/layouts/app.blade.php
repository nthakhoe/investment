<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>@yield('title', 'Invexorite Wealth')</title>

    <meta name="description"
          content="@yield('description','Grow your wealth one egg at a time with Invexorite Wealth.')">

    <meta name="keywords"
          content="Investment, Wealth, Crypto, Chicken Investment, Eggs, Invexorite">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet"
          href="{{ asset('css/home.css') }}">

    @stack('styles')

</head>

<body>

    {{-- Main Content --}}
    <main>

        @yield('content')

    </main>

    {{-- Back To Top --}}
    <button id="backToTop">

        <i class="fa-solid fa-arrow-up"></i>

    </button>

    <!-- Javascript -->

    <script src="{{ asset('js/home.js') }}"></script>

    @stack('scripts')

</body>

</html>