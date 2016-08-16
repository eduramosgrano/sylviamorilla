<?php
	/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 get_header(); ?>

 <div class="conteudo container blog">

 	<div class="blog-header">
 		<h1 class="blog-title">Blog</h1>
 	</div>

 	<div class="row">
		<div class="col-sm-8 blog-main">
 		<?php if ( have_posts() ) : ?>

 			<?php /* Start the Loop */ ?>
 			<?php //while ( have_posts() ) : the_post();
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged'=>$paged);
				 $loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>

 				<?php
 					/* Include the Post-Format-specific template for the content.
 					 * If you want to override this in a child theme, then include a file
 					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 					 */
 					get_template_part( 'template-parts/content', get_post_format() );
 				?>

 			<?php endwhile; ?>


 		<?php else : ?>

 			<?php get_template_part( 'content', 'none' ); ?>

 		<?php endif; ?>
	</div>


<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
 <?php get_sidebar(); ?>
 </div>
</div>
</div>
 <?php get_footer(); ?>
