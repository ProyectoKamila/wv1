<?php function portada($categoria){?>
    <?php if( $categoria != null){?>
        <?php $portadas = query_posts(array('post_type'=>'portada','categoria'=>$categoria,'posts_per_page'=>4));?>
        <?php if(!empty($portadas)){?>
                  <div class="container-fluid sin-padding">
                    <div class="row">
                        <div class="col-xs-12 content-slider">
                            <ul id='slider1'>
                                <?php while(have_posts()){ the_post();?>
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                                    <li>
                                        <?php if(get_field('enlace')){?>
                                        <a href="<?php the_field('enlace');?>">
                                        <?php } ?>
                                        <section class="slider" style="background: url(<?php echo $url; ?>) top center no-repeat; background-size:cover;"></section>
                                        <?php if(get_field('enlace')){?>
                                        </a>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php } wp_reset_query(); ?>
        <?php } ?>
<?php } ?>