@extends('layouts.app-simple', ['class' => ''])

@section('content')
@include('layouts.navbars.guest.navbar-pru')

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
    .white-background {
        background-color: rgba(255, 255, 255, 0.9); /* Blanco con 90% de opacidad */
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px; /* Añade margen superior para alinear con otros contenidos */
    }
    .white-background iframe {
        border-radius: 10px;
        width: 100%; /* Ajusta el ancho del iframe al 100% */
    }

    /* Media queries para pantallas más pequeñas */
    @media (max-width: 992px) {
        .white-background {
            margin-top: 10px; /* Ajusta el margen superior para pantallas más pequeñas */
        }
    }
</style>

<section class="py-5 text-center">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 mx-auto">
                <h1 class="display-4">Días de entrega presenciales </h1>

                <div class="row align-items-center"> <!-- Alinea verticalmente los elementos -->
                    <div class="col-md-6">
                        <hr>
                        <div id="calendar" class="white-background"></div>
                        <hr>
                    </div>

                    <div class="col-md-6">
                        <div class="white-background">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4516.677177622737!2d-73.04292336781978!3d-36.82395767764204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b5f607f8d407%3A0xc752b4d932fe12a1!2sMall%20del%20Centro%20Concepci%C3%B3n!5e0!3m2!1ses-419!2scl!4v1717351996643!5m2!1ses-419!2scl" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection



<!-- Testimonios o Opiniones -->






@push('js')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>

<script src='fullcalendar/core/index.global.js'></script>
<script src='fullcalendar/core/locales/es.global.js'></script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            firstDay: 1,
            events: @json($events),

            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },

            eventClick: function(info) {

               

                // change the border color just for fun
                info.el.style.borderColor = 'red';
            },

            eventMouseEnter: function(mouseEnterInfo) {
                mouseEnterInfo.el.style.borderColor = 'black';
                // mouseEnterInfo.el.style.backgroundColor = 'blue';

            },

            eventMouseLeave: function(mouseLeaveInfo) {
                mouseLeaveInfo.el.style.borderColor = 'white';
                // mouseLeaveInfo.el.style.backgroundColor = 'black';
            },

            locale: 'es'
        });

        calendar.render();
    });
</script>
<div>
<footer class="pt-5 pb-3 blurred-background" style="background-color: rgba(255, 255, 255, 0.8);">
   
   <div class="container-fluid " style="text-align: justify;">
       <div class="row text-md-left">

           <div class="col-lg-3 col-md-8">
               <h5>🌻SOBRE SUNFLOWER</h5>
               <small style="font-weight: 600;">📍 Talcahuano, Region del BioBio, Chile. En nuestro universo de bisutería, cada pieza es más que un simple accesorio; es una manifestación de arte y creatividad, diseñada para realzar tu belleza interior y exterior, recordándote que la elegancia y el estilo pueden ser parte de tu día a día.</small>
           </div>

           <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
   <h5>🦋CONTACTO</h5>
   <ul>
       <li class="footer-top__menu-item">
           <small><a href="https://wa.me/56956103084" target="_blank" style="font-weight: 600;">WhatsApp</a></small>
       </li>
       <li class="footer-top__menu-item">
           <small><a href="mailto:florencia.sanzana.ortega@gmail.com" target="_blank" style="font-weight: 600;">Correo Electrónico</a></small>
       </li>
   </ul>
</div>

           <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
               <h5>🌻INFORMACIÓN</h5>
               <ul class="navbar-nav mr-auto" style="font-weight: 600;">
                   <li>
                       <small><a href="/tienda-online" id="tienda-online" title="TIENDA ONLINE" style="font-weight: 600;">Tienda Online</a></small>
                   </li>
                   <li>
                   <small ><a href="/clientas" id="team-sunflower" title="TEAM sunflower ♡" style="font-weight: 600;">Team Sunflower</a></small>
                   </li>
                   <li>
                   <small> <a href="/informacion-envios" id="plazos-despachos" title="Plazos Despachos"style="font-weight: 600;">Plazos Despachos</a></small>
                   </li>
                   <li>
                   <small> <a href="/condiciones-entrega-despacho" id="condiciones-despachos" title="Condiciones Despachos"style="font-weight: 600;">Condiciones Despachos</a></small>
                   </li>
                   <li>
                   <small> <a href="/politicas-de-cambios" id="politicas-cambios" title="Políticas de Cambios y Devoluciones"style="font-weight: 600;">Políticas de Cambios y Devoluciones</a></small>
                   </li>
               </ul>
           </div>

           <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
               <h5> 🦋¿ERES TEAM SUNFLOWER? ¡REGISTRATE!</h5>
               <small style="font-weight: 600;">¡Registrate para que estemos en contacto y podamos compartir la mejor información, tips, sorpresas, descuentos, lanzamientos y más!</small>
               <ul class="list-inline social-footer my-3">
                   <li class="list-inline-item"> <small style="font-weight: 600;">🌻SÍGUENOS:</li></small>
                   <li class="list-inline-item">
                       <a href="https://www.instagram.com/sunflower._ccp" title="Ir a Instagram" target="_blank">
                           <i class="fab fa-instagram"></i>
                       </a>
                   </li>
                   <li class="list-inline-item d-md-none">
                       <a href="https://api.whatsapp.com/send?phone=56973069652&text=Hola SUNFLOWER" title="WhatsApp" target="_blank">
                           <i class="fab fa-whatsapp fa-fw"></i>
                       </a>
                   </li>
               </ul>
           </div>

       </div>
   </div>
   </div>

</footer>

</div>
@endpush
