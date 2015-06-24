<?php $s= query_posts(array('post_type'=>'juego','posts_per_page'=>6));?>
<?php if(!empty($s)){?>
<section class="list-game">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="list">
					<div class="container-fluid">
						<div class="row">
							<?php 
							$x=0;
							?>
							<?php while(have_posts()){ the_post();?>
							<div class="col-lg-2 col-md-2">
								 <div class="name-game" id="game-<?php echo $x;?>" onclick="game(id);">
									<h4><?php the_title(); ?></h4>
									<div class="icon" style="background: url('<?php the_field('icono');?>') no-repeat;">
									</div>
								</div>
							</div>
								<div class="option-game game-in visible-xs visible-sm">
									<div class="container">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-11 col-xs-12">
												<div class="resumen">
													<p><?php the_field('descripcion_corta');?></p>
												</div>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-11">
												<div class="mini-excerpt">
													<p><?php echo max_charlength(get_the_content(),650);?></p>
												</div>
											</div>
											<div class="col-lg-2 col-md-2 col-sm-12">
												<a href="<?php the_permalink(); ?>" class="read-more"> Leer Mas</a>			
												<?php if(get_field('enlace_demo')){?>
														<a href="<?php the_field('enlace_demo');?>" class="btn btn-default hidden-xs "> Jugar <br> Ahora <br> <span class="glyphicon glyphicon-play-circle"></span></a>
												<?php } ?>	
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php 
				$x=0;
			query_posts(array('post_type'=>'juego','posts_per_page'=>6));?>
							<?php while(have_posts()){ the_post();?>
		 	<div class="col-lg-12 col-xs-12 col-sm-12 hidden-xs hidden-sm">
				<div class="option-game game-<?php echo $x; ?>">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-11 col-xs-12">
								<div class="resumen">
									<p><?php the_field('descripcion_corta');?></p>
								</div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-11">
								<div class="mini-excerpt">
									<p><?php echo max_charlength(get_the_content(),650);?></p>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-12">
								<a href="<?php the_permalink(); ?>" class="read-more"> Leer Mas</a>			
								<?php if(get_field('enlace_demo')){?>
										<a href="<?php the_field('enlace_demo');?>" class="btn btn-default hidden-xs "> Jugar <br> Ahora <br> <span class="glyphicon glyphicon-play-circle"></span></a>
								<?php } ?>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
				$x++; 
				} ?>
		</div>
	</div>
</section>
<?php } ?>