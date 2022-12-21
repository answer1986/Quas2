@extends('layouts.arq-servicios')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('servicios')
<h2 id="Titulo"> Nuestros Servicios</h2>
<p id="parrafo">Al alcance de toda la organizacion</p>
<br>
<div class="row">
    <div class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/medalla.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja">Certificacion de empresas</p>
    </div>
    <div class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-grafica.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja">Consultoria en empresas</p>
    </div>
    <div class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-tablet-celu.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja">ERP Gestion de empresas</p>
    </div>
    <div class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-tablet-celu.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja">Capacitacion y entrenamiento</p>
    </div>
</div>

<!-- cajas -->
<div class="row" id="certificacion_de_empresas">
    <div class="col">

    </div>

    <div class="col">

    </div>
</div>


<div class="row" id="consultoria_en_empresas">
    <div class="col">
    <img src="{{asset('./image/servicios/fondo-3.png')}}" id="foto-caja-consultoria" width="60%" >
    </div>

    <div class="col">
        <h2 id="titulo-consultoria">Consultoría en empresas</h2>
        <p id="parrafo-consultoria">Asesoramos, ofrecemos apoyo, orientación y respaldo a las empresas sobre los siguientes aspectos:</p>
        <br>
        <p id="resumen-consultoria">Control y Gestión de Operaciones<br> Control de Procesos<br> Clima Organizacional <br>Levantamiento y Mapeo de procesos <br>Control Estratégico de Organizaciones </p>
    </div>
</div>

<div class="row" id="erp-gestion-de-empresas">
    <div class="col">
        
            <video id="video" width="100%" height="100%" controls></video>
            <p id="descripcion-video">QUAS - SOFTWARE DE DESARROLLO</p>
        <p id="descripcion-especifica"> El control desde tu celular de nuestras plataformas</p>
        
    </div>

    <div class="col">
        <h2 id="titulo-erp">ERP Gestion de empresas</h2>    
        <button id="boton-erp">Ver Plataformas</button>
        <h3 id="titulo-plataformas">QUASMANAGER</h3>
        <p id="descripcion">Gestion documental para normas ISO</p>
        
        <h3 id="titulo-plataformas"><b>QUASSAFETY</b></h3>
        <p id="descripcion">QUASSAFETY Gestión Documental para sistemas certificables en Inocuidad Alimentaria.</p>
        
        <h3 id="titulo-plataformas"><b>QUASFACTORY</b></h3>
        <P id="descripcion">QUASFACTORY Control y gestión de producción.</P>
        
        <h3 id="titulo-plataformas"><b>QUASPROCESS</b></h3>
        <P id="descripcion">QUASPROCESS Diseño y control de procesos.</P>
        
        <h3 id="titulo-plataformas"><b>QUASPLANNING</b></h3>
        <P id="descripcion">QUASPROCESS Diseño y control de procesos.</P>
    </div>
</div>

<div class="row" id="capacitacion_entrenamiento">
    <div class="col">
        <img src="{{asset('./image/servicios/capacitacion.png')}}" id="foto-caja-capacitacion" width="60%" >
    </div>
    <div class="col">
    <h2 id="titulo-capacitacion">Capacitación y entrenamiento de personal</h2>
    <p id="parrafo-1">Capacitaciones, entrenamiento y certificación de personal requerido por norma, son cubiertos por el proceso de consultoría de la empresa Quas Consultores.</p>
    <p id="parrafo-2">Curso presenciales y remotos en formatos de: 12hrs., 16hrs., 24hrs.<br> 
        Todos los cursos son evaluados y certificados.<br>
        Áreas de cursos:</p>

        <p id="parrafo-3">- Monitores en las Normas ISO 9001, 14001, 45001, 22000, HACCP <br>
         - Auditores Internos en las Normas ISO 9001, 14001, 45001, 22000, HACCP <br>
         - Introducción a sistemas de gestión y normas <br>
         - Cuadro de mando integral <br>
         - Control estratégico de organizaciones <br>
         - Diseño y control de procesos y operaciones <br>
         - Control de operaciones</p>
    </div>
</div>
    
<!--fin cajas -->

<button id="boton-casos">Contactanos</button>

    @endsection

    @section('clientes')
    <br>
    <div class="cabecera">
        <h2 id="titulo-clientes"><b>Nuestros Clientes</b></h2>
        <p id="parrafo-clientes">En Quas certificamos a clientes de diferentes áreas</p>
    </div>
    <div class="row" id="clientes">
        <div class="col md-3" id="cliente-1">
            <img src="{{asset('./image/fotos/1-mineria.png')}}" alt="cliente" width="80%">
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
            <img src="{{asset('./image/clientes/lucsa.png')}}" width="80%">
        </div>
        @endsection


        @extends('essencials.footer')