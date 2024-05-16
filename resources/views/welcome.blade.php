@extends('layouts.app-simple')

@section('content')
<style>
  body {
    /* Establece la imagen de fondo */
    background-image: url('/img/fondowelcome.jpg');
    /* Ajusta la posición de la imagen si es necesario */
    background-position: center;
    /* Ajusta el tamaño de la imagen de fondo */
    background-size: cover;
    /* Fija la imagen de fondo para que no se mueva al hacer scroll */
    background-attachment: fixed;
    color: black;
    font-weight: bold;
    backdrop-filter: blur(5px);

  }

  .btn-custom-color {
    background-color: #a5eea0;
    /* Cambiar el fondo del botón a #a5eea0 */
    border-color: #a5eea0;
    /* Cambiar el color del borde del botón a #a5eea0 */
    color: black;
    /* Color del texto */
  }

  .btn-custom-color:hover {
    background-color: #85d98d;
    /* Cambiar el fondo del botón al pasar el cursor */
    border-color: #85d98d;
    /* Cambiar el color del borde del botón al pasar el cursor */
    color: black;
    /* Color del texto al pasar el cursor */
  }


  .footer-top__menu-item:hover small a {
    color: green;
    /* Cambia el color a verde al pasar el cursor */
  }

  .fa-instagram:hover {
    color: green;
    /* Cambia el color a verde al pasar el cursor */
  }

  #tienda-online:hover {
    color: green;
    /* Cambia el color a verde al pasar el cursor */
  }

  /* Estilo para el enlace Team sunflower */
  #team-sunflower:hover {
    color: green;
    /* Cambia el color a verde al pasar el cursor */
  }

  /* Estilo para el enlace Plazos Despachos */
  #plazos-despachos:hover {
    color: green;
    /* Cambia el color a verde al pasar el cursor */
  }

  /* Estilo para el enlace Condiciones Despachos */
  #condiciones-despachos:hover {
    color: green;
    /* Cambia el color a verde al pasar el cursor */
  }

  /* Estilo para el enlace Políticas de Cambios y Devoluciones */
  #politicas-cambios:hover {
    color: green;
    /* Cambia el color a verde al pasar el cursor */
  }

  .instagram-handle {
    color: black;
    /* Aumenta el grosor del texto */
    font-weight: bold;
  }

  h4 {
    color: black;
    font-weight: bold;
  }

  h5 {
    color: black;
    font-weight: bold;
  }

  a {
    color: black;
    font-weight: bold;
  }

  /* Estilos para fijar la barra de navegación */
  .navbar-fixed {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    /* Ajusta el valor según sea necesario */
    background-color: #FBF451;
    /* Cambia el color de fondo según lo necesites */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    /* Opcional: añade una sombra */
  }

  .navbar-placeholder {
    height: 60px;
    /* Ajusta la altura según el tamaño de tu barra de navegación */
  }

  /* Estilos para el grupo izquierdo de iconos */
  .navbar-left {
    display: flex;
    justify-content: flex-start;
    align-items: center;
  }

  .navbar-left .list-inline-item {
    margin-right: 10px;
    /* Espacio entre los elementos */
  }

  /* Estilos para el grupo derecho de iconos */
  .navbar-right {
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }

  .navbar-right .list-inline-item {
    margin-left: 10px;
    /* Espacio entre los elementos */
  }

  /* Estilos para aumentar el tamaño de los iconos y las letras */
  .navbar-nav .nav-link i {
    font-size: 24px;
    /* Tamaño del icono */
  }

  .navbar-nav .nav-link .customer-name {
    font-size: 18px;
    /* Tamaño del texto */
  }


  /* Estilo para la flecha derecha del carrusel (verde) */

  .carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23008000' viewBox='0 0 8 8'%3e%3cpath d='M4 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
  }

  /* Estilo para la flecha derecha del carrusel (negra) */
  .carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23008000' viewBox='0 0 8 8'%3e%3cpath d='M4 0l4 4-4 4-1.5-1.5 2.5-2.5-2.5-2.5 1.5-1.5z'/%3e%3c/svg%3e");
  }
</style>



</head>

<body>
  <!-- Barra de navegación -->

  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        @include('layouts.navbars.guest.navbar-pru')
      </div>
    </div>
  </div>

  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="container">
      <div class="container  header-block trsn py-lg-4 py-0">
        <div class="row align-items-center no-gutters">
          <div class="col-lg-4 col-md-3 col-2"></div>
          <!-- Logo -->
          <div class="col-md-4 text-center">
            <a href="https://www.instagram.com/sunflower._ccp" title="SUNFLOWER">

              <img src="img/ICONO_SINFONDO.png" class="navbar-brand img-fluid mb-md-0 mb-3 mx-auto" />

            </a>
          </div>
        </div>
      </div>
    </div>
    <nav id="main-menu" class="navbar-expand-md d-none d-lg-block vertical_menu navbar-fixed"">
</nav>
<script>
  $(function () {
    $('[data-toggle=" tooltip"]').tooltip()
  }) </script>
      </li>

      </ul>
      </div>
      </div>
      <div class="nav-bg-opacity"></div>
      <link rel="stylesheet" type="text/css" href="https://www.instagram.com/sunflower._ccp" />
      <link rel="stylesheet" type="text/css" href="https://www.instagram.com/sunflower._ccp" />
      <link rel="stylesheet" type="text/css" href="https://www.instagram.com/sunflower._ccp" />
      <link rel="stylesheet" type="text/css" href="https://www.instagram.com/sunflower._ccp" />
      <meta name="p:domain_verify" content="9a8b8facea7f475767dfbf2233cf830f" />
      <div id='components'>
        <div id='component-102112' class='theme-component show'>
          <div id="component_slider-102112" class="component_slider owl-carousel mb-5">


            <style>
              .carousel-img-small {
                max-height: 500px;
                /* ajusta este valor según tus necesidades */
                max-width: 1270px;
              }
            </style>
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                  aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/img/collar1.jpg" class="d-block w-100 carousel-img-small mx-auto">
                </div>
                <div class="carousel-item">
                  <img src="/img/aros1.jpg" class="d-block w-100 carousel-img-small mx-auto">
                </div>
                <div class="carousel-item">
                  <img src="/img/pulsera1.jpg" class="d-block w-100 carousel-img-small mx-auto">
                </div>
                <div class="carousel-item">
                  <img src="/img/tobillera.jpg" class="d-block w-100 carousel-img-small mx-auto">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            </a>
          </div>
          </a>
        </div>
        <script>
          $('#component_slider-102112 .item').addClass('item-background');

          $('#component_slider-102112').owlCarousel({
            items: 1,

            loop: false,
            dots: true,
            margin: 0,
            nav: true,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"]
          })
        </script>
      </div>
      <div id='component-332666' class='theme-component show'>
        <div id="big-banner-332666" class="container mb-5">
          <img src="/img/decoracion.png" class="h-100 w-100" alt="" title="" />

        </div>
      </div>
      <div id='component-332667' class='theme-component show'>
        </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>

      </div>
      <style>
        .img-small {
          max-width: 200px;
          /* Cambia el tamaño según tu preferencia */
          height: auto;
          display: block;
          /* Asegura que la imagen sea un elemento de bloque */
          margin: 0 auto;
          /* Centra la imagen horizontalmente */
        }
      </style>
      <div id='component-332668' class='theme-component show'>
        <div id="image-w-text-332668" class="container mb-5">
          <div class="row align-items-center">
            <div class="col-md-6 order-md-1">

              <img src="/img/collar2.jpg" class="w-100 img-small" />

            </div>

            <div class="col-md-6 order-md-2">
              <h4>ELEGANCIA</h4>
              <p>Para esos días en los que deseas un toque de elegancia sutil,
                nuestros collares son la elección ideal que añadirá un brillo discreto a tu look.</p>

              <a href="/" class="btn btn-custom-color text-white">VER COLLARES ELEGANTES.</a>

            </div>
          </div>
        </div>
      </div>
      <div id='component-332694' class='theme-component show'>
        <div id="image-w-text-332694" class="container mb-5">
          <div class="row align-items-center">
            <div class="col-md-6 order-md-1">

              <img src="/img/collar3.jpg" class="w-100 img-small" />

            </div>
            <div class="col-md-6 order-md-2">
              <h4>CASUAL</h4>
              <p>Desde la oficina hasta una cena con amigos, nuestros collares
                te acompañarán con estilo y distinción en cada momento de tu día</p>

              <a href="/" class="btn btn-custom-color text-white">VER COLLARES CASUALES.</a>

            </div>
          </div>
        </div>
      </div>
      <div id='component-332695' class='theme-component show'>
        <div id="image-w-text-332695" class="container mb-5">
          <div class="row align-items-center">
            <div class="col-md-6 order-md-1">

              <img src="/img/aros2.jpg" class="w-100 img-small" />

            </div>
            <div class="col-md-6 order-md-2">
              <h4>DELICADOS</h4>
              <p>Descubre la sutileza y
                la elegancia en cada par de nuestros aros delicados,
                diseñados para añadir un toque de encanto a tu estilo diario.</p>

              <a href="/" class="btn btn-custom-color text-white">VER AROS DELICADOS.</a>

            </div>
          </div>
        </div>
      </div>
      <div id='component-332696' class='theme-component show'>
        <div id="image-w-text-332696" class="container mb-5">
          <div class="row align-items-center">
            <div class="col-md-6 order-md-1">

              <img src="/img/aros3.jpg" class="w-100 img-small" />

            </div>
            <div class="col-md-6 order-md-2">
              <h4>PRIMAVERALES</h4>
              <p>Deja que la energía del sol te acompañe a
                donde vayas con nuestros aros verdes,
                inspirados en la alegría y la luminosidad de los campos de girasoles.</p>

              <a href="/" class="btn btn-custom-color text-white">VER AROS PRIMAVERALES.</a>

            </div>
          </div>
        </div>
      </div>
      <div id='component-332697' class='theme-component show'>
        <div id="image-w-text-332697" class="container mb-5">
          <div class="row align-items-center">
            <div class="col-md-6 order-md-1">

              <img src="/img/tobillera2.jpg" class="w-100 img-small" />

            </div>
            <div class="col-md-6 order-md-2">
              <h4>MORADOS</h4>
              <p>Explora la profundidad del color y la magia del amor
                propio con nuestra tobillera morada,
                diseñada para inspirar confianza y autoexpresión en cada paso que das.</p>

              <a href="/" class="btn btn-custom-color text-white">VER TOBILLERAS MORADAS.</a>

            </div>
          </div>
        </div>
      </div>
      <div id='component-332698' class='theme-component show'>
        <div id="image-w-text-332698" class="container mb-5">
          <div class="row align-items-center">
            <div class="col-md-6 order-md-1">

              <img src="/img/tobillera3.jpg" class="w-100 img-small" />

            </div>
            <div class="col-md-6 order-md-2">
              <h4>PRADERA</h4>
              <p>Lleva la frescura y la vitalidad de un prado verde a cada paso con nuestra pulsera verde,
                una pieza imprescindible para aquellos que buscan una conexión más profunda con la naturaleza.</p>

              <a href="/" class="btn btn-custom-color text-white">VER PULSERAS.</a>

            </div>
          </div>
        </div>
      </div>
      <div id='component-102190' class='theme-component show'>
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-12">
              <h2 class="block-header text-center " style="color: black;">🌻 @SUNFLOWER._CCP 🦋</h2>
            </div>
            <div id="instagram-102190" class="component_instagram col-12"></div>

            <a href="https://www.instagram.com/sunflower._ccp/" target="_blank" title="Síguenos @sunflower._ccp"
              class="btn btn-primary mt-5 text-white">
              <i class="fab fa-instagram text-black" aria-hidden="true"></i> SÍGUENOS
            </a>
          </div>

          <!-- Instagram code -->
          <script>
            $.ajax({
              url: "/instagram-app/media",
              data: {
                count: 6
              },
              success: function (json) {
                document.getElementById("instagram-102190").innerHTML = '';
                for (var i in json.posts) {
                  if (i >= 6) {
                    continue
                  };
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

        <footer class="pt-5 pb-3" style="background-color: rgba(255, 255, 255, 0.5);">
    <div class="container" style="text-align: justify;">
        <div class="row text-md-left">

            <div class="col-lg-3 col-md-6">
                <h5>🌻SOBRE SUNFLOWER</h5>
                <small>📍 Talcahuano, Region del BioBio, Chile. En nuestro universo de bisutería, cada pieza es más que un simple accesorio; es una manifestación de arte y creatividad, diseñada para realzar tu belleza interior y exterior, recordándote que la elegancia y el estilo pueden ser parte de tu día a día.</small>
            </div>

            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <h5>🦋CONTACTO</h5>
                <ul>
                    <li class="footer-top__menu-item">
                        <small><a href="https://wa.me/56956103084" target="_blank">WhatsApp</a></small>
                    </li>
                    <li class="footer-top__menu-item">
                        <small><a href="mailto:florencia.sanzana.ortega@gmail.com" target="_blank">Correo electrónico</a></small>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <h5>🌻INFORMACIÓN</h5>
                <ul class="navbar-nav mr-auto">
                    <li>
                        <small><a href="/tienda-online" id="tienda-online" title="TIENDA ONLINE">Tienda Online</a></small>
                    </li>
                    <li>
                        <a href="/clientas" id="team-sunflower" title="TEAM sunflower ♡">Team Sunflower</a>
                    </li>
                    <li>
                        <a href="/informacion-envios" id="plazos-despachos" title="Plazos Despachos">Plazos Despachos</a>
                    </li>
                    <li>
                        <a href="/condiciones-entrega-despacho" id="condiciones-despachos" title="Condiciones Despachos">Condiciones Despachos</a>
                    </li>
                    <li>
                        <a href="/politicas-de-cambios" id="politicas-cambios" title="Políticas de Cambios y Devoluciones">Políticas de Cambios y Devoluciones</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <h5> 🦋 ¿ERES TEAM SUNFLOWER? ¡REGISTRATE!</h5>
                <small>¡Registrate para que estemos en contacto y podamos compartir la mejor información, tips, sorpresas, descuentos, lanzamientos y más!</small>
                <ul class="list-inline social-footer my-3">
                    <li class="list-inline-item"><strong> 🌻SÍGUENOS:</strong></li>
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
                <div class="powered-by">&copy; 2024 SUNFLOWER, JOYERIA DE BISUTERIA. <br>TODOS LOS DERECHOS RESERVADOS.</div>
            </div>
            <div class="col-md-4 text-center">
                <a href="https://www.instagram.com/sunflower._ccp" title="SUNFLOWER">
                    <img src="img/ICONO_SINFONDO.png" class="navbar-brand img-fluid mb-md-0 mb-3 mx-auto" alt="LLUNA PAPELERÍA" />
                </a>
            </div>
            <div class="col-md-4">
                <ul class="payment text-lg-right text-center">
                    <!-- Aquí pueden ir tus iconos de pago -->
                </ul>
            </div>
        </div>
    </div>
</footer>

  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

  @endsection