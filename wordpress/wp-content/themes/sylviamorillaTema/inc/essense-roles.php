<?php
// Criar permisões para usuários
  //Add Editor Caps
   add_action('admin_init','add_editor_caps',999);
    function add_editor_caps() {

    // Add the roles you'd like to administer the custom post types
    $roles = array('editor');

    // Loop through each role and assign capabilities
    foreach($roles as $the_role) {

               $role = get_role($the_role);

               $role->add_cap('list_users');
               $role->add_cap('promote_users');
               $role->add_cap('remove_users');
               $role->remove_cap('export');
               $role->add_cap('edit_theme_options');
               $role->remove_cap('update_core');
              //  $role->add_cap('list_users');

               $role->add_cap('read');
               $role->add_cap('publish_pages');
               $role->remove_cap('edit_pages');
               $role->add_cap('update_core');
               $role->add_cap('manage_options');
               $role->add_cap('manage_categories');
               $role->add_cap('moderate_comments');
               $role->add_cap('edit_files');
               $role->add_cap('upload_files');

               $role->add_cap( 'read_post');
               $role->add_cap( 'read_private_posts' );
               $role->add_cap( 'edit_post' );
               $role->add_cap( 'edit_posts' );
               $role->add_cap( 'edit_others_posts' );
               $role->add_cap( 'edit_published_posts' );
               $role->add_cap( 'publish_posts' );
               $role->add_cap( 'delete_others_posts' );
               $role->add_cap( 'delete_private_posts' );
               $role->add_cap( 'delete_published_posts' );
    }
  }



//Add Author Caps
 add_action('admin_init','add_author_caps',999);
  function add_author_caps() {

  // Add the roles you'd like to administer the custom post types
  $roles = array('author');

  // Loop through each role and assign capabilities
  foreach($roles as $the_role) {

             $role = get_role($the_role);

             $role->remove_cap('list_users');
             $role->remove_cap('promote_users');
             $role->remove_cap('remove_users');
             $role->remove_cap('export');
             $role->remove_cap('update_core');
            //  $role->add_cap('list_users');

             $role->add_cap('read');
             $role->add_cap('publish_pages');
             $role->remove_cap('edit_pages');
             $role->add_cap('update_core');
             $role->remove_cap('manage_options');
             $role->add_cap('manage_categories');
             $role->add_cap('moderate_comments');
             $role->add_cap('edit_files');
             $role->add_cap('upload_files');

             $role->add_cap( 'read_post');
             $role->add_cap( 'read_private_posts' );
             $role->add_cap( 'edit_post' );
             $role->add_cap( 'edit_posts' );
             $role->add_cap( 'edit_others_posts' );
             $role->add_cap( 'edit_published_posts' );
             $role->add_cap( 'publish_posts' );
             $role->add_cap( 'delete_others_posts' );
             $role->add_cap( 'delete_private_posts' );
             $role->add_cap( 'delete_published_posts' );
  }
}


// END Criar permisões para usuários


//remover opções de configurações no Menu
function remove_menus(){

  $user = wp_get_current_user();
  if ( ! $user->has_cap( 'export' ) ) {
    remove_menu_page( 'options-general.php' );
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'update-core.php' );
    remove_menu_page( 'wpcf7' );
    remove_menu_page( 'themes.php' );
    // remove_menu_page( 'gadash_settings');
    remove_submenu_page( 'index.php', 'update-core.php' );
  }

}
add_action( 'admin_menu', 'remove_menus' );


 ?>
