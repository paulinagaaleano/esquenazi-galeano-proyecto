<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
</head>

<body>

@include('partes.nav')

<main>
    @yield('contenido')
</main>

@include('partes.footer')

</body>
</html>