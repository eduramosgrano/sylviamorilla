<?php
//remove tab help
function wpse50787_remove_contextual_help() {
    $screen = get_current_screen();
    $screen->remove_help_tabs();
}
add_action( 'admin_head', 'wpse50787_remove_contextual_help' );

//remove logo admin BANNER
function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

//remove screen options tab
add_filter('screen_options_show_screen', '__return_false');


//customize Dashboard
function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        //remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        //remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
}
add_action( 'admin_init', 'remove_dashboard_meta' );

//change footer
function wpmidia_change_footer_admin () {
  echo "<strong>by Grano Studio</strong>";
}
add_filter('admin_footer_text', 'wpmidia_change_footer_admin');

function my_footer_shh() {
  remove_filter( 'update_footer', 'core_update_footer' );
}
add_action( 'admin_menu', 'my_footer_shh' );

// Add Menu link to customize

function menu_customize() {
  add_menu_page(
    'Personalizar',
    'Personalizar',
    'manage_options',
    'personalize',
    'link_to_customizer',
    'dashicons-admin-customizer',
    2 );
}

function link_to_customizer() {
  ?>
  <script type="text/javascript">
  jQuery(function($) {
    window.location.href = '<?php echo get_site_url().'/wp-admin/customize.php?return=%2FIntegrare%2FProgramacao%2FEssense2016%2FEssense%2Fwp-admin%2Fthemes.php'; ?>';
  });
  </script>
  <?php
}

add_action( 'admin_menu', 'menu_customize', 9999 );


// Change menu positions
  function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;

    return array(
        'index.php', // Dashboard
        'personalize',
        'separator1', // First separator
        'edit.php?post_type=bannerprincipal',      // Custom Post Type
        'edit.php?post_type=clientes',      // Custom Post Type
        'edit.php?post_type=depoimentos',    // Custom Post Type
        'conhecimento-sentimento',
        'separator2', // Second separator
        'edit.php', // Posts
        'edit.php?post_type=page', // Pages
        'edit-comments.php', // Comments
        'separator-last', // Last separator
        'upload.php', // Media
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');
//END Change menu positions

// Change Style Login Admin

function my_login_logo() { ?>
  <style type="text/css">
      #login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/admin/logo.png);
          padding-bottom: 30px;
          background-size: 280px;
          width: 280px;
      }
      #login form{
        background-color: rgba(255,255,255,0.5);
        -webkit-box-shadow: none;
        box-shadow: none;
      }
      .wp-core-ui .button-primary{
        background: #5951d2 !important;
        border-color: #5951d2 !important;
        box-shadow: none;
        text-shadow: none;
      }

      .wp-core-ui .button-secondary:focus, .wp-core-ui .button-secondary:hover, .wp-core-ui .button.focus, .wp-core-ui .button.hover, .wp-core-ui .button:focus, .wp-core-ui .button:hover{
        background-color: #98c21d;
        border-color: #98c21d;
      }
      body{
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/admin/bg.jpg) !important;
        background-position: center !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
      }
      #login #backtoblog a, .login #nav a, .login h1 a{
        color: #777;
      }
      #login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover{
        color: #5951d2 !important;
      }
      .login #login_error, .login .message{
        border-left: 4px solid #5951d2 !important;
      }
  </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'my_login_logo' );

// END Change Style Login Admin

 ?>
