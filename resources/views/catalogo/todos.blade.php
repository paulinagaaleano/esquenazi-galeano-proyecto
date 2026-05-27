@extends('plantilla')

@section('contenido')
<main class="py-5">
    <div class="container">
        
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;"> 
            NUESTRO CATÁLOGO 
        </h1>
        <p class="text-center text-muted mb-5" style="font-family: 'Montserrat';">
            Explorá toda nuestra línea de maquillaje diseñada para resaltar tu estilo único.
        </p>

        <div class="row g-4">
            
            @foreach($productos as $producto)
                <div class="col-12 col-md-6 col-lg-3">
                    
                    @include('partes.tarjeta')
                    
                </div>
            @endforeach

        </div>
    </div>
</main>
@endsection