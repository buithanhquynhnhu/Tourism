<!DOCTYPE html>
<html lang="en">
<head>
    @include('register.header.header')
</head>
<body class="sb-nav-fixed">
    <div id="layoutSidenav-content">
        @yield('body')
        @include('register.footer')
    </div>
    @include('register.scirpts')
</body>
</html>
