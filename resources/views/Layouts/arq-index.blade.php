<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quas</title>


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('./css/estilos.css') }}" type="text/css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">


</head>

<body>
        <div class="fondo-1" id="fondo-1"> 
            @yield('navbar_top')
            @yield('navbar')
            @yield('banner')
            @yield('certifica')
        </div>
        <div class="fondo-2" id="fondo-2">
            @yield('casos')
            @yield('cliente')
            @yield('especializacion')
            @yield('contacto-rapido')
        </div>
      @yield('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="./js/particles.min.js"></script>
<script src="./js/particles.js"></script>

<script>
  particlesJS(
    {
  "particles": {
    "number": {
      "value": 12,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#008000"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true,
  "config_demo": {
    "hide_card": false,
    "background_color": "#b61924",
    "background_image": "",
    "background_position": "50% 50%",
    "background_repeat": "no-repeat",
    "background_size": "cover"
  }
} )
</script>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ config('recaptcha.site_key') }}', {action: 'formulario_contacto'}).then(function(token) {
            document.getElementById('recaptcha').value = token;
        });
    });
</script>

<script>
    document.getElementById('serviceSelector').addEventListener('change', function() {
        var selectedValue = this.value;
        if (selectedValue) {
            window.location.href = '/servicios#' + selectedValue;
        }
    });
</script>
<script>

function navigateToSelectedURL(selectElement) {
    const selectedValue = selectElement.value;
    if (selectedValue) {
        window.location.href = selectedValue;
        
        // Conserva esta lógica si aún la necesitas
        if (selectedValue === "http://localhost:8888/Programas/Quas2-Peru/public/nuestros_servicios#erp-gestion-de-empresas-1") {
            localStorage.setItem("autoClickBehavior", "true");
        }
    }
}
</script>


<script>
// Funciones para el primer modal (Consultoría)
document.addEventListener('DOMContentLoaded', function() {
    // Modal functions
    window.openProcessModal = function() {
        document.getElementById('processModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    window.closeProcessModal = function() {
        document.getElementById('processModal').classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    window.openTrainingModal = function() {
        document.getElementById('trainingModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    window.closeTrainingModal = function() {
        document.getElementById('trainingModal').classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    window.openErpModal = function() {
        document.getElementById('erpModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    window.closeErpModal = function() {
        document.getElementById('erpModal').classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    // Event listeners
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeProcessModal();
            closeTrainingModal();
            closeErpModal();
        }
    });

    // Click outside to close
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal') && e.target.classList.contains('show')) {
            closeProcessModal();
            closeTrainingModal();
            closeErpModal();
        }
    });
});

</script>






<!-- JavaScript Bundle with Popper -->
</body>
</html>