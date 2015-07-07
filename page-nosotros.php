<?php get_header(''); ?>
<?php portada('nosotros'); ?>
<?php get_template_part('list-game'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <?php $pagename = query_posts(array('post_type' => 'page', 'pagename' => 'nosotros', 'posts_per_page' => 1)); ?>
            <?php if (!empty($pagename)) { ?>
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="col-lg-offset-1  col-lg-4 titulo-nosotros">
                        <?php if (get_field('titulo-nosotros')) { ?>
                            <h2><?php the_field('titulo-nosotros'); ?></h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row caja-nosotros">
                    <div class="col-lg-3 col-md-3">

                        <div class="nosotros-imagen1">
                            <img src="<?php the_field('imagen_left'); ?>" class="img-responsive " alt="<?php the_title(); ?>">
                        </div>
                    </div>
                    <div class="col-lg-8   col-md-7">
                        <div class="nosotros-parrafo1">
                            <p>
                                <?php echo max_charlength(get_the_content(), 650); ?>
                            </p>
                        </div>
                    <?php } ?>
                <?php } ?>
                <!--END TEXTO E IMAGEN -->
                <?php $pagename = query_posts(array('post_type' => 'page', 'pagename' => 'nosotros', 'posts_per_page' => 1)); ?>
                <?php if (!empty($pagename)) { ?>
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <!--SEGUNDO TEXTO SEGUNA IMAGEN -->
                        <?php if (get_field('nosotros-parrafo2')) { ?>
                            <div class="col-lg-7 nosotros-parrafo2">
                                <p>
                                    <?php the_field('nosotros-parrafo2'); ?>
                                </p>
                            </div>
                        <?php } ?>
                        <div class="col-lg-5">  
                            <img src="<?php the_field('imagen_right'); ?>" class="img-responsive " alt="<?php the_title(); ?>">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--imagen fondo -->

                    <?php if (get_field('fondo_publicidad')) { ?>
                        <a href="">
                            <div class="imagen-publi col-lg-12  col-md-12">
                                <img src="<?php the_field('fondo_publicidad'); ?>" class="img-responsive " alt="">
                            </div>
                        </a>
                    <?php } ?>
                    <div class="clearfix"></div>
                    <!--TITULO2 Y PARRAFO -->
                    <div class=" titulo2-nosotros   col-lg-5 sin-padding">
                        <?php if (get_field('titulo2-nosotros')) { ?>
                            <h2 class="titulo-n"><?php the_field('titulo2-nosotros'); ?></h2>
                        <?php } ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="parrafo-titulo2 col-lg-12">
                        <?php if (get_field('parrafo-titulo2')) { ?>
                            <p>
                                <?php the_field('parrafo-titulo2'); ?>
                            </p>
                        <?php } ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="cuadros col-lg-12">
                        <!-- CUADRO1 -->
                        <div class="bor col-lg-4">
                            <?php if (get_field('imagen-cuadro1')) { ?>
                                <img src="<?php the_field('imagen-cuadro1'); ?>" class="img-responsive " alt="">
                            <?php } ?>
                            <div class="clearfix"></div>
                            <?php if (get_field('titulo-cuadro1')) { ?>
                                <div class="sub-bor col-lg-12 text-center">
                                    <h4><?php the_field('titulo-cuadro1'); ?></h4>
                                </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                            <div class="parrafos-cuadros col-lg-12">
                                <?php if (get_field('parrafo-cuadro1')) { ?>
                                    <p>
                                        <?php the_field('parrafo-cuadro1'); ?>
                                    </p>
                                <?php } ?>
                            </div>
                            <!-- BOTON-->
                            <div class="clearfix"></div>
                            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 boton-n " >
                                <a href="" class="btn btn-default ">
                                    <span>VER AHORA</span>
                                </a>
                            </div>
                        </div>
                        <!-- CUADRO2 -->
                        <div class=" bor col-lg-4">
                            <?php if (get_field('imagen-cuadro2')) { ?>
                                <img src="<?php the_field('imagen-cuadro2'); ?>" class="img-responsive " alt="">
                            <?php } ?>
                            <div class="clearfix"></div>
                            <?php if (get_field('titulo-cuadro2')) { ?>
                                <div class="sub-bor col-lg-12 text-center">
                                    <h4><?php the_field('titulo-cuadro2'); ?></h4>
                                </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                            <div class="parrafos-cuadros  col-lg-12">
                                <?php if (get_field('parrafo-cuadro2')) { ?>
                                    <p>
                                        <?php the_field('parrafo-cuadro2'); ?>
                                    </p>
                                <?php } ?>
                            </div>
                            <!-- BOTON-->
                            <div class="clearfix"></div>
                            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 boton-n " >
                                <a href="" class="btn btn-default ">
                                    <span>VER AHORA</span>
                                </a>
                            </div>
                        </div>
                        <!-- CUADRO3 -->
                        <div class="bor col-lg-4">
                            <?php if (get_field('imagen-cuadro3')) { ?>
                                <img src="<?php the_field('imagen-cuadro3'); ?>" class="img-responsive " alt="">
                            <?php } ?>
                            <div class="clearfix"></div>
                            <?php if (get_field('titulo-cuadro3')) { ?>
                                <div class="sub-bor col-lg-12 text-center">
                                    <h4><?php the_field('titulo-cuadro3'); ?></h4>
                                </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                            <div class="parrafos-cuadros col-lg-12">
                                <?php if (get_field('parrafo-cuadro3')) { ?>
                                    <p>
                                        <?php the_field('parrafo-cuadro3'); ?>
                                    </p>
                                <?php } ?>
                            </div>
                            <!-- BOTON-->
                            <div class="clearfix"></div>
                            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 boton-n " >
                                <a href="" class="btn btn-default ">
                                    <span>VER AHORA</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /cierrra while -->
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

