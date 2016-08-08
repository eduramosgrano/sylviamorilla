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
      'editor',
      'thumbnail'
    ),
    'menu_position' => 3,
    'menu_icon' => 'dashicons-images-alt2',
    'capability_type' => 'post'
  ));
}
add_action('init', 'cpt_bannerprincipal');

function bannerprincipal_metaboxthumb_nomediferente(){
  add_meta_box( 'postimagediv', __( 'Imagem de fundo' ), 'post_thumbnail_meta_box', 'bannerprincipal', 'side', 'low' );
}
add_action('do_meta_boxes', 'bannerprincipal_metaboxthumb_nomediferente');
//BANNER PRINCIPAL METABOX

add_action( 'cmb2_init', 'cmb2_bannerprincial_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_bannerprincial_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_bannerprincipal_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => $prefix.'post_relacioandos',
        'title'         => __( 'Posts relacionados', 'cmb2' ),
        'object_types'  => array( 'bannerprincipal'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Add new fields
    $cmb->add_field( array(
        'name'        => __( 'Case/Post 1' ),
        'id'          => $prefix.'post_relacioandos_p1',
        'type'        => 'post_search_text', // This field type
        // post type also as array
        'post_type'   => 'post',
        // Default is 'checkbox', used in the modal view to select the post type
        'select_type' => 'radio',
        // Will replace any selection with selection from modal. Default is 'add'
        'select_behavior' => 'replace',
    ) );
    $cmb->add_field( array(
        'name'        => __( 'Case/Post 2' ),
        'id'          => $prefix.'post_relacioandos_p2',
        'type'        => 'post_search_text', // This field type
        // post type also as array
        'post_type'   => 'post',
        // Default is 'checkbox', used in the modal view to select the post type
        'select_type' => 'radio',
        // Will replace any selection with selection from modal. Default is 'add'
        'select_behavior' => 'replace',
    ) );
    $cmb->add_field( array(
        'name'        => __( 'Case/Post 3' ),
        'id'          => $prefix.'post_relacioandos_p3',
        'type'        => 'post_search_text', // This field type
        // post type also as array
        'post_type'   => 'post',
        // Default is 'checkbox', used in the modal view to select the post type
        'select_type' => 'radio',
        // Will replace any selection with selection from modal. Default is 'add'
        'select_behavior' => 'replace',
    ) );
    $cmb->add_field( array(
        'name'        => __( 'Case/Post 4' ),
        'id'          => $prefix.'post_relacioandos_p4',
        'type'        => 'post_search_text', // This field type
        // post type also as array
        'post_type'   => 'post',
        // Default is 'checkbox', used in the modal view to select the post type
        'select_type' => 'radio',
        // Will replace any selection with selection from modal. Default is 'add'
        'select_behavior' => 'replace',
    ) );
    // Add other metaboxes as needed

}


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


// CLIENTES

  function cpt_clientes() {

    /**
     * Register a custom post type
     *
     * Supplied is a "reasonable" list of defaults
     * @see register_post_type for full list of options for register_post_type
     * @see add_post_type_support for full descriptions of 'supports' options
     * @see get_post_type_capabilities for full list of available fine grained capabilities that are supported
     */
    register_post_type('clientes', array(
      'labels' => array(
        'name'                  => _x( 'Clientes', 'Post type general name', 'twentysixteen' ),
        'singular_name'         => _x( 'Cliente', 'Post type singular name', 'twentysixteen' ),
        'menu_name'             => _x( 'Clientes', 'Admin Menu text', 'twentysixteen' ),
        'name_admin_bar'        => _x( 'Clientes', 'Add New on Toolbar', 'twentysixteen' ),
        'add_new_item'          => __( 'Add New Cliente', 'textdomain' ),
      ),
      'description' => '',
      'public' => true,
      'exclude_from_search' => null,
      'publicly_queryable' => null,
      'show_ui' => true,
      'show_in_nav_menus' => null,
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
      ),
      'capability_type' => 'post',
      'menu_position' => 2,
      'menu_icon' => 'dashicons-id',
      'register_meta_box_cb' => 'add_metaboxes',
    ));
  }
  add_action('init', 'cpt_clientes');

  //add_action( 'add_meta_boxes', 'add_events_metaboxes' );

  function add_metaboxes() {
    add_meta_box( 'postimagediv', __( 'Logo do cliente' ), 'post_thumbnail_meta_box', 'clientes', 'side', 'low' );
    add_meta_box('cliente_novatag', esc_html__( 'Tag do Cliente' ), 'cliente_novatag', 'clientes', 'side', 'default');
  }
  /* Display the post meta box. */
  function cliente_novatag( $object, $box ) {
     $post_ID = get_the_ID();
     $post_tag= get_post_meta( $post_ID, 'cliente_tag', true );
     $post_tag_slug = get_post_field( 'post_name', get_post() );
    ?>

    <?php wp_nonce_field( basename( __FILE__ ), 'cliente_tag_nonce' ); ?>

    <p>
      <label for="cliente_tag"><?php _e( "Tag criada automaticamente, relacione em seus posts esta tag quando estiver falando deste cliente" ); ?></label>
      <br />
      <?php
      //se não existe post tag
       if(!empty($post_tag)) {
        ?>
        <input class="widefat" type="text" name="cliente_tag" id="cliente_tag" value="<?php echo $post_tag ?>" size="20" style="width:90%" /><span style="float:left; font-size:20px;">#</span>
      <?php
      } else {
        // se existe post tag e for atualizado
        ?>
        <input class="widefat" type="text" name="cliente_tag" id="cliente_tag" value="<?php echo $post_tag_slug ?>" size="30" style="width:90%" /><span style="float:left; font-size:20px;">#</span>
        <?php
      }?>
      </p>
  <?php }
  // save
  /* Save the meta box's post metadata. */
function smashing_save_post_class_meta( $post_id, $post ) {


  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['cliente_tag_nonce'] ) || !wp_verify_nonce( $_POST['cliente_tag_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['cliente_tag'] ) ? sanitize_html_class( $_POST['cliente_tag'] ) : '' );

  /* Get the meta key. */
  $meta_key = 'cliente_tag';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $meta_key, true );

  /* Get the slug of post */
  $post_tag_slug = get_post_field( 'post_name', $post_id );

  //echo $meta_value;
  //add_action( 'init', 'people_init' );

  if(empty($meta_value)&&!$new_meta_value){
     /* If a new meta value was added and there was no previous value, add it. */
    add_post_meta( $post_id, $meta_key, $post_tag_slug, true );
    //crente tag
    $term = term_exists($post_tag_slug, 'post_tag');
    //verifica se a tag já existe para depois cria-la
    if($term == 0 && $term == null){
      wp_insert_term(
              $post_tag_slug,
              'post_tag',
              array(
                  'label' => __( $post_tag_slug ),
                  'slug' => $post_tag_slug
              )
          );
    }
  }elseif(empty($meta_value)&&$new_meta_value){
    /* If a new meta value was added and there was no previous value,but ipnut has value, add it. */
   add_post_meta( $post_id, $meta_key, $new_meta_value, true );
   //crente tag
   $term = term_exists($new_meta_value, 'post_tag');
   //verifica se a tag já existe para depois cria-la
   if($term == 0 && $term == null){
     wp_insert_term(
             $new_meta_value,
             'post_tag',
             array(
                 'label' => __( $new_meta_value ),
                 'slug' => $new_meta_value
             )
         );
   }
  }elseif($new_meta_value != $meta_value){
    /* If the new meta value does not match the old value, update it. */

    update_post_meta( $post_id, $meta_key, $new_meta_value );
    $termid = get_term_by( 'name', $meta_value, 'post_tag' );
    $termidname = $termid->term_id;
      wp_update_term(
            $termidname,
            'post_tag',
            array(
                'name' => $new_meta_value,
                'slug' => $new_meta_value
            )
        );

  }elseif($new_meta_value == '' ){
    /* If there is no new meta value but an old value exists, delete it. */
    $termid = get_term_by( 'name', $meta_value, 'post_tag' );
    $termidname = $termid->term_id;
    wp_delete_term( $termidname, 'post_tag' );
    delete_post_meta( $post_id, $meta_key, $meta_value );
    }
  }
  add_action( 'save_post', 'smashing_save_post_class_meta', 10, 2 );

  //Config Colluns List


  function ptce_add_thumb_column_clientes( $columns ) {
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
  add_filter( 'manage_clientes_posts_columns' , 'ptce_add_thumb_column_clientes' );

  function ptce_render_thumb_column_clientes( $column, $post_id ) {
  	if ( 'post_thumbnail_column' == $column ) {
  		if ( has_post_thumbnail() ) {
  			echo '<a href="http://localhost:8888/Integrare/Programacao/Essense2016/Essense/wp-admin/post.php?post='.get_the_ID().'&action=edit">'.get_the_post_thumbnail( $post_id, 'thumbnail').'</a>';
  		} else {
  			echo '<a href="http://localhost:8888/Integrare/Programacao/Essense2016/Essense/wp-admin/post.php?post='.get_the_ID().'&action=edit"><span class="dashicons dashicons-no"></span></a>';
  		}
  	}
  }
  add_action( 'manage_clientes_posts_custom_column' , 'ptce_render_thumb_column_clientes', 10, 2 );
// CLIENTES END


//POSTS

//desbilitar categorias
function wpse120418_unregister_categories() {
    register_taxonomy( 'category', array() );
}
add_action( 'init', 'wpse120418_unregister_categories' );


add_action( 'cmb2_init', 'cmb2_post_metaboxes' );

//post type
function cmb2_post_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_post_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => $prefix.'post_relacioandos',
        'title'         => __( 'Formato do Post', 'cmb2' ),
        'object_types'  => array( 'post'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Add new fields


    $cmb->add_field( array(
        'name'             => 'Selecione uma das opções',
        'id'               => $prefix.'post_format',
        'type'             => 'radio_inline',
        'show_option_none' => false,
        'options'          => array(
            'Post' => __( 'Noticia', 'cmb2' ),
            'Case'   => __( 'Case', 'cmb2' ),
        ),
    ) );
    $cmb->add_field( array(
        'name' => 'Portfólio/Galeria',
        'desc' => '',
        'id'   => 'wiki_test_file_list',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        // Optional, override default text strings
        'text' => array(
            'add_upload_files_text' => 'Selecionar imagens', // default: "Add or Upload Files"
            'remove_image_text' => 'Remover imagens', // default: "Remove Image"
            'file_text' => 'File:', // default: "File:"
            'file_download_text' => 'Download', // default: "Download"
            'remove_text' => 'Remove', // default: "Remove"
        ),
    ) );
    // Add other metaboxes as needed

}



  function ptce_add_thumb_column_post( $columns ) {
  	return array_merge(
  		$columns = array(
          'cb' => '<input type="checkbox" />',
          'title' => __( 'Nome' ),
          'postFormt' => __('Formato do post'),
          'tags' => __('Tags'),
          'comments' => __('Coment.'),
          'date' => __( 'Date' )
      )
  	);
  }
  add_filter( 'manage_posts_columns' , 'ptce_add_thumb_column_post' );

  function ptce_render_thumb_column_post( $column, $post_id ) {
    $postFormat = get_post_meta( get_the_ID(), '_post_post_format', true );
  	if ( 'postFormt' == $column ) {
  		if ( !empty($postFormat) ) {
  			echo '<a href="http://localhost:8888/Integrare/Programacao/Essense2016/Essense/wp-admin/post.php?post='.get_the_ID().'&action=edit">'.$postFormat.'</a>';
  		} else {
  			echo '<a href="http://localhost:8888/Integrare/Programacao/Essense2016/Essense/wp-admin/post.php?post='.get_the_ID().'&action=edit">'.$postFormat.'</a>';
  		}
  	}
  }
  add_action( 'manage_posts_custom_column' , 'ptce_render_thumb_column_post', 10, 2 );


 ?>
