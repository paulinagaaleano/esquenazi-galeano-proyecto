<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta - Aura Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <style>
        .auth-container {
            max-width: 900px;
            margin: 60px auto;
        }
        .auth-card {
            border: none;
            border-radius: 0;
        }
        .btn-auth {
            background-color: #f8c3d5; /* El rosa de tu imagen */
            color: white;
            border-radius: 0;
            padding: 10px 30px;
            border: none;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .btn-auth:hover {
            background-color: #f2a9c1;
            color: white;
        }
        .form-control {
            border-radius: 0;
            border-color: #eee;
            padding: 12px;
        }
        .vertical-divider {
            border-right: 1px solid #eee;
        }
        @media (max-width: 768px) {
            .vertical-divider {
                border-right: none;
                border-bottom: 1px solid #eee;
                margin-bottom: 30px;
                padding-bottom: 30px;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">AURA BEAUTY</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link px-3" href="{{ url('/') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="{{ route('catalogo.index') }}">Catálogo</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="{{ url('/contacto') }}">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container auth-container">
    <div class="row">
        <div class="col-md-6 px-5 vertical-divider">
            <h2 class="fw-bold mb-4" style="font-family: 'Playfair Display';">Acceder</h2>
            <form action="#">
                <div class="mb-3">
                    <label class="form-label small text-uppercase fw-bold">Nombre de usuario o correo electrónico *</label>
                    <input type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label small text-uppercase fw-bold">Contraseña *</label>
                    <input type="password" class="form-control" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label small" for="remember">Recuérdame</label>
                </div>
                <button type="submit" class="btn btn-auth w-100">Acceder</button>
                <p class="mt-3 small">
                    <a href="#" class="text-muted">¿Olvidaste tu contraseña?</a>
                </p>
            </form>
        </div>

        <div class="col-md-6 px-5">
            <h2 class="fw-bold mb-4" style="font-family: 'Playfair Display';">Registrarse</h2>
            <form action="#">
                <div class="mb-3">
                    <label class="form-label small text-uppercase fw-bold">Correo electrónico *</label>
                    <input type="email" class="form-control" required>
                </div>
                <p class="small text-muted">
                    Se enviará una contraseña a tu dirección de correo electrónico.
                </p>
                <p class="small text-muted">
                    Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en esta web y otros fines descritos en nuestra 
                    <a href="#" class="text-pink">política de privacidad</a>.
                </p>
                <button type="submit" class="btn btn-auth w-100">Registrarse</button>
            </form>
        </div>
    </div>
</div>

<<footer class="bg-white py-5 border-top mt-5">

    <div class="container">

        <div class="row">


            <div class="col-md-4 mb-4">

                <h5 class="fw-bold">AURA BEAUTY</h5>

                <p class="text-muted small">Realzando tu belleza natural con Rare Beauty.</p>

            </div>

            <div class="col-md-4 mb-4">

                <h6 class="fw-bold text-uppercase small">Navegación</h6>

                <ul class="list-unstyled">

                    <li><a href="{{ url('/') }}" class="text-decoration-none text-muted small">Inicio</a></li>

                    <li><a href="{{ route('catalogo.index') }}" class="text-decoration-none text-muted small">Catálogo</a></li>

                    <li><a href="{{ url('/quienes-somos') }}" class="text-decoration-none text-muted small">Quiénes Somos</a></li>

                </ul>

            </div>



            <div class="col-md-4 mb-4">

                <h6 class="fw-bold text-uppercase small">Información</h6>

                <ul class="list-unstyled">

                    <li><a href="{{ url('/envios') }}" class="text-decoration-none text-muted small">Envíos y Pagos</a></li>

                    <li><a href="{{ url('/contacto') }}" class="text-decoration-none text-muted small">Contacto</a></li>

                    <li><a href="{{ url('/terminos') }}" class="text-decoration-none text-muted small">Términos y Usos</a></li>

                </ul>

            </div>

        </div>



        <hr class="my-4 text-muted">



        <div class="text-center">

            <p class="text-muted mb-0" style="font-size: 0.75rem;">

                &copy; 2026 Aura Beauty. Todos los derechos reservados.

            </p>

        </div>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>