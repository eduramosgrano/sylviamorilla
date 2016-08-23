<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Preloader -->
	<div id="preloader">
			<div id="status">&nbsp;</div>
	</div>

	<?php
	if(is_home()){
		?>
		<div id="slider-home" class="slider-home">
			<div class="seta">
				<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="343.17" height="175.99" viewBox="0 0 343.17 175.99">
					<line class="cls-1" x1="169.9" y1="175.63" x2="342.82" y2="0.35"/>
					<line class="cls-1" x1="0.36" y1="3.77" x2="169.9" y2="175.63"/>
				</svg>
			</div>
			<div class="carousel">
				<?php
				$args = array( 'post_type' => 'bannerprincipal', 'posts_per_page' => 3 );
					 $loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID,'full') );

					  echo '<div class="item" style="background-image:url('.$url.')"></div>';
					endwhile;

				 ?>
			</div>
			<div class="chamada">
				<h1><?php echo get_theme_mod('titulo'); ?></h1>
			</div>
		</div>

		<!--  Navegator -->
		<div class="navegator">
			<div class="border">
				<div class="inner"></div>
			</div>
			<div class="menu-btn">
						<span>toggle menu</span>
			</div>
			<div class="logo img-responsive"><a href="http://sylviamorilla.com.br/">Sylvia Morilla</a></div>
			<div class="social hidden-xs">
				<a href="#contato" class="icon iconcontato">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 470.161 470.161" style="enable-background:new 0 0 470.161 470.161;" xml:space="preserve">

						<path d="M463.247,55.313H6.914c-2.773,0-5.282,1.66-6.368,4.218C0.173,60.409-0.007,61.35,0,62.276v345.658
							c0,0.007,0,0.014,0,0.021c0,0.926,0.187,1.811,0.518,2.613c0.339,0.823,0.836,1.583,1.507,2.254
							c0.671,0.67,1.431,1.168,2.254,1.507c0.802,0.332,1.688,0.519,2.614,0.519c0.007,0,0.014,0,0.021,0h456.333
							c0.968,0,1.881-0.193,2.708-0.552c0.768-0.324,1.487-0.795,2.116-1.41c0.021-0.021,0.014-0.014,0.014-0.014
							c0.007-0.007,0.014-0.007,0.014-0.014c0,0,0,0,0.007,0c0-0.028,0.007-0.021,0.014-0.021c0.007,0,0.007-0.007,0.014-0.014
							c0.007-0.007,0.014-0.007,0.014-0.014c0,0,0.007,0,0.007-0.007l0.014-0.014c0.007-0.007,0.007-0.007,0.014-0.014
							c0,0,0,0,0.007-0.007c0.643-0.65,1.12-1.397,1.452-2.192c0.339-0.816,0.519-1.708,0.519-2.641V62.227
							C470.161,58.404,467.071,55.313,463.247,55.313z M446.902,69.141L287.988,232.84l-0.007,0.007l-52.928,54.566l-53.336-54.165
							L23.204,69.141H446.902z M13.828,79.34l153.245,158.659L13.828,391.244V79.34z M23.605,401.02l153.12-153.127l53.432,54.262
							c1.307,1.327,3.077,2.067,4.93,2.067c0.007,0,0.021,0,0.028,0c1.86-0.007,3.637-0.768,4.937-2.102l52.976-54.608L446.556,401.02
							H23.605z M456.333,391.244l-153.674-153.66L456.333,79.278V391.244z"/>
					</svg>
				</a>
				<a href="<?php echo get_theme_mod('redessociais_facebook'); ?>"class="icon facebook">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="430.113px" height="430.114px" viewBox="0 0 430.113 430.114" style="enable-background:new 0 0 430.113 430.114;"
							 xml:space="preserve">
						<path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
						c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
						c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
					</svg>
			</a>
			<a href="<?php echo get_theme_mod('redessociais_instagram'); ?>"class="icon facebook">
				<svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path id="Facebook" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
		</a>
			</div>
			<div class="conteudo">
				<div class="lista">
					<ul>
						<li><h1><a href="#sobre"><span></span>Sobre<span></span></a></h1></li>
						<li><h1><a href="portfolio"><span></span>Portfólio<span></span></a></h1></li>
						<li><h1><a href="blog"><span></span>Blog<span></span></a></h1></li>
						<li><h1><a href="#contato"><span></span>Contato<span></span></a></h1></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END Navegator -->
		<?php
	}else{
		 ?>
		 <!--  Navegator -->
		 <div class="navegator inner">
		 	<div class="border">
		 		<div class="inner"></div>
		 	</div>
		 	<div class="menu-btn">
		 				<span>toggle menu</span>
		 	</div>
		 	<div class="logo img-responsive"><a href="http://sylviamorilla.com.br/">Sylvia Morilla</a></div>
		 	<div class="social hidden-xs">
		 		<a href="#contato" class="icon iconcontato">
		 			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 				 viewBox="0 0 470.161 470.161" style="enable-background:new 0 0 470.161 470.161;" xml:space="preserve">

		 				<path d="M463.247,55.313H6.914c-2.773,0-5.282,1.66-6.368,4.218C0.173,60.409-0.007,61.35,0,62.276v345.658
		 					c0,0.007,0,0.014,0,0.021c0,0.926,0.187,1.811,0.518,2.613c0.339,0.823,0.836,1.583,1.507,2.254
		 					c0.671,0.67,1.431,1.168,2.254,1.507c0.802,0.332,1.688,0.519,2.614,0.519c0.007,0,0.014,0,0.021,0h456.333
		 					c0.968,0,1.881-0.193,2.708-0.552c0.768-0.324,1.487-0.795,2.116-1.41c0.021-0.021,0.014-0.014,0.014-0.014
		 					c0.007-0.007,0.014-0.007,0.014-0.014c0,0,0,0,0.007,0c0-0.028,0.007-0.021,0.014-0.021c0.007,0,0.007-0.007,0.014-0.014
		 					c0.007-0.007,0.014-0.007,0.014-0.014c0,0,0.007,0,0.007-0.007l0.014-0.014c0.007-0.007,0.007-0.007,0.014-0.014
		 					c0,0,0,0,0.007-0.007c0.643-0.65,1.12-1.397,1.452-2.192c0.339-0.816,0.519-1.708,0.519-2.641V62.227
		 					C470.161,58.404,467.071,55.313,463.247,55.313z M446.902,69.141L287.988,232.84l-0.007,0.007l-52.928,54.566l-53.336-54.165
		 					L23.204,69.141H446.902z M13.828,79.34l153.245,158.659L13.828,391.244V79.34z M23.605,401.02l153.12-153.127l53.432,54.262
		 					c1.307,1.327,3.077,2.067,4.93,2.067c0.007,0,0.021,0,0.028,0c1.86-0.007,3.637-0.768,4.937-2.102l52.976-54.608L446.556,401.02
		 					H23.605z M456.333,391.244l-153.674-153.66L456.333,79.278V391.244z"/>
		 			</svg>
		 		</a>
		 		<a href="<?php echo get_theme_mod('redessociais_facebook'); ?>"class="icon facebook">
		 				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 					 width="430.113px" height="430.114px" viewBox="0 0 430.113 430.114"
		 					 xml:space="preserve">
		 				<path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
		 				c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
		 				c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
		 			</svg>
		 	</a>
			<a href="<?php echo get_theme_mod('redessociais_instagram'); ?>"class="icon facebook">
				<svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path id="Facebook" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
		</a>
			</div>
		 	<div class="conteudo">
		 		<div class="lista">
		 			<ul>
		 				<li><h1><a href="http://www.sylviamorilla.com.br#sobre"><span></span>Sobre<span></span></a></h1></li>
		 				<li><h1><a href="portfolio"><span></span>Portfólio<span></span></a></h1></li>
		 				<li><h1><a href="blog"><span></span>Blog<span></span></a></h1></li>
		 				<li><h1><a href="#contato"><span></span>Contato<span></span></a></h1></li>
		 			</ul>
		 		</div>
		 	</div>
		 </div>
		 <!-- END Navegator -->
		<?php
	}
	 ?>
