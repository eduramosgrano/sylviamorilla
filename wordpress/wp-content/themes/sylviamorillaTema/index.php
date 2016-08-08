<?php
/**
 * Pagina inicial
 *
 * @package WordPress
 * @subpackage Essense
 * @since Essense 1.0
 */



get_header(); ?>

<!-- video -->

<div class="video">
	<?php
	 echo get_theme_mod('url_video_home');
	 ?>
</div>

<div class="redesociais">
	<?php
	 echo get_theme_mod('redessociais_facebook').'<br>';
 	 echo get_theme_mod('redessociais_instagram').'<br>';
	 echo get_theme_mod('redessociais_linkedin').'<br>';
	 ?>
</div>

<div class="endereco">
	<?php
	 echo get_theme_mod('endereco_rua').'<br>';
 	 echo get_theme_mod('endereco_pais').'<br>';
	 echo get_theme_mod('endereco_telefone').'<br>';
	 ?>
</div>


<!-- end video -->

<!-- slider -->
<div class="slider">
		<p>
			slider
		</p>
</div>
<!-- end slider -->

<!-- servicos -->
<div class="servicos">
	<?php
	 echo get_theme_mod('servicos_titulo');
	 ?>
</div>
<!-- end servicos -->


<!-- blog -->
<div class="blog">
		<p>
			slider
		</p>
</div>

<!-- end blog -->

<!-- clientes -->
<div class="clientes">
	<?php
	 echo get_theme_mod('clientes_titulo');
	 ?>
</div>
<!-- end clientes -->


<!-- quemsomos -->
<div class="quemsomos">
	<?php
	 echo get_theme_mod('quemsomos_titulo').'</br>';

 	 echo get_theme_mod('quemsomos_col1_titulo').'</br>';

 	 echo get_theme_mod('quemsomos_col1_texto').'</br>';

	 echo get_theme_mod('quemsomos_col2_titulo').'</br>';

 	 echo get_theme_mod('quemsomos_col2_texto').'</br>';
	 ?>
</div>
<!-- end quemsomos -->

<!-- newsletter -->
<div class="NewsLetter">
	<?php
	 echo get_theme_mod('newsltter_email');
	 ?>
</div>
<!-- end newsletter -->

<?php get_footer(); ?>
