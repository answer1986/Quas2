@extends('layouts.arq-index')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('banner')


<!--banner-->
<!--<div id="particles-js">

</div>-->
<div class="banners">
    <div class="banner-text">
        <button id="boton-cosmetico"type="button" class="btn btn-outline-secondary" >Estandares de Calidad</button>
        <h1 id="banner">Aseguramos el éxito en la </h1>
        <h1 id="banner-2">certificación de tu empresa</h1>
        <h3 id="segunda-linea">Este es nuestro compromiso corporativo</h3>
        <a id="primer-contacto" href="{{url('/contacto')}}">Contáctanos</a>
    </div>

<!--<a id="primer-contacto" href="{{url('/contacto')}}">Contáctanos</a>-->
@endsection

@section('certifica')
<div class="row" id="certificars">
    <h3 id="certifica">Certificar su empresa es hacer crecer su </h3>
    <h3 id="certifica-2">negocio y proteger su inversión</h3>
</div>
<div class="row" id="caja-certifica-0">
    <div class="col md-3" id="caja-certifica-1">
        <div>
            <img src="{{asset('./image/iconos/medalla.svg')}}"  style="float:right; margin-right:15%; margin-top:2%;">
            <h3 id="titulo-caja-certifica-1"><b>Certificación de empresas</b></h3>
            <br>
        </div>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;"><b>Normas ISO</b></p>
        <p style="text-align: left;font: normal normal normal 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">9001 - 22000 - 45001 - 27001 - 14001 </p>
        <p style="text-align: left;font: normal normal normal 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">HACCP - FSSC - BRC</p>
        <br>
        <br>
        <a id="enlace" href="{{url('/nuestros_servicios#parrafo-caja')}}">Ver detalle</a>
    </div>

    <div class="col md-3" id="caja-certificar-2">
        <div>
            <img src="{{asset('./image/iconos/compu-grafica.svg')}}" style="float:right; margin-right:15%; margin-top:2%;">
            <h3 id="titulo-caja-certifica-2"><b>Consultoría en empresas</b> </h3>
            <br>
        </div>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Control y Gestión de Operaciones.</p>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Control de Procesos. </p>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Clima Organizacional. </p>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Levantamiento y Mapeo de procesos.</p>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Control Estratégico de Organizaciones.</p>
        <a id="enlace2" href="{{url('/nuestros_servicios#titulo-consultoria')}}">Ver detalle</a>
    </div>

    <div class="col md-3" id="caja-certificar-3">
        <div>
        <img src="{{asset('./image/iconos/compu-tablet-celu.svg')}}" style="float:right; margin-right:15%; margin-top:2%;">
            <h3 id="titulo-caja-certifica-3"><b>ERP Gestión de empresas</b></h3>
            <br>
        </div>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Quasmanager.</p>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Quassafety. </p>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Quasfactory. </p>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Quasprocess.</p>
        <p style="text-align: left;font: normal normal sans-serif 18px/27px sans-serif;letter-spacing: 0px;color: #606060;">- Quasplanning.</p>
        <a id="enlace3" href="{{url('/nuestros_servicios#boton-erp-1')}}">Ver detalle</a>
    </div>
    <br>
        <row style="margin-top: 10%;">
            <a href="{{url('/nuestros_servicios')}}" id="boton-certifica">Ver más servicios</a>
        </row>
    <br>
</div>
<br>


@endsection

@section('casos')

<h2 id="titulo-casos"><b>Casos de éxito</b></h2>
<p id="parrafo-clientes"> Lee lo que dicen nuestros clientes</p>
<div class="row">
    <div class="col">
        <img src="{{asset('./image/fotos/1.2-alimentos@2x.png')}}" id="alimento" width="80%">
    </div>
    <div class="col">    
        <img src="{{asset('./image/iconos/Trazado 394.png')}}" id="comillas" alt="alimento" width="75px">
        <p id="relatos-clientes">Después de varios años de intentar certificarnos en ISO 22000 sin resultados… , hoy nuestra empresa de alimentos ya cumple su segundo ciclo de certificación en norma de inocuidad alimentaria… Quas, confianza en ellos…”</p>
    </div>
</div>

<a href="{{url('/casos_exito')}}" id="boton-casos">Ver más casos de éxito</a>
<br>
@endsection

@section('cliente')
<br>
<div class="cabecera">
    <h2 id="titulo-clientes"><b>Nuestros Clientes</b></h2>
    <p id="parrafo-clientes-1">En Quas certificamos a clientes de diferentes áreas</p>
</div>
<div class="row" id="clientes">
    <div class="col md-3" id="cliente-1">
        <img src="{{asset('./image/fotos/1-mineria.png')}}" alt="cliente" width="80%" style="margin-left: 15px;" >
        <p id="mineria" style="margin-left: 35%;"><b> Mineria</b></p>
        <img src="{{asset('./image/clientes/3castillos.png')}}" width="80%">
    </div>
    <div class="col md-3" id="cliente-2">
        <img src="{{asset('./image/fotos/1.2-alimentos.png')}}" alt="cliente" width="80%">
        <p id="mineria" style="margin-left:30% ;"><b> Alimentos</b></p>
        <img src="{{asset('./image/clientes/plastiservi.png')}}" width="80%">
    </div>
    <div class="col md-3" id="cliente-3">
        <img src="{{asset('./image/fotos/1.3-manufacturas.png')}}" alt="cliente" width="80%">
        <p id="mineria"><b> Manufactura</b></p>
        <img src="{{asset('./image/clientes/multitudine.png')}}" width="80%">
    </div>
    <div class="col md-3" id="cliente-4">
        <img src="{{asset('./image/fotos/1.4-transportes.png')}}" alt="cliente" width="80%">
        <p id="mineria"><b> Transporte</b></p>
        <img src="{{asset('./image/clientes/geo.png')}}" width="80%">
    </div>
    <div class="col md-3" id="cliente-5">
        <img src="{{asset('./image/fotos/1.5-comercio.png')}}" alt="cliente" width="80%">
        <p id="mineria-1"style="margin-left:10% ;"><b> Comercio Internacional</b></p>
        <img src="{{asset('./image/clientes/lucsa.png')}}"  width="80%">
    </div>
@endsection

@extends('essencials.footer')