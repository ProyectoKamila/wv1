<?php get_header(''); ?>
<?php portada('juego'); ?>
<?php get_template_part('list-game'); ?>

<div class="content">
    <div class="container fondo-mesa">
        <div class="row">
            <div class="col-lg-12 text-center juego-texto1">
                <h1>JUEGOS DEL CASINO</h1>

            </div>

        </div>
    </div>
    <!--CUADROS DE IMAGENES Y TEXTO -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 ">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="cuadro1">

                        <div class="col-lg-6 col-md-6 col-sm-12">
    <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                            <img src="<?php echo $feat_image; ?>" class="img-responsive juegos-imagenes" alt="" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2><?php the_title(); ?></h2>
                            <div class="parrafo-machine">
                                <p><?php echo max_charlength(get_the_content(), 240); ?> <a href="<?php the_permalink();?>">Leer mas</a> </p>
                                <a href="<?php the_field('enlace_demo'); ?>" class="btn btn-default boton-ver">
                                    <span class="texto-jugar">JUGAR AHORA</span>
                                    <span class="glyphicon glyphicon-play-circle ico-play"></span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="paleta">
                        <img src="<?php bloginfo("template_url") ?>/images/recortes/juegos/linea.png" class="img-responsive franja" alt="">
                    </div>
<?php } ?>	
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4  ">
                <!--ASIDE 1 -->
                <aside class="aside1">
                    <?php $pagename = query_posts(array('post_type' => 'page', 'pagename' => 'aside-juegos', 'posts_per_page' => 1)); ?>
                    <?php if (!empty($pagename)) { ?>
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <h2 class="titulo-aside"><?php the_title(); ?></h2>
                            <div class="parrafo-aside">
                                <p>
        <?php echo max_charlength(get_the_content(), 650); ?>
                                </p>
                            </div>


                        </aside>
        <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                
                        <aside class="aside01">
                            <a href="<?php the_field('enlace_de_imagen');?>"></a>
                            <img src="<?php echo $feat_image; ?>" class="img-responsive imagen1-aside" alt="">
                        </aside>
    <?php } ?>
                    <?php } ?>
                <!--/ASIDE 1 -->
                <aside class="aside2">
                    <?php $pagename = query_posts(array('post_type' => 'page', 'pagename' => 'aside2', 'posts_per_page' => 1)); ?>
                    <?php if (!empty($pagename)) { ?>
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <h2 class="titulo-aside"><?php the_title() ?></h2>
                            <div class="parrafo-aside">
                                <p>
                            <?php echo max_charlength(get_the_content(), 650); ?>
                                </p>
                            </div>
                        </aside>
                        <!--CORREO -->
                        <aside>
                            <span class="glyphicon glyphicon-envelope ico-correo"></span>
                                    <?php if (get_field('correo')) { ?>
                                <div class="correo-aside">
                                    <p>
                                <?php the_field('correo'); ?>
                                    </p>
                                </div>
                        <?php } ?>
                        </aside>
                        <!--/CORREO -->
                        <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                        <aside class="aside02">
                            <a href="<?php the_field('enlace_de_imagen');?>">
                            <img src="<?php echo $feat_image; ?>" class="img-responsive logo" alt="<?php the_title(); ?>">
                            </a>
                        </aside>
                        <?php } ?>
                    <?php } ?>
                <aside class="aside3">
                    <?php $pagename = query_posts(array('post_type' => 'page', 'pagename' => 'aside3', 'posts_per_page' => 1)); ?>
                    <?php if (!empty($pagename)) { ?>
    <?php
    while (have_posts()) {
        the_post();
        ?>
                            <h2 class="titulo-aside"><?php the_title() ?></h2>
                            <div class="parrafo-aside">
                                <p>
                            <?php echo max_charlength(get_the_content(), 650); ?>
                                </p>
                            </div>
                        </aside>
                        <aside>
        <?php if (get_field('ultimo-texto')) { ?>
                                <div class="ultimo-texto">
                                    <p>
                            <?php the_field('ultimo-texto'); ?>
                                    </p>
                                </div>
        <?php } ?>
                        </aside>
    <?php } ?>
<?php } ?>
            </div>
        </div>
    </div>

    <!--//CUADROS DE IMAGENES Y TEXTO -->

</div>
<?php get_footer(); ?>
