<!DOCTYPE html>
<html lang="en">
<head>
    @include('services.header.header')
</head>
<body class="sb-nav-fixed">
    @include('services.header.head')
    <div id="layoutSidenav-content">
        @yield('body')
        @include('services.footer')
    </div>
    @include('services.scirpts')
</body>
</html>
