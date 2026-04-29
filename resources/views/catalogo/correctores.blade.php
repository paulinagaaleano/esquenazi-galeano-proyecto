@extends('plantilla')

@section('contenido')

<main class="py-5" style="background-color">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;">CORRECTORES</h1>
        <p class="text-center text-muted mb-5" style="font-family">Encontrá la cobertura perfecta para resaltar tu brillo natural</p>

        <div class="row g-4">
    
   <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector1.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Medium fw-bold">Fix Concealer</h5>
                <p class="small text-pink">Light Tone</p>
                <p class="text-pink fw-bold">$30.500</p>
                 <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector2.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Medium fw-bold">Fix Concealer</h5>
                <p class="small text-pink">Medium Tone</p>
                <p class="text-pink fw-bold">$30.500</p>
            <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector3.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Medium fw-bold">Fix Concealer</h5>
                <p class="small text-pink">Neutral Tone</p>
                <p class="text-pink fw-bold">$30.500</p>
               <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector4.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Medium fw-bold">Fix Concealer</h5>
                <p class="small text-pink">Medium Deep Neutral Tone</p>
                <p class="text-pink fw-bold">$30.500</p>
                <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector5.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Medium fw-bold">Fix Concealer</h5>
                <p class="small text-pink">Deep Neutral Tone</p>
                <p class="text-pink fw-bold">$30.500</p>
               <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector6.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Medium fw-bold">Creamy Camouflage</h5>
                <p class="small text-pink">Peach Tone</p>
                <p class="text-pink fw-bold">$22.000</p>
               <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector7.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Meidum fw-bold">Creamy Camouflage</h5>
                <p class="small text-pink">Medium Tone</p>
                <p class="text-pink fw-bold">$22.000</p>
                <a href="{{ url('/construccion') }}" class="btn btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector8.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Medium fw-bold">Creamy Camouflage</h5>
                <p class="small text-pink">Deep Neutral Tone</p>
                <p class="text-pink fw-bold">$22.000</p>
                <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector9.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="Medium fw-bold">Creamy Camouflage</h5>
                <p class="small text-pink">Deep Warm Tone</p>
                <p class="text-pink fw-bold">$22.000</p>
                <a href="{{ url('/construccion') }}" class="btn btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

        </div>
    </div>
</main>
@endsection