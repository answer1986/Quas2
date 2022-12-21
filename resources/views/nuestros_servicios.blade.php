@extends('layouts.arq-servicios')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('servicios')
<h2 id="Titulo"> Nuestros Servicios</h2>
<p id="parrafo">Al alcance de toda la organizacion</p>
<br>
<div class="row">
    <button class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/medalla.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja" onclick="mostrar1();">Certificacion de empresas</p>
    </button>
    <button class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-grafica.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja" onclick="mostrar2()">Consultoria en empresas</p>
    </button>
    <button class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-tablet-celu.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja" onclick="mostrar3();">ERP Gestion de empresas</p>
    </button>
    <button class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/diploma-v.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja" onclick="mostrar4();">Capacitacion y entrenamiento</p>
    </button>
</div>

<!-- cajas -->

<!--caja especial certitificacion de empresas-->
<div class="certificacion_de_empresas" id="certificacion_de_empresas">
    <div class="row" id="certificacion_de_empresas">
        <div class="col">
            <img src="{{asset('./image/isos/9001.png')}}" id="foto-caja-certificacionrs" width="80%">
        </div>

        <div class="col" id="iso9001">

            <h2 id="titulo-certificacion"><b>Certificacion de empresas</b></h2>
            <br>
            <div class="primera-linea-boton">
                <button id="boton-certificacion-1" onclick="cambio1()">ISO 9001</button>
                <button id="boton-certificacion-2" onclick="cambio2()">ISO 14001</button>
                <button id="boton-certificacion-3" onclick="cambio3()">ISO 45001</button>
                <button id="boton-certificacion-4" onclick="cambio4()">ISO 22000</button>
            </div>
            <div class="segunda-linea-boton">
                <button id="boton-certificacion-5" onclick="cambio5()">ISO 27001</button>
                <button id="boton-certificacion-6" onclick="cambio6()">ISO 50001</button>
                <button id="boton-certificacion-7" onclick="cambio7()">ISO 17025</button>
            </div>
            <br>
            <P id="titulo-iso9001"><b>ISO 9001: Sistema de Gestión de Calidad (SGC)</b></P>
            <p id="parrafo-certificacion">Le ayudará a supervisar y gestionar continuamente la calidad en toda su empresa para que pueda identificar áreas de mejora. A nivel internacional, es el sistema de calidad de elección.<br><br>
                Un sistema de gestión de calidad ISO 9001, abreviado con las siglas SGC, está formado por un conjunto de políticas, procesos y procedimientos documentados. Este conjunto define la forma en que la empresa elaborará y entregará el producto o servicio a sus clientes, con el fin de asegurarse su satisfacción. La ISO de gestión de calidad ofrece así un conjunto de directrices que ayuda a aplicar el SGC con resultados óptimos, para organizaciones de diferentes tipos y tamaños.<br><br>
                <b>Por lo general, el estándar se implanta cuando una organización necesita:</b><br>
                Demostrar su capacidad de ofrecer productos y servicios que satisfagan los requisitos de los clientes y cumplir con la legalidad vigente de su entorno.<br><br>
                Aumentar la satisfacción del cliente a través de una serie de procesos para mejorar su funcionamiento y asegurarse de esta forma la conformidad de todos los requisitos, tanto los exigidos por los consumidores como los reglamentarios.
            </p>
        </div>
    </div>
</div>

    <div class="row" id="certificacion_de_empresas-1">
        <div class="col">

        </div>

        <div class="col">

        </div>
    </div>


    <div class="row" id="certificacion_de_empresas-2">
        <div class="col">

        </div>

        <div class="col">

        </div>
    </div>


    <div class="row" id="certificacion_de_empresas-3">
        <div class="col">

        </div>

        <div class="col">

        </div>
    </div>


    <div class="row" id="certificacion_de_empresas-4">
        <div class="col">

        </div>

        <div class="col">

        </div>
    </div>



    <div class="row" id="certificacion_de_empresas-5">
        <div class="col">

        </div>

        <div class="col">

        </div>
    </div>




    <div class="row" id="certificacion_de_empresas-6">
        <div class="col">

        </div>

        <div class="col">

        </div>
    </div>

    <!--fin caja especial certitificacion de empresas-->
    <div class="consultoria_en_empresas" id="consultoria_en_empresas">
        <div class="row">
            <div class="col">
                <img src="{{asset('./image/servicios/fondo-3.png')}}" id="foto-caja-consultoria" width="60%">
            </div>

            <div class="col">
                <h2 id="titulo-consultoria"><b>Consultoría en empresas</b></h2>
                <p id="parrafo-consultoria">Asesoramos, ofrecemos apoyo, orientación y respaldo a las empresas sobre los siguientes aspectos:</p>
                <br>
                <p id="resumen-consultoria">Control y Gestión de Operaciones<br> Control de Procesos<br> Clima Organizacional <br>Levantamiento y Mapeo de procesos <br>Control Estratégico de Organizaciones </p>
            </div>
        </div>
    </div>

    <div class="erp-gestion-de-empresas-1" id="erp-gestion-de-empresas-1">
        <div class="row">
            <div class="col">
                <img src="{{asset('./image/servicios/pc-proyeccion.png')}}" id="foto-caja-consultoria" width="70%">
            </div>

            <div class="col">
                <h2 id="titulo-consultoria"><b>ERP Gestion de empresas</b></h2>
                <button id="boton-erp-1" onclick="cambiar()">Ver Plataformas</button>
                <br>
                <p id="resumen-gestion-emp-1">En cualquier día de la semana, en todo horario, nuestros usuarios podrán monitorear la marcha y avance del sistema, a través de un Smartphone. <br>
                    Toda cuenta es seguida y supervisada técnicamente por experto consultor asignado, asegurando la mejora continua del sistema y el cumplimiento de los requerimientos normativos. <br>
                    Informes de gestión por procesos, áreas y responsables, son emitidos automáticamente por el software, detallando a través de gráficas y porcentajes los resultados y niveles de avance.<br>
                    Nuestras plataformas generan respaldos de seguridad de la información de manera automática, asegurando la disponibilidad de la documentación de los sistemas de manera permanentemente.</p>
            </div>
        </div>
    </div>

    <div class="erp-gestion-de-empresas-2" id="erp-gestion-de-empresas-2">
        <div class="row">
            <div class="col">

                <video id="video" width="100%" height="100%" controls></video>
                <p id="descripcion-video">QUAS - SOFTWARE DE DESARROLLO</p>
                <p id="descripcion-especifica"> El control desde tu celular de nuestras plataformas</p>

            </div>

            <div class="col">
                <h2 id="titulo-erp"><b>ERP Gestion de empresas</b></h2>
                <button id="boton-erp" onclick="cambiar2();">Ver Plataformas</button>
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
    </div>

    <div class="capacitacion_entrenamiento" id="capacitacion_entrenamiento">
        <div class="row">
            <div class="col">
                <img src="{{asset('./image/servicios/capacitacion.png')}}" id="foto-caja-capacitacion" width="60%">
            </div>
            <div class="col">
                <h2 id="titulo-capacitacion"><b>Capacitación y entrenamiento de personal</b></h2>
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
    </div>
    <!--fin cajas -->

    <button id="boton-casos" href="{{ url('/contacto')}}">Contactanos</button>

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