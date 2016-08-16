<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php
	if(has_post_thumbnail()){
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
		?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumbnail-post" style="background-image:url(<?php echo $large_image_url[0]; ?>)">
    </a>
		<?php
	}
 ?>
<div id="post-<?php the_ID(); ?>" class="blog-post">
		<?php the_title( sprintf( '<h2 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p class="blog-post-meta"><?php echo get_the_date(); ?></p>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt();
			// the_content( sprintf(
			// 	__( 'Continue lendo<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			// 	get_the_title()
			// ) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span >',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</div><!-- #post-## -->
