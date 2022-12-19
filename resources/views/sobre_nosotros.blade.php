@extends('layouts.arq-nosotros')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('sobre')
<h2 id="titulo-sobre"><b>Sobre nosotros</b></h2>
<p id="parrafo-sobre">Profesionales dedicados a ayudarte<p>
<img id="img-sobre" src="{{ asset('./image/fotos/Grupo.png') }}" alt="">
<p id="parrafo-porque"><b>¿Porqué confiar en nuestro equipo?</b></p>
<p id="contenido-porque">Centra su actividad, en la gestión de todo requerimiento exigido por el proceso de certificación en organizaciones, con el objetivo de permitir que sus clientes, puedan concentrar su esfuerzo y foco de atención en el negocio. Operamos con todos los Organismos de Certificación del mercado. Además, disponemos de alianzas con Organismos Certificadores de cobertura mundial, que aseguran las mejores condiciones del servicio y certeza del proceso. Aseguramos el éxito en la certificación de nuestro cliente, este es nuestro compromiso corporativo. Preparamos, aplicamos y controlamos, programas de actualización de normas, a sistemas de gestión certificados.</p>
<h2 id="parrafo-preguntas"><b>Estas son algunas de las preguntas que las empresas deben responder.</b></h2>
<br>
<p id="contenido-preguntas">¿Por qué sólo algunas empresas pueden certificar la calidad de sus productos y servicios? <br>
¿Qué tan importante es para su empresa tener acceso a todo el Mercado? <br>
¿Cuánto tiempo pasará hasta que el Mercado exija a su empresa certificar la calidad de sus productos y servicios?<br>
¿Quiere vender sus productos y servicios al Estado? ¿Por qué es importante generar valor en mi negocio?</p>
<br>
<button id="boton-nosotros" type="button" class="btn btn-success">Contáctanos</button>
@endsection

@extends('essencials.footer')