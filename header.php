<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/less" href="<?php bloginfo('template_url'); ?>/css/main.less">
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.0/less.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="vip " id="forms">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="title-bar-red">
                            CUENTA
                            <span class="glyphicon glyphicon-remove-circle" onclick="desactivate();"></span>
                        </div>
                    </div>
                    <div class="div col-lg-1 col-md-1 col-sm-12 col-xs-12">
                        <h4 class="h4">Accede</h4>
                    </div>
                    <div class="clearfix hidden-md hidden-lg"></div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <form action="<?php echo home_url('/casino/check'); ?>" class="register-form" method="post">
                            <h2>Crear una cuenta</h2>
                            <label for="">Usuario</label>
                            <input type="text" class="text" name="nickname">
                            <label for="">Email</label>
                            <input type="email" class="text" name="email">
                            <input type="hidden" value="0" name="id_user_account_status">
                            <label for="">Contraseña</label>
                            <input type="password" class="text" name="pass">
                            <label for=""> Repetir Contraseña</label>
                            <input type="password" class="text" name="passc">
                            <input type="submit" class="btn btn-default btn-submit" value="REGISTRAR">
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <form action="<?php echo home_url('/casino/login'); ?>" class="register-form" method="post">
                            <h2>ACCEDE</h2>
                            <label for="">Nombre de Usuario</label>
                            <input type="text" class="text" required name="namenick">
                            <input type="hidden" value="0" name="id_user_account_status">
                            <label for="">Contraseña</label>
                            <input type="password" class="text" name="password">
                            <p>&iquest;Olvido su contraseña?</p>
                            <input type="submit" class="btn btn-default btn-submit" value="ACCEDER">
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid sin-padding">
            <div class="row">
                <div class="col-xs-12 sin-padding">
                    <header class="navegation">
                        <div class="container sin-padding">
                            <div class="row">
                                <div id="menu1" class="col-lg-offset-1 col-lg-3 col-md-4 hidden-sm hidden-xs sin-padding col-xs-offset-0 col-xs-12">
                                    <ul class="nav nav-pills">
                                        <li role="presentation" class=""><a href="<?php echo home_url(''); ?>">INICIO</a></li>
                                        <li role="presentation"><a href="<?php echo home_url('nosotros'); ?>">NOSOTROS</a></li>
                                        <li role="presentation"><a href="<?php echo home_url('juego'); ?>">JUEGOS</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-offset-3 col-xs-8 col-md-offset-0 col-xs-6 col-xs-offset-3">

                                    <section class="logo">
                                        <a href="<?php echo home_url(''); ?>">
                                            <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/logo.png" alt="" >
                                        </a>	
                                    </section>

                                </div>
                                <div id="menu2"  class="col-lg-2 col-md-2 hidden-sm hidden-xs sin-padding col-xs-offset-0 col-xs-12">
                                    <ul class="nav nav-pills">
                                        <li role="presentation" class=""><a href="#">PÓKER</a></li>
                                        <li role="presentation"><a href="#">BLOG</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                                    <div class="acceder">
                                        <div class="activator" onclick="activate();">
                                            <p>ACCEDER</p>
                                        </div>
                                        <div class="redes hidden-sm hidden-xs">
                                            <a href="">
                                                <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/face.png" alt="">
                                            </a>
                                            <a href="">
                                                <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/twit.png" alt="">
                                            </a>
                                            <a href="">
                                                <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/google.png" alt="">
                                            </a>
                                            <a href="" class="hidden-sm hidden-md">
                                                <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/pinterest.png" alt="">
                                            </a>
                                        </div>
                                        <div class="menu-botones visible-xs visible-sm">
                                            <span class="glyphicon glyphicon-th" id="menu-movil" onclick="menu_movil();"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                </div>
            </div>
        </div>
        <div class="container-fluid sin-padding">
            <div class="row">
                <div class="col-xs-12">
                    <div class="menu-movil">
                        <ul class="nav nav-pills">
                            <li role="presentation" class=""><a href="<?php echo home_url(''); ?>">INICIO</a></li>
                            <li role="presentation"><a href="<?php echo home_url('nosotros'); ?>">NOSOTROS</a></li>	
                            <li role="presentation"><a href="#">JUEGOS</a></li>
                            <li role="presentation" class=""><a href="#">PÓKER</a></li>
                            <li role="presentation"><a href="#">BLOG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>