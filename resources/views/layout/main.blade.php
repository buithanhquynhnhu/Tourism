<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.header.header')
</head>
<body class="sb-nav-fixed">
    @include('layout.header.head')
    <div id="layoutSidenav-content">
        @yield('body')
        @include('layout.footer')
    </div>
    @include('layout.scirpts')
</body>
</html>
