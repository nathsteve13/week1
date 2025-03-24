<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title', 'AdminLTE v4 | Dashboard')</title>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta name="keywords" content="bootstrap 5, admin dashboard, vanilla js" />

    <!-- Fonts and Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}" /> <!-- Your custom styles -->
    @stack('styles') <!-- For specific page styles -->
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('layouts.header') <!-- Include the header -->
        
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            @include('layouts.sidebar') <!-- Include the sidebar -->
        </aside>

        <main class="app-main mt-2">
            @yield('content') <!-- Main content of the page -->
        </main>

        @include('layouts.footer') <!-- Include the footer -->
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/adminlte.js') }}"></script> <!-- Your custom scripts -->
    @stack('scripts') <!-- For specific page scripts -->
</body>
</html>
