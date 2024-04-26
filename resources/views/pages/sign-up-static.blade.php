@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
<div class="collapse navbar-collapse" id="navbarsContainer">
    <ul class="navbar-nav m-auto">
      <li class="nav-item  active">
  <a href="/"  title="Inicio" class="level-1 trsn nav-link text-dark" >Inicio</a>
</li>
      <li class="nav-item dropdown ">
  <a href="/planificadores"  title="Planners" class="dropdown-toggle level-1 trsn nav-link text-dark" data-toggle="">Planners</a>
</li>
      <li class="nav-item dropdown active">
  <a href="/"  title="Papelería" class="dropdown-toggle level-1 trsn nav-link text-dark" data-toggle="">Papelería</a>
  </li>
      <li class="nav-item dropdown active">
  <a href="/"  title="Complementos" class="dropdown-toggle level-1 trsn nav-link text-dark" data-toggle="">Complementos</a>
</li>
      <li class="nav-item dropdown ">
  <a href="/informacion"  title="Información" class="dropdown-toggle level-1 trsn nav-link text-dark" data-toggle="">Información</a>
</li>    
      <li class="nav-item  ">
  <a href="/todos-los-productos"  title="TODOS LOS PRODUCTOS" class="level-1 trsn nav-link text-dark" >TODOS LOS PRODUCTOS</a>
</li>
      <li class="nav-item  ">
  <a href="/escuela-lluna"  title="Escuela LLUNA" class="level-1 trsn nav-link text-dark" >Escuela LLUNA</a>
</li>
    </ul>
  </div>
</nav>
<!-- End Navbar -->
<main class="main-content  mt-0">
    <div class="container">
    <div class="container  header-block trsn py-lg-4 py-0">
    <div class="row align-items-center no-gutters">
      <div class="col-lg-4 col-md-3 col-2">
        <ul class="social d-none d-lg-block list-inline">
          <li class="list-inline-item">
            <a href="https://www.instagram.com/llunapapeleria" class="trsn" title="Ir a Instagram" target="_blank">
              <i class="fab fa-instagram fa-fw"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://chat.whatsapp.com/LX23F1KZtbBDWD6IFK8Uu8"  title="WhatsApp">
              <i class="fab fa-whatsapp fa-fw"></i>
            </a>
          </li>          
        </ul>

      </div>
      <!-- Logo -->
      <div class="col-lg-4 col-md-6 col-8 text-center">
        <a href="https://www.llunapapeleria.cl" title="LLUNA PAPELERÍA">
          
            
          <h1 class="visually-hidden">SUNFLOWER</h1>
          
          <img src="https://cdn.discordapp.com/attachments/1222345748805324901/1222346713969328128/IMG-20240326-WA0086.jpg?ex=662ba2d6&is=662a5156&hm=78752dcf94fdb06738423951119056f68151cd58770778bf8ce88790f9bfe994&" class="navbar-brand store-image img-fluid" alt="LLUNA PAPELERÍA" />
          
        </a>
      </div>
      <div class="col-lg-4 col-md-3 col-2">
        <ul class="list-inline text-right header_actions m-0">
          
          
          
          <li class="list-inline-item d-none d-lg-inline-block">
            <a href="/customer/login" id="login-link" class="header_actions-link" title='Ingresar'  data-toggle="tooltip" data-placement="top">
              <i class="fas fa-user-circle"></i>
            </a>
          </li>
          
          
          <li class="list-inline-item d-none d-lg-inline-block">
            <button type="button" data-toggle="modal" data-target="#search_modal" class="p-0 header_actions-link">
              <i class="fas fa-search" data-toggle="tooltip" title="Buscar" data-placement="top"></i>
            </button>
            <div id="search_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="search_modal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center d-block" id="search_modal">Buscar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="header_search-form" class="search-form" method="get" action="/search">
                      <input type="text" value="" name="q" class="form-control" onFocus="javascript:this.value=''" placeholder="Buscar productos" />
                      <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </li>
          
          <li class="list-inline-item cart">
            <a id="cart-link" href="/cart" title="Carrito de Compras" class="header_actions-link" data-toggle="tooltip" data-placement="top">
              <i class="fas fa-shopping-cart"></i>
              <span class="cart-size">0</span>
            </a>
          </li>
          
        </ul>

      </div>
         </div>
        </div>
        <nav id="main-menu" class="navbar-expand-md d-none d-lg-block vertical_menu navbar-fixed"">
  
</nav>
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
</script>


  <!-- Navigation Mobile -->
<div class="mobilenav d-lg-none trsn">
  <div class="menu-header">
    <div class="item item-1 trsn">
      <i class="fas fa-search"></i>
      <form id="search_mini_form_mobile" class="navbar-form form-inline trsn" method="get" action="/search">
        <input type="text" value="" name="q" class="form-text" onFocus="javascript:this.value=''" placeholder="Buscar productos" />
      </form>
    </div>
  </div>  
      <li>
        <div class="login" >
          <a href="/customer/login" id="login-link-2" class="trsn nav-link" title="Ingresar / RegistrarseLLUNA PAPELERÍA">
            <i class="fas fa-user"></i>
            <span class="customer-name">
              Ingresar / Registrarse
            </span>
          </a>
        </div>
        
      </li>
      <li>
        
      </li>

      <li class="social-item">
        <a href="https://www.instagram.com/llunapapeleria" class="trsn" title="Ir a Instagram" target="_blank">
          <i class="fab fa-instagram fa-fw"></i>Instagram
        </a>
      </li>

      <li class="social-item">
        <a href="https://chat.whatsapp.com/LX23F1KZtbBDWD6IFK8Uu8" class="trsn" title="WhatsApp" target="_blank">
          <i class="fab fa-whatsapp fa-fw"></i>WhatsApp
        </a>
      </li>
      
      
    </ul>
  </div>
</div>
<div class="nav-bg-opacity"></div>
<link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/component_banners.css?1713994927"/>
<link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/component_testimonials.min.css?1713994927"/>
<link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/component_slider.css?1713994927"/>
<link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/component_instagram.css?1713994927"/>
<meta name="p:domain_verify" content="9a8b8facea7f475767dfbf2233cf830f"/>
<div id='components'><div id='component-102112' class='theme-component show' ><div id="component_slider-102112" class="component_slider owl-carousel mb-5">
  
  
  <div class="item" style="background-image:url('https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/42941205/20230908_123742-01.jpeg?1694798595')">
    <a href="https://www.llunapapeleria.cl/alba-planificador-anual">
    <div class="layer" style="background-color: #000000; opacity: 0;"></div>
    </div>
    
    </a>
  </div>
    </a>
  </div>
  

  

  

  

  <script>
    
    $('#component_slider-102112 .item').addClass('item-background');
    
    $('#component_slider-102112').owlCarousel({
      items:1,
      
      loop:false,
      dots: true,
      margin:0,
      nav:true,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause:true,
      navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"]
    })
</script>
</div><div id='component-332666' class='theme-component show' ><div id="big-banner-332666" class="container mb-5">
  
  <img src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/56779196/2021-11-12T23%3A48%3A15.592ZCapturadePantalla2021-11-12ala%28s%2920.46.43.png?1636761258" class="w-100" alt="" title=""/>
  
</div></div><div id='component-332667' class='theme-component show' >

      </form>
      
      
    </div>
    
  </div>
</div>



<script>
jQuery('#product-form-24216600-332667 .quantity').each(function() {
  var spinner = jQuery(this),
  input = spinner.find('input[type="number"]'),
  btnUp = spinner.find('.quantity-up'),
  btnDown = spinner.find('.quantity-down'),
  min = input.attr('min'),
  max = input.attr('max');

  btnUp.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    if(newVal > 0){
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    };
  });
});
</script>

<script>
jQuery('#product-form-23993247-332667 .quantity').each(function() {
  var spinner = jQuery(this),
  input = spinner.find('input[type="number"]'),
  btnUp = spinner.find('.quantity-up'),
  btnDown = spinner.find('.quantity-down'),
  min = input.attr('min'),
  max = input.attr('max');

  btnUp.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    if(newVal > 0){
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    };
  });
});
</script>

</div>
    
    
</div>



<script>
jQuery('#product-form-14616472-332667 .quantity').each(function() {
  var spinner = jQuery(this),
  input = spinner.find('input[type="number"]'),
  btnUp = spinner.find('.quantity-up'),
  btnDown = spinner.find('.quantity-down'),
  min = input.attr('min'),
  max = input.attr('max');

  btnUp.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    if(newVal > 0){
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    };
  });
});
</script>
<script>
jQuery('#product-form-12205662-332667 .quantity').each(function() {
  var spinner = jQuery(this),
  input = spinner.find('input[type="number"]'),
  btnUp = spinner.find('.quantity-up'),
  btnDown = spinner.find('.quantity-down'),
  min = input.attr('min'),
  max = input.attr('max');

  btnUp.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.click(function() {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    if(newVal > 0){
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    };
  });
});
</script>




    </div>
    
    
  </div>
</div>

</div><div id='component-332668' class='theme-component show' ><div id="image-w-text-332668" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="https://cdn.discordapp.com/attachments/1222345748805324901/1222346713969328128/IMG-20240326-WA0086.jpg?ex=662ba2d6&is=662a5156&hm=78752dcf94fdb06738423951119056f68151cd58770778bf8ce88790f9bfe994&" alt="PLANIS ANUALES" class="w-100"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PLANIS ANUALES</h4>
      <p>Planificadores con vista mensual y semanal ♡</p>
      
      <a href="https://www.llunapapeleria.cl/planificadores-anuales" class="btn btn-primary text-dark">VER LOS PLANIS ANUALES DE LLUNA</a>
      
    </div>
  </div>
</div></div><div id='component-332694' class='theme-component show' ><div id="image-w-text-332694" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/56780792/2021-11-13T00%3A08%3A01.238Z5.png?1636762353" alt="PLANIS SEMESTRALES" class="w-100"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PLANIS SEMESTRALES</h4>
      <p>Planificadores con vista mensual y diaria ♡</p>
      
      <a href="https://www.llunapapeleria.cl/planificadores-semestrales" class="btn btn-primary text-dark">VER LOS PLANIS SEMESTRALES DE LLUNA</a>
      
    </div>
  </div>
</div></div><div id='component-332695' class='theme-component show' ><div id="image-w-text-332695" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/56780798/2021-11-13T00%3A09%3A03.143Z3.png?1636762353" alt="PLANIS SEMANALES" class="w-100"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PLANIS SEMANALES</h4>
      <p>Planificadores con vista semanal ♡</p>
      
      <a href="https://www.llunapapeleria.cl/planificadores-semanales" class="btn btn-primary text-dark">VER LOS PLANIS SEMANALES DE LLUNA</a>
      
    </div>
  </div>
</div></div><div id='component-332696' class='theme-component show' ><div id="image-w-text-332696" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/56780804/2021-11-13T00%3A09%3A37.825Z2.png?1636762353" alt="PLANIS MENSUALES" class="w-100"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PLANIS MENSUALES</h4>
      <p>Planificadores con vista mensual ♡</p>
      
      <a href="https://www.llunapapeleria.cl/planificadores-mensuales" class="btn btn-primary text-dark">VER LOS PLANIS MENSUALES DE LLUNA</a>
      
    </div>
  </div>
</div></div><div id='component-332697' class='theme-component show' ><div id="image-w-text-332697" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/56780810/2021-11-13T00%3A11%3A09.523Z4.png?1636762354" alt="PLANIS DIARIOS" class="w-100"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PLANIS DIARIOS</h4>
      <p>Planificadores con vista diaria ♡</p>
      
      <a href="https://www.llunapapeleria.cl/planificadores-diarios" class="btn btn-primary text-dark">VER LOS PLANI DIARIOS DE LLUNA</a>
      
    </div>
  </div>
</div></div><div id='component-332698' class='theme-component show' ><div id="image-w-text-332698" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/56780816/2021-11-13T00%3A12%3A02.182Zqw.png?1636762354" alt="PAPELERÍA Y COMPLEMENTOS" class="w-100"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PAPELERÍA Y COMPLEMENTOS</h4>
      <p>Organizador de Gastos, Menú Semanal, Diario de Gratitud, Turnario, Cuadernos, Notas Adhesivas, Lista de Tareas, Diario Consciente, Stickers, Marcapáginas, Lápices, Destacadores y más para complementar tu planificación ♡</p>
      
      <a href="https://www.llunapapeleria.cl/complementos" class="btn btn-primary text-dark">VER LOS COMPLEMENTOS DE LLUNA</a>
      
    </div>
  </div>
</div></div><div id='component-102190' class='theme-component show' >
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-12">
      <h2 class="block-header text-center text-dark">@LLUNAPAPELERIA</h2>
    </div>
    <div id="instagram-102190" class="component_instagram col-12"></div>
    
    <a href="https://www.instagram.com/llunapapeleria" target="_blank" title="Síguenos @llunapapeleria" class="btn btn-primary mt-5 text-dark">
      <i class="fab fa-instagram text-dark" aria-hidden="true"></i>  Síguenos
    </a>
  </div>
</div>

<!-- Instagram code -->
<script>
  $.ajax({
    url: "/instagram-app/media",
    data: {
      count: 6
    },
      success: function(json) {
    		document.getElementById("instagram-102190").innerHTML = '';
        for (var i in json.posts) {
          if(i >= 6){continue};
          url = json.posts[i].thumbnail_url;
          shortcode = json.posts[i].shortcode;

          newElement = document.createElement('div');
          newElement.className = 'insta_img';
          newElement.style = 'background-image: url(' + url + ')';

          newElementLink = document.createElement('a');
          newElementLink.href = json.posts[i].permalink;
          newElementLink.target = "_blank";
          newElementLink.appendChild(newElement);

          
          var clientHeight = document.getElementById('instagram-102190').clientHeight;
          document.getElementById("instagram-102190").appendChild(newElementLink);
        }
      }
    });
</script>

</div><div id='component-545130' class='theme-component show' ><div id="image-w-text-545130" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/69326789/20211024_131819-01.jpeg?1691595210" alt="Escuela LLUNA: una escuela digital donde te enseñamos a organizarte para poder utilizar bien tu tiempo y enfocarte en lo importante" class="w-100"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>Escuela LLUNA: una escuela digital donde te enseñamos a organizarte para poder utilizar bien tu tiempo y enfocarte en lo importante</h4>
      <p>Con nuestros planners te entregamos la mejor herramienta de planificación según el estilo de vida y los requerimientos que puedas tener, pero muchas veces se necesita algo más:
Aprender técnicas concretas, tips aplicables y ser capaz de reconocer los distintos problemas que podemos tener al gestionar nuestras actividades del día a día, para posteriormente solucionarlos y así tener una planificación más efectiva y eficiente.

Eso es justamente lo que abordamos en nuestros Cursos, para que así puedas aprender a organizarte mejor y lograr disponer de tu tiempo para utilizarlo en todas esas cosas que son necesarias e importantes para ti😍  </p>
      
      <a href="https://escuelalluna.wisboo.com/catalog" class="btn btn-primary text-dark">Ver los cursos de la escuela</a>
      
    </div>
  </div>
</div></div></div>

  <!-- Footer -->
  
  <footer class="pt-5 pb-3">
  <div class="container">
    <div class="row text-md-left text-center justify-content-center">
      
      <div class="col-lg-3 col-md-6">
        <h5>Sobre Lluna</h5>
        <div class="footer-description text-center text-md-left mb-lg-0 mb-3">
          
          Av. Providencia 2392, oficina 301, Providencia.
<b>Planificar es tener ✦ tiempo para todo ✦</b> así que creamos Papelería que te ayuda a organizar tu tiempo y a enfocarte en lo importante✨ Diseño nacional con caligrafía e ilustraciones a mano ❤️
          
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <h5>Contacto</h5>
        <ul>
          <li><a href="mailto:contacto@llunapapeleria.cl" target="_blank" title="contacto@llunapapeleria.cl">contacto@llunapapeleria.cl</a></li>
          
          <li class="footer-top__menu-item">
            <a href="tel:+56973069652" title="Llámanos">+56 9 7306 9652 </a>
          </li>
          
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <h5>Información</h5>
        <ul class="navbar-nav mr-auto">
          
          <li>
  <a href="/tienda-fisica"  title="TIENDA FÍSICA">TIENDA FÍSICA</a>
</li>



          
          <li>
  <a href="/informacion-envios"  title="Plazos Despachos">Plazos Despachos</a>
</li>



          
          <li>
  <a href="/condiciones-entrega-despacho"  title="Condiciones Despachos">Condiciones Despachos</a>
</li>



          
          <li>
  <a href="/team-lluna-vip"  title="TEAM LLUNA VIP ✨">TEAM LLUNA VIP ✨</a>
</li>



          
          <li>
  <a href="/politicas-de-cambios"  title="Políticas de Cambios y Devoluciones">Políticas de Cambios y Devoluciones</a>
</li>



          
          <li>
  <a href="/preguntas-frecuentes"  title="Preguntas Frecuentes">Preguntas Frecuentes</a>
</li>



          
          <li>
  <a href="/clientas"  title="TEAM LLUNA ♡">TEAM LLUNA ♡</a>
</li>



          
          <li>
  <a href="/contact"  title="Contacto">Contacto</a>
</li>



          
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        
        <h5>¿ERES TEAM LLUNA?😍 ¡Suscríbete!</h5>
        <div id="newsletter">
          <form action="https://llunapapeleria.us18.list-manage.com/subscribe/post?u=205020cca084f0b152eb42b98&amp;id=37b224430b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="form-group mb-0">
                <!-- Begin MailChimp Signup Form -->
                <input type="email" id="mce-EMAIL" class="email field form-control footer-subscribe__email" name="EMAIL" placeholder="Ingresa tu correo electrónico" required>
                <button type="submit" id="mc-embedded-subscribe" class="btn btn-link p-0 footer-subscribe__button" name="subscribe"><i class="far fa-envelope"></i></button>
                <!-- end .footer-subscribe__field -->

                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_37d0843fc21a18eccb8d392eb_f7037d65c5" tabindex="-1" value=""></div>
              </div>
              <small>Suscríbete para que estemos en contacto y podamos compartir la mejor información, tips, sorpresas, descuentos, lanzamientos y más!</small>
            </div>
          </form>
        </div>
        
        
        
        <ul class="list-inline social-footer my-3">
          
          <li class="list-inline-item">
            <strong>Síguenos:</strong>
          </li>
          
          

          

          
          
          <li class="list-inline-item">
            <a href="https://www.instagram.com/llunapapeleria" title="Ir a Instagram" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          
          
          <li class="list-inline-item d-md-none">
            <a href="https://api.whatsapp.com/send?phone=56973069652&text=Hola LLUNA PAPELERÍA!" title="WhatsApp" target="_blank">
              <i class="fab fa-whatsapp fa-fw"></i>
            </a>
          </li>
          
          
        </ul>
        
      </div>


    </div>
  </div>
  <hr class="mb-3">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-4 text-lg-left text-center mb-lg-0 mb-3">
        <div class="powered-by">&copy; 2024 LLUNA PAPELERÍA. <br>Todos los derechos reservados. </div>
      </div>
      <div class="col-md-4 text-center">
        <a href="https://www.llunapapeleria.cl" title="LLUNA PAPELERÍA">
          
          <img src="https://images.jumpseller.com/store/lluna-papeleria/store/logo/Copia_de_LogoLLUNA_lila.png?1685569757" class="navbar-brand img-fluid mb-md-0 mb-3 mx-auto" alt="LLUNA PAPELERÍA" />
          
        </a>
      </div>
      <div class="col-md-4">
        <ul class="payment text-lg-right text-center">
  
</div>
    </div>
</main>
<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<footer class="footer py-5">
    <div class="container">
         
  <!-- /.container -->

  <!-- Bootstrap Core -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/bootstrap.filestyle/1.1.0/js/bootstrap-filestyle.min.js"></script>
  <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  


  <script type="text/javascript" src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/main.js?1713994927"></script>

  
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
  var shoppingCartMessage = 'Ir al Carro de Compras';
  var singleProductMessage = 'ha sido añadido al carro de compra.'
  var multiProductMessage = 'han sido añadidos al carro de compra.'

  function getProductOptions() {
    var options = {};
    $(".prod-options").each(function() {
      var option = $(this);
      options[option.attr('id')] = option.val();
    })
    return options;
  }
</script>
<script>
  function addToCart(id, productName, qty, options) {
    Jumpseller.addProductToCart(id, qty, options, {
      callback: function(data, status) {
        toastr.options = {
          closeButton: true,
          debug: false,
          newestOnTop: false,
          progressBar: true,
          positionClass: 'toast-top-right',
          preventDuplicates: false,
          onclick: null,
          showDuration: '500',
          hideDuration: '1000',
          timeOut: '5000',
          extendedTimeOut: '1000',
          showEasing: 'swing',
          hideEasing: 'linear',
          showMethod: 'fadeIn',
          hideMethod: 'fadeOut',
        };

        if (data.status == 404) {
          toastr.error(data.responseJSON.message);
        } else {
          if (parseInt(qty) == 1) {
            toastr.success(
              qty +
              ' ' +
              productName +
              ' ' +
              singleProductMessage +
              ' <a href="' +
              $('#cart-link').attr('href') +
              '"> ' +
              shoppingCartMessage +
              '</a>'
            );
          } else {
            toastr.success(
              qty +
              ' ' +
              productName +
              ' ' +
              multiProductMessage +
              ' <a href="' +
              $('#cart-link').attr('href') +
              '"> ' +
              shoppingCartMessage +
              '</a>'
            );
          }

          // update cart in page
          $('.cart-size').text(parseInt($('.cart-size').text()) + parseInt(qty));
        }
      },
    });
  }
</script>
  

  
  <script type="application/javascript" async
src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=VCcGZF"></script>
  <script
  async type="text/javascript"
  src="//static.klaviyo.com/onsite/js/klaviyo.js?company_id=VCcGZF"
></script>
    </div>
</footer>
@endsection
