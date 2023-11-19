<!DOCTYPE html>
<html lang="en">
<head>
    @include('elements.header.header')
</head>
<body class="sb-nav-fixed">
    @include('elements.header.head')
    <div id="layoutSidenav-content">
        @yield('body')
        @include('elements.footer')
    </div>
    @include('elements.scirpts')
</body>
</html>
