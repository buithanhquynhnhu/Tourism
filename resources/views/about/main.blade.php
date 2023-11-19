<!DOCTYPE html>
<html lang="en">
<head>
    @include('about.header.header')
</head>
<body class="sb-nav-fixed">
    @include('about.header.head')
    <div id="layoutSidenav-content">
        @yield('body')
        @include('about.footer')
    </div>
    @include('about.scirpts')
</body>
</html>
