@extends('plantilla')

@section('contenido')


<main class="py-5" style="background-color">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;">ILUMINADORES</h1>
        <p class="text-center text-muted mb-5" style="font-family">Irradiá luz propia con nuestros acabados sedosos</p>

        <div class="row g-4">

             <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador9.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Reflection Highlighter</h5>
                        <p class="text-pink fw-bold">$15.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador5.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Pinkish highlighter</h5>
                        <p class="text-pink fw-bold">$15.000</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador6.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Glowy Pink Highlighter</h5>
                        <p class="text-pink fw-bold">$15.000</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador7.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Peach Highlighter</h5>
                        <p class="text-pink fw-bold">$15.000</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador8.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Highlighter</h5>
                        <p class="text-pink fw-bold">$15.000</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador3.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Silver Shine Pop</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>


            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador12.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Soft Pink Pop</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                         <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador13.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Pop</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador14.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Coral Pop</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@endsection