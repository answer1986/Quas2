<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quas/Casos</title>


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('./css/estilos.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('./css/casos.css') }}" type="text/css">
  <script src="https://kit.fontawesome.com/594a01a72d.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="sobre-all">
    @yield('navbar_top')
    @yield('navbar')
    <!---@yield('relato')-->
    <!---@yield('catalogo')-->
    @yield('casos2024')
  </div>
  @yield('footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


<script>
    window.onload = function() {
        if ("{{ session('fileToDownload') }}") {
            // Descarga el archivo si la variable de sesión está presente
            window.location.href = "{{ asset(session('fileToDownload')) }}";

            // Opcionalmente, puedes limpiar la variable de sesión para futuras visitas usando Laravel, aunque no es necesario ya que se limpiará en la próxima solicitud
            @php session()->forget('fileToDownload') @endphp
        }
    }
</script>

<style>
  .sobre-all{
    background: url('../image/exito.jpeg') center/cover;
    position: relative;
    margin-bottom:2rem;
}
</style>  
<script>
document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('.navbar-toggler');
    const menu = document.querySelector('#navbarNav');
    
    if (button && menu) {
        button.addEventListener('click', function() {
            const bsCollapse = new bootstrap.Collapse(menu);
            bsCollapse.toggle();
        });
    }
});
</script>
</html>