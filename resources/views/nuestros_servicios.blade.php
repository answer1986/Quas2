@extends('layouts.arq-servicios')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('servicios')
<h2 id="Titulo"> Nuestros Servicios</h2>
<p  id="parrafo">Al alcance de toda la organizacion</p>
<br>
<div class="row">
    <div class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/medalla.svg')}}" alt="consultoria" width="15%">
        <p id="parrafo-caja">Certificacion de empresas</p>
    </div>
    <div class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-grafica.svg')}}" alt="consultoria" width="15%">
        <p id="parrafo-caja">Consultoria en empresas</p>
    </div>
    <div class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-tablet-celu.svg')}}" alt="consultoria" width="15%">
        <p id="parrafo-caja">ERP Gestion de empresas</p>
    </div>
    <div class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-tablet-celu.svg')}}" alt="consultoria" width="15%">
        <p id="parrafo-caja">Capacitacion y entrenamiento</p>
    </div>
</div>

@endsection

@section('clientes')
<br>
<div class="cabecera">
    <h2 id="titulo-clientes"><b>Nuestros Clientes</b></h2>
    <p id="parrafo-clientes">En Quas certificamos a clientes de diferentes áreas</p>
</div>
<div class="row" id="clientes">
    <div class="col md-3" id="cliente-1">
        <img src="{{asset('./image/fotos/1-mineria.png')}}" alt="cliente" width="80%" >
        <p id="mineria"><b> Mineria</b></p>
        <img src="{{asset('./image/clientes/3castillos.png')}}" width="80%">
    </div>
    <div class="col md-3" id="cliente-2">
        <img src="{{asset('./image/fotos/1.2-alimentos.png')}}" alt="cliente" width="80%">
        <p id="mineria"><b> Alimentos</b></p>
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
        <p id="mineria-1"><b> Comercio Internacional</b></p>
        <img src="{{asset('./image/clientes/lucsa.png')}}"  width="80%">
    </div>
@endsection


@extends('essencials.footer')
