@extends('layouts.arq-contacto')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('mapa')
<br>
<h2 id="titulo-contacto"><b>Contacto</b></h2>
<img src="{{asset('image/fotos/santiago.png')}}" id="mapa" alt="mapa" width='80%' class="img-fluid">
@endsection
@section('formulario')

<div class="row" id="formula">
    <div class="col">
        <form action="{{route('contacto.store')}}" method="POST" id="formulario">
            @csrf
                <label for="exampleFormControlInput1" id="exampleFormControlInput1">Nombre</label>
                <input type="text" class="form-control" placeholder="Tu nombre" name="name">
                @error('nombre')
                  <p><strong>{{$message}}</strong></p>
                @enderror

                <label for="exampleFormControlInput1" id="exampleFormControlInput2">Email address</label>
                <input type="email" class="form-control" placeholder="Tu email" name="email">
                @error('email')
                  <p><strong>{{$message}}</strong></p>
                @enderror
                
                <label for="mensaje" id="exampleFormControlInput3">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="3" name="message"></textarea>
                @error('mensaje')
                  <p><strong>{{$message}}</strong></p>
                @enderror

                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
  

                    <br>
                    <button type="submit" class="btn btn-dark" id="boton">Enviar</button>
        </form>
        @if(session('info'))
            <script>
              alert("{{session('info')}}")
            </script>
        @endif

    </div>
    <div class="col" id="datos">
        <h3 id="datos-titulo"><b>Ponte en contacto con Nosotros !!</b></h3>
        <br>
        <img src="{{asset('image/font/4-geo.png')}}" style="color:gray; margin:1%;" id="texto">Serrano 73, Santiago, Chile</img><br>
        <br>
        <img src="{{asset('image/font/4.2-mail.png')}}" style="color:gray; margin:1%">control_operaciones@quas.cl</i><br>
        <br>
        <img src="{{asset('image/font/4.3-phone.png')}}" style="color:gray; margin:1%">Teléfono: +56 9 4057 4473 o  9 7453 2868</i><br>
        <br>
        <img src="{{asset('image/redes/linked.svg')}}" id="whatsapp" alt="linked" class="img-fluid" width="8%">
        <img src="{{asset('image/redes/twetter.svg')}}" id="whatsapp" alt="whatsapp" class="img-fluid" width="8%">
    </div>
</div>
<br>
@endsection
@extends('essencials.footer')