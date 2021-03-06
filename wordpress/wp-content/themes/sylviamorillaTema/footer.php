<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div id="contato" class="contato">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Conte sua ideia</h1>
				<p>
					ficarei muito feliz em poder ajudar :)
				</p>
			</div>
		</div>

		<?php echo do_shortcode( '[contact-form-7 id="64" title="Contato"]' );
 ?>
	</div>
</div>

<?php
	if(is_home()){
		?>
		<script src="<?php echo get_template_directory_uri();?>/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/scrollmagic/uncompressed/ScrollMagic.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/scripts.js"></script>
		<?php
	} else{  ?>
		<script src="<?php echo get_template_directory_uri();?>/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/scrollmagic/uncompressed/ScrollMagic.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/scripts-portfolio.js"></script>
		<?php
	}
 ?>

 <!-- Preloader -->
 <script type="text/javascript">
		 //<![CDATA[
				 $(window).load(function() { // makes sure the whole site is loaded
						 $('#status').fadeOut(); // will first fade out the loading animation
						 $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
						 $('body').delay(350).css({'overflow':'visible'});
				 })
		 //]]>
 </script>

<?php wp_footer(); ?>
</body>
</html>
