<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="conteudo container blog">
<!--
 <div class="blog-header">
	 <h1 class="blog-title">Blog</h1>
 </div> -->

 <div class="row">
	 <div class="col-sm-8 blog-main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			// 	comments_template();
			// }

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<h3 class="post-title">%title</h3>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<h3 class="post-title">%title</h3>',
				) );
			}

			// End of the loop.
		endwhile;
		?>

		</div>


		<div class="col-sm-3 col-sm-offset-1 blog-sidebar">




<?php get_sidebar(); ?>

</div>
</div>
</div>
<?php get_footer(); ?>
