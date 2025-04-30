
<!-- resources/views/components/layouts/app-layout.blade.php -->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bootstrap Italia')</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-italia/css/bootstrap-italia.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('vendor/bootstrap-italia/js/bootstrap-italia.bundle.min.js?202504020840') }}"></script>
</head>
<body>
    <header>
        <x-navbar />
        <x-header />
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <x-footer />
    </footer>
</body>
</html>
