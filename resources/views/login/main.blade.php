<!DOCTYPE html>
<html lang="en">
<head>
    @include('login.header.header')
</head>
<body class="sb-nav-fixed">
    <div id="layoutSidenav-content">
        @yield('body')
        @include('login.footer')
    </div>
    @include('login.scirpts')
</body>
</html>
