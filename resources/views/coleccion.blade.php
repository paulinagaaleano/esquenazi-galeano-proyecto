@extends('plantilla')

@section('contenido')

<main class="py-5" style="background-color">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;"> COLECCIONES </h1>
        <p class="text-center text-muted mb-5" style="font-family: 'Montserrat';">Encontrá el producto perfecto para resaltar tu brillo natural</p>

<div class="row g-5">
<div class="col-12 col-md-6 col-lg-4 mb-4"> 
    <div class="card h-100 border-0 shadow-sm text-center">
        <div style="overflow: hidden; height: 300px;">
            <div class="aura-img-container hover-zoom h-100">
                <a href="{{ url('/catalogo/bases') }}">
                    <img src="{{ asset('img/Portada/portadaBase.jpg') }}" 
                         class="w-100 h-100" 
                         style="object-fit: cover;" 
                         alt="Bases">
                </a>
            </div>
        </div>

        <div class="card-body d-flex flex-column">
            <h3 class="card-title fw-bold mt-2">BASES LÍQUIDAS</h3>
            <p class="card-text text-muted small px-2">
                Resaltá tu belleza natural con nuestra línea de Bases Líquidas de alta calidad.
            </p>
            <div class="mt-auto pt-3">
                <a href="{{ url('/catalogo/bases') }}" class="btn btn-light  w-10 rounded-0 py-2" style="letter-spacing: 1px; font-size: 0.8rem;">
                    VER MÁS
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-4 mb-4"> 
    <div class="card h-100 border-0 shadow-sm text-center">
        <div style="overflow: hidden; height: 300px;">
            <div class="aura-img-container hover-zoom h-100">
                <a href="{{ url('/catalogo/labiales') }}">
                    <img src="{{ asset('img/Portada/portadaLabial.jpg') }}" 
                         class="w-100 h-100" 
                         style="object-fit: cover;" 
                         alt="Labiales">
                </a>
            </div>
        </div>
        <div class="card-body d-flex flex-column">
            <h3 class="card-title fw-bold mt-2">LABIALES</h3>
            <p class="card-text text-muted small px-2">
                Tonos vibrantes y texturas sedosas para unos labios inolvidables.
            </p>
            <div class="mt-auto pt-3">
                <a href="{{ url('/catalogo/labiales') }}" class="btn btn-light  w-10 rounded-0 py-2" style="letter-spacing: 1px; font-size: 0.8rem;">
                    VER MÁS
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-4 mb-4"> 
    <div class="card h-100 border-0 shadow-sm text-center">
        <div style="overflow: hidden; height: 300px;">
            <div class="aura-img-container hover-zoom h-100">
                <a href="{{ url('/catalogo/correctores') }}">
                    <img src="{{ asset('img/Portada/portadaCorrector.jpg') }}" 
                         class="w-100 h-100" 
                         style="object-fit: cover;" 
                         alt="Correctores">
                </a>
            </div>
        </div>
        <div class="card-body d-flex flex-column">
            <h3 class="card-title fw-bold mt-2">CORRECTORES</h3>
            <p class="card-text text-muted small px-2">
                Cubrí imperfecciones con una textura ligera y natural.
            </p>
            <div class="mt-auto pt-3">
                <a href="{{ url('/catalogo/correctores') }}" class="btn btn-light w-10 rounded-0 py-2" style="letter-spacing: 1px; font-size: 0.8rem;">
                    VER MÁS
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-4 mb-4"> 
    <div class="card h-100 border-0 shadow-sm text-center">
        <div style="overflow: hidden; height: 300px;">
            <div class="aura-img-container hover-zoom h-100">
                <a href="{{ url('/catalogo/iluminadores') }}">
                    <img src="{{ asset('img/Portada/portadaIluminador.jpg') }}" 
                         class="w-100 h-100" 
                         style="object-fit: cover;" 
                         alt="Iluminadores">
                </a>
            </div>
        </div>
        <div class="card-body d-flex flex-column">
            <h3 class="card-title fw-bold mt-2">ILUMINADORES</h3>
            <p class="card-text text-muted small px-2">
                Destellos de luz que resaltan lo mejor de tus facciones.
            </p>
            <div class="mt-auto pt-3">
                <a href="{{ url('/catalogo/iluminadores') }}" class="btn btn-light  w-10 rounded-0 py-2" style="letter-spacing: 1px; font-size: 0.8rem;">
                    VER MÁS
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-4 mb-4"> 
    <div class="card h-100 border-0 shadow-sm text-center">
        <div style="overflow: hidden; height: 300px;">
            <div class="aura-img-container hover-zoom h-100">
                <a href="{{ url('/catalogo/rubores') }}">
                    <img src="{{ asset('img/Portada/portadaRubor.jpg') }}" 
                         class="w-100 h-100" 
                         style="object-fit: cover;" 
                         alt="Rubores">
                </a>
            </div>
        </div>
        <div class="card-body d-flex flex-column">
            <h3 class="card-title fw-bold mt-2">RUBORES</h3>
            <p class="card-text text-muted small px-2">
                Aportá frescura y color a tus mejillas con tonos irresistibles.
            </p>
            <div class="mt-auto pt-3">
                <a href="{{ url('/catalogo/rubores') }}" class="btn btn-light w-10 rounded-0 py-2" style="letter-spacing: 1px; font-size: 0.8rem;">
                    VER MÁS
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-4 mb-4"> 
    <div class="card h-100 border-0 shadow-sm text-center">
        <div style="overflow: hidden; height: 300px;">
            <div class="aura-img-container hover-zoom h-100">
                <a href="{{ url('/catalogo/polvos') }}">
                    <img src="{{ asset('img/Portada/portadaPolvo.webp') }}" 
                         class="w-100 h-100" 
                         style="object-fit: cover;" 
                         alt="Polvos">
                </a>
            </div>
        </div>
        <div class="card-body d-flex flex-column">
            <h3 class="card-title fw-bold mt-2">POLVOS COMPACTOS</h3>
            <p class="card-text text-muted small px-2">
                Sellá tu maquillaje para un acabado impecable y duradero.
            </p>
            <div class="mt-auto pt-3">
                <a href="{{ url('/catalogo/polvos') }}" class="btn btn-light w-10 rounded-0 py-2" style="letter-spacing: 1px; font-size: 0.8rem;">
                    VER MÁS
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</main>
    
@endsection