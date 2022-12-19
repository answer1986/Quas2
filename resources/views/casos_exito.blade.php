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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
        <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item vh-100 active">
            <img class="d-block w-80" src="{{asset ('/image/fotos/Topografos.png')}}" alt="First slide" style="margin-left:10%">
            <div class="carousel-caption d-none d-md-block">
                <div>
                    <image src="{{asset ('/image/iconos/Trazado 394.png')}}" id="logo" alt="logo" style="float:left;">
                        <p id="parrafo-1">Somos la única empresa en Chile de servicios de monitoreo de relaves geofísico y geotécnicos, que cuenta con un sistema de gestión integral certificado en ISO9001, ISO14001 e ISO 45001… Quas, es nuestro partner”.</p>
                </div>

            </div>
            <div class="carousel-item vh-100">
                <img class="d-block w-80" src="{{asset ('/image/fotos/plasti.png')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div>
                        <image src="{{asset ('/image/iconos/Trazado 394.png')}}" id="logo" alt="logo" style="float:left;">
                            <p id="parrafo-2">Nuestros productos de envase y empaque de frutas, están hoy en los mercado más importantes del mundo, tenemos todas las certificaciones de mercados europeos, asiáticos… Quas, es nuestro Socio Estratégico”.</p>
                    </div>
                </div>
                <!-- <div class="carousel-item vh-100">
                <img class="d-block w-100" src="https://wallpaperplay.com/walls/full/1/d/4/234836.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, repellendus.</p>
                </div>
            </div>-->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            

        </div>
        
    </div>
    <button id="boton" type="button" class="btn btn-success">Contáctanos</button>

        @endsection


        @extends('essencials.footer')