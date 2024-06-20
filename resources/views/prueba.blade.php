@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                slotMinTime: '07:30',
                events: @json($events)
            });

            calendar.render();
        });
    </script> -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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

                eventClick: function (info) {

                    Swal.fire({
                        title: info.event.title,
                        text: info.event.extendedProps.extra,
                        html: 'Mas informacion <a href="www.kevincampos.cl/calendargo">Aqui</a>.',
                        icon: "question"
                    });

                    // change the border color just for fun
                    info.el.style.borderColor = 'red';
                },

                eventMouseEnter: function (mouseEnterInfo) {
                    mouseEnterInfo.el.style.borderColor = 'black';
                    // mouseEnterInfo.el.style.backgroundColor = 'blue';

                },

                eventMouseLeave: function (mouseLeaveInfo) {
                    mouseLeaveInfo.el.style.borderColor = 'white';
                    // mouseLeaveInfo.el.style.backgroundColor = 'black';
                },

                locale: 'es'
            });

            calendar.render();
        });
    </script>
@endpush