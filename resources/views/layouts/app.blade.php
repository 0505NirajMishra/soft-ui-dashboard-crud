<!DOCTYPE html>

@if (\Request::is('rtl'))
<html dir="rtl" lang="ar">
@else
<html lang="en">
@endif

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if (env('IS_DEMO'))
    <x-demo-metas></x-demo-metas>
    @endif

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{  asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{  asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{  asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{  asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />

    <style>
        .fade-out {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
            animation: fadeOut 3s forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        /* Ensure equal width and height for the buttons */
        .btn-custom {
            width: 100px;
            /* Adjust width as needed */
            height: 40px;
            /* Adjust height as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 10px;
            /* Adjust font size as needed */
            padding: 0;
            /* Remove padding to center text */
        }

        /* Position buttons with a little more space to the right */
        .position-relative {
            position: relative;
        }

        .me-2 {
            /* Margin-end utility for spacing */
            margin-right:10px;
            /* Adjust spacing between buttons */
        }
        


    </style>

</head>

<body
    class="g-sidenav-show  bg-gray-100 {{ (\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : '')) }} ">
    @auth
    @yield('auth')
    @endauth
    @guest
    @yield('guest')
    @endguest

    @if(session('success'))
    <div class="position-fixed bg-success rounded text-sm fade-out text-white py-2 px-4"
        style="top: 20px; right: 20px; z-index: 1050;">
        <p class="m-0">{{ session('success') }}</p>
    </div>
    @endif


    <!--   Core JS Files   -->
    <script src="{{  asset('assets/js/core/popper.min.js') }} "></script>
    <script src="{{  asset('assets/js/core/bootstrap.min.js ') }}"></script>
    <script src="{{  asset('assets/js/plugins/perfect-scrollbar.min.js ') }}"></script>
    <script src="{{  asset('assets/js/plugins/smooth-scrollbar.min.js ') }}"></script>
    <script src="{{  asset('assets/js/plugins/fullcalendar.min.js ') }}"></script>
    <script src="{{  asset('assets/js/plugins/chartjs.min.js ') }}"></script>
    @stack('rtl')
    @stack('dashboard')
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
    <script src=" {{  asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }} "></script>
</body>

</html>
