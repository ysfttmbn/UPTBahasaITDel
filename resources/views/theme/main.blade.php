<!DOCTYPE html>
<html lang="en">
@include('theme.head')
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    @include('theme.header')
    @include('theme.aside')
    {{ $slot }}
    @include('theme.footer')
    @include('theme.js')
</body>
</html>