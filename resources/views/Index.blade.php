@extends('layouts.arq-index')
@extends('essencials.navbar-top')
@extends('essencials.navbar')

@section('banner')
<div class="banners">
    <div class="consulting-container">
        <div class="consulting-content">
            <h1 class="consulting-title">Consultoría<br>Empresarial</h1>
            <p class="consulting-subtitle">Soluciones a medida para impulsar tu crecimiento.<br>
                Normas, ERP y capacitación en un solo lugar.</p>
        </div>
        <div class="consulting-image">
            <img src="{{ asset('./image/img-header.jpg') }}" alt="Business meeting" />
        </div>
    </div>
</div>
@endsection

@section('certifica')
<div class="solutions-container">
    <h2 class="solutions-title">Nuestras Soluciones</h2>
    
    <div class="solutions-grid">
        <!-- Consultoría de Procesos -->
        <div class="solution-card">
            <div class="solution-image">
                <img src="{{ asset('image/soluciones/consultoria.jpg') }}" alt="Consultoría de Procesos">
            </div>
            <div class="solution-content">
                <h3 class="solution-heading">Consultoría de Procesos</h3>
                <p class="solution-text">Optimizamos tus procesos, fortalecemos tu equipo y garantizamos tu éxito a través de soluciones personalizadas en control de operaciones, clima organizacional, mapeo de procesos y control estratégico de organizaciones.</p>
                <br>
                
                <a href="#" class="discover-button" onclick="openProcessModal()">Descubre más</a>

            </div>
        </div>
      

        <!-- Capacitación y Entrenamiento -->
        <div class="solution-card">
            <div class="solution-image">
                <img src="{{ asset('image/soluciones/capacitacion.jpg') }}" alt="Capacitación y Entrenamiento">
            </div>
            <div class="solution-content">
                <h3 class="solution-heading">Capacitación y Entrenamiento</h3>
                <p class="solution-text">Ofrecemos capacitaciones personalizadas y certificadas en las normas ISO más importantes. Aumenta la eficiencia, mejora la calidad y cumple con los requisitos legales de tu sector.</p>
                <br>
                <a href="#" class="discover-button" onclick="openTrainingModal()">Descubre más</a>
                </div>
        </div>

        <!-- ERP Gestión Empresarial -->
        <div class="solution-card">
            <div class="solution-image">
                <img src="{{ asset('image/soluciones/erp.jpg') }}" alt="ERP Gestión Empresarial">
            </div>
            <div class="solution-content">
                <h3 class="solution-heading">ERP<br>Gestión Empresarial</h3>
                <p class="solution-text">Simplifica la gestión de tu empresa con nuestras plataformas. Informes automatizados, soporte técnico especializado y respaldos de seguridad te permitirán tomar decisiones estratégicas basadas en datos confiables.</p>
                <a href="#" class="discover-button" onclick="openErpModal()">Descubre más</a>

            </div>
        </div>
    </div>
</div>

  <!-- Modal 1 -->
<!-- Modal (debe ir al final de la sección certifica) -->
<div id="processModal" class="modal">
    <div class="modal-content">
        <button class="close-button" onclick="closeProcessModal()">&times;</button>
        
        <h2 class="modal-title">Consultoría de Procesos</h2>
        
        <div class="modal-body">
            <p>En Quas Consultores, somos expertos en ayudarte a alcanzar la excelencia operativa en tu sector.</p>
            
            <p>¿Trabajas en manufactura, salud, alimentos, tecnología o buscas mejorar tus prácticas ambientales?</p>
            
            <h3>Nuestra Consultoría de Procesos te permitirá:</h3>
            <ul>
                <li>Aumentar tu eficiencia: Optimizando tus procesos y reduciendo costos.</li>
                <li>Minimizar riesgos: Identificando y gestionando posibles amenazas.</li>
                <li>Mejorar tu imagen: Demostrando un compromiso con la calidad y la sostenibilidad.</li>
                <li>Facilitar el cumplimiento normativo: Preparándote para superar cualquier auditoría.</li>
            </ul>
            
            <p>Convierte tus procesos en una ventaja competitiva.</p>
            
            <div class="text-center">
                <h3>¡Contáctanos hoy!</h3>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div id="trainingModal" class="modal">
    <div class="modal-content">
        <button class="close-button" onclick="closeTrainingModal()">&times;</button>
        <img src="{{ asset('image/modal/modal2.png') }}" alt="Capacitación Detalle" class="modal-image">
    </div>
</div>

<!--modal3 -->
<div id="erpModal" class="modal">
    <div class="modal-content">
        <button class="close-button" onclick="closeErpModal()">&times;</button>
        <img src="{{ asset('image/modal/modal4.png') }}" alt="ERP Detalle" class="modal-image">
    </div>
</div>

@endsection



@section('casos2')
<div class="casos-tittle" id="titulo-casos">Casos de éxito</div>
<p id="parrafo-clientes">Lee lo que dicen nuestros clientes</p>
<div class="row">
    <div class="col">
        <img src="{{ asset('./image/fotos/1.2-alimentos@2x.png') }}" id="alimento" width="80%">
    </div>
    <div class="col">
        <img src="{{ asset('./image/iconos/Trazado 394.png') }}" id="comillas" alt="alimento" width="75px">
        <p id="relatos-clientes">Después de varios años de intentar certificarnos en ISO 22000 sin resultados…, hoy nuestra empresa de alimentos ya cumple su segundo ciclo de certificación en norma de inocuidad alimentaria… Quas, confianza en ellos…”</p>
    </div>
</div>

<a href="{{ url('/casos_exito') }}" id="boton-casos">Ver más casos de éxito</a>
<br>
@endsection

@section('casos')
<div class="success-cases">
    <div class="success-header">
        <h2 class="success-title">CASOS DE ÉXITO</h2>
        <span class="success-subtitle">Testimonios</span>
    </div>
    
    <div class="testimonials-container">
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"Somos la única empresa en Chile de servicios de monitoreo de relaves geofísico y geotécnicos, que cuenta con un sistema de gestión integral certificado en ISO9001, ISO14001 e ISO 45001... Quas, es nuestro partner".</p>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"Nuestros productos de envase y empaque de frutas, están hoy en los mercado más importantes del mundo, tenemos todas las certificaciones de mercados europeos, asiáticos... Quas, es nuestro Socio Estratégico".</p>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"Después de varios años de intentar certificarnos en ISO 22000 sin resultados... , hoy nuestra empresa de alimentos ya cumple su segundo ciclo de certificación en norma de inocuidad alimentaria... Quas, confianza en ellos..."</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('especializacion')
<div class="py-12 bg-dark-green">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Título y Chile -->
        <div class="text-white flex justify-between items-start mb-12">
            <h2 class="text-4xl" id="area-esp">Áreas de Especialización</h2>
            <span class="text-xxl-end" id="chile">Chile</span>
        </div>
        
        <!-- Grid de especialidades -->
        <div class="grid grid-cols-4 gap-6">
            <!-- Primera fila -->
            <div class="col-span-1">
                <div class="relative group h-48">
                    <img src="{{ asset('image/especializacion/ingenieria.png') }}" alt="Ingeniería" class="w-full h-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-lg">
                        <h3 class="text text-xl" id="areas2">Ingeniería</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-span-1">
                <div class="relative group h-48">
                    <img src="{{ asset('image/especializacion/manufactura.png') }}" alt="Manufactura" class="w-full h-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-lg">
                        <h3 class="text text-xl"id="areas2">Manufactura</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-span-1">
                <div class="relative group h-48">
                    <img src="{{ asset('image/especializacion/alimentos.png') }}" alt="Alimentos" class="w-full h-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-lg">
                        <h3 class="text text-xl" id="areas2">Alimentos</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-span-1">
                <div class="relative group h-48">
                    <img src="{{ asset('image/especializacion/transporte.png') }}" alt="Transporte" class="w-full h-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-lg">
                        <h3 class="text text-xl"id="areas2">Transporte</h3>
                    </div>
                </div>
            </div>

                <!-- Segunda fila, offset para centrar -->
            <div class="segunda-fila">
                <div class="col-start-2 col-span-1">
                    <div class="relative group h-49">
                        <img src="{{ asset('image/especializacion/servicios.png') }}" alt="Servicios" class="w-full h-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-lg">
                            <h3 class="text text-xl" id="areas2" >Servicios</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-span-1">
                    <div class="relative group h-49">
                        <img src="{{ asset('image/especializacion/informatica.png') }}" alt="Informática" class="w-full h-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-lg">
                            <h3 class="text text-xl" id="areas2">Informatica</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-span-1">
                    <div class="relative group h-49">
                        <img src="{{ asset('image/especializacion/almacenamiento.png') }}" alt="Almacenamiento" class="w-full h-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent rounded-b-lg">
                            <h3 class="text text-xl"id="areas2">Almacenamiento</h3>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection

@section('cliente')
<br>
<div class="cabecera">
    <h2 id="titulo-clientes"><b>Clientes y alianzas estrategicas</b></h2>
</div>
<div class="row" id="clientes">
    <!-- Cliente 1 -->
    <div class="col" id="cliente-1">
        <img src="{{ asset('./image/alianza.png') }}" alt="cliente" style="width: 99%">
        
    </div>
    
</div>
@endsection


<!-- @section('contacto-rapido')
   

    <div class="contact-form" id="contacto-index">
        <div class="image-container">
            <img src="{{ asset('image/peru/peru-contacto.jpg') }}" alt="Imagen de contacto">
        </div>

        <form action="{{ route('contact.submit') }}" method="post">
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="text" name="phone" placeholder="Teléfono">
            <textarea name="message" placeholder="Mensaje" required></textarea>


            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>


            <button type="submit">Enviar</button>
            @csrf
        </form>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    
@endsection -->




@extends('essencials.footer')
