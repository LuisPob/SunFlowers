@extends('layouts.app-simple')

@section('content')
<style>
  .powered-by {
    color: grey;
    font-weight: 300;
  }

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

  /* La imagen con clase img-carou se ajusta con cover al contenedor */
  .img-carou {
    object-fit: cover;
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

  .category-card {
    width: 100%;
    text-decoration: none;
    color: inherit;
  }

  .category-card:hover {
    transform: scale(1.05);
    color: inherit;
    /* Para mantener el color del texto en el hover */
  }

  .category-img {
    object-fit: cover;
    height: 200px;
    /* Alto de la imagen */
    width: 100%;
  }

  .card-body {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0.5rem;
  }

  .card-title {
    margin: 0.5rem 0;
  }
</style>



</head>

<body>
  <!-- Barra de navegación -->

  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        @include('layouts.navbars.guest.navbar-pru', ['company' => $company])
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

              <img src="{{asset('storage/'. $company->logo)}}" class="navbar-brand img-fluid mb-md-0 mb-3 mx-auto" />

            </a>
          </div>
        </div>
      </div>
    </div>
    <nav id="main-menu" class="navbar-expand-md d-none d-lg-block vertical_menu navbar-fixed"">
</nav>
<script>
  $(function () {
    $('[data-toggle=" tooltip"]').tooltip() }) </script>
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
                @foreach ($carouselImages as $index => $carouselImage)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach

              </div>
              <div class="carousel-inner">
                @foreach ($carouselImages as $carouselImage)
                <div class="carousel-item {{ $carouselImage->order === 1 ? 'active' : '' }}">
                  <img src="{{ asset('storage/carousel/' . $carouselImage->image_path) }}" class="d-block w-100 carousel-img-small mx-auto img-carou">
                </div>
                @endforeach

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
        <div id="big-banner-332666" class="card container mb-5">
          <div class="card-body row m-0 p-0">
            <img src="img/decoracion-1.png" height="auto" class="p-0 m-0 col-md-3 col-xs-6 col-6" />
            <img src="img/decoracion-2.png" height="auto" class="p-0 m-0 col-md-3 col-xs-6 col-6" />
            <img src="img/decoracion-4.png" height="auto" class="p-0 m-0 col-md-3 col-xs-6 col-6" />
            <img src="img/decoracion-3.png" height="auto" class="p-0 m-0 col-md-3 col-xs-6 col-6" />

          </div>
          <!-- <img src="/img/decoracion.png" class="h-100 w-100" alt="" title="" /> -->

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
        <!-- <div class="container">
          <h2 class="text-center mb-4">Categorías de Productos</h2>
          <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4">
                    <a href="#" class="card category-card">
                      <img src="/img/collar1.jpg" class="card-img-top category-img" alt="Collares">
                      <div class="card-body text-center">
                        <h5 class="card-title">Collares</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="card category-card">
                      <img src="/img/aros1.jpg" class="card-img-top category-img" alt="Aros">
                      <div class="card-body text-center">
                        <h5 class="card-title">Aros</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="card category-card">
                      <img src="/img/pulsera1.jpg" class="card-img-top category-img" alt="Pulseras">
                      <div class="card-body text-center">
                        <h5 class="card-title">Pulseras</h5>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <a href="#" class="card category-card">
                      <img src="/img/tobillera.jpg" class="card-img-top category-img" alt="Tobilleras">
                      <div class="card-body text-center">
                        <h5 class="card-title">Tobilleras</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="card category-card">
                      <img src="/img/collar2.jpg" class="card-img-top category-img" alt="Collares">
                      <div class="card-body text-center">
                        <h5 class="card-title">Collares</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="card category-card">
                      <img src="/img/aros2.jpg" class="card-img-top category-img" alt="Aros">
                      <div class="card-body text-center">
                        <h5 class="card-title">Aros</h5>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div> -->
        <div id="image-w-text-332668" class="container mb-5">
          <div class="row align-items-center">
            <div class="col-md-6 order-md-1">

              <img src="/img/collar2.jpg" class="w-100 img-small" />

            </div>

            <div class="col-md-6 order-md-2">
              <h4>ELEGANCIA</h4>
              <p>Para esos días en los que deseas un toque de elegancia sutil,
                nuestros collares son la elección ideal que añadirá un brillo discreto a tu look.</p>

              <a href="/shop" class="btn btn-custom-color text-white">VER COLLARES ELEGANTES.</a>

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

              <a href="/shop" class="btn btn-custom-color text-white">VER COLLARES CASUALES.</a>

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

              <a href="/shop" class="btn btn-custom-color text-white">VER AROS DELICADOS.</a>

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

              <a href="/shop" class="btn btn-custom-color text-white">VER AROS PRIMAVERALES.</a>

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

              <a href="/shop" class="btn btn-custom-color text-white">VER TOBILLERAS MORADAS.</a>

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

              <a href="/shop" class="btn btn-custom-color text-white">VER PULSERAS.</a>

            </div>
          </div>
        </div>
      </div>
      <div id='component-102190' class='theme-component show'>
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-12">
              <h2 class="block-header text-center " style="color: black;">🌻¡QUEREMOS SABER TU OPINIÓN DE @SUNFLOWER._CCP!🦋</h2>
            </div>
            <br>
            <br>
            <br>
            <style>
              .flower-rating .flower {
                font-size: 30px;
                cursor: pointer;
                color: #ccc;
              }

              .flower-rating .flower.rated {
                color: #1269f3;
              }

              .review {
                border-bottom: 1px solid #ccc;
                padding-bottom: 10px;
                margin-bottom: 10px;
              }

              .review .flower {
                font-size: 25px;
                color: #1269f3;
              }

              .btn-delete {
                color: red;
                cursor: pointer;
                font-size: 12px;
              }
            </style>

            <body>
              <div class="container mb-5 col-5" id="reviews-section">
                <form id="review-form">
                  <div class="form-group">
                    <label for="name">NOMBRE.</label>
                    <input type="text" class="form-control" id="name" required>
                  </div>
                  <div class="form-group">
                    <label for="rating">CALIFICACIÓN.</label>
                    <div id="rating" class="flower-rating">
                      <span class="flower" data-value="1">&#10048;</span>
                      <span class="flower" data-value="2">&#10048;</span>
                      <span class="flower" data-value="3">&#10048;</span>
                      <span class="flower" data-value="4">&#10048;</span>
                      <span class="flower" data-value="5">&#10048;</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="review-text">¡NOS INTERESA TU OPINIÓN!, CUENTANOS QUE TE PARECIÓ.</label>
                    <textarea class="form-control" id="review-text" rows="3" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-custom-color">ENVIAR.</button>
                </form>
              </div>
              <h4 class="text-center">🦋TESTIMONIOS🦋</h4>
              <div class="container mb-5 col-4" id="reviews-container" style="max-height: 200px; overflow-y: scroll;">
                <div id="reviews-list"></div>
              </div>


          </div>
        </div>
        <hr class="mb-3">

  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5" id="footer">
    <div class="container">
      <script>
        document.querySelectorAll('.flower-rating .flower').forEach(function(flower) {
          flower.addEventListener('click', setRating);
        });

        function setRating(ev) {
          let span = ev.currentTarget;
          let flowers = document.querySelectorAll('.flower-rating .flower');
          let num = parseInt(span.getAttribute('data-value'));

          flowers.forEach(function(flower) {
            if (parseInt(flower.getAttribute('data-value')) <= num) {
              flower.classList.add('rated');
            } else {
              flower.classList.remove('rated');
            }
          });

          document.querySelector('.flower-rating').setAttribute('data-rating', num);
        }

        document.getElementById('review-form').addEventListener('submit', function(event) {
          event.preventDefault();
          let name = document.getElementById('name').value;
          let rating = document.querySelector('.flower-rating').getAttribute('data-rating');
          let review = document.getElementById('review-text').value;

          // Crear flores para la calificación
          let flowerHtml = '';
          for (let i = 1; i <= 5; i++) {
            if (i <= rating) {
              flowerHtml += '<span class="flower">&#10048;</span>';
            } else {
              flowerHtml += '<span class="flower" style="color: #ccc;">&#10048;</span>';
            }
          }

          // Crear un objeto de reseña
          let reviewObject = {
            id: Date.now(),
            name: name,
            rating: rating,
            review: review,
            flowerHtml: flowerHtml
          };

          // Guardar la reseña en localStorage
          let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
          reviews.push(reviewObject);
          localStorage.setItem('reviews', JSON.stringify(reviews));

          // Agregar la reseña al contenedor de reseñas
          addReviewToList(reviewObject);

          // Limpiar el formulario
          document.getElementById('review-form').reset();
          let flowers = document.querySelectorAll('.flower-rating .flower');
          flowers.forEach(function(flower) {
            flower.classList.remove('rated');
          });
          document.querySelector('.flower-rating').removeAttribute('data-rating');

          // Hacer scroll hacia abajo para mostrar la nueva reseña
          document.getElementById('reviews-container').scrollTop = document.getElementById('reviews-container').scrollHeight;
        });

        // Función para agregar una reseña a la lista
        function addReviewToList(reviewObject) {
          let reviewElement = document.createElement('div');
          reviewElement.classList.add('review');
          reviewElement.setAttribute('data-id', reviewObject.id);
          reviewElement.innerHTML = `<p><strong>Nombre:</strong> ${reviewObject.name}</p><p><strong>Calificación:</strong> ${reviewObject.flowerHtml}</p><p><strong>Reseña:</strong> ${reviewObject.review}</p><span class="btn-delete">Eliminar</span>`;

          reviewElement.querySelector('.btn-delete').addEventListener('click', function() {
            deleteReview(reviewObject.id);
          });

          document.getElementById('reviews-list').appendChild(reviewElement);
        }

        // Función para eliminar una reseña
        function deleteReview(id) {
          let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
          reviews = reviews.filter(review => review.id !== id);
          localStorage.setItem('reviews', JSON.stringify(reviews));

          let reviewElement = document.querySelector(`.review[data-id='${id}']`);
          if (reviewElement) {
            reviewElement.remove();
          }
        }

        // Recuperar y mostrar reseñas guardadas al cargar la página
        window.onload = function() {
          let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
          reviews.forEach(function(review) {
            addReviewToList(review);
          });
        };
      </script>


</body>

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

      @foreach ( $footerTitles as $footerTitle)
      <div class="col-lg-3 col-md-6">
        <h5>{{ $footerTitle->title }}</h5>
        <ul>
          @foreach ( $footerTitle->footerContents as $footerItem)
          <li class="footer-top__menu-item" style="list-style: none;">
            <small><a href="{{ $footerItem->link }}" target="_blank" style="font-weight: 600;">{{ $footerItem->content }}</a></small>
          </li>
          @endforeach
        </ul>
      </div>
      @endforeach

      <!-- <ul>
          <li class="footer-top__menu-item">
            <small><a href="https://wa.me/56956103084" target="_blank" style="font-weight: 600;">WhatsApp</a></small>
          </li>
          <li class="footer-top__menu-item">
            <small><a href="mailto:florencia.sanzana.ortega@gmail.com" target="_blank" style="font-weight: 600;">Correo Electrónico</a></small>
          </li>
        </ul> -->

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
          <img src="{{asset('storage/'. $company->logo)}}" class="navbar-brand img-fluid mb-md-0 mb-3 mx-auto" alt="{{ $company->company_name }}" />
        </a>
      </div>
      <div class="col-md-4">
        <ul class="payment text-lg-right text-center">
          <div class="container row shadow-lg">
            <div class="col">
              <div class="container row shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4516.677177622737!2d-73.04292336781978!3d-36.82395767764204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b5f607f8d407%3A0xc752b4d932fe12a1!2sMall%20del%20Centro%20Concepci%C3%B3n!5e0!3m2!1ses-419!2scl!4v1717351996643!5m2!1ses-419!2scl" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </div>
</footer>

</main>
<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

@endsection