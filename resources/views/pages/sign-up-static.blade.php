@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
<div class=" nav-bar message-top">
  <div class=" container  text-center">
    <strong>DISEÑO Y PRODUCCIÓN NACIONAL ★ TIENDA EN PROVIDENCIA Y ENVÍOS A TODO CHILE&nbsp;</strong>
  </div>
</div>
</nav>
<!-- End Navbar -->
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
    <title>LLUNA PAPELERÍA</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Planificar es tener ✦ tiempo para todo ✦ así que creamos Papelería que te ayuda a organizar tu tiempo y a enfocarte en lo importante✨ Diseño nacional con caligrafía e ilustraciones a mano ❤️ Planners, Agendas, Planificadores sin fechas, para comenzar cuando tú quieras, enfocadas en tí, en autocuidado, gestión de tu tiempo, motivación y prioridades." />
  <meta name="robots" content="follow, all" />

    </div>
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
            <a href="https://api.whatsapp.com/send?phone=56973069652&text=Hola%20LLUNA PAPELERÍA" class="trsn" title="WhatsApp" target="_blank">
              <i class="fab fa-whatsapp fa-fw"></i>
            </a>
          </li>
          
          
        </ul>

      </div>
      <!-- Logo -->
      <div class="col-lg-4 col-md-6 col-8 text-center">
        <a href="https://www.llunapapeleria.cl" title="LLUNA PAPELERÍA">
          
            
          <h1 class="visually-hidden">LLUNA PAPELERÍA</h1>
          
          <img src="https://images.jumpseller.com/store/lluna-papeleria/store/logo/Copia_de_LogoLLUNA_lila.png?1685569757" class="navbar-brand store-image img-fluid" alt="LLUNA PAPELERÍA" />
          
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
  <div class="collapse navbar-collapse" id="navbarsContainer">
    <ul class="navbar-nav m-auto">
      
      <li class="nav-item  active">
  <a href="/"  title="Inicio" class="level-1 trsn nav-link" >Inicio</a>
  
</li>



      
      <li class="nav-item dropdown ">
  <a href="/planificadores"  title="Planners" class="dropdown-toggle level-1 trsn nav-link" data-toggle="">Planners</a>
  
    <ul class="dropdown-menu multi-level">
      
        <li class="nav-item  ">
  <a href="/todos-los-planificadores"  title="Todos los planners" class="level-1 trsn nav-link" >Todos los planners</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/nivel-bajo-de-actividades"  title="Para una Carga Baja de actividades" class="level-1 trsn nav-link" >Para una Carga Baja de actividades</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/nivel-medio-de-actividades"  title="Para una Carga Media de actividades" class="level-1 trsn nav-link" >Para una Carga Media de actividades</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/nivel-alto-de-actividades"  title="Para una Carga Alta de actividades" class="level-1 trsn nav-link" >Para una Carga Alta de actividades</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/planificadores-para-otros-usos"  title="Planners complementarios" class="level-1 trsn nav-link" >Planners complementarios</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/cem-calidad-estetica-media-planificadores"  title="CEM: Calidad Estética Media" class="level-1 trsn nav-link" >CEM: Calidad Estética Media</a>
  
</li>



      
    </ul>
  
</li>



      
      <li class="nav-item dropdown active">
  <a href="/"  title="Papelería" class="dropdown-toggle level-1 trsn nav-link" data-toggle="">Papelería</a>
  
    <ul class="dropdown-menu multi-level">
      
        <li class="nav-item  ">
  <a href="/notas-adhesivas"  title="Notas Adhesivas" class="level-1 trsn nav-link" >Notas Adhesivas</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/diarios"  title="Diarios" class="level-1 trsn nav-link" >Diarios</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/lista-de-tareas-1"  title="Lista de Tareas" class="level-1 trsn nav-link" >Lista de Tareas</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/recetarios"  title="Recetarios" class="level-1 trsn nav-link" >Recetarios</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/cuadernos"  title="Cuadernos" class="level-1 trsn nav-link" >Cuadernos</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/marcapaginas"  title="Marcapáginas" class="level-1 trsn nav-link" >Marcapáginas</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/stickers"  title="Stickers" class="level-1 trsn nav-link" >Stickers</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/lapices-y-destacadores"  title="Lápices y Destacadores" class="level-1 trsn nav-link" >Lápices y Destacadores</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/complementos"  title="Toda la papelería" class="level-1 trsn nav-link" >Toda la papelería</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/cem-calidad-estetica-media-papeleria"  title="CEM Calidad Estética Media Papelería" class="level-1 trsn nav-link" >CEM Calidad Estética Media Papelería</a>
  
</li>



      
    </ul>
  
</li>



      
      <li class="nav-item dropdown active">
  <a href="/"  title="Complementos" class="dropdown-toggle level-1 trsn nav-link" data-toggle="">Complementos</a>
  
    <ul class="dropdown-menu multi-level">
      
        <li class="nav-item  ">
  <a href="/listo-para-regalar"  title="Listo para regalar" class="level-1 trsn nav-link" >Listo para regalar</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/gift-box-lluna"  title="GIFT BOX LLUNA" class="level-1 trsn nav-link" >GIFT BOX LLUNA</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/totebags"  title="Totebags" class="level-1 trsn nav-link" >Totebags</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/gift-card-lluna-1"  title="GIFT CARD LLUNA" class="level-1 trsn nav-link" >GIFT CARD LLUNA</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/otros"  title="Otros" class="level-1 trsn nav-link" >Otros</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/caja-extra-lluna"  title="CAJA EXTRA LLUNA" class="level-1 trsn nav-link" >CAJA EXTRA LLUNA</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/personalizado"  title="Personalizado" class="level-1 trsn nav-link" >Personalizado</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/planificadores-descargables"  title="Planners Descargables" class="level-1 trsn nav-link" >Planners Descargables</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/blog"  title="Blog" class="level-1 trsn nav-link" >Blog</a>
  
</li>



      
    </ul>
  
</li>



      
      <li class="nav-item dropdown ">
  <a href="/informacion"  title="Información" class="dropdown-toggle level-1 trsn nav-link" data-toggle="">Información</a>
  
    <ul class="dropdown-menu multi-level">
      
        <li class="nav-item  ">
  <a href="/tienda-fisica"  title="TIENDA FÍSICA" class="level-1 trsn nav-link" >TIENDA FÍSICA</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/tiendas-autorizadas"  title="Tiendas Autorizadas 🏠" class="level-1 trsn nav-link" >Tiendas Autorizadas 🏠</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/team-lluna-vip"  title="TEAM LLUNA VIP ✨" class="level-1 trsn nav-link" >TEAM LLUNA VIP ✨</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/informacion-envios"  title="Plazos Despachos" class="level-1 trsn nav-link" >Plazos Despachos</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/condiciones-entrega-despacho"  title="Condiciones Despachos" class="level-1 trsn nav-link" >Condiciones Despachos</a>
  
</li>



      
        <li class="nav-item  ">
  <a href="/politicas-de-cambios"  title="Políticas de Cambios y Devoluciones" class="level-1 trsn nav-link" >Políticas de Cambios y Devoluciones</a>
  
</li>



      
    </ul>
  
</li>



      
      <li class="nav-item  ">
  <a href="/todos-los-productos"  title="TODOS LOS PRODUCTOS" class="level-1 trsn nav-link" >TODOS LOS PRODUCTOS</a>
  
</li>



      
      <li class="nav-item  ">
  <a href="/escuela-lluna"  title="Escuela LLUNA" class="level-1 trsn nav-link" >Escuela LLUNA</a>
  
</li>



      
    </ul>
  </div>
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
    
    

    <div class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="menu-top"></div>
  <div class="mobilenav-inner">
    <ul class="menu-mobile trsn">
      
      <li class=" ">
  
  <a href="/" title="Inicio" >Inicio</a>
  

  
</li>

      
      <li class="has-dropdown ">
  
  <a title="Planners" class="level-1  first-trigger">Planners <i class="fas fa-angle-right" aria-hidden="true"></i></a>
  

  
  <ul class="level-1 dropdown">
    <li><a title="Volver" class="back-level-1"><i class="fas fa-angle-double-left" aria-hidden="true"></i> Volver</a></li>
    <li><a title="Planners" class="top-category" >Planners</a></li>
    
    	<li class=" ">
  
  <a href="/todos-los-planificadores" title="Todos los planners" >Todos los planners</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/nivel-bajo-de-actividades" title="Para una Carga Baja de actividades" >Para una Carga Baja de actividades</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/nivel-medio-de-actividades" title="Para una Carga Media de actividades" >Para una Carga Media de actividades</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/nivel-alto-de-actividades" title="Para una Carga Alta de actividades" >Para una Carga Alta de actividades</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/planificadores-para-otros-usos" title="Planners complementarios" >Planners complementarios</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/cem-calidad-estetica-media-planificadores" title="CEM: Calidad Estética Media" >CEM: Calidad Estética Media</a>
  

  
</li>

    
    <li><a href="/planificadores" title="Planners" class="goto">Ir a <span>Planners</span></a></li>
  </ul>
  
</li>

      
      <li class="has-dropdown ">
  
  <a title="Papelería" class="level-1  first-trigger">Papelería <i class="fas fa-angle-right" aria-hidden="true"></i></a>
  

  
  <ul class="level-1 dropdown">
    <li><a title="Volver" class="back-level-1"><i class="fas fa-angle-double-left" aria-hidden="true"></i> Volver</a></li>
    <li><a title="Papelería" class="top-category" >Papelería</a></li>
    
    	<li class=" ">
  
  <a href="/notas-adhesivas" title="Notas Adhesivas" >Notas Adhesivas</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/diarios" title="Diarios" >Diarios</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/lista-de-tareas-1" title="Lista de Tareas" >Lista de Tareas</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/recetarios" title="Recetarios" >Recetarios</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/cuadernos" title="Cuadernos" >Cuadernos</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/marcapaginas" title="Marcapáginas" >Marcapáginas</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/stickers" title="Stickers" >Stickers</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/lapices-y-destacadores" title="Lápices y Destacadores" >Lápices y Destacadores</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/complementos" title="Toda la papelería" >Toda la papelería</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/cem-calidad-estetica-media-papeleria" title="CEM Calidad Estética Media Papelería" >CEM Calidad Estética Media Papelería</a>
  

  
</li>

    
    <li><a href="/" title="Papelería" class="goto">Ir a <span>Papelería</span></a></li>
  </ul>
  
</li>

      
      <li class="has-dropdown ">
  
  <a title="Complementos" class="level-1  first-trigger">Complementos <i class="fas fa-angle-right" aria-hidden="true"></i></a>
  

  
  <ul class="level-1 dropdown">
    <li><a title="Volver" class="back-level-1"><i class="fas fa-angle-double-left" aria-hidden="true"></i> Volver</a></li>
    <li><a title="Complementos" class="top-category" >Complementos</a></li>
    
    	<li class=" ">
  
  <a href="/listo-para-regalar" title="Listo para regalar" >Listo para regalar</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/gift-box-lluna" title="GIFT BOX LLUNA" >GIFT BOX LLUNA</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/totebags" title="Totebags" >Totebags</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/gift-card-lluna-1" title="GIFT CARD LLUNA" >GIFT CARD LLUNA</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/otros" title="Otros" >Otros</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/caja-extra-lluna" title="CAJA EXTRA LLUNA" >CAJA EXTRA LLUNA</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/personalizado" title="Personalizado" >Personalizado</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/planificadores-descargables" title="Planners Descargables" >Planners Descargables</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/blog" title="Blog" >Blog</a>
  

  
</li>

    
    <li><a href="/" title="Complementos" class="goto">Ir a <span>Complementos</span></a></li>
  </ul>
  
</li>

      
      <li class="has-dropdown ">
  
  <a title="Información" class="level-1  first-trigger">Información <i class="fas fa-angle-right" aria-hidden="true"></i></a>
  

  
  <ul class="level-1 dropdown">
    <li><a title="Volver" class="back-level-1"><i class="fas fa-angle-double-left" aria-hidden="true"></i> Volver</a></li>
    <li><a title="Información" class="top-category" >Información</a></li>
    
    	<li class=" ">
  
  <a href="/tienda-fisica" title="TIENDA FÍSICA" >TIENDA FÍSICA</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/tiendas-autorizadas" title="Tiendas Autorizadas 🏠" >Tiendas Autorizadas 🏠</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/team-lluna-vip" title="TEAM LLUNA VIP ✨" >TEAM LLUNA VIP ✨</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/informacion-envios" title="Plazos Despachos" >Plazos Despachos</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/condiciones-entrega-despacho" title="Condiciones Despachos" >Condiciones Despachos</a>
  

  
</li>

    
    	<li class=" ">
  
  <a href="/politicas-de-cambios" title="Políticas de Cambios y Devoluciones" >Políticas de Cambios y Devoluciones</a>
  

  
</li>

    
    <li><a href="/informacion" title="Información" class="goto">Ir a <span>Información</span></a></li>
  </ul>
  
</li>

      
      <li class=" ">
  
  <a href="/todos-los-productos" title="TODOS LOS PRODUCTOS" >TODOS LOS PRODUCTOS</a>
  

  
</li>

      
      <li class=" ">
  
  <a href="/escuela-lluna" title="Escuela LLUNA" >Escuela LLUNA</a>
  

  
</li>

      
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
        <a href="https://api.whatsapp.com/send?phone=56973069652&text=Hola%20LLUNA PAPELERÍA" class="trsn" title="WhatsApp" target="_blank">
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
    <div class="carousel-info center">
      <div class="carousel-info-inner px-md-0 px-4">
        
        
      </div>
    </div>
    
    </a>
  </div>
  


  
  <div class="item" style="background-image:url('https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/42941213/20230526_131321-01%20copia222.png?1694798596')">
    <a href="https://www.instagram.com/llunapapeleria">
    <div class="layer" style="background-color: #000000; opacity: 0;"></div>
    <div class="carousel-info center">
      <div class="carousel-info-inner px-md-0 px-4">
        
        
      </div>
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
<div id="featured-products-332667" class="container mb-5">
  
  <div class="col-12">
    <h2 class="block-header text-center">DESTACADOS</h2>
  </div>
  
  <div class="row mb-md-5 mb-4 mx-md-n2 mx-n1 no-gutters">
    
    
    <div class="col-lg-3 col-6 px-md-2 px-1">
      <div class="product-block text-center mb-md-3 mb-2 p-md-3 p-2 rounded trsn">
  <a href="/nit-planificador-mensual" class="product-image d-block ">

    

    

    
    <img class="img-fluid img-portfolio img-hover mb-2" src="https://cdnx.jumpseller.com/lluna-papeleria/image/46333166/resize/255/255?1710253082" srcset="https://cdnx.jumpseller.com/lluna-papeleria/image/46333166/resize/255/255?1710253082 1x,https://cdnx.jumpseller.com/lluna-papeleria/image/46333166/resize/510/510?1710253082 2x" alt="&quot;Nit&quot; Planner Mensual " />
    
  </a>
  
  
  
  <div class="caption">
    <div class="brand-name small trsn">
      
      <h4><a href="/nit-planificador-mensual">"Nit" Planner Mensual </a></h4>
    </div>
    
    <div class="list-price">
      
      <span class="product-block-list">$22.990</span>
      
    </div>
    
    
    <div class="mt-2 trsn btn_container">
      
      
      <form id="product-form-24216600-332667" action="/cart/add/24216600" method="post" enctype="multipart/form-data" name="buy">
        <div class="row adc-form no-gutters product-stock product-available">
          <div class="col-sm-8">
            
            <div class="quantity mr-md-2 mb-md-0 mb-2">
              <div class="product-qty">
                <input type="number" class="qty form-control text-center" id="input-qty-24216600-332667" name="qty" min="1" value="1" readonly="readonly"  max="10" >
                <div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            
            <button type="button" onclick="addToCart('24216600', '&quot;Nit&quot; Planner Mensual ', $('#input-qty-24216600-332667').val(), getProductOptions('#product-form-24216600-332667'));" class="adc btn btn-adc btn-block btn-primary" value="¡ME LO LLEVO!" ><i class="fas fa-cart-plus"></i></button>
            
          </div>
        </div>
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




    </div>
    
    <div class="col-lg-3 col-6 px-md-2 px-1">
      <div class="product-block text-center mb-md-3 mb-2 p-md-3 p-2 rounded trsn">
  <a href="/docente-poma-planificador-anual" class="product-image d-block ">

    

    

    
    <img class="img-fluid img-portfolio img-hover mb-2" src="https://cdnx.jumpseller.com/lluna-papeleria/image/45645617/resize/255/255?1708286757" srcset="https://cdnx.jumpseller.com/lluna-papeleria/image/45645617/resize/255/255?1708286757 1x,https://cdnx.jumpseller.com/lluna-papeleria/image/45645617/resize/510/510?1708286757 2x" alt="&quot;Docente Poma&quot; Planner Anual" />
    
  </a>
  
  
  
  <div class="caption">
    <div class="brand-name small trsn">
      
      <h4><a href="/docente-poma-planificador-anual">"Docente Poma" Planner Anual</a></h4>
    </div>
    
    <div class="list-price">
      
      <span class="product-block-list">$45.990</span>
      
    </div>
    
    
    <div class="mt-2 trsn btn_container">
      
      
      <form id="product-form-23993247-332667" action="/cart/add/23993247" method="post" enctype="multipart/form-data" name="buy">
        <div class="row adc-form no-gutters product-stock product-available">
          <div class="col-sm-8">
            
            <div class="quantity mr-md-2 mb-md-0 mb-2">
              <div class="product-qty">
                <input type="number" class="qty form-control text-center" id="input-qty-23993247-332667" name="qty" min="1" value="1" readonly="readonly"  max="8" >
                <div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            
            <button type="button" onclick="addToCart('23993247', '&quot;Docente Poma&quot; Planner Anual', $('#input-qty-23993247-332667').val(), getProductOptions('#product-form-23993247-332667'));" class="adc btn btn-adc btn-block btn-primary" value="¡ME LO LLEVO!" ><i class="fas fa-cart-plus"></i></button>
            
          </div>
        </div>
      </form>
      
      
    </div>
    
  </div>
</div>



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
    
    <div class="col-lg-3 col-6 px-md-2 px-1">
      <div class="product-block text-center mb-md-3 mb-2 p-md-3 p-2 rounded trsn">
  <a href="/docente-planificador-anual" class="product-image d-block ">

    

    

    
    <img class="img-fluid img-portfolio img-hover mb-2" src="https://cdnx.jumpseller.com/lluna-papeleria/image/25756879/resize/255/255?1658291999" srcset="https://cdnx.jumpseller.com/lluna-papeleria/image/25756879/resize/255/255?1658291999 1x,https://cdnx.jumpseller.com/lluna-papeleria/image/25756879/resize/510/510?1658291999 2x" alt="&quot;Docente&quot; Planner Anual" />
    
  </a>
  
  
  
  <div class="caption">
    <div class="brand-name small trsn">
      
      <h4><a href="/docente-planificador-anual">"Docente" Planner Anual</a></h4>
    </div>
    
    <div class="list-price">
      
      <span class="product-block-list">$45.990</span>
      
    </div>
    
    
    <div class="mt-2 trsn btn_container">
      
      
      <form id="product-form-14616472-332667" action="/cart/add/14616472" method="post" enctype="multipart/form-data" name="buy">
        <div class="row adc-form no-gutters product-stock product-available">
          <div class="col-sm-8">
            
            <div class="quantity mr-md-2 mb-md-0 mb-2">
              <div class="product-qty">
                <input type="number" class="qty form-control text-center" id="input-qty-14616472-332667" name="qty" min="1" value="1" readonly="readonly"  max="8" >
                <div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            
            <button type="button" onclick="addToCart('14616472', '&quot;Docente&quot; Planner Anual', $('#input-qty-14616472-332667').val(), getProductOptions('#product-form-14616472-332667'));" class="adc btn btn-adc btn-block btn-primary" value="¡ME LO LLEVO!" ><i class="fas fa-cart-plus"></i></button>
            
          </div>
        </div>
      </form>
      
      
    </div>
    
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




    </div>
    
    <div class="col-lg-3 col-6 px-md-2 px-1">
      <div class="product-block text-center mb-md-3 mb-2 p-md-3 p-2 rounded trsn">
  <a href="/superpoderes-xl-planificador-anual-universitario" class="product-image d-block ">

    

    

    
    <img class="img-fluid img-portfolio img-hover mb-2" src="https://cdnx.jumpseller.com/lluna-papeleria/image/20629118/resize/255/255?1658040777" srcset="https://cdnx.jumpseller.com/lluna-papeleria/image/20629118/resize/255/255?1658040777 1x,https://cdnx.jumpseller.com/lluna-papeleria/image/20629118/resize/510/510?1658040777 2x" alt="&quot;Superpoderes XL&quot; Planner Anual Universitario " />
    
  </a>
  
  
  
  <div class="caption">
    <div class="brand-name small trsn">
      
      <h4><a href="/superpoderes-xl-planificador-anual-universitario">"Superpoderes XL" Planner Anual U..</a></h4>
    </div>
    
    <div class="list-price">
      
      <span class="product-block-list">$32.990</span>
      
    </div>
    
    
    <div class="mt-2 trsn btn_container">
      
      
      <form id="product-form-12205662-332667" action="/cart/add/12205662" method="post" enctype="multipart/form-data" name="buy">
        <div class="row adc-form no-gutters product-stock product-available">
          <div class="col-sm-8">
            
            <div class="quantity mr-md-2 mb-md-0 mb-2">
              <div class="product-qty">
                <input type="number" class="qty form-control text-center" id="input-qty-12205662-332667" name="qty" min="1" value="1" readonly="readonly"  max="7" >
                <div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            
            <button type="button" onclick="addToCart('12205662', '&quot;Superpoderes XL&quot; Planner Anual Universitario ', $('#input-qty-12205662-332667').val(), getProductOptions('#product-form-12205662-332667'));" class="adc btn btn-adc btn-block btn-primary" value="¡ME LO LLEVO!" ><i class="fas fa-cart-plus"></i></button>
            
          </div>
        </div>
      </form>
      
      
    </div>
    
  </div>
</div>



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
      
      <img src="https://assets.jumpseller.com/store/lluna-papeleria/themes/388104/options/56779201/2021-11-12T23%3A52%3A39.582Z1.png?1636761258" alt="PLANIS ANUALES" class="w-100"/>
      
    </div>    
    <div class="col-md-6 order-md-2">
      <h4>PLANIS ANUALES</h4>
      <p>Planificadores con vista mensual y semanal ♡</p>
      
      <a href="https://www.llunapapeleria.cl/planificadores-anuales" class="btn btn-primary">VER LOS PLANIS ANUALES DE LLUNA</a>
      
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
      
      <a href="https://www.llunapapeleria.cl/planificadores-semestrales" class="btn btn-primary">VER LOS PLANIS SEMESTRALES DE LLUNA</a>
      
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
      
      <a href="https://www.llunapapeleria.cl/planificadores-semanales" class="btn btn-primary">VER LOS PLANIS SEMANALES DE LLUNA</a>
      
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
      
      <a href="https://www.llunapapeleria.cl/planificadores-mensuales" class="btn btn-primary">VER LOS PLANIS MENSUALES DE LLUNA</a>
      
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
      
      <a href="https://www.llunapapeleria.cl/planificadores-diarios" class="btn btn-primary">VER LOS PLANI DIARIOS DE LLUNA</a>
      
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
      
      <a href="https://www.llunapapeleria.cl/complementos" class="btn btn-primary">VER LOS COMPLEMENTOS DE LLUNA</a>
      
    </div>
  </div>
</div></div><div id='component-102190' class='theme-component show' >
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-12">
      <h2 class="block-header text-center">@LLUNAPAPELERIA</h2>
    </div>
    <div id="instagram-102190" class="component_instagram col-12"></div>
    
    <a href="https://www.instagram.com/llunapapeleria" target="_blank" title="Síguenos @llunapapeleria" class="btn btn-primary mt-5">
      <i class="fab fa-instagram" aria-hidden="true"></i> Síguenos
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
      
      <a href="https://escuelalluna.wisboo.com/catalog" class="btn btn-primary">Ver los cursos de la escuela</a>
      
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
