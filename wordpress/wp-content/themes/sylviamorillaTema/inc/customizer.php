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

	$wp_customize->add_section( 'section_conteudo', array(
		  'title' => __( 'Conteúdo Página Inicial', 'twentysixteen' ),
	    'priority' => 1,
	    'description' => 'Configurações do conteúdo da páginal inicial',
	    // 'panel' => 'panel_1',
	) );

	// -- Setting Video Home
	$wp_customize->add_setting( 'url_video_home', array(
		'default' => 'http://www.youtube.com.br/exemple',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_video_home', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'section_conteudo',
			'settings' => 'url_video_home',
	    'label' => __( 'URL Video Página Inicial', 'twentysixteen' ),
	    'description' => __( 'ex.: http://www.youtube.com.br/XXXXXX', 'twentysixteen' ),
	) );

	// -- Setting Video Home END

	// -- Setting Serviços Titulo

	$wp_customize->add_setting( 'servicos_titulo', array(
		'default' => 'Serviços: Título',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'servicos_titulo', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_conteudo',
			'settings' => 'servicos_titulo',
	    'label' => __( 'Título em Serviços', 'twentysixteen' ),
	    'description' => '',
	) );
	// -- Setting Serviços Titulo END

	// -- Setting Clientes Titulo

	$wp_customize->add_setting( 'clientes_titulo', array(
		'default' => 'Clientes: Título',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'clientes_titulo', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_conteudo',
			'settings' => 'clientes_titulo',
	    'label' => __( 'Título em Clientes', 'twentysixteen' ),
	    'description' => '',
	) );
	// -- Setting Clientes Titulo END

	// -- Setting Quem Somos Titulo
	$wp_customize->add_setting( 'quemsomos_titulo', array(
		'default' => 'Titulo',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'quemsomos_titulo', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_conteudo',
			'settings' => 'quemsomos_titulo',
	    'label' => __( 'Título em Quem Somos', 'twentysixteen' ),
	    'description' => '',
	) );
	// -- Setting Quem Somos Titulo END

	// -- Setting Quem Somos Coluna 1 Titulo
	$wp_customize->add_setting( 'quemsomos_col1_titulo', array(
		'default' => 'Quem Somos: Coluna 1',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'quemsomos_col1_titulo', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_conteudo',
			'settings' => 'quemsomos_col1_titulo',
	    'label' => __( 'Quem Somos: Coluna 1', 'twentysixteen' ),
	    'description' => '',
	) );
	// -- Setting Quem Somos Coluna 1 Titulo END

	// -- Setting Quem Somos Coluna 1 Texto
	$wp_customize->add_setting( 'quemsomos_col1_texto', array(
		'default' => 'Quem Somos: Texto',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'quemsomos_col1_texto', array(
	    'type' => 'textarea',
	    'priority' => 10,
	    'section' => 'section_conteudo',
			'settings' => 'quemsomos_col1_texto',
	    'label' => '',
	    'description' => '',
	) );
	// -- Setting Quem Somos Coluna 1 Texto END

	// -- Setting Quem Somos Coluna 2 Titulo
	$wp_customize->add_setting( 'quemsomos_col2_titulo', array(
		'default' => 'Quem Somos: Coluna 2',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'quemsomos_col2_titulo', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_conteudo',
			'settings' => 'quemsomos_col2_titulo',
	    'label' => __( 'Quem Somos: Coluna 2', 'twentysixteen' ),
	    'description' => '',
	) );
	// -- Setting Quem Somos Coluna 2 Titulo END

	// -- Setting Quem Somos Coluna 2 Texto
	$wp_customize->add_setting( 'quemsomos_col2_texto', array(
		'default' => 'Quem Somos: Texto',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		//'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'quemsomos_col2_texto', array(
	    'type' => 'textarea',
	    'priority' => 10,
	    'section' => 'section_conteudo',
			'settings' => 'quemsomos_col2_texto',
	    'label' => '',
	    'description' => '',
	) );
	// -- Setting Quem Somos Coluna 1 Texto END

	// Section Conteudo Home END


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
	//-- Section Email NewsLetter END

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
