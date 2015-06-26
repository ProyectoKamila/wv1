<?php get_header('');?>
<?php portada('nosotros'); ?>
<?php get_template_part('list-game');?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-offset-1  col-lg-4 titulo-nosotros">
				<h2>Lorem Ipsum es simplemente</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row caja-nosotros">
			<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'nosotros','posts_per_page'=>1));?>
 			<?php if(!empty($pagename)) {?>
     		<?php while(have_posts()){ the_post();?>
			<div class="col-lg-3 col-md-3">
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="nosotros-imagen1">
					<img src="<?php echo $feat_image;?>" class="img-responsive " alt="">
				</div>
			</div>
			<div class="col-lg-8   col-md-7">
				<div class="nosotros-parrafo1">
					<p>
						<?php echo max_charlength(get_the_content(),650);?>
					</p>
				</div>
			<?php } ?>
		<?php } ?>
		<!--END TEXTO E IMAGEN -->
		<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'nosotros','posts_per_page'=>1));?>
 		<?php if(!empty($pagename)) {?>
     	<?php while(have_posts()){ the_post();?>
				<!--SEGUNDO TEXTO SEGUNA IMAGEN -->
				<?php if(get_field('nosotros-parrafo2')){?>
					<div class="col-lg-7 nosotros-parrafo2">
						<p>
							<?php the_field('nosotros-parrafo2');?>
						</p>
					</div>
				<?php } ?>
				<div class="col-lg-5">
					<img src="<?php bloginfo("template_url") ?>/images/recortes/nosotros/2.jpg" class="img-responsive " alt="">
				</div>
			</div>
	<?php } ?>
<?php } ?>
		</div>
	</div>
</div>
<?php get_footer();?>

