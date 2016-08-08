<?php

//USERS
add_action( 'cmb2_init', 'cmb2_user_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_user_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_user_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => $prefix.'post_relacioandos',
        'title'         => __( 'Fotos', 'cmb2' ),
        'object_types'  => array( 'user'), // Post type
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Add new fields
    $cmb->add_field( array(
        'name'    => __( 'Cargo' ),
        'desc'    => '',
        'id'      => $prefix.'cargo',
        'type'    => 'text',
        // Optionally hide the text input for the url:
        'options' => array(
            'url' => false,
        ),
    ) );
    $cmb->add_field( array(
        'name'    => __( 'Foto Preto e Branco' ),
        'desc'    => '',
        'id'      => $prefix.'foto_pb',
        'type'    => 'file',
        // Optionally hide the text input for the url:
        'options' => array(
            'url' => false,
        ),
    ) );
    $cmb->add_field( array(
        'name'    => __( 'Foto Colorida' ),
        'desc'    => '',
        'id'      => $prefix.'foto_colorida',
        'type'    => 'file',
        // Optionally hide the text input for the url:
        'options' => array(
            'url' => false,
        ),
    ) );
    // Add other metaboxes as needed

}

function modify_user_contact_methods( $user_contact ) {

	// Add user contact methods
	$user_contact['LinkedIn']   = __( 'LinkedIn'   );

	// Remove user contact methods
	unset( $user_contact['site']    );

	return $user_contact;
}
add_filter( 'user_contactmethods', 'modify_user_contact_methods' );


if( ! function_exists('show_avatars') ) {
	add_filter('pre_option_show_avatars', 'override_show_avatars');
	function override_show_avatars() {
		global $current_user;

		// if (current_user_can('administrator')) {
		// return false;
		// }
		return $current_user->show_avatars;
	}
}


//USERS END

?>
