<!DOCTYPE html>
<html>

<head>
    @include('layouts.header')
    @yield("app-css")
</head>

<body class="hold-transition login-page">
    @yield('content')

    @include('layouts.footer')
    @yield("app-javascript")
</body>

</html>
