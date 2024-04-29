@extends('layouts.app')

@section('content')
<style>
    /* Estilos para fijar la barra de navegación */
    .navbar-fixed {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000; /* Ajusta el valor según sea necesario */
      background-color: #FBF451; /* Cambia el color de fondo según lo necesites */
      box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Opcional: añade una sombra */
    }
    .navbar-placeholder {
      height: 60px; /* Ajusta la altura según el tamaño de tu barra de navegación */
    }

    /* Estilos para el grupo izquierdo de iconos */
    .navbar-left {
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }

    .navbar-left .list-inline-item {
      margin-right: 10px; /* Espacio entre los elementos */
    }

    /* Estilos para el grupo derecho de iconos */
    .navbar-right {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .navbar-right .list-inline-item {
      margin-left: 10px; /* Espacio entre los elementos */
    }

    /* Estilos para aumentar el tamaño de los iconos y las letras */
    .navbar-nav .nav-link i {
      font-size: 24px; /* Tamaño del icono */
    }

    .navbar-nav .nav-link .customer-name {
      font-size: 18px; /* Tamaño del texto */
    }
  </style>
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-fixed shadow-none my-3 navbar-transparent mt-0">
    <div class="collapse navbar-collapse" id="navbarsContainer">
      <ul class="navbar-nav m-auto navbar-left">
        <!-- Grupo izquierdo de iconos -->
        
        <li class="list-inline-item">
          <a href="https://www.instagram.com/sunflower._ccp/" class="trsn" title="Ir a Instagram" target="_blank">
            <i class="fab fa-instagram fa-fw"style="font-size: 35px;"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://chat.whatsapp.com/LX23F1KZtbBDWD6IFK8Uu8"  title="WhatsApp">
            <i class="fab fa-whatsapp fa-fw" style="font-size: 35px;"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav m-auto" style="display: flex; gap: 15px;">
  <li class="nav-item  active" id="navbarsContainer">
    <a href="http://127.0.0.1:8000/sign-up-static" title="INICIO" class="level-1 trsn nav-link text-dark" style="font-size: 25px;">🌻 Inicio</a>
  </li>
  <li class="nav-item dropdown">
    <a href="/" title="CATEGORIAS" class="dropdown-toggle level-1 trsn nav-link text-dark" data-toggle="" style="font-size: 25px;">Categorias</a>
  </li>
  <li class="nav-item dropdown active">
    <a href="/" title="CONTACTO" class="dropdown-toggle level-1 trsn nav-link text-dark" data-toggle="" style="font-size: 25px;">Contacto</a>
  </li>
  <li class="nav-item dropdown active">
    <a href="/" title="NOSOTROS" class="dropdown-toggle level-1 trsn nav-link text-dark" data-toggle="" style="font-size: 25px;">Nosotros</a>
  </li>
  <li class="nav-item dropdown">
    <a href="/" title="INFORMACIÓN" class="dropdown-toggle level-1 trsn nav-link text-dark" data-toggle="" style="font-size: 25px;">Información</a>
  </li>
  <li class="nav-item">
    <a href="/" title="TODOS LOS PRODUCTOS" class="level-1 trsn nav-link text-dark" style="font-size: 25px;">Todos los productos</a>
  </li>
  <li class="nav-item">
    <a href="/" title="MAPA" class="level-1 trsn nav-link text-dark" style="font-size: 25px;">Mapa 🌻</a>
  </li>
</ul>

      <ul class="navbar-nav m-auto navbar-right">
        <!-- Grupo derecho de iconos -->
        <li class="list-inline-item">
          <a href="/customer/login" id="login-link" class="header_actions-link" title='Ingresar'  data-toggle="tooltip" data-placement="top">
            <i class="fas fa-user-circle" style="font-size: 30px;"></i>
          </a>
        </li>
       <!-- CORREGIR DESPUES LO DE LA BUSQUEDA -->
        <li class="list-inline-item">
        <a href="https://www.instagram.com/sunflower._ccp/" class="trsn" title="Ir a Instagram" target="_blank">
          <i class="fa fa-search" aria-hidden="true" style="font-size: 30px;" title="Buscar" ></i>
          
          </button>
        </li>
        <li class="list-inline-item cart">
          <a id="cart-link" href="/cart" title="Carrito de Compras" class="header_actions-link" data-toggle="tooltip" data-placement="top">
            <i class="fas fa-shopping-cart" style="font-size: 30px;"></i>
            <span class="cart-size"style="font-size: 30px;">0</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Placeholder para evitar que el contenido se solape con la barra de navegación fija -->
  <div class="navbar-placeholder"></div>



<!-- End Navbar -->
<main class="main-content  mt-0">
    <div class="container">
    <div class="container  header-block trsn py-lg-4 py-0">
    <div class="row align-items-center no-gutters">
      <div class="col-lg-4 col-md-3 col-2"></div>
      <!-- Logo -->
      <div class="col-md-4 text-center">
        <a href="https://www.instagram.com/sunflower._ccp" title="SUNFLOWER">
          
          <img src="https://cdn.discordapp.com/attachments/1224140724132515922/1233584931041443902/ICONO_SINFONDO.png?ex=662da0fe&is=662c4f7e&hm=8727f799cf9bd339d3061099db7d6e24d629b14f07299b71ebb4dad8d55bb3a7&" class="navbar-brand img-fluid mb-md-0 mb-3 mx-auto" alt="LLUNA PAPELERÍA" />
          
        </a>
      </div></div></div></div>
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
        <<div class="login">
  <a href="http://127.0.0.1:8000/register" id="login-link-2" class="trsn nav-link" title="Ingresar / Registrarse LLUNA PAPELERÍA">
    <i class="fas fa-user"></i>
   
  </a>
</div>    
      </li>
      <li>      
      </li>
    </ul>
  </div>
</div>
<div class="nav-bg-opacity"></div>
<link rel="stylesheet" type="text/css" href="https://www.instagram.com/sunflower._ccp"/>
<link rel="stylesheet" type="text/css" href="https://www.instagram.com/sunflower._ccp"/>
<link rel="stylesheet" type="text/css" href="https://www.instagram.com/sunflower._ccp"/>
<link rel="stylesheet" type="text/css" href="https://www.instagram.com/sunflower._ccp"/>
<meta name="p:domain_verify" content="9a8b8facea7f475767dfbf2233cf830f"/>
<div id='components'><div id='component-102112' class='theme-component show' ><div id="component_slider-102112" class="component_slider owl-carousel mb-5">
  
  
<style>
  .carousel-img-small {
    max-height: 500px; /* ajusta este valor según tus necesidades */
    max-width: 1270px;
  }
</style>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/collar1.jpg" class="d-block w-100 carousel-img-small mx-auto" >
    </div>
    <div class="carousel-item">
      <img src="/img/aros1.jpg" class="d-block w-100 carousel-img-small mx-auto" >
    </div>
    <div class="carousel-item">
      <img src="/img/pulsera1.jpg" class="d-block w-100 carousel-img-small mx-auto" >
    </div>
    <div class="carousel-item">
      <img src="/img/tobillera.jpg" class="d-block w-100 carousel-img-small mx-auto" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
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
  
  <img src="https://cdn.discordapp.com/attachments/1224140724132515922/1234303229236350996/image.png?ex=66303df6&is=662eec76&hm=091f24b107db4b7b70e8a49b8ee8320020f68f72f0286de9b5a7a8797796dbda&" class="w-100" alt="" title=""/>
  
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

</div>
<style>
  .img-small {
    max-width: 200px; /* Cambia el tamaño según tu preferencia */
    height: auto;
    display: block; /* Asegura que la imagen sea un elemento de bloque */
    margin: 0 auto; /* Centra la imagen horizontalmente */
  }
</style>
<div id='component-332668' class='theme-component show' ><div id="image-w-text-332668" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="/img/collar2.jpg" class="w-100 img-small"/>
      
    </div>  

    <div class="col-md-6 order-md-2">
      <h4>ELEGANCIA</h4>
      <p>Para esos días en los que deseas un toque de elegancia sutil,
        nuestros collares son la elección ideal que añadirá un brillo discreto a tu look.</p>
      
      <a href="/" class="btn btn-primary text-dark">VER COLLARES ELEGANTES</a>
      
    </div>
  </div>
</div>
</div>
<div id='component-332694' class='theme-component show' ><div id="image-w-text-332694" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="/img/collar3.jpg"  class="w-100 img-small"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>CASUAL</h4>
      <p>Desde la oficina hasta una cena con amigos, nuestros collares
        te acompañarán con estilo y distinción en cada momento de tu día</p>
      
      <a href="/" class="btn btn-primary text-dark">VER COLLARES CASUALES</a>
      
    </div>
  </div>
</div></div><div id='component-332695' class='theme-component show' ><div id="image-w-text-332695" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="/img/aros2.jpg" class="w-100 img-small"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>DELICADOS</h4>
      <p>Descubre la sutileza y
        la elegancia en cada par de nuestros aros delicados,
        diseñados para añadir un toque de encanto a tu estilo diario.</p>
      
      <a href="/" class="btn btn-primary text-dark">VER AROS DELICADOS.</a>
      
    </div>
  </div>
</div></div><div id='component-332696' class='theme-component show' ><div id="image-w-text-332696" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="/img/aros3.jpg" class="w-100 img-small"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PRIMAVERALES</h4>
      <p>Deja que la energía del sol te acompañe a
        donde vayas con nuestros aros verdes,
        inspirados en la alegría y la luminosidad de los campos de girasoles.</p>
      
      <a href="/" class="btn btn-primary text-dark">VER AROS PRIMAVERALES.</a>
      
    </div>
  </div>
</div></div><div id='component-332697' class='theme-component show' ><div id="image-w-text-332697" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="/img/tobillera2.jpg" class="w-100 img-small"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>MORADOS</h4>
      <p>Explora la profundidad del color y la magia del amor
        propio con nuestra tobillera morada,
        diseñada para inspirar confianza y autoexpresión en cada paso que das.</p>
      
      <a href="/" class="btn btn-primary text-dark">VER TOBILLERAS MORADAS.</a>
      
    </div>
  </div>
</div></div><div id='component-332698' class='theme-component show' ><div id="image-w-text-332698" class="container mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-1">
      
      <img src="/img/tobillera3.jpg"class="w-100 img-small"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PRADERA</h4>
      <p>Lleva la frescura y la vitalidad de un prado verde a cada paso con nuestra pulsera verde,
        una pieza imprescindible para aquellos que buscan una conexión más profunda con la naturaleza.</p>
      
      <a href="/" class="btn btn-primary text-dark">VER PULSERAS.</a>
      
    </div>
  </div>
</div></div><div id='component-102190' class='theme-component show' >
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-12">
      <h2 class="block-header text-center text-dark">@SUNFLOWER._CCP</h2>
    </div>
    <div id="instagram-102190" class="component_instagram col-12"></div>
    
    <a href="https://www.instagram.com/sunflower._ccp/" target="_blank" title="Síguenos @sunflower._ccp" class="btn btn-primary mt-5 text-dark">
      <i class="fab fa-instagram text-dark" aria-hidden="true"></i> SÍGUENOS
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

</div>

  <!-- Footer -->
  
  <footer class="pt-5 pb-3">
  <div class="container">
    <div class="row text-md-left text-center justify-content-center">
      
      <div class="col-lg-3 col-md-6">
        <h5>Sobre SunFlower</h5>
        <div class="footer-description text-center text-md-left mb-lg-0 mb-3">
          
        📍 Talcahuano, Region del BioBio, Chile.
          En nuestro universo de bisutería, cada pieza es más que un simple accesorio;
          es una manifestación de arte y creatividad, diseñada para realzar tu belleza interior y exterior,
          recordándote que la elegancia y el estilo pueden ser parte de tu día a día.❤️

        </div>
      </div>
      
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <h5>Contacto</h5>
        <ul>
          <li><a href="mailto:contacto@llunapapeleria.cl" target="_blank" title="florencia.sanzana.ortega@gmail.com">florencia.sanzana.ortega@gmail.com</a></li>
          
          <li class="footer-top__menu-item">
            <a href="tel:+56973069652" title="Llámanos">+56 9 5610 3084 </a>
          </li>
          
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <h5>Información</h5>
        <ul class="navbar-nav mr-auto">
          
          <li>
  <a href="/tienda-fisica"  title="TIENDA FÍSICA">TIENDA ONLINE</a>
</li>   
          <li>
  <a href="/informacion-envios"  title="Plazos Despachos">Plazos Despachos</a>
</li>
          <li>
  <a href="/condiciones-entrega-despacho"  title="Condiciones Despachos">Condiciones Despachos</a>
</li>
          <li>
  <a href="/politicas-de-cambios"  title="Políticas de Cambios y Devoluciones">Políticas de Cambios y Devoluciones</a>
</li>
          <li>
  <a href="/clientas"  title="TEAM LLUNA ♡">TEAM SUNFLOWER 🌻</a>
</li>
          <li>
  <a href="/contact"  title="Contacto">Contacto</a>
</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        
        <h5>¿ERES TEAM SUNFLOWER?😍 ¡REGISTRATE!</h5>
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
              <small>¡Registrate para que estemos en contacto y podamos compartir la mejor información, tips, sorpresas, descuentos, lanzamientos y más!</small>
            </div>
          </form>
        </div>
        
        <ul class="list-inline social-footer my-3">
          
          <li class="list-inline-item">
            <strong>Síguenos:</strong>
          </li>
          <li class="list-inline-item">
            <a href="https://www.instagram.com/sunflower._ccp" title="Ir a Instagram" target="_blank">
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
        <div class="powered-by">&copy; 2024 SunFlower, joyeria de bisuteria. <br>Todos los derechos reservados. </div>
      </div>
      <div class="col-md-4 text-center">
        <a href="https://www.instagram.com/sunflower._ccp" title="SUNFLOWER">
          
          <img src="https://cdn.discordapp.com/attachments/1224140724132515922/1233584931041443902/ICONO_SINFONDO.png?ex=662da0fe&is=662c4f7e&hm=8727f799cf9bd339d3061099db7d6e24d629b14f07299b71ebb4dad8d55bb3a7&" class="navbar-brand img-fluid mb-md-0 mb-3 mx-auto" alt="LLUNA PAPELERÍA" />
          
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
