@extends('layouts.arq-nosotros')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('sobre')
<h2 id="titulo-sobre"><b>Sobre nosotros</b></h2>
<p id="parrafo-sobre">Profesionales dedicados a ayudarte<p>
        <img  src="{{ asset('./image/fotos/Grupo.png') }}" id="imagen-so" width="80%;" style="display:block;" >    
        <p id="parrafo-porque"><b>¿Porqué confiar en nuestro equipo?</b></p>
        <p id="contenido-porque">Centra su actividad, en la gestión de todo requerimiento exigido por el proceso de certificación en organizaciones, con el objetivo de permitir que sus clientes, puedan concentrar su esfuerzo y foco de atención en el negocio. Operamos con todos los Organismos de Certificación del mercado. Además, disponemos de alianzas con Organismos Certificadores de cobertura mundial, que aseguran las mejores condiciones del servicio y certeza del proceso. Aseguramos el éxito en la certificación de nuestro cliente, este es nuestro compromiso corporativo. Preparamos, aplicamos y controlamos, programas de actualización de normas, a sistemas de gestión certificados.</p>
        <p id="parrafo-preguntas"><b>Estas son algunas de las preguntas que las empresas deben responder.</b></p>
        <br>
        <p id="contenido-preguntas">¿Por qué sólo algunas empresas pueden certificar la calidad de sus productos y servicios? <br>
        ¿Qué tan importante es para su empresa tener acceso a todo el Mercado? <br>
        ¿Cuánto tiempo pasará hasta que el Mercado exija a su empresa certificar la calidad de sus productos y servicios?<br>
        ¿Quiere vender sus productos y servicios al Estado? ¿Por qué es importante generar valor en mi negocio?</p>
        <br>
        <div class="container">
            <button id="boton-nosotros" type="button" class="btn btn-success" href="{{ url('/contacto')}}">Contáctanos</button>
        </div>
@endsection 


@section('mision')
<div class="mission-vision-container">
    <div class="mission-vision-section">
        <div class="mission-box">
            <h2 class="title-script">Misión</h2>
            <p class="content-text">Con pasión por la <span class="highlight">innovación</span> y un enfoque colaborativo, optimizamos los procesos de nuestros clientes, impulsando su crecimiento sostenible y generando un impacto positivo en su entorno.</p>
        </div>
        <div class="vision-box">
            <h2 class="title-script">Visión</h2>
            <p class="content-text">Ser la transformación positiva de organizaciones, impulsados por la innovación, el compromiso y la sostenibilidad, y reconocidos por brindar soluciones personalizadas que generan un impacto duradero.</p>
        </div>
    </div>

    <div class="values-section">
        <h2 class="title-script values-title">Valores Corporativos</h2>
        <div class="values-container">
            <div class="gears-container">
                <img src="{{ asset('image/engranajes.png') }}" alt="Engranajes corporativos" class="gears-image">
            </div>
            <div class="values-content">
                <div class="value-item left-value">
                    <p>Ser pioneros en la <span class="highlight">innovación</span> e de nuevas soluciones y tecnologías que impulsen el crecimiento de nuestros clientes.</p>
                </div>
                <div class="value-item right-value">
                    <p>Fomentar un ambiente de trabajo <span class="highlight">colaborativo</span> y construir relaciones sólidas con nuestros clientes y colaboradores.</p>
                </div>
                <div class="value-item left-value">
                    <p>Generar un <span class="highlight">impacto</span> positivo y duradero en las organizaciones con las que trabajamos.</p>
                </div>
                <div class="value-item right-value">
                    <p>Integrar la <span class="highlight">sostenibilidad</span> en todas nuestras operaciones y soluciones, generando un impacto positivo en el entorno.</p>
                </div>
                <div class="value-item bottom-value">
                    <p>Asumir un <span class="highlight">compromiso</span> total con el éxito de nuestros clientes y con el desarrollo de nuestros colaboradores.</p>
                </div>
                <div class="value-item bottom-right-value">
                    <p>Brindar soluciones <span class="highlight">personalizadas</span> y adaptadas a las necesidades únicas de cada cliente.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('essencials.footer')