@extends('plantilla')

@section('contenido')
<main class="py-5" style="background-color">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;">BASES LÍQUIDAS</h1>
        <p class="text-center text-muted mb-5" style="font-family">Encontrá la cobertura perfecta para resaltar tu brillo natural</p>

        <div class="row g-4">
            

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base1.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Liquid Foundation</h5>
                        <p class="small text-pink">Light Medium Warm</p>
                        <p class="text-pink fw-bold">$55.000</p>
                         <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base2.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Liquid Foundation</h5>
                        <p class="small text-pink">Deep Neutral</p>
                        <p class="text-pink fw-bold">$55.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base3.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Liquid Foundation</h5>
                        <p class="small text-pink">Medium Deep Neutral</p>
                        <p class="text-pink fw-bold">$55.000</p>
                         <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base4.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Liquid Foundation</h5>
                        <p class="small text-pink">Fair Warm</p>
                        <p class="text-pink fw-bold">$55.000</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base5.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Liquid Foundation</h5>
                        <p class="small text-pink">Deep Warm</p>
                        <p class="text-pink fw-bold">$55.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base6.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Skin Tint Base</h5>
                        <p class="small text-pink">Fair Warm</p>
                        <p class="text-pink fw-bold">$48.900</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base7.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Skin Tint Base</h5>
                        <p class="small text-pink">Light Cool Pink</p>
                        <p class="text-pink fw-bold">$48.900</p>
                        <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base8.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Skin Tint Base</h5>
                        <p class="small text-pink">Medium Cool Peach</p>
                        <p class="text-pink fw-bold">$48.900</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base9.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="medium fw-bold">Skin Tint Base</h5>
                        <p class="small text-pink">Deep Warm Golden</p>
                        <p class="text-pink fw-bold">$48.900</p>
                         <a href="{{ url('/construccion') }}" class="btn  btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>
   

        </div>
    </div>
</main>
@endsection