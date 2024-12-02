@section('navbar')
<header>


<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
  <img src="{{ asset('image/Logo-Quas.png') }}" alt="logo" id="logo" height="30%" width="15%">
  <b><a class="nav-link" href="{{ url('/')}}">Inicio</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <b><a class="nav-link" href="{{ url('/sobre_nosotros')}}">Nosotros</a></b>
      </li>
      <li class="nav-item active">
        <b><a class="nav-link" href="{{ url('/nuestros_servicios')}}">Servicios</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link" href="{{ url('/casos_exito')}}">Casos de éxito</a></b>
        <ul class="submenu">
           <li><a href="{{ url('/casos_exito#catalogo')}}">Catalogo 2023</a></li>
        </ul>
      </li>
      
      <li class="nav-item">
        <b><a class="nav-link" id="ivanrs" style="margin-right:10px" href="{{ url('/contacto')}}">Contacto</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link" id="Blog" href="{{ url('/blog')}}">Blog</a></b>
      </li>
      
    </ul>
  </div>
</nav>


        
</header>

@endsection