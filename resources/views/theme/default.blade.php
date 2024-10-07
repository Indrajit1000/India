<!DOCTYPE html>
<html lang="en">
<head>
@include('theme.head')
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
@include('theme.navbar')
@include('theme.sidebar')
<main>
    @yield('content')
</main>
@include('theme.footer')
@include('theme.footer-scripts')
</body>
</html>
