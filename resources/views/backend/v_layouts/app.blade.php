<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Wp2</title>
</head>
<body>
    <a href="{{ route('backend.beranda') }}">Beranda</a> |
    <a href="#">User</a> |
    <a href="" onclick="event.preventDefault(); document.getElementById('keluar-app').submit();">Keluar</a>
    <p></p>

    <!-- @yieldAwal -->
    @yield('content')
    <!-- @yieldAkhir-->

    <!-- Form untuk logout -->
    <form id="keluar-app" action="{{ route('backend.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <!-- End of Form untuk logout -->
</body>
</html>
