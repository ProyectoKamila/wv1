<?php get_header('');?>
<?php portada('index'); ?>
<?php get_template_part('list-game');?>
<section class="informative">
	<div class="container-fluid sin-padding">
		<div class="row">
			<div class="col-xs-12">
				<div class="mesa">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-lg-offset-1 col-md-offset-1 col-md-3 col-sm-4 col-xs-12 section" >
								<div class="info">
									<?php $Servicio = query_posts(array('post_type'=>'page','pagename'=>'inicio','posts_per_page'=>1)); ?>
									<?php while(have_posts()){ the_post();?>
									<h2><?php the_field('titulo_1')?></h2>
									<p><?php the_field('texto_1')?> </p>
									<?php }?>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section">
								<div class="logo-mesa"></div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 section">
								<div class="info">

									<?php $Servicio = query_posts(array('post_type'=>'page','pagename'=>'inicio','posts_per_page'=>1)); ?>
									<?php while(have_posts()){ the_post();?>
									<h2><?php the_field('titulo_2')?></h2>
									<p><?php the_field('texto_2')?> </p>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<div class="clearfix"></div>
			<div class="col-lg-4 col-lg-offset-4 col-md-4 col-offset-4 col-sm-6 col-sm-offset-3">
				<div class="section-bottom">
					<?php $Servicio = query_posts(array('post_type'=>'page','pagename'=>'inicio','posts_per_page'=>1)); ?>
									<?php while(have_posts()){ the_post();?>
									<h2><?php the_field('titulo_3')?></h2>
									<p><?php the_field('texto_3')?> </p>
									<?php }?>
					<p class="center btn btn-default" onclick="activate();"><span class="glyphicon glyphicon-user"></span> <span>120</span> Usuarios En Linea </p>
				</div>
				
			</div>
			<div class="clearfix"></div>
<section class="cartas">
	<div class="container-fluid ">
		<div class="row">
			<?php query_posts(array('post_type'=>'promociones','posts_per_page'=>1,'tipo'=>'pica')); ?>
			<?php while(have_posts()){ the_post();?>
			<div class="col-lg-3 col-md-3 col-sm-4 col-sm-offset-1 col-xs-12 carta-efecto sin-padding col-lg-offset-0 col-md-offset-0">
				<div class="carta"></div>
				<div class="carta-real pica">
					<div class="icon">
						<?php the_field('icono');?>
					</div>
					<?php the_content(); ?>
				</div>
			</div>
			<?php } ?>
		<?php query_posts(array('post_type'=>'promociones','posts_per_page'=>1,'tipo'=>'diamante')); ?>
			<?php while(have_posts()){ the_post();?>
			<div class="col-lg-3 col-md-3 col-sm-4 col-sm-offset-1 col-xs-12 carta-efecto sin-padding col-lg-offset-0 col-md-offset-0">
				<div class="carta"></div>
				<div class="carta-real diamante">
					<div class="icon">
						<?php the_field('icono');?>
					</div>
					<?php the_content(); ?>
				</div>
			</div>
			<?php } ?>
			<?php query_posts(array('post_type'=>'promociones','posts_per_page'=>1,'tipo'=>'trebol')); ?>
			<?php while(have_posts()){ the_post();?>
			<div class="col-lg-3 col-md-3 col-sm-4 col-sm-offset-1 col-xs-12 carta-efecto sin-padding col-lg-offset-0 col-md-offset-0">
				<div class="carta"></div>
				<div class="carta-real trebol">
					<div class="icon">
						<?php the_field('icono');?>
					</div>
					<?php the_content(); ?>
				</div>
			</div>
			<?php } ?>
			<?php query_posts(array('post_type'=>'promociones','posts_per_page'=>1,'tipo'=>'corazon')); ?>
			<?php while(have_posts()){ the_post();?>
			<div class="col-lg-3 col-md-3 col-sm-4 col-sm-offset-1 col-xs-12 carta-efecto sin-padding col-lg-offset-0 col-md-offset-0">
				<div class="carta"></div>
				<div class="carta-real corazon">
					<div class="icon">
						<?php the_field('icono');?>
					</div>
					<?php the_content(); ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<div class="clearfix"></div>
<section class="mesa-baja">
<div class="container">
	<div class="row">
		<div class="col-xs-12">

			<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<div class="section-bottom">
					<?php $Servicio = query_posts(array('post_type'=>'page','pagename'=>'inicio','posts_per_page'=>1)); ?>
									<?php while(have_posts()){ the_post();?>
									<h2><?php the_field('titulo_4')?></h2>
									<p><?php the_field('texto_4')?> </p>
									<?php }?>
				</div>				
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>
</section>			
<?php get_footer();?>