@extends('layouts.arq-contacto')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('mapa')
<br>
<h2 id="titulo-contacto"><b>Contacto</b></h2>
<img src="{{asset('image/fotos/mapa.png')}}" id="mapa" alt="mapa" class="img-fluid">
@endsection
@section('formulario')

<div class="row" id="formula">
    <div class="col">
        <form id="formulario">
           
                <label for="exampleFormControlInput1" id="exampleFormControlInput1">Nombre</label>
                <input type="text" class="form-control" placeholder="Tu nombre">
                <label for="exampleFormControlInput1" id="exampleFormControlInput2">Email address</label>
                <input type="email" class="form-control" placeholder="Tu email">
                <label for="mensaje" id="exampleFormControlInput3">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="3"></textarea>

            <br>
            <button type="submit" class="btn btn-dark" id="boton">Enviar</button>
        </form>
    </div>
    <div class="col" id="datos">
        <h3 id="datos-titulo"><b>Escríbenos</b></h3>
        <i class="fa fa-thin fa-location-dot" id="texto">Agustinas N° 1022, oficina 1001, Santiago</i><br>
        <br>
        <i class="fa fa-sharp fa-solid fa-paper-plane" id="texto">comercial@quas.cl</i><br>
        <br>
        <i class="fa fa-solid fa-phone" id="texto">Teléfono: (+56) 9 7453 2868</i><br>
        <br>
        <img src="{{asset('image/redes/linked.svg')}}" id="whatsapp" alt="linked" class="img-fluid">
        <img src="{{asset('image/redes/twetter.svg')}}" id="whatsapp" alt="whatsapp" class="img-fluid">
    </div>
</div>
<br>
@endsection
@extends('essencials.footer')