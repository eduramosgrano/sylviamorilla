<?php


// BANNER PRINCIPAL

function cpt_bannerprincipal() {
  register_post_type('bannerprincipal', array(
    'labels' => array(
      'name'                  => _x( 'Banner Principal', 'Post type general name', 'twentysixteen' ),
      'singular_name'         => _x( 'Slide', 'Post type singular name', 'twentysixteen' ),
      'menu_name'             => _x( 'Banner Principal', 'Admin Menu text', 'twentysixteen' ),
      'name_admin_bar'        => _x( 'Banner Principal', 'Add New on Toolbar', 'twentysixteen' ),
      'add_new_item'          => __( 'Add New Slide', 'textdomain' ),
    ),
    'description' => '',
    'public' => true,
    'exclude_from_search' => true,
    'publicly_queryable' => null,
    'show_ui' => true,
    'show_in_nav_menus' => null,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'thumbnail'
    ),
    'menu_position' => 3,
    'menu_icon' => 'dashicons-images-alt2',
    'capability_type' => 'post'
  ));
}
add_action('init', 'cpt_bannerprincipal');

function bannerprincipal_metaboxthumb_nomediferente(){
    add_meta_box( 'postimagediv', __( 'Imagem de fundo' ), 'post_thumbnail_meta_box', 'bannerprincipal', 'normal', 'low' );
}
add_action('do_meta_boxes', 'bannerprincipal_metaboxthumb_nomediferente');
//BANNER PRINCIPAL METABOX


//Config Colluns List


function ptce_add_thumb_column( $columns ) {
	return array_merge(
		$columns = array(
        'cb' => '<input type="checkbox" />',
        'post_thumbnail_column' => __('Imagem'),
        'title' => __( 'Nome' ),
        'date' => __( 'Date' )
    ),
		array( 'post_thumbnail_column' => __( 'Imagem', 'post_thumbnail_column' ) )
	);
}
add_filter( 'manage_bannerprincipal_posts_columns' , 'ptce_add_thumb_column' );

function ptce_render_thumb_column( $column, $post_id ) {
	if ( 'post_thumbnail_column' == $column ) {
		if ( has_post_thumbnail() ) {
			echo '<a href="http://localhost:8888/Integrare/Programacao/Essense2016/Essense/wp-admin/post.php?post='.get_the_ID().'&action=edit">'.get_the_post_thumbnail( $post_id, 'thumbnail').'</a>';
		} else {
			echo '<a href="http://localhost:8888/Integrare/Programacao/Essense2016/Essense/wp-admin/post.php?post='.get_the_ID().'&action=edit"><span class="dashicons dashicons-no"></span></a>';
		}
	}
}
add_action( 'manage_bannerprincipal_posts_custom_column' , 'ptce_render_thumb_column', 10, 2 );

// BANNER PRINCIPAL END


// PORTFOLIO

  function cpt_Portfolio() {

    /**
     * Register a custom post type
     *
     * Supplied is a "reasonable" list of defaults
     * @see register_post_type for full list of options for register_post_type
     * @see add_post_type_support for full descriptions of 'supports' options
     * @see get_post_type_capabilities for full list of available fine grained capabilities that are supported
     */
    register_post_type('Portfolio', array(
      'labels' => array(
        'name'                  => _x( 'Portfolio', 'Post type general name', 'twentysixteen' ),
        'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'twentysixteen' ),
        'menu_name'             => _x( 'Portfolio', 'Admin Menu text', 'twentysixteen' ),
        'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'twentysixteen' ),
        'add_new_item'          => __( 'Add New Portfólio', 'textdomain' ),
      ),
      'description' => '',
      'public' => true,
      'exclude_from_search' => null,
      'publicly_queryable' => null,
      'show_ui' => true,
      'has_archive'         => false,
      'show_in_nav_menus' => null,
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor'
      ),
      'capability_type' => 'post',
      'menu_position' => 2,
      'menu_icon' => 'dashicons-images-alt'
    ));
    flush_rewrite_rules();
  }
  add_action('init', 'cpt_Portfolio');



  add_action( 'cmb2_init', 'cmb2_portfolio_metaboxes' );
  // cmb2
  function cmb2_portfolio_metaboxes() {

      // Start with an underscore to hide fields from custom fields list
      $prefix = '_portfolio_';

      /**
       * Initiate the metabox
       */
      $cmb = new_cmb2_box( array(
          'id'            => $prefix.'images',
          'title'         => __( 'Fotos', 'cmb2' ),
          'object_types'  => array( 'portfolio'), // Post type
          'context'       => 'normal',
          'priority'      => 'high',
          'show_names'    => true, // Show field names on the left
          // 'cmb_styles' => false, // false to disable the CMB stylesheet
          // 'closed'     => true, // Keep the metabox closed by default
      ) );

      // Add new fields
      $cmb->add_field( array(
        'name' => '',
         'desc' => '',
         'id'   => $prefix.'fotos',
         'type' => 'file_list',
          'preview_size' => array( 150, 150 ), // Default: array( 50, 50 )
      ) );
  }

  //Config Colluns List


  // function ptce_add_thumb_column_portfolio( $columns ) {
  // 	return array_merge(
  // 		$columns = array(
  //         'cb' => '<input type="checkbox" />',
  //         'post_thumbnail_column' => __('Imagem'),
  //         'title' => __( 'Nome' ),
  //         'date' => __( 'Date' )
  //     ),
  // 		array( 'post_thumbnail_column' => __( 'Imagem', 'post_thumbnail_column' ) )
  // 	);
  // }
  // add_filter( 'manage_portfolio_posts_columns' , 'ptce_add_thumb_column_portfolio' );
  //
  // function ptce_render_thumb_column_portfolio( $column, $post_id ) {
  // 	if ( 'post_thumbnail_column' == $column ) {
  // 		if ( has_post_thumbnail() ) {
  // 			echo '<a href="http://localhost:8888/Integrare/Programacao/Essense2016/Essense/wp-admin/post.php?post='.get_the_ID().'&action=edit">'.get_the_post_thumbnail( $post_id, 'thumbnail').'</a>';
  // 		} else {
  // 			echo '<a href="http://localhost:8888/Integrare/Programacao/Essense2016/Essense/wp-admin/post.php?post='.get_the_ID().'&action=edit"><span class="dashicons dashicons-no"></span></a>';
  // 		}
  // 	}
  // }
  // add_action( 'manage_portfolio_posts_custom_column' , 'ptce_render_thumb_column_portfolio', 10, 2 );

// SHOW IMAGES
function cmb2_output_file_list( $file_list_meta_key, $img_size ) {

    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

    // Loop through them and output an image
    foreach ( (array) $files as $attachment_id => $attachment_url ) {
        $url = wp_get_attachment_image_src( $attachment_id, $img_size );
        echo '<div class="item" style="background-image:url('.$url[0].')"></div>';
    }
}
function cmb2_output_file_list_first( $file_list_meta_key, $img_size ) {

    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );
    $i=0;
    // Loop through them and output an image
    foreach ( (array) $files as $attachment_id => $attachment_url ) {
        if($i==0){
          $url = wp_get_attachment_image_src( $attachment_id, $img_size );
          echo $url[0];
        }else{
          return;
        }
        $i++;
    }
}

// PORTFOLIO END


//POSTS

// //desbilitar categorias
// function wpse120418_unregister_categories() {
//     register_taxonomy( 'category', array() );
// }
// add_action( 'init', 'wpse120418_unregister_categories' );



 ?>
