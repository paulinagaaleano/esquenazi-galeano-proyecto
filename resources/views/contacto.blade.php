<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
</head>
<body>
    @include('partes.nav') 
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 style="font-family: 'Playfair Display', serif; font-weight: 700;" class="text-uppercase">¡Comunicate con nosotros desde donde estes!</h1>
        <p class="text-muted">Servicio de atención al cliente y reclamos disponible</p>
    </div>

    <div class="row g-5">
        <div class="col-md-6">
            <h3 class="h4 mb-4"> Correo y Números de contacto</h3>
            <div class="accordion" id="accordionEnvios">
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#envio1">
                            Email
                        </button>
                    </h2>
                    <div id="envio1" class="accordion-collapse collapse" data-bs-parent="#accordionEnvios">
                        <div class="accordion-body">
                          <strong>Atención al público: </strong> atencioncliente@aurabeauty.com
                           <p class="text-muted"> <strong>Reclamos: </strong> reclamos@aurabeauty.com </p>
                          
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#envio2">
                           Celulares
                        </button>
                    </h2>
                    <div id="envio2" class="accordion-collapse collapse" data-bs-parent="#accordionEnvios">
                        <div class="accordion-body">
                            <strong>Atención al público: </strong>  3794207156
                          <p class="text-muted"> <strong>Reclamos: </strong> 3794552912 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
        </div>
    </div>

    @include('partes.footer') 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>