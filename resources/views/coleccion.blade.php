<!DOCTYPE html>
<html lang="es">
@include('partes.head') 
<body>
 @include('partes.nav')

 <main class="py-5" style="background-color: #fdfdfd;">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;"> COLECCIONES </h1>
        <p class="text-center text-muted mb-5" style="font-family: 'Montserrat';">Encontrá el producto perfecto para resaltar tu brillo natural</p>

        <div class="row g-4">
          <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                         <a href="{{ url('/catalogo/bases') }}" class="collection-section bg-bases">
                        <img src="{{ asset('img/Portada/portadaBase2.jpg') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h2 class="display-4">Bases Líquidas</h2>
                        <p class="lead">El lienzo perfecto para un maquillaje impecable.</p>
                         <a href="{{ url('/catalogo/bases') }}" class="btn btn-dark btn-sm w-100 rounded-0">Ver Más</a>
                    </div>
                </div>
            </div>

          <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                         <a href="{{ url('/catalogo/correctores') }}" class="collection-section bg-bases">
                        <img src="{{ asset('img/Portada/portadaCorrector.jpg') }}" class="img-fluid" alt="Corrector">
                    </div>
                    <div class="card-body">
                        <h2 class="display-4">Correctores</h2>
                        <p class="lead">El tono perfecto para un acabado natural.</p>
                         <a href="{{ url('/catalogo/correctores') }}" class="btn btn-dark btn-sm w-100 rounded-0">Ver Más</a>
                    </div>
                </div>
            </div>

          <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                         <a href="{{ url('/catalogo/labiales') }}" class="collection-section bg-bases">
                        <img src="{{ asset('img/Portada/portadaLabiales.jpg') }}" class="img-fluid" alt="Labiales">
                    </div>
                    <div class="card-body">
                        <h2 class="display-4">Labiales</h2>
                        <p class="lead">El complemento perfecto que no puede faltar.</p>
                         <a href="{{ url('/catalogo/labiales') }}" class="btn btn-dark btn-sm w-100 rounded-0">Ver Más</a>
                    </div>
                </div>
            </div>

          <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                         <a href="{{ url('/catalogo/rubor') }}" class="collection-section bg-bases">
                        <img src="{{ asset('img/Portada/portadaRubor.jpg') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h2 class="display-4">Rubores</h2>
                        <p class="lead">El toque final para un maquillaje completo.</p>
                         <a href="{{ url('/catalogo/rubor') }}" class="btn btn-dark btn-sm w-100 rounded-0">Ver Más</a>
                    </div>
                </div>
            </div>

          <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                         <a href="{{ url('/catalogo/iluminadores') }}" class="collection-section bg-bases">
                        <img src="{{ asset('img/Portada/portadaIluminador2.jpg') }}" class="img-fluid" alt="Iluminadores">
                    </div>
                    <div class="card-body">
                        <h2 class="display-4">Iluminadores</h2>
                        <p class="lead">El glow necesario para el maquillaje ideal.</p>
                         <a href="{{ url('/catalogo/iluminadores') }}" class="btn btn-dark btn-sm w-100 rounded-0">Ver Más</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                         <a href="{{ url('/catalogo/polvos') }}" class="collection-section bg-bases">
                        <img src="{{ asset('img/Portada/portadaPolvo.webp') }}" class="img-fluid" alt=Ppolvo">
                    </div>
                    <div class="card-body">
                        <h2 class="display-4">Polvos Compactos</h2>
                        <p class="lead">El complemento infaltable para una buena y larga duracion .</p>
                         <a href="{{ url('/catalogo/polvos') }}" class="btn btn-dark btn-sm w-100 rounded-0">Ver Más</a>
                    </div>
                </div>
            </div>
    


@include('partes.footer') 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


 </body>
</html>