<?php
//Remove o que não será utilizado

// Criar campos para configuração

function customizer_essense_home( $wp_customize ) {


	//Remove o que não será utilizado
	//--menu
			remove_action( 'customize_controls_enqueue_scripts', array( $wp_customize->nav_menus, 'enqueue_scripts' ) );
			remove_action( 'customize_register', array( $wp_customize->nav_menus, 'customize_register' ), 11 );
			remove_filter( 'customize_dynamic_setting_args', array( $wp_customize->nav_menus, 'filter_dynamic_setting_args' ) );
			remove_filter( 'customize_dynamic_setting_class', array( $wp_customize->nav_menus, 'filter_dynamic_setting_class' ) );
			remove_action( 'customize_controls_print_footer_scripts', array( $wp_customize->nav_menus, 'print_templates' ) );
			remove_action( 'customize_controls_print_footer_scripts', array( $wp_customize->nav_menus, 'available_items_template' ) );
			remove_action( 'customize_preview_init', array( $wp_customize->nav_menus, 'customize_preview_init' ) );
	//--themes e static front page
			$wp_customize->remove_section('themes');
			$wp_customize->remove_section( 'static_front_page' );



	// Section Conteudo Home

	$wp_customize->add_section( 'section_titulo', array(
			'title' => __( 'Texto Inicial', 'twentysixteen' ),
			'priority' => 1,
			'description' => 'Configurações do conteúdo da páginal inicial. ',
			// 'panel' => 'panel_1',
	) );

	// -- Setting  Titulo Pricipal

	$wp_customize->add_setting( 'titulo', array(
		'default' => 'Título Principal',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'titulo', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_titulo',
			'settings' => 'titulo',
			'label' => __( '', 'twentysixteen' ),
			'description' => 'Caso queira trocar as fotos do banner <br/> <a href="#">Clique Aqui.</a>',
	) );
	// -- Setting Serviços Titulo END

	// Section Conteudo Home END

	// Section Publico Home

	$wp_customize->add_section( 'section_publico', array(
			'title' => __( 'Público', 'twentysixteen' ),
			'priority' => 1,
			'description' => 'Configurações do conteúdo da páginal inicial. ',
			// 'panel' => 'panel_1',
	) );

// // ---------------
// 	$wp_customize->add_setting( 'publico_texto_ini', array(
// 		'default' => 'Texto Inicial',
// 		'type' => 'theme_mod',
// 		'capability' => 'edit_theme_options',
// 		'transport' => 'refresh',
// 		//'sanitize_callback' => 'esc_url',
// 	) );
//
// 	$wp_customize->add_control( 'publico_texto_ini', array(
// 			'type' => 'text',
// 			'priority' => 10,
// 			'section' => 'section_publico',
// 			'settings' => 'publico_texto_ini',
// 			'label' => __( 'Texto Inicial', 'twentysixteen' ),
// 			'description' => '',
// 	) );
// // ----------------

// ---------------
	$wp_customize->add_setting( 'publico_texto1', array(
		'default' => 'Público 1',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'publico_texto1', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_publico',
			'settings' => 'publico_texto1',
			'label' => __( 'Texto 1', 'twentysixteen' ),
			'description' => '',
	) );
// ----------------

// ---------------
	$wp_customize->add_setting( 'publico_img1', array(
		'default' => 'Imagem 1',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control(
	       new WP_Customize_Image_Control(
	           $wp_customize,
	           'publico_img1',
	           array(
	               'label'      => __( 'Imagem 1', 'theme_name' ),
	               'section'    => 'section_publico',
	               'settings'   => 'publico_img1'
	              //  'context'    => 'your_setting_context'
	           )
	       )
	   );
// ----------------

// ---------------
	$wp_customize->add_setting( 'publico_texto2', array(
		'default' => 'Público 2',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'publico_texto2', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_publico',
			'settings' => 'publico_texto2',
			'label' => __( 'Texto 2', 'twentysixteen' ),
			'description' => '',
	) );
// ----------------

// ---------------
	$wp_customize->add_setting( 'publico_img2', array(
		'default' => 'Imagem 2',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control(
	       new WP_Customize_Image_Control(
	           $wp_customize,
	           'publico_img2',
	           array(
	               'label'      => __( 'Imagem 2', 'theme_name' ),
	               'section'    => 'section_publico',
	               'settings'   => 'publico_img2'
	              //  'context'    => 'your_setting_context'
	           )
	       )
	   );
// ----------------

// ---------------
	$wp_customize->add_setting( 'publico_texto3', array(
		'default' => 'Público 3',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'publico_texto3', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_publico',
			'settings' => 'publico_texto3',
			'label' => __( 'Texto 3', 'twentysixteen' ),
			'description' => '',
	) );
// ----------------

// ---------------
	$wp_customize->add_setting( 'publico_img3', array(
		'default' => 'Imagem 3',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control(
	       new WP_Customize_Image_Control(
	           $wp_customize,
	           'publico_img3',
	           array(
	               'label'      => __( 'Imagem 3', 'theme_name' ),
	               'section'    => 'section_publico',
	               'settings'   => 'publico_img3'
	              //  'context'    => 'your_setting_context'
	           )
	       )
	   );
// ----------------
	// Section Publico Home END

	// Section Serviços Home

	$wp_customize->add_section( 'section_servicos', array(
			'title' => __( 'Serviços', 'twentysixteen' ),
			'priority' => 1,
			'description' => 'Configurações do conteúdo da páginal inicial. ',
			// 'panel' => 'panel_1',
	) );

// ---------------
	$wp_customize->add_setting( 'servicos_texto_ini', array(
		'default' => 'Texto Inicial',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'servicos_texto_ini', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_servicos',
			'settings' => 'servicos_texto_ini',
			'label' => __( 'Texto Inicial', 'twentysixteen' ),
			'description' => '',
	) );
// ----------------

// ---------------
	$wp_customize->add_setting( 'servicos_texto1', array(
		'default' => 'Serviços 1',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'servicos_texto1', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_servicos',
			'settings' => 'servicos_texto1',
			'label' => __( 'Texto 1', 'twentysixteen' ),
			'description' => '',
	) );
// ----------------

// ---------------
	$wp_customize->add_setting( 'servicos_img1', array(
		'default' => 'Imagem 1',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control(
	       new WP_Customize_Image_Control(
	           $wp_customize,
	           'servicos_img1',
	           array(
	               'label'      => __( 'Imagem 1', 'theme_name' ),
	               'section'    => 'section_servicos',
	               'settings'   => 'servicos_img1'
	              //  'context'    => 'your_setting_context'
	           )
	       )
	   );
// ----------------

// ---------------
	$wp_customize->add_setting( 'servicos_texto2', array(
		'default' => 'Serviços 2',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'servicos_texto2', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_servicos',
			'settings' => 'servicos_texto2',
			'label' => __( 'Texto 2', 'twentysixteen' ),
			'description' => '',
	) );
// ----------------

// ---------------
	$wp_customize->add_setting( 'servicos_img2', array(
		'default' => 'Imagem 2',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control(
	       new WP_Customize_Image_Control(
	           $wp_customize,
	           'servicos_img2',
	           array(
	               'label'      => __( 'Imagem 2', 'theme_name' ),
	               'section'    => 'section_servicos',
	               'settings'   => 'servicos_img2'
	              //  'context'    => 'your_setting_context'
	           )
	       )
	   );
// ----------------

// ---------------
	$wp_customize->add_setting( 'servicos_texto3', array(
		'default' => 'Seriviços 3',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'servicos_texto3', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_servicos',
			'settings' => 'servicos_texto3',
			'label' => __( 'Texto 3', 'twentysixteen' ),
			'description' => '',
	) );
// ----------------

// ---------------
	$wp_customize->add_setting( 'servicos_img3', array(
		'default' => 'Imagem 3',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control(
	       new WP_Customize_Image_Control(
	           $wp_customize,
	           'servicos_img3',
	           array(
	               'label'      => __( 'Imagem 3', 'theme_name' ),
	               'section'    => 'section_servicos',
	               'settings'   => 'servicos_img3'
	              //  'context'    => 'your_setting_context'
	           )
	       )
	   );
// ----------------
	// Section Publico Home END

	// Section Sobre Home

	$wp_customize->add_section( 'section_sobre', array(
			'title' => __( 'Sobre', 'twentysixteen' ),
			'priority' => 1,
			'description' => 'Configurações do conteúdo da páginal inicial. ',
			// 'panel' => 'panel_1',
	) );

// ---------------
	$wp_customize->add_setting( 'sobre_texto', array(
		'default' => 'Sobre texto',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'sobre_texto', array(
			'type' => 'textarea',
			'priority' => 10,
			'section' => 'section_sobre',
			'settings' => 'sobre_texto',
			'label' => __( 'Texto 1', 'twentysixteen' ),
			'description' => '',
	) );
// ----------------

// ---------------
	$wp_customize->add_setting( 'sobre_img1', array(
		'default' => 'Imagem 1',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control(
	       new WP_Customize_Image_Control(
	           $wp_customize,
	           'sobre_img1',
	           array(
	               'label'      => __( 'Imagem 1', 'theme_name' ),
	               'section'    => 'section_sobre',
	               'settings'   => 'sobre_img1'
	              //  'context'    => 'your_setting_context'
	           )
	       )
	   );
// ----------------
	// Section Publico Home END

	// Panel Contato

	$wp_customize->add_panel('panel_contato', array(
		'title' => __('Contato','twentysixteen'),
		'priority' => 10,
	));

	//-- Section Email NewsLetter

	$wp_customize->add_section('section_newsletter', array(
		'title' => __('Email para NewsLetter', 'twentysixteen'),
		'panel' => 'panel_contato',
		'priority' => 10,
	));
	//-- Section Email NewsLetter END

	//-- Setting Email NewsLetter
	$wp_customize->add_setting('newsltter_email', array(
		'default' => 'exemplo@essense.com.br',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	));

	$wp_customize->add_control( 'newsltter_email', array(
	    'type' => 'email',
	    'priority' => 10,
	    'section' => 'section_newsletter',
			'settings' => 'newsltter_email',
	    'label' => '',
	    'description' => '',
	) );

	//-- Setting Email NewsLetter END

	//-- Section Endereço
	$wp_customize->add_section('section_endereco', array(
		'title' => __('Endereço', 'twentysixteen'),
		'panel' => 'panel_contato',
		'priority' => 10,
	));

	//-- Telefone
	$wp_customize->add_setting('endereco_telefone', array(
		'default' => '+55 (11) 4444-4444',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	));

	$wp_customize->add_control( 'endereco_telefone', array(
	    'type' => 'number',
	    'priority' => 10,
	    'section' => 'section_endereco',
			'settings' => 'endereco_telefone',
	    'label' => __( 'Telefone', 'twentysixteen' ),
	    'description' => '',
	) );
	//-- Telefone END

	//-- Rua
	$wp_customize->add_setting('endereco_rua', array(
		'default' => 'Rua.,111,Bairro',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	));

	$wp_customize->add_control( 'endereco_rua', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_endereco',
			'settings' => 'endereco_rua',
	    'label' => __( 'Rua,nº,Bairro', 'twentysixteen' ),
	    'description' => '',
	) );
	//-- Rua END

	//-- País
	$wp_customize->add_setting('endereco_pais', array(
		'default' => 'Brasil',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	));

	$wp_customize->add_control( 'endereco_pais', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_endereco',
			'settings' => 'endereco_pais',
	    'label' => __( 'País', 'twentysixteen' ),
	    'description' => '',
	) );
	//-- País END

	//-- Section Endereço END

	//-- Section Redes Sociais
	$wp_customize->add_section('section_redessociais', array(
		'title' => __('Redes Sociais', 'twentysixteen'),
		'panel' => 'panel_contato',
		'priority' => 10,
	));

	//-- Facebook
	$wp_customize->add_setting('redessociais_facebook', array(
		'default' => 'Facebook',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	));

	$wp_customize->add_control( 'redessociais_facebook', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_redessociais',
			'settings' => 'redessociais_facebook',
			'label' => __( 'Facebook', 'twentysixteen' ),
			'description' => '',
	) );
	//-- Facebook END

	//-- Instagram
	$wp_customize->add_setting('redessociais_instagram', array(
		'default' => 'Instagram',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	));

	$wp_customize->add_control( 'redessociais_instagram', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_redessociais',
			'settings' => 'redessociais_instagram',
			'label' => __( 'Instagram', 'twentysixteen' ),
			'description' => '',
	) );
	//-- Instagram END

	//-- Linkedin
	$wp_customize->add_setting('redessociais_linkedin', array(
		'default' => 'Linkedin',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	));

	$wp_customize->add_control( 'redessociais_linkedin', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'section_redessociais',
			'settings' => 'redessociais_linkedin',
			'label' => __( 'Linkedin', 'twentysixteen' ),
			'description' => '',
	) );
	//-- Linkedin END

	//-- Section Redes Sociais END




	// Panel Contato END
}
add_action( 'customize_register', 'customizer_essense_home' );



 ?>
