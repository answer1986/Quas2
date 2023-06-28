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
        <form action="{{route('contacto.store')}}" method="POST"   id="formulario">
           
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
        <br>
        <img src="{{asset('image/font/4-geo.png')}}" style="color:gray; margin-left:0%;" id="texto">Agustinas N° 1022, oficina 1001, Santiago</img><br>
        <br>
        <img src="{{asset('image/font/4.2-mail.png')}}" style="color:gray">comercial@quas.cl</i><br>
        <br>
        <img src="{{asset('image/font/4.3-phone.png')}}" style="color:gray">Teléfono: (+56) 9 7453 2868</i><br>
        <br>
        <img src="{{asset('image/redes/linked.svg')}}" id="whatsapp" alt="linked" class="img-fluid" width="8%">
        <img src="{{asset('image/redes/twetter.svg')}}" id="whatsapp" alt="whatsapp" class="img-fluid" width="8%">
    </div>
</div>
<br>
@endsection
@extends('essencials.footer')