<?php
	/**
 * Template Name: Portfolio
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php

		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		//print_r($loop);
		$post1 = 1;
		$postside = 2;
		while ( $loop->have_posts() ) : $loop->the_post();

			if($post1==1){
				?>
				<div id="slider-portfolio" class="slider-portfolio container-fluid">
					<div class="row">
						<div class="seta">
							<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="343.17" height="175.99" viewBox="0 0 343.17 175.99">
								<line class="cls-1" x1="169.9" y1="175.63" x2="342.82" y2="0.35"/>
								<line class="cls-1" x1="0.36" y1="3.77" x2="169.9" y2="175.63"/>
							</svg>
						</div>
						<div class="chamada col-sm-12">
								<div class="content col-sm-7 col-xs-12">
									<div class="box">
										<h3><?php echo the_title(); ?></h3>
										<p>
											<?php echo the_content(); ?>
										</p>
									</div>
								</div>
								<div id="navSetas" class="setas col-sm-5 col-xs-12 ">
								</div>
						</div>
						<div class="carousel">
							<?php cmb2_output_file_list( '_portfolio_fotos', 'large' ); //funcao em inc/essense-cpt.php?>

						</div>

					</div>

				</div>
				<?php
			}elseif ($post1==2) {
				  ?>
					<div class="conteudo container">
						<div class="row">
							<div class="col-sm-4 img" style="background-image:url(<?php cmb2_output_file_list_first('_portfolio_fotos', 'medium'); ?>)">
							</div>
							<div class="col-sm-4 texto">
								<h1><?php echo the_title(); ?></h1>
								<p>
									<?php echo the_content(); ?>
								</p>
								<a class="btn btn-primary btn" href="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>">
									Veja mais
								</a>
								<div class="clearfix"></div>
							</div>
						</div>

					<?php
			}else{
				  ?>
					<div class="row">
						<div class="col-sm-4 <?php echo ($postside==2)? 'col-sm-offset-4':'' ?>  col-sm-push-4 img" style="background-image:url(<?php cmb2_output_file_list_first('_portfolio_fotos', 'medium'); ?>)"></div>
						<div class="col-sm-4 col-sm-pull-4 texto">
							<h1><?php echo the_title(); ?></h1>
							<p>
								<?php echo the_content(); ?>
							</p>
							<a class="btn btn-primary btn" href="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>">
								Veja mais
							</a>
							<div class="clearfix"></div>
						</div>

					</div>
					<?php
					if($postside==2){
						$postside=1;
					}else{
						$postside=2;
					}
				}

			 $post1++;
		endwhile;

 ?>
</div><!-- close container -->




<?php get_footer(); ?>
