<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Beauty</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
    <body>
         @include('partes.nav') 
    <div class="container mt-5">
<a href="#" class="btn btn-secondary mt-3">Contactar</a>
<div class="container mt-5">
<div class="card mt-4">
 <div class="card-body">
 <h2>Formulario de contacto</h2>
 <form>
 <div class="mb-3">
 <label class="form-label">Nombre</label>
 <input type="text" class="form-control" placeholder="Ingrese su
nombre">
 </div>
 <div class="mb-3">
 <label class="form-label">Email</label>
 <input type="email" class="form-control" placeholder="Ingrese su
email">
 </div>
 <div class="mb-3">
 <label class="form-label">Mensaje</label>
 <textarea class="form-control" rows="3"></textarea>
 </div>
 <button type="submit" class="btn btn-success">
 Enviar mensaje
 </button>
 </form>
 </div>
</div>
<div class="mb-3">

 @include('partes.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body>
    </html>