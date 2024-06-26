<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('storage/'.$company->logo)}}">
    <title>
        {{ $company->company_name }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/argon-dashboard.css')}}" rel="stylesheet" />

    <!-- Incluir CSS de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body class="{{ $class ?? '' }}">
    <style>
        :root {
            --color-primary: {{ $company->color_primary }};
            --color-secondary: {{ $company->color_secondary }};
            --bs-dark: {{ $company->color_tertiary }};
            
            .bg-primary{
                background-color: var(--color-primary) !important;
            }
            --bs-warning: var(--color-primary);
            .btn-primary{
                background-color: var(--color-primary) !important;
            }
            .btn-secondary {
                background-color: var(--color-secondary) !important;
                border-color: var(--color-secondary) !important;
            }
            .text-dark {
                color: var(--bs-dark) !important;
            }

            .navbar .nav-link {
                color: var(--bs-dark) !important;
            }
            .navbar-vertical .navbar-nav .nav-link {
                color: #67748e !important;
            }
        }
    </style>

    @guest
        @yield('content')
    @endguest

    @auth
        @if (in_array(request()->route()->getName(), ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password', 'rtl', 'virtual-reality']))
            @yield('content')
        @else
            @if (!in_array(request()->route()->getName(), ['profile', 'profile-static']))
                <div class="min-height-300 bg-primary position-absolute w-100"></div>
            @elseif (in_array(request()->route()->getName(), ['profile-static', 'profile']))
                <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                    <span class="mask bg-primary opacity-6"></span>
                </div>
            @endif
            @include('layouts.navbars.auth.sidenav')
                <main class="main-content border-radius-lg">
                    @yield('content')
                </main>
            @include('components.fixed-plugin')
        @endif
    @endauth
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluir JavaScript de DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/2.0.7/i18n/es-CL.json'
                },
                responsive: true
            });
            
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="region_id"]').on('change', function() {
                var regionId = $(this).val();
                if (regionId) {
                    $.ajax({
                        url: '/provinces/' + regionId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('select[name="province_id"]').empty();
                            $('select[name="province_id"]').append('<option value="">Seleccione la provincia</option>');
                            $.each(data, function(key, value) {
                                $('select[name="province_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="province_id"]').empty();
                }
            });

            $('select[name="province_id"]').on('change', function() {
                var provinceId = $(this).val();
                if (provinceId) {
                    $.ajax({
                        url: '/communes/' + provinceId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('select[name="commune_id"]').empty();
                            $('select[name="commune_id"]').append('<option value="">Seleccione la comuna</option>');
                            $.each(data, function(key, value) {
                                $('select[name="commune_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="commune_id"]').empty();
                }
            });
        });
    </script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets/js/argon-dashboard.js')}}"></script>
    @stack('js');
</body>

</html>
