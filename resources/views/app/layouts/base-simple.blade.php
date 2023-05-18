<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>Minha Loja</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href={{ asset("assets/plugins/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
        <link href={{ asset("assets/plugins/font-awesome/css/all.min.css") }} rel="stylesheet">
        <link href={{ asset("assets/plugins/waves/waves.min.css") }} rel="stylesheet">
        <link href={{ asset("assets/plugins/nvd3/nv.d3.min.css") }} rel="stylesheet">

        <script src={{ asset("assets/js/jquery.min.js") }} ></script>
        <link href={{ asset("assets/plugins/toastr/toastr.min.css") }} rel="stylesheet">
        <script src={{ asset("assets/plugins/toastr/toastr.min.js") }}></script>








        <!-- Theme Styles -->
        <link href={{ asset("assets/css/alpha.min.css") }} rel="stylesheet">
        <link href={{ asset("assets/css/custom.css") }} rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-color: #454d6b">


        @if (Session::has('message'))
        <script>
           toastr.success("{{Session('message')}}");

        </script>

        @endif



            <div class="page-content">

                @yield('conteudo')

            </div>

            </div>








            <script src={{ asset("assets/plugins/bootstrap/popper.min.js") }}></script>
            <script src={{ asset("assets/plugins/bootstrap/js/bootstrap.min.js") }}></script>
            <script src={{ asset("assets/plugins/waves/waves.min.js") }}></script>
            <script src={{ asset("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js") }}></script>
            <script src={{ asset("assets/plugins/d3/d3.min.js") }}></script>
            <script src={{ asset("assets/plugins/nvd3/nv.d3.min.js") }}></script>
            <script src={{ asset("assets/plugins/jquery-sparkline/jquery.sparkline.min.js") }}></script>
            <script src={{ asset("assets/plugins/apexcharts/dist/apexcharts.min.js") }}></script>
            <script src={{ asset("assets/plugins/flot/jquery.flot.min.js") }}></script>
            <script src={{ asset("assets/plugins/flot/jquery.flot.time.min.js") }}></script>
            <script src={{ asset("assets/plugins/flot/jquery.flot.symbol.min.js") }}></script>
            <script src={{ asset("assets/plugins/flot/jquery.flot.resize.min.js") }}></script>
            <script src={{ asset("assets/plugins/flot/jquery.flot.tooltip.min.js") }}></script>
            <script src={{ asset("assets/js/alpha.min.js") }}></script>
            <script src={{ asset("assets/js/pages/dashboard.js") }}></script>


        </body>
    </html>


