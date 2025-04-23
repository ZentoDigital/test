<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MimarGelsin')</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @stack('styles')
</head>
<body>
    {{-- Main content --}}
    @yield('content')

    {{-- Scripts --}}
    @stack('scripts')
</body>
</html>