@extends('plantilla')

@section('contenido')

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 style="font-family: 'Playfair Display', serif; font-weight: 700;" class="text-uppercase">¡Comunicate con nosotros desde donde estes!</h1>
        <p class="text-muted">En Aura Beauty, la belleza comienza con una conexión real.
             Si tienes dudas sobre nuestros servicios o productos, nuestro equipo está listo para asesorarte.</p>
    </div>

    <div class="container my-5">
    <div class="row g-5">
        <div class="col-md-6">
            <h3 class="h4 mb-4">Correo y Números de contacto</h3>
            <div class="accordion" id="accordionEnvios">
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#envio1">
                            <i class="bi bi-envelope me-2"></i> Email
                        </button>
                    </h2>
                    <div id="envio1" class="accordion-collapse collapse" data-bs-parent="#accordionEnvios">
                        <div class="accordion-body">
                            <p class="mb-2"><strong>Atención al público:</strong> atencioncliente@aurabeauty.com</p>
                            <p class="text-muted mb-0"><strong>Reclamos:</strong> reclamos@aurabeauty.com</p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#envio2">
                            <i class="bi bi-phone me-2"></i> Celulares
                        </button>
                    </h2>
                    <div id="envio2" class="accordion-collapse collapse" data-bs-parent="#accordionEnvios">
                        <div class="accordion-body">
                            <p class="mb-2"><strong>Atención al público:</strong> 3794207156</p>
                            <p class="text-muted mb-0"><strong>Reclamos:</strong> 3794552912 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h3 class="h4 mb-4">Datos Institucionales</h3>
            <div class="p-4 bg-light rounded shadow-sm h-10">
                <ul class="list-unstyled mb-0">
                    <li class="mb-4">
                        <span class="badge bg-dark mb-2">Titulares</span>
                        <p class="mb-0 ms-1">Esquenazi Brenda y Galeano Paulina.</p>
                    </li>
                    <li class="mb-4">
                        <span class="badge bg-dark mb-2">Razón Social</span>
                        <p class="mb-0 ms-1">Aura Beauty S.A.S.</p>
                    </li>
                    <li class="mb-0">
                        <span class="badge bg-dark mb-2">Domicilio Legal</span>
                        <p class="mb-0 ms-1">Mendoza 2000, Corrientes, Argentina.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    </div>

   @endsection