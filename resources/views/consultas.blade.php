@extends('plantilla')

@section('contenido')


<div class="container mt-5">
<div class="card mt-4">
 <div class="card-body">
 <h2>Formulario de contacto</h2>
 <form>
 <div class="mb-3">
 <label class="form-label">Nombre</label>
 <input type="text" class="form-control" placeholder="Ingrese su nombre">
 </div>
 <div class="mb-3">
 <label class="form-label">Email</label>
 <input type="email" class="form-control" placeholder="Ingrese su email">
 </div>
 <div class="mb-3">
 <label class="form-label">Mensaje</label>
 <textarea class="form-control" rows="3"></textarea>
 </div>
<a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> ENVIAR MENSAJE </a>
 </form>
 </div>
</div>
<div class="mb-3">

@endsection