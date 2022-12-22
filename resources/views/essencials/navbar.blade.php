@section('navbar')
<header>


<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
  <img src="{{ asset('image/Logo-Quas.png') }}" alt="logo" id="logo" height="20%" width="10%">
  <b><a class="nav-link" href="{{ url('/')}}">Inicio</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <b><a class="nav-link" href="{{ url('/nuestros_servicios')}}">Nuestros servicios</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link" href="{{ url('/casos_exito')}}">Casos de éxito</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link" href="{{ url('/sobre_nosotros')}}">Sobre nosotros</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link" id="ivanrs" href="{{ url('/contacto')}}">Contacto</a></b>
      </li>
      <li class="nav-item cliente"style="margin-left:200px">
      <button type="button" id="ivan" class="btn btn-success" role="link" onclick="window.location='https://www.quasmanager.cl/profile'">Clientes Quasmanager</button>
      </li>
    </ul>
  </div>
</nav>


        
</header>

@endsection