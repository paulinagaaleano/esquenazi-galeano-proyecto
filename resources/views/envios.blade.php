<!DOCTYPE html>
<html lang="es">
@include('partes.head') 
<body>
    @include('partes.nav') 
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 style="font-family: 'Playfair Display';">Realizamos envios a todo el pais!</h2>
                <p class="mt-4">
                    Trabajamos con Correo Argentino, Andreani & OCA. Aura Beauty realiza el despacho dentro de las 48hrs luego de recibir la confirmacion de compra y los comprobantes pertinentes; una vez realizada la operacion te compartiremos a tu direccion de contacto el codigo de seguimiento correspondiente. Los costos de envio corren por cargo del cliente.
                
            </div>
        </div>
    </div>
</section>
 <section class="py-5 bg-white">

    <section class="py-5 bg-white">

    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="bi bi-credit-card fs-1"></i>
                <h4 class="mt-3">Tarjetas</h4>
                <p>Aceptamos todas las tarjetas de crédito y débito.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-cash-stack fs-1"></i>
                <h4 class="mt-3">Transferencia</h4>
                <p>15% de descuento pagando por transferencia bancaria.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-shield-check fs-1"></i>
                <h4 class="mt-3">Compra Segura</h4>
                <p>Tus datos están protegidos con encriptación SSL.</p>
            </div>
              <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
        </div>
    </div>
</section>
    @include('partes.footer') 
</body>
</html>