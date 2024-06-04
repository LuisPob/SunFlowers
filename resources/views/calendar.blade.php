@extends('layouts.app', ['class' => ''])

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
    
    
  }
</style>
<section class="py-5 text-center">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 mx-auto">

                <h1 class="display-4">Días de entrega presenciales </h1>
                

                <div class="row">
                    <div class="col">
                        <hr>
                        <div id="calendar"></div>
                        <hr>
                    </div>

                    <div class="col">
                        <div class="container row shadow-lg">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4516.677177622737!2d-73.04292336781978!3d-36.82395767764204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b5f607f8d407%3A0xc752b4d932fe12a1!2sMall%20del%20Centro%20Concepci%C3%B3n!5e0!3m2!1ses-419!2scl!4v1717351996643!5m2!1ses-419!2scl" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- Testimonios o Opiniones -->





@endsection

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
@endpush