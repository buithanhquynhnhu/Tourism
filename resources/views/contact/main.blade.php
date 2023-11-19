<!DOCTYPE html>
<html lang="en">
<head>
    @include('contact.header.header')
</head>
<body class="sb-nav-fixed">
    @include('contact.header.head')
    <div id="layoutSidenav-content">
        @yield('body')
        @include('contact.footer')
    </div>
    @include('contact.scirpts')
</body>
</html>
