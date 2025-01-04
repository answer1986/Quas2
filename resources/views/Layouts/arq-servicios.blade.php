<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quas/servicios</title>


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('./css/estilos.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('./css/nuestros.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('./css/servicios.css') }}" type="text/css">
  <script src="https://kit.fontawesome.com/594a01a72d.js" crossorigin="anonymous"></script>
</head>

<body>
  
      @yield('navbar_top')
      @yield('navbar')
      <!--@yield('servicios')-->
      <!--@yield('clientes')-->
      @yield('sevicios2')
      @yield('footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!--<script>
  function mostrar4(){
    document.getElementById('capacitacion_entrenamiento').style.display = 'block';
    document.getElementById('erp-gestion-de-empresas-1').style.display = 'none';
    document.getElementById('erp-gestion-de-empresas-2').style.display = 'none';
    document.getElementById('consultoria_en_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';
  }

  function mostrar3(){
    document.getElementById('erp-gestion-de-empresas-1').style.display = 'block';
    document.getElementById('capacitacion_entrenamiento').style.display = 'none';
    document.getElementById('erp-gestion-de-empresas-2').style.display = 'none';
    document.getElementById('consultoria_en_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';
  }
  
  function mostrar2(){
    document.getElementById('consultoria_en_empresas').style.display = 'block';
    document.getElementById('capacitacion_entrenamiento').style.display = 'none';
    document.getElementById('erp-gestion-de-empresas-2').style.display = 'none';
    document.getElementById('erp-gestion-de-empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';
  }

  function mostrar1(){
    document.getElementById('certificacion_de_empresas').style.display = 'block';
    document.getElementById('capacitacion_entrenamiento').style.display = 'none';
    document.getElementById('erp-gestion-de-empresas-2').style.display = 'none';
    document.getElementById('erp-gestion-de-empresas-1').style.display = 'none';
    document.getElementById('consultoria_en_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';
  }

  function cambiar(){
    document.getElementById('erp-gestion-de-empresas-2').style.display = 'block';
    document.getElementById('erp-gestion-de-empresas-1').style.display = 'none';
    
  }

  function cambiar2(){
    document.getElementById('erp-gestion-de-empresas-1').style.display = 'block';
    document.getElementById('erp-gestion-de-empresas-2').style.display = 'none';
  }

  function cambio1(){
    document.getElementById('certificacion_de_empresas').style.display = 'block';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';

  }

  function cambio2(){
    document.getElementById('certificacion_de_empresas-1').style.display = 'block';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';

  }

  function cambio3(){
    document.getElementById('certificacion_de_empresas-2').style.display = 'block';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';

  }

  function cambio4(){
    document.getElementById('certificacion_de_empresas-3').style.display = 'block';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';
  }

  function cambio5(){
    document.getElementById('certificacion_de_empresas-4').style.display = 'block';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';

  }

  function cambio6(){
    document.getElementById('certificacion_de_empresas-5').style.display = 'block';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';

  }

  function cambio7(){
    document.getElementById('certificacion_de_empresas-6').style.display = 'block';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-7').style.display = 'none';

  }
  function cambio8(){
    document.getElementById('certificacion_de_empresas-7').style.display = 'block';
    document.getElementById('certificacion_de_empresas').style.display = 'none';
    document.getElementById('certificacion_de_empresas-1').style.display = 'none';
    document.getElementById('certificacion_de_empresas-2').style.display = 'none';
    document.getElementById('certificacion_de_empresas-3').style.display = 'none';
    document.getElementById('certificacion_de_empresas-4').style.display = 'none';
    document.getElementById('certificacion_de_empresas-5').style.display = 'none';
    document.getElementById('certificacion_de_empresas-6').style.display = 'none';

  }

  
 
</script>


<script>
window.onload = function() {
    // Solo realiza los clics automáticos si la bandera en localStorage está establecida
    if (localStorage.getItem("autoClickBehavior") === "true") {
        setTimeout(() => {
            const element1 = document.getElementById("parrafo-caja2");
            if (element1) {
                element1.click();
                
                setTimeout(() => {
                    const element2 = document.getElementById("boton-erp-1");
                    if (element2) {
                        element2.click();
                    }
                }, 1000);
            }
        }, 1000);

        // Limpiar la bandera de localStorage para que no se repita el comportamiento en futuros cargos de página
        localStorage.removeItem("autoClickBehavior");
    }
};


</script>-->
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
</body>
</html>