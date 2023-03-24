<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard | Magdi </title>

        <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />
        <link
          rel="shortcut icon"
          href="{{ asset('assets/images/logo/favicon.svg') }}"
          type="image/x-icon"
        />
        <link
          rel="shortcut icon"
          href="{{ asset('assets/images/logo/favicon.png') }}"
          type="image/png"
        />
        <link
        rel="stylesheet"
        href="{{ asset('assets/extensions/toastify-js/src/toastify.css') }}"
      />
        <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}" />
    </head>
    <body class="font-sans antialiased">
              @include('components.sidebar')

        @yield('main')

    </body>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>


    <script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
</html>
