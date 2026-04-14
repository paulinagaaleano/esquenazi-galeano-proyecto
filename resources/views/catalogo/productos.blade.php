<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $categoria }} - Aura Beauty</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Obliga al cuerpo a ocupar toda la pantalla */
        }
        main {
            flex: 1; /* Esto empuja el footer hacia abajo */
        }
        .text-pink {
            color: #f8c3d5;
        }
        h1 {
            font-family: 'Playfair Display', serif;
            letter-spacing: 1px;
        }
        .product-card {
            transition: transform 0.3s ease;
            background-color: #fff;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .btn-dark {
            background-color: #000;
            border: none;
            letter-spacing: 1px;
            font-weight: 600;
        }
        .breadcrumb-item a {
            color: #f8c3d5;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">AURA BEAUTY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Catálogo
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm">
                            <li><a class="dropdown-item" href="{{ route('catalogo.show', 'labiales') }}">Labiales</a></li>
                            <li><a class="dropdown-item" href="{{ route('catalogo.show', 'bases') }}">Bases Líquidas</a></li>
                            <li><a class="dropdown-item" href="{{ route('catalogo.show', 'correctores') }}">Correctores</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ url('/quienes-somos') }}">Quiénes Somos</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ url('/envios') }}">Envíos</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ url('/contacto') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/catalogo') }}">Catálogo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $categoria }}</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h1 class="text-uppercase fw-bold m-0">{{ $categoria }}</h1>
                    <p class="text-muted small">Mostrando {{ count($productos) }} productos</p>
                </div>
            </div>

            <hr class="mb-5">

            <div class="row g-4">
                @forelse($productos as $prod)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm text-center product-card">
                            <div class="p-3">
                                <img src="{{ asset('img/' . $prod['img']) }}" 
                                     class="img-fluid" 
                                     alt="{{ $prod['nombre'] }}"
                                     style="height: 200px; object-fit: contain;">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="small fw-bold mb-1">{{ $prod['nombre'] }}</h5>
                                <p class="text-pink fw-bold mb-3">${{ $prod['precio'] }}</p>
                                <button class="btn btn-dark btn-sm w-100 rounded-0 mt-auto">COMPRAR</button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Todavía no hay productos cargados en esta colección.</p>
                        <a href="{{ url('/catalogo') }}" class="btn btn-outline-dark btn-sm">Volver al catálogo</a>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    <footer class="bg-white py-5 border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">AURA BEAUTY</h5>
                    <p class="text-muted small">Realzando tu belleza natural con Rare Beauty.</p>
                </div>
                <div class="col-md-4 mb-4 text-md-center">
                    <h6 class="fw-bold text-uppercase small">Navegación</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}" class="text-decoration-none text-muted small">Inicio</a></li>
                        <li><a href="{{ url('/catalogo') }}" class="text-decoration-none text-muted small">Catálogo</a></li>
                        <li><a href="{{ url('/quienes-somos') }}" class="text-decoration-none text-muted small">Quiénes Somos</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4 text-md-end">
                    <h6 class="fw-bold text-uppercase small">Información</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/envios') }}" class="text-decoration-none text-muted small">Envíos y Pagos</a></li>
                        <li><a href="{{ url('/contacto') }}" class="text-decoration-none text-muted small">Contacto</a></li>
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