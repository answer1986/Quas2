@section('footer')
<footer>
    <br>
<div class="row" id="footer">
    <div class="col-12 col-md-3" id="footer-caja-1">
        <h3 id="marca-footer">Quas</h3>
        <p id="parrafo-caja-1">Expertos en gestión de todo requerimiento exigido por el proceso de certificación en organizaciones.</p>
        <div class="row" id="banderas">
            <div class="col-2">
                <img src="{{ asset('./image/banderas/brazil.svg') }}" alt="Brazil">
            </div>
            <div class="col-2">
                <img src="{{ asset('./image/banderas/chile.svg') }}" alt="Chile">
            </div>

            <div class="col-2">
                <img src="{{ asset('./image/banderas/usa.svg') }}" alt="Usa">
            </div>
            <div class="col-2">
                <img src="{{ asset('./image/banderas/peru.svg') }}" alt="Peru">
            </div>
        </div>
        <a href="{{ url('/terminos') }}" id="Terminos">Terminos y condiciones</a>
    </div>
    <div class="col-12 col-md-4" id="footer-caja-2">
        <h5 id="certficacion-empresas"><b>Certificacion de empresas</b></h5>
        <ul class="certificaciones-footer">
            <li id="parrafo-caja-2"><b>ISO 9001:</b>Sistema de gestion de la calidad (SGC)</li>
            <li id="parrafo-caja-2"><b>ISO 14001:</b>Sistemas de Gestión Ambiental (SGA)</li>
            <li id="parrafo-caja-2"><b>ISO 27001:</b>Sistema de Gestión de la Seguridad de la Información (SGSI)</li>
            <li id="parrafo-caja-2"><b>ISO 45001:</b>Sistemas de Gestión de la Seguridad y Salud en el Trabajo.</li>    
        </ul>

    </div>
    <div class="col-12 col-md-3">
    <ul class="certificaciones-footer-2">
            <li><b>HACCP:</b>(Hazard Analysis and Critical Control Points)</li>
            <li><b>ISO 22000:</b>Sistemas de Gestión Ambiental (SGA)</li>
            <li><b>Iso 27001:</b>Sistemas de Gestión Inocuidad Alimentaria (SGIA)</li>
            <li><b>BRC:</b>(British Retail Consortium Standard)</li>    
        </ul>
    </div>


    <div class="col-12 col-md-2">
        <h5 id="footer-contacto"><b>Contacto</b></h5>
        <div class="col">
         <a href="tel:+56 9 7453 2868" id="parrafo-caja-3"> Tel 9 7453 2868. </a>
        </div>
        <a href="mailto:comercial@quas.cl" id="parrafo-caja-3">comercial@quas.cl</a>
        <h5 id="siguenos">Siguenos</h5>
        <img src="{{ asset('./image/redes/twetter.svg') }}" alt="facebook" id="facebook">
        <img src="{{ asset('./image/redes/linked.svg') }}" alt="instagram" id="instagram">
    </div>
</div>
</footer>
@endsection