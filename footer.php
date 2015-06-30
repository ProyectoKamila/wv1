<footer>
    <div class="pre">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-12  col-xs-12 col-xs-offset-0 ">
                    <div class="redes ">
                        <a href="">
                            <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/face.png" alt="">
                        </a>
                        <a href="">
                            <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/twit.png" alt="">
                        </a>
                        <a href="">
                            <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/google.png" alt="">
                        </a>
                        <a href="">
                            <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/pinterest.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="logo-footer">
                        <img src="<?php bloginfo('template_url'); ?>/images/recortes/home/logo-footer.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 hidden-xs hidden-sm">
                    <p class="copy">www.casino4s.com. Todos los derechos reservados<br>
                        Desarrollado por Proyecto Kamila</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="#">Inicio</a></li>
                        <li role="presentation"><a href="#">Nosotros</a></li>
                        <li role="presentation"><a href="#">Juegos</a></li>
                        <li role="presentation"><a href="#">Póker</a></li>
                        <li role="presentation"><a href="#">Blog</a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p class="telefono hidden-xs"><span class="glyphicon glyphicon-earphone "></span> 900 234 80 32 <span class="glyphicon glyphicon-envelope email"></span> soporte@casino4as.com</p>
                    <div class="visible-xs">
                        <p class="telefono"> <span class="glyphicon glyphicon-earphone "></span> 900 234 80 32 </p>
                        <p class="telefono"> <span class="glyphicon glyphicon-envelope email"></span> soporte@casino4as.com</p>
                    </div>
                </div>
                <div class=" col-xs-12 visible-xs visible-sm">
                    <p class="copy">www.casino4s.com. Todos los derechos reservados<br>
                        Desarrollado por Proyecto Kamila</p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- Anything Slider -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scripts/slider/css/anythingslider.css">
<script src="<?php bloginfo('template_url'); ?>/scripts/slider/js/jquery.anythingslider.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/main.js"></script>
<script>
    function activate() {
        console.log('execute activate');
        $('.vip').slideDown();

    }
    function desactivate() {
        console.log('execute activate');
        $('#forms').slideUp();
    }
    function game(id) {
        console.log(id);
        $('.option-game').slideUp();
        $('.' + id).slideDown();
    }
    function menu_movil() {
        console.log('menu_movil');
        $('.menu-movil').slideDown();
        $('#menu-movil').attr('onclick', 'cerrar_movil();');
    }
    function cerrar_movil() {
        console.log('menu_movil');
        $('.menu-movil').slideUp();
        $('#menu-movil').attr('onclick', 'menu_movil();');
    }
    $(function () {
        console.log('el documento está preparado');
        $('#slider1').anythingSlider({
//			theme : 'metallic',
            expand: true,
            enableStartStop: false,
            enableArrows: false,
            buildArrows: false,
            hashTags:false,
            autoPlay: true
        });
    });
</script>
</body>
</html>