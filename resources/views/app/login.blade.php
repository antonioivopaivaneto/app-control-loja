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
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>App</title>
        <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>

        <link href={{ asset("assets/plugins/toastr/toastr.min.css") }} rel="stylesheet">
        <script src={{ asset("assets/plugins/toastr/toastr.min.js") }}></script>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-page sign-in">
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        @if (Session::has('message'))
        <script>
           toastr.error("{{Session('message')}}");

        </script>

        @endif

        <div class="alpha-app">
            <div class="container">
                <div class="login-container">
                    <div class="row justify-content-center row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="card login-box">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid text-center mx-0 mb-3" width="190px" src="{{asset('assets/images/logo.png')}}" alt="">
                                    </div>
                                    {{--<h3 class="text-center font-weight-bolder text-uppercase">Smart Solution ID</h3>--}}
                                    <br>
                                   {{-- <h5 class="card-title">Acesso ao Sistema</h5>--}}
                                    <form action={{ route('login')}} method="POST">
                                        @csrf
                                    <div class="form-group">
                                        <label for="email">Login</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Entrar</button>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     <!-- Javascripts -->
     <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
     <script src="assets/plugins/bootstrap/popper.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
     <script src="assets/plugins/waves/waves.min.js"></script>
     <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
     <script src="assets/js/alpha.min.js"></script>
 </body>
</html>
