<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			$posPageID = get_the_ID();

			//post
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


			 //more posts
			 		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 );
			 	 $loop = new WP_Query( $args );
				 $posts = 0;
				 $postside=2;
			 	while ( $loop->have_posts() ) : $loop->the_post();
					if(get_the_ID()==$posPageID){

					}else{
					if($posts==0){
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
						$posts++;

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
						$posts++;
						if($postside==2){
							$postside=1;
						}else{
							$postside=2;
						}
					}
				}


			 	endwhile;


			// if ( is_singular( 'attachment' ) ) {
			// 	// Parent post navigation.
			// 	the_post_navigation( array(
			// 		'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
			// 	) );
			// } elseif ( is_singular( 'post' ) ) {
			// 	// Previous/next post navigation.
			// 	the_post_navigation( array(
			// 		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="post-title">%title</span>',
			// 		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="post-title">%title</span>',
			// 	) );
			// }

			// End of the loop.
		endwhile;
		?>
		</div><!-- close container -->

<?php get_footer(); ?>
