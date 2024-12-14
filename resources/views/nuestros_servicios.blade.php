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
        <p id="parrafo-caja1"id="ancla2" onclick="mostrar2()">Consultoria en empresas</p>
    </button>
    <button class="col" id="cabecera-caja-servicios">
        <img src="{{asset('./image/iconos/compu-tablet-celu.svg')}}" id="parrafo-caja" width="15%" style="float:left; margin-right:10px">
        <p id="parrafo-caja2"  onclick="mostrar3();">ERP Gestion de empresas</p>
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
                <button id="boton-certificacion-1" onclick="cambio1();">ISO 9001</button>
                <button id="boton-certificacion-2" onclick="cambio2();">ISO 14001</button>
                <button id="boton-certificacion-3" onclick="cambio3();">ISO 45001</button>
                <button id="boton-certificacion-4" onclick="cambio4();">ISO 22000</button>
                <button id="boton-certificacion-6" onclick="cambio7();">HACCP</button>
            </div>
            <div class="segunda-linea-boton">
                <button id="boton-certificacion-5" onclick="cambio5();">ISO 27001</button>
                <button id="boton-certificacion-7" onclick="cambio6();">FSSC</button>
                <button id="boton-certificacion-8" onclick="cambio8();">BRC</button>
            </div>
            <br>
            <P id="9001" name="iso9001"><b>ISO 9001: Sistema de Gestión de Calidad (SGC)</b></P>
            <p id="parrafo-certificacion">Le ayudará a supervisar y gestionar continuamente la calidad en toda su empresa para que pueda identificar áreas de mejora. A nivel internacional, es el sistema de calidad de elección.<br><br>
                Un sistema de gestión de calidad ISO 9001, abreviado con las siglas SGC, está formado por un conjunto de políticas, procesos y procedimientos documentados. Este conjunto define la forma en que la empresa elaborará y entregará el producto o servicio a sus clientes, con el fin de asegurarse su satisfacción. La ISO de gestión de calidad ofrece así un conjunto de directrices que ayuda a aplicar el SGC con resultados óptimos, para organizaciones de diferentes tipos y tamaños.<br><br>
                <b>Por lo general, el estándar se implanta cuando una organización necesita:</b><br>
                Demostrar su capacidad de ofrecer productos y servicios que satisfagan los requisitos de los clientes y cumplir con la legalidad vigente de su entorno.<br><br>
                Aumentar la satisfacción del cliente a través de una serie de procesos para mejorar su funcionamiento y asegurarse de esta forma la conformidad de todos los requisitos, tanto los exigidos por los consumidores como los reglamentarios.
            </p>
        </div>
    </div>
</div>
<div class="certificacion_de_empresas" id="certificacion_de_empresas-1">
    <div class="row" id="certificacion_de_empresas-1">
        <div class="col">
            <img src="{{asset('./image/isos/14001.png')}}" id="foto-caja-certificacionrs" width="80%">
        </div>

        <div class="col">
            <h2 id="titulo-certificacion"><b>Certificacion de empresas</b></h2>
            <br>
            <div class="primera-linea-boton">
                <button id="boton-certificacion-1" onclick="cambio1();">ISO 9001</button>
                <button id="boton-certificacion-2" onclick="cambio2();">ISO 14001</button>
                <button id="boton-certificacion-3" onclick="cambio3();">ISO 45001</button>
                <button id="boton-certificacion-4" onclick="cambio4();">ISO 22000</button>
                <button id="boton-certificacion-6" onclick="cambio7();">HACCP</button>
            </div>
            <div class="segunda-linea-boton">
                <button id="boton-certificacion-5" onclick="cambio5();">ISO 27001</button>
                <button id="boton-certificacion-7" onclick="cambio6();">FSSC</button>
                <button id="boton-certificacion-8" onclick="cambio8();">BRC</button>
            </div>
            <br>
            <p id="14001"><b>ISO 14001: Sistemas de Gestión Ambiental (SGA)</b></p>
            <p id="parrafo-certificacion">Es una norma internacional que permite a las empresas demostrar el compromiso asumido con la protección del medio ambiente a través de la gestión de los riesgos medioambientales asociados a la actividad desarrollada. Al asumir la responsabilidad ambiental, además de la reducción del impacto ambiental procedente de su actividad, se proyecta y se refuerza la imagen comercialmente sostenible de la empresa.</p>
        </div>
    </div>
</div>
<div class="certificacion_de_empresas" id="certificacion_de_empresas-2">
    <div class="row" id="certificacion_de_empresas-2">
        <div class="col">
            <img src="{{asset('./image/isos/iso45001.png')}}" id="foto-caja-certificacionrs" width="80%">
        </div>

        <div class="col">
            <h2 id="titulo-certificacion"><b>Certificacion de empresas</b></h2>
            <br>
            <div class="primera-linea-boton">
                <button id="boton-certificacion-1" onclick="cambio1();">ISO 9001</button>
                <button id="boton-certificacion-2" onclick="cambio2();">ISO 14001</button>
                <button id="boton-certificacion-3" onclick="cambio3();">ISO 45001</button>
                <button id="boton-certificacion-4" onclick="cambio4();">ISO 22000</button>
                <button id="boton-certificacion-6" onclick="cambio7();">HACCP</button>
            </div>
            <div class="segunda-linea-boton">
                <button id="boton-certificacion-5" onclick="cambio5();">ISO 27001</button>
                <button id="boton-certificacion-7" onclick="cambio6();">FSSC</button>
                <button id="boton-certificacion-8" onclick="cambio8();">BRC</button>
            </div>
            <br>
            <a id="45001"><b>ISO 45001: Sistemas de Gestión de la Seguridad y <br>
                    Salud en el Trabajo</b></a>
            <p id="parrafo-certificacion"> Es la norma internacional destinada a proteger a los trabajadores y visitantes de accidentes y enfermedades laborales. La certificación ISO 45001 fue desarrollada para mitigar cualquier factor que pueda causar daños irreparables a los empleados o al negocio. Tiene como objetivo final ayudar a los negocios a proporcionar un ambiente de trabajo seguro para los empleados y cualquier persona en el lugar de trabajo. Esto puede conseguirse al controlar factores que puedan potencialmente causar lesiones, enfermedades, y en casos extremos, defunciones. Como resultado, la ISO 45001 se centra en mitigar cualquier factor dañino o que suponga un riesgo para el bienestar físico y mental de los trabajadores.</p>

        </div>
    </div>
</div>

<div class="certificacion_de_empresas" id="certificacion_de_empresas-3">
    <div class="row" id="certificacion_de_empresas-3">
        <div class="col">
            <img src="{{asset('./image/isos/iso22000.png')}}" id="foto-caja-certificacionrs" width="80%">
        </div>

        <div class="col">
            <h2 id="titulo-certificacion"><b>Certificacion de empresas</b></h2>
            <br>
            <div class="primera-linea-boton">
                <button id="boton-certificacion-1" onclick="cambio1();">ISO 9001</button>
                <button id="boton-certificacion-2" onclick="cambio2();">ISO 14001</button>
                <button id="boton-certificacion-3" onclick="cambio3();">ISO 45001</button>
                <button id="boton-certificacion-4" onclick="cambio4();">ISO 22000</button>
                <button id="boton-certificacion-6" onclick="cambio7();">HACCP</button>
            </div>
            <div class="segunda-linea-boton">
                <button id="boton-certificacion-5" onclick="cambio5();">ISO 27001</button>
                <button id="boton-certificacion-7" onclick="cambio6();">FSSC</button>
                <button id="boton-certificacion-8" onclick="cambio8();">BRC</button>
            </div>
            <br>
            <p id="22000"><b>ISO 22000: Sistemas de Gestión Inocuidad<br> Alimentaria (SGIA)</b></p>
            <p id="parrafo-certificacion"> Es una norma internacional que especifica los requisitos de un sistema de gestión para asegurar la inocuidad de los alimentos, a lo largo de toda la cadena alimentaria, hasta el punto de venta de consumo final. Tiene por objeto la armonización de los requisitos de gestión de la inocuidad en toda la cadena alimentaria a nivel mundial.</p>

        </div>

    </div>
</div>
</div>




<div class="certificacion_de_empresas" id="certificacion_de_empresas-4">
    <div class="row" id="certificacion_de_empresas-4">
        <div class="col">
            <img src="{{asset('./image/isos/iso27001.png')}}" id="foto-caja-certificacionrs" width="80%">
        </div>

        <div class="col">
            <h2 id="titulo-certificacion"><b>Certificacion de empresas</b></h2>
            <br>
            <div class="primera-linea-boton">
                <button id="boton-certificacion-1" onclick="cambio1();">ISO 9001</button>
                <button id="boton-certificacion-2" onclick="cambio2();">ISO 14001</button>
                <button id="boton-certificacion-3" onclick="cambio3();">ISO 45001</button>
                <button id="boton-certificacion-4" onclick="cambio4();">ISO 22000</button>
                <button id="boton-certificacion-6" onclick="cambio7();">HACCP</button>
            </div>
            <div class="segunda-linea-boton">
                <button id="boton-certificacion-5" onclick="cambio5();">ISO 27001</button>
                <button id="boton-certificacion-7" onclick="cambio6();">FSSC</button>
                <button id="boton-certificacion-8" onclick="cambio8();">BRC</button>
            </div>
            <br>
            <p id="27001"><b>ISO 27001: Sistema de Gestión de la Seguridad de <br>la Información (SGSI) </b></p>
            <p id="parrafo-certificacion"> Esta norma establece los requisitos para establecer, implementar, mantener y mejorar de forma continua un Sistema de Gestión de la Seguridad de la Información (SGSI). Estos sistemas son cada vez más comunes en las compañías, debido a los nuevos riesgos digitales inherentes a tecnologías como el Cloud Computing o el Big Data y al aumento de los ciberataques. La norma ISO también incluye los requisitos para la apreciación y el tratamiento de los riesgos de seguridad de información a la medida de las necesidades de la organización. Los requisitos establecidos en esta norma internacional son genéricos y aplicables a todas las organizaciones, cualquiera que sea su tipo, tamaño o naturaleza.</p>


        </div>
    </div>
</div>



<div class="certificacion_de_empresas" id="certificacion_de_empresas-6">
    <div class="row" id="certificacion_de_empresas-6">
        <div class="col">
            <img src="{{asset('./image/isos/haccp.png')}}" id="foto-caja-certificacionrs" width="80%">
        </div>

        <div class="col">
            <h2 id="titulo-certificacion"><b>Certificacion de empresas</b></h2>
            <br>
            <div class="primera-linea-boton">
                <button id="boton-certificacion-1" onclick="cambio1();">ISO 9001</button>
                <button id="boton-certificacion-2" onclick="cambio2();">ISO 14001</button>
                <button id="boton-certificacion-3" onclick="cambio3();">ISO 45001</button>
                <button id="boton-certificacion-4" onclick="cambio4();">ISO 22000</button>
                <button id="boton-certificacion-6" onclick="cambio7();">HACCP</button>
            </div>
            <div class="segunda-linea-boton">
                <button id="boton-certificacion-5" onclick="cambio5();">ISO 27001</button>
                <button id="boton-certificacion-7" onclick="cambio6();">FSSC</button>
                <button id="boton-certificacion-8" onclick="cambio8();">BRC</button>
            </div>
            <br>
            <p id="HACCP" ><b>HACCP (Hazard Analysis and Critical Control <br>Points) </b></p>
            <p id="parrafo-certificacion">El Análisis de Peligros y Puntos Críticos de Control, también conocido como HACCP, en un sistema de inocuidad alimentaria, se basa en identificar todos los peligros potenciales en los ingredientes, empaques y procesos de producción de alimentos y tomar las medidas suficientes para evitar todos los riesgos posibles de contaminación. El sistema se ha aceptado por todos los esquemas de seguridad alimentaria, siendo actualmente la mejor herramienta de prevención para la inocuidad alimentaria.<br> <br><b>Sus beneficios:</b></p>
            <ul id="listado">
                <li>Aporta confianza al consumidor sobre la higiene de los alimentos.</li>
                <li> Incrementa la competitividad de las organizaciones en el mercado general.</li>
                <li> Reduce la aparición de enfermedades causadas por los alimentos.</li>
                <li> Elimina las barreras para el comercio internacional.</li>
                <li>Introduce nuevos productos y tecnologías.</li>
                <li> Promueve el cumplimiento con los requisitos de la legislación e inspección.</li>
                <li>Identifica los peligros que puede tener la inocuidad del producto.
            </ul>

        </div>

    </div>
</div>
</div>


<div class="certificacion_de_empresas" id="certificacion_de_empresas-5">
    <div class="row" id="certificacion_de_empresas-6">
        <div class="col">
            <img src="{{asset('./image/isos/fssc.png')}}" id="foto-caja-certificacionrs" width="80%">
        </div>

        <div class="col">
            <h2 id="titulo-certificacion"><b>Certificacion de empresas</b></h2>
            <br>
            <div class="primera-linea-boton">
                <button id="boton-certificacion-1" onclick="cambio1();">ISO 9001</button>
                <button id="boton-certificacion-2" onclick="cambio2();">ISO 14001</button>
                <button id="boton-certificacion-3" onclick="cambio3();">ISO 45001</button>
                <button id="boton-certificacion-4" onclick="cambio4();">ISO 22000</button>
                <button id="boton-certificacion-6" onclick="cambio7();">HACCP</button>
            </div>
            <div class="segunda-linea-boton">
                <button id="boton-certificacion-5" onclick="cambio5();">ISO 27001</button>
                <button id="boton-certificacion-7" onclick="cambio6();">FSSC</button>
                <button id="boton-certificacion-8" onclick="cambio8();">BRC</button>
            </div>
            <br>
            <p id="FSSC"><b>FSSC 22000 (Food Safety System Certification)<br> - Sistema de Gestión de Seguridad Alimentaria </b></p>
            <p id="parrafo-certificacion"> FSSC es un programa de certificación completo para los sistemas de inocuidad alimentaria basado en las normas de certificación ISO 22000 e ISO/TS 22002-1/PAS 220.<br><br> La FSSC 22000 tiene el objetivo de convertirse en el programa de certificación de seguridad alimentaria independiente, basada en las normas ISO, aceptado por la GFSI (Iniciativa Global de Seguridad Alimentaria) y líder mundial para toda la cadena de suministro.</b></p>
            <p id="desgloce">La certificación FSSC 22000 ha sido elaborada para certificar los sistemas de seguridad alimentaria de las organizaciones que procesan o fabrican productos de origen animal, productos vegetales perecederos, productos con una larga vida útil, otros ingredientes alimenticios como aditivos, vitaminas y cultivos biológicos, así como materiales para el empacado de alimentos. La certificación FSSC 22000 ha sido elaborada para certificar los sistemas de seguridad alimentaria de las organizaciones que procesan o fabrican productos de origen animal, productos vegetales perecederos, productos con una larga vida útil, otros ingredientes alimenticios como aditivos, vitaminas y cultivos biológicos, así como materiales para el empacado de alimentos.</p>
            <p id="titulo-listado"><b>La norma permite a su organización:</b></p>
            <ul id="listado">
                <li>Proporcionar pruebas de compromiso con el fin de identificar, evaluar y controlar los peligros para la seguridad alimentaria que pueden producirse, y evitar así posibles daños directos o indirectos hacia el consumidor.</li>
                <li> Operar bajo un sistema de gestión capaz de ayudarle a cumplir mejor los requisitos de calidad/seguridad alimentaria y el cumplimiento legal.</li>
                <li>Proporcionar una herramienta para la mejora del rendimiento de la seguridad alimentaria, y facilitar los medios para supervisar y medir el rendimiento de la seguridad alimentaria de manera eficaz.</li>
                <li> Desarrollar una buena cultura de seguridad alimentaria que, a su vez, mejore la confianza de los clientes y le ayude a adquirir ventajas competitivas.
            </ul>

        </div>

    </div>
</div>
</div>

<div class="certificacion_de_empresas-7" id="certificacion_de_empresas-7">
    <div class="certificacion_de_empresas">
        <div class="row">
            <div class="col">
                <img src="{{asset('./image/isos/brc.png')}}" id="foto-caja-certificacionrs" width="80%">
            </div>

            <div class="col">
                <h2 id="titulo-certificacion"><b>Certificacion de empresas</b></h2>
                <br>
                <div class="primera-linea-boton">
                    <button id="boton-certificacion-1" onclick="cambio1();">ISO 9001</button>
                    <button id="boton-certificacion-2" onclick="cambio2();">ISO 14001</button>
                    <button id="boton-certificacion-3" onclick="cambio3();">ISO 45001</button>
                    <button id="boton-certificacion-4" onclick="cambio4();">ISO 22000</button>
                    <button id="boton-certificacion-6" onclick="cambio7();">HACCP</button>
                </div>
                <div class="segunda-linea-boton">
                    <button id="boton-certificacion-5" onclick="cambio5();">ISO 27001</button>
                    <button id="boton-certificacion-7" onclick="cambio6();">FSSC</button>
                    <button id="boton-certificacion-8" onclick="cambio8();">BRC</button>
                </div>
                <br>
                <p id="titulo-iso9001"><b>BRC (British Retail Consortium Standard) </b></p>
                <p id="parrafo-certificacion">El estándar BRC, es un estándar que cumple con los requisitos para alimentos, productos de clientes y materiales de empaque bajo el nombre de Estándar Global - Alimentos.<br><br> El propósito principal de los estándares BRC es reconocido internacionalmente, seguridad alimentaria normas. También es para apoyar el desarrollo de la seguridad alimentaria en todo el mundo. Normas BRC en términos de forma y contenido, está diseñado para dar una idea sobre los métodos de trabajo de los fabricantes de alimentos.</p>
            </div>

        </div>
        <div class="row" id="texto-ampliadors">
            <p id="desglocers">De esta manera, se ha logrado una estandarización en los criterios de inocuidad de los alimentos y en los procesos de seguimiento.<br><br> Certificado BRC de Alimentos, Sistemas de Seguridad Alimentaria. Posee una importante ventaja competitiva en mercados nacionales e internacionales. Mientras tanto, se ha logrado mejorar la seguridad y la calidad de los productos, se han reducido los aumentos de eficiencia y la producción.<br><br> BRC Food, Norma del sistema de seguridad alimentariaSe ha publicado para garantizar unas condiciones mínimas de higiene en las empresas productoras de alimentos. Para garantizar el cumplimiento de esta norma, las empresas que trabajan en el sector alimentario deben adaptar seis criterios básicos a sus sistemas de gestión. Estos criterios son:</p>
            <ul id="listadors">
                <li>Sistema HACCP (Sistema de Análisis de Riesgos y Puntos Críticos de Control)</li>
                <li> Sistema de gestión de calidad.</li>
                <li> Negocios (fábrica) y estándares ambientales.</li>
                <li> Control de producto.</li>
                <li> de proceso. Competencia del personal y normas de higiene.
            </ul>
            <p id="listadors2">Empresas que operan en el sector alimentario, Certificado BRC de Alimentos, Sistemas de Seguridad Alimentaria cuando se aplican, deben examinar las categorías establecidas por las normas en el momento de la solicitud y tomar la categoría más adecuada para ellos. Las normas se clasifican en seis categorías según la forma en que se procesan los alimentos. Estas categorías son:</p><br>
            <ul id="listadors">
                <li>Carnes crudas y productos de pescado (carnes rojas y blancas, pescados, carnes crudas y productos de pescado)</li>
                <li> Producción (frutas y verduras frescas y congeladas). </li>
                <li> Alimentos diarios (leche y productos lácteos, huevos). </li>
                <li>Productos de carne y pescado listos para cocinar o congelados.</li>
                <li> Productos alimenticios envasados con protección ambiental, protección térmica.</li>
                <li> Otros productos alimenticios resistentes al medio ambiente (bebidas, alimentos secos, alimentos ligeros y cereales para el desayuno, productos de panadería, aceites y grasas, aditivos alimentarios)
            </ul>
            <p id="listadors2">Además de la norma del Sistema de seguridad alimentaria, BRC Food cuenta con una norma técnica de materiales de embalaje y BRC / IOP. Esta norma, también conocida como la norma BRC e IOP (Packaging Institute), está destinada a ayudar a los minoristas y fabricantes de alimentos a cumplir con sus obligaciones legales. El objetivo principal de esta norma es la protección de los consumidores. Los principios del estándar BRC Food, Food Safety System pueden explicarse a continuación:</p><br>
            <ul id="listadors">
                <li>Asegurar el cumplimiento de la normativa legal en materia de transparencia y comercio honesto.</li>
                <li> Minimizar la repetición de la valoración.</li>
                <li> Revisar y mejorar continuamente los estándares y procesos de soporte.</li>
                <li> Difundir las mejores prácticas.</li>
            </ul>
            <p id="listadors2">Estos elementos son también elementos esenciales del Sistema de Gestión de la Calidad. Gracias al Sistema de gestión de la calidad, que ya se encuentra entre los requisitos del sistema, el estándar BRC Food, Food Safety System y el estándar BRC and IOP (Packaging Institute) no tendrán que hacer mucho esfuerzo para establecer e integrar estos estándares.<br><br> Las empresas que deseen establecer BRC Food, Food Safety System en sus empresas primero deben haber establecido y administrado el sistema HACCP. El sistema de gestión de calidad de la seguridad alimentaria HACCP es un sistema para garantizar la seguridad alimentaria. Es un sistema que garantiza que las condiciones de higiene requeridas por las empresas productoras de alimentos para la producción de alimentos saludables se determinen en cada punto de los empleados, maquinaria y equipo, materias primas, medio ambiente, etc. En cada etapa de la producción, se basa en identificar y eliminar las razones que crean un riesgo para la salud del consumidor.<br><br> Las empresas que deseen establecer el Sistema de Seguridad Alimentaria e Inocuidad de BRC en sus empresas también deben tener un Sistema de Gestión de Calidad efectivo.<br><br> Mientras tanto, las condiciones ambientales de las instalaciones de producción deben cumplir con las normas y el control efectivo de los productos, procesos y empleados son los requisitos de esta norma.</p>
        </div>
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
            <p id="resumen-consultoria">-Control y Gestión de Operaciones<br> -Control de Procesos<br> -Clima Organizacional <br>-Levantamiento y Mapeo de procesos <br>-Control Estratégico de Organizaciones </p>
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

            <video  src="{{asset('./image/fotos/video-Quas.mp4')}}" controls type="video/mp4" width="60%" style="float: right; margin-top:15%"></video>
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
            <p id="parrafo-2">-Curso presenciales y remotos en formatos de: 12hrs., 16hrs., 24hrs.<br>
                -Todos los cursos son evaluados y certificados.<br>
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

<a id="boton-casos" href="{{ url('/contacto')}}">Contactanos</a>

@endsection

@section('clientes')
<br>
<div class="cabecera">
    <h2 id="titulo-clientes"><b>Nuestros Clientes</b></h2>
    <p id="parrafo-clientes">En Quas certificamos a clientes de diferentes áreas</p>
</div>
<div class="row" id="clientes">
    <div class="col md-3" id="cliente-1">
        <img src="{{asset('./image/fotos/1-mineria.png')}}" alt="cliente" width="80%" style="margin-left: 30px;">
        <p id="mineria" style="margin-left:40% ;"><b> Mineria</b></p>
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
        <p id="mineria-1" style="margin-left:10% ;"><b> Comercio Internacional</b></p>
        <img src="{{asset('./image/clientes/lucsa.png')}}" width="80%">
    </div>
    @endsection


    @extends('essencials.footer')