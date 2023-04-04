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
    <body>
        
        <div class="alpha-app">
            <div class="page-header">
                <nav class="navbar navbar-expand primary">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <a class="navbar-brand" href="#">Minha Loja</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </nav>
            </div><!-- Page Header -->
          
            <div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                       
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>David Doe</p>
                            </a>
                        </div>
                    </div>
                    <div class="page-sidebar-menu">
                       
                        <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                                <li>
                                    <a href="home.php" class="waves-effect waves-grey  <?= basename($_SERVER['PHP_SELF']) =='home.php'? 'active' : ''?> ">
                                        <i class="material-icons">settings_input_svideo</i>Resumo
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="produtos.php" class="waves-effect waves-grey  <?= basename($_SERVER['PHP_SELF']) =='produtos.php'? 'active' : ''?> ">
                                        <i class="material-icons">checkroom</i>Produto
                                    </a>
                                </li>
                                <li>
                                    <a href="categorias.php"  class="waves-effect waves-grey  <?= basename($_SERVER['PHP_SELF']) =='categorias.php'? 'active' : ''?>">
                                        <i class="material-icons">category</i>Categorias
                                    </a>
                                </li>
                                <li>
                                    <a href="movimentacao.php"   class="waves-effect waves-grey <?= basename($_SERVER['PHP_SELF']) =='movimentacao.php'? 'active' : ''?>">
                                        <i class="material-icons">trending_up</i>Movimentacao
                                    </a>
                                </li>
                                <li>
                                    <a href="suporte.php"  class="waves-effect waves-grey  <?= basename($_SERVER['PHP_SELF']) =='suporte.php'? 'active' : ''?>">
                                        <i class="material-icons">help</i>Suporte
                                    </a>
                                </li>
                               
                               
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer px-0">
                    <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                            <li>
                                    <a href="index.php" class="waves-effect waves-grey">
                                        <i class="material-icons">logout</i>Sair
                                    </a>
                                </li>

                            </ul>
                    </div>
                       

                    </div>
                </div>
            </div><!-- Left Sidebar -->
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
            <script src={{ asset("assets/plugins/toastr/toastr.min.js") }}></script>
    
    
        </body>
    </html>
    
    
    