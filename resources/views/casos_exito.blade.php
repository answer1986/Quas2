@extends('layouts.arq-casos_exito')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('relato')
<br>
<div class="parrafo">
    <h2 id="titulo-casos"><b>Casos de éxito</b></h2>
    <p id="parrafo-casos">Lo que dicen nuestros clientes sobre nosotros</p>
</div>
<br>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{asset ('/image/fotos/Topografos.png')}}" class="d-block w-60" alt="..." id="foto1">
            <br>
            <div class="carousel-caption d-none d-md-block" id="caja-texto">
                <image src="{{asset ('/image/iconos/Trazado 394.png')}}" id="logo" alt="logo" style="float:left;">
                    <p id="parrafo-1">Somos la única empresa en Chile de servicios de monitoreo de relaves geofísico y geotécnicos, que cuenta con un sistema de gestión integral certificado en ISO9001, ISO14001 e ISO 45001… Quas, es nuestro partner”.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{asset ('/image/fotos/plasti.png')}}" class="d-block w-60" alt="..." id="foto1">
            <div class="carousel-caption d-none d-md-block" id="caja-texto" >
                <br>
                <image src="{{asset ('/image/iconos/Trazado 394.png')}}" id="logo" alt="logo" style="float:left;">
                    <p id="parrafo-1">Nuestros productos de envase y empaque de frutas, están hoy en los mercado más importantes del mundo, tenemos todas las certificaciones de mercados europeos, asiáticos… Quas, es nuestro Socio Estratégico”.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{asset ('/image/fotos/alimento.png')}}" class="d-block w-60" alt="..." id="foto1">
            <div class="carousel-caption d-none d-md-block" id="caja-texto" >
                <br>
                <image src="{{asset ('/image/iconos/Trazado 394.png')}}" id="logo" alt="logo" style="float:left;">
                    <p id="parrafo-1">Después de varios años de intentar certificarnos en ISO 22000 sin resultados… , hoy nuestra empresa de alimentos ya cumple su segundo ciclo de certificación en norma de inocuidad alimentaria… Quas, confianza en ellos…”</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right:50px"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>





<button id="boton" type="button" class="btn btn-success">Contáctanos</button>

@endsection



@section('catalogo')
<div class="catalogo" id="catalogo">
    <h2 id="titulo-catalogo">Catalogo 2023</h2>
    <p id="parrafo-1" style= "text-aling:center"> Revisa nuestra oferta comercial adaptada a tus necesidades consulta con nosotros.</p>
    <form action="{{ route('casos.store')}}" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="name" required><br><br>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="phone"><br><br>
        <input type="submit" value="Descargar Archivo">
        @csrf

    </form>
</div>

@if(session('message'))
    <script>
        window.onload = function() {
            window.location.href = "/descargar-archivo";
        };
    </script>
@endif
@endsection

@extends('essencials.footer')