<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- extra CSS Files -->
    <link href="{{ asset('assets/extra/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/remixicon/remixicon.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- <link href="{{ asset('assets/extra/simple-datatables/style.css')}}" rel="stylesheet"> -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/coloris.min.css')}}" rel="stylesheet" type="text/css">


    <!-- stripe -->
    <script src="https://js.stripe.com/v3/" async></script>


    <style>
    
    .colortext {
      height: 30px;
    }

    .square .clr-field button,
    .circle .clr-field button {
      width: 22px;
      height: 22px;
      left: 5px;
      right: auto;
      border-radius: 5px;
    }

    .square .clr-field input,
    .circle .clr-field input {
      padding-left: 36px;
    }

    .clr-field {
      width: 100%;      
    }

    .square {
        margin-top: 5px;
    }


    .circle .clr-field button {
      border-radius: 50%;
    }

    .full .clr-field button {
      width: 100%;
      height: 100%;
      border-radius: 5px;
    }

    </style>
</head>

<body>
    @yield('content')

    <!-- extra JS Files -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <!-- <script src="{{ asset('assets/extra/apexcharts/apexcharts.min.js')}}"></script> -->
    <script src="{{ asset('assets/extra/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="{{ asset('assets/extra/chart.js/chart.umd.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/extra/echarts/echarts.min.js')}}"></script> -->
    <script src="{{ asset('assets/extra/quill/quill.min.js')}}"></script>
    <!-- <script src="{{ asset('assets/extra/simple-datatables/simple-datatables.js')}}"></script> -->
    <script src="{{ asset('assets/extra/tinymce/tinymce.min.js')}}"></script>
    <!-- <script src="{{ asset('assets/extra/php-email-form/validate.js')}}"></script> -->

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('assets/js/board.js')}}"></script>
    <script src="{{ asset('assets/js/coloris.min.js')}}"></script>
    <script type="text/javascript">
    Coloris({
      el: '.coloris',
      swatches: [
        '#264653',
        '#2a9d8f',
        '#e9c46a',
        '#f4a261',
        '#e76f51',
        '#d62828',
        '#023e8a',
        '#0077b6',
        '#0096c7',
        '#00b4d8',
        '#48cae4'
      ]
    });

    Coloris.setInstance('.instance1', {
      theme: 'pill',
      themeMode: 'dark',
      formatToggle: true,
      closeButton: true,
      clearButton: true,
      swatches: [
        '#067bc2',
        '#84bcda',
        '#80e377',
        '#ecc30b',
        '#f37748',
        '#d56062'
      ]
    });

    Coloris.setInstance('.instance2', { theme: 'polaroid' });

    Coloris.setInstance('.instance3', {
      theme: 'polaroid',
      swatchesOnly: true
    });

    </script>
</body>

</html>