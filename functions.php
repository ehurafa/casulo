<?php

	/**
	 * @version	   1.0
	 * @author	   VitaminaWeb
	 * Front-end / Back-end @ehurafa
	 */


	// Remove a versão do WordPress do cabeçalho
	remove_action('wp_head', 'wp_generator');


	// Estilos e scripts
	function casulo_enqueue_scripts () {
		// Versão 
		$casulo_version = '1.0';		
		

		// bootstrap.css
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $casulo_version, 'all' );
		
		// light galerry portfolio
		wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/lightGallery.css', array(), $casulo_version, 'all' );

		// style.css
		wp_enqueue_style( 'casulo-style-description', get_stylesheet_uri(), array(), $casulo_version, 'all' );

		// responsive.css
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), $casulo_version, 'all' );
		
		
	
		// scripts
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.1.11.1.min.js', array(), $casulo_version, true );

		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), $casulo_version,  true );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), $casulo_version, true );
		
		// galeria portfolio
		wp_enqueue_script( 'lightGallery', get_template_directory_uri() . '/js/lightGallery.js', array(), $casulo_version, true );
		
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), $casulo_version,  true );
		
		

		
	}
	// Carrega os estilos e scripts
	add_action( 'wp_enqueue_scripts', 'casulo_enqueue_scripts' );




	// widgets
	function casulo_sidebars()	{
		// slider principal
		register_sidebar( array(
			'name'          => 'slider-home',
			'id'            => 'sidebar-home',
			'description'   => 'Banner principal da HOME',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="sidebar-widget-title">',
			'after_title'   => '</h4>',
		) );
		
		// carrossel clientes
		register_sidebar( array(
			'name'          => 'carrossel-clientes',
			'id'            => 'carrossel-clientes',
			'description'   => 'Carrossel com os clientes',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="sidebar-widget-title">',
			'after_title'   => '</h4>',
		) );
		
		// menu topo left
		register_sidebar( array(
			'name'          => 'Menu topo esquerdo',
			'id'            => 'menu-top-left',
			'description'   => 'Menu do topo',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="sidebar-widget-title">',
			'after_title'   => '</h4>',
		) );
		
		// menu topo right
		register_sidebar( array(
			'name'          => 'Menu topo direito',
			'id'            => 'menu-top-right',
			'description'   => 'Menu do topo',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="sidebar-widget-title">',
			'after_title'   => '</h4>',
		) );
		
		// telefone
		register_sidebar( array(
			'name'          => 'Telefone',
			'id'            => 'telefone',
			'description'   => 'Inserir o telefone',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="sidebar-widget-title">',
			'after_title'   => '</h4>',
		) );
		
		// barra submenu
		register_sidebar( array(
			'name'          => 'Barra submenu',
			'id'            => 'barra-submenu',
			'description'   => 'Barra submenu',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="sidebar-widget-title">',
			'after_title'   => '</h4>',
		) );
	
	}
	add_action( 'widgets_init', 'casulo_sidebars' );
	
	
	// Configurações do tema
	function casulo_setup() {		
		// Ativa o feed
		add_theme_support( 'automatic-feed-links' );
		
		// Ativa imagens destacadas
		add_theme_support( 'post-thumbnails' );
		
		// Ativa posts-formats
		add_theme_support( 'post-formats', array( 'audio', 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
		
		// Adiciona tamanhos de imagens customizados
		add_image_size( 'tutsup-small', 430, 286, true );
		add_image_size( 'tutsup-large', 1140, 1140, false );
		add_image_size( 'tutsup-thumbnails', 200, 133, true );
	 
		// Registra um menu
		register_nav_menus( array(
			'menu-principal1' => 'Menu principal 1',
		) );
		
		register_nav_menus( array(
			'menu-principal2' => 'Menu principal 2',
		) );
		
		register_nav_menus( array(
			'barra-submenu' => 'Barra Submenu',
		) );
	}
	add_action( 'after_setup_theme', 'casulo_setup' );
	
	
	// Força o wordpress a ler shortcodes em textos de widgets
	add_filter('widget_text', 'do_shortcode');
	
	
	function new_excerpt_more( $more ) {
	return '... [ <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Saiba mais', 'casulo') . '</a> ] ';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );
	
	
	// Inicio portfolio
	
	// Register "Portfolio Item" Custom Post Type
	function portfolio_item_post_type() {

		$labels = array(
			'name'               => 'Peças do Portfolio',
			'singular_name'      => 'Peça do Portfolio',
			'menu_name'          => 'Portfolio',
			'name_admin_bar'     => 'Portfolio',
			'add_new'            => 'Adicionar Nova',
			'add_new_item'       => 'Adicionar Nova Peça',
			'new_item'           => 'Nova Peça',
			'edit_item'          => 'Editar Peça',
			'view_item'          => 'Visualizar Peça',
			'all_items'          => 'Todos as Peças',
			'search_items'       => 'Buscar Peças',
			'parent_item_colon'  => 'Peças Pai:',
			'not_found'          => 'Nenhuma peça encontrada.',
			'not_found_in_trash' => 'Nenhuma peça encontrada na lixeira.'
		);

		$args = array(
			'description'         => 'Peças',
			'labels'              => $labels,
			'supports'            => array( 'title',  'thumbnail' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'			  => 'dashicons-portfolio',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => array( 'slug' => 'peca', 'with_front' => false ),
			'capability_type'     => 'post'
		);

		register_post_type( 'portfolio-item', $args );

	}
	
	

	// Hook into the 'init' action
	add_action( 'init', 'portfolio_item_post_type', 0 );
	
	
	function on_transitioning_post_status( $new_status, $old_status, $post ) {
		
	  if ( ( $old_status == 'new' || $old_status == 'draft' || $old_status == 'auto-draft' || $old_status == 'pending' ) && $new_status == 'publish' ) { 

		  if ( 'portfolio-item' == get_post_type($post) ) {

			  $count_portfolio_item = wp_count_posts( 'portfolio-item' );

			  if( $count_portfolio_item->publish == 57 ) {

				$oldest = get_posts( array( 'posts_per_page' 	=> 1, 
																		'orderby'      		=> 'date', 
																		'order'         	=> 'ASC',
																		'post_type'       => 'portfolio-item',
																		'post_status'    	=> 'publish' ) );

				$oldest = $oldest[0];

				wp_update_post( array( 'ID' 					=> $oldest->ID,
															 'post_status' 	=> 'draft' ) );

			  }

		  }

		}

	}
	add_action( 'transition_post_status', 'on_transitioning_post_status', 10, 3 );
	
	// fim portfolio
	
	
	// Inicio clientes
	
	// Register "Clientes Item" Custom Post Type
	function cliente_item_post_type() {

		$labels = array(
			'name'               => 'Clientes',
			'singular_name'      => 'Cliente',
			'menu_name'          => 'Clientes',
			'name_admin_bar'     => 'Clientes',
			'add_new'            => 'Adicionar Novo',
			'add_new_item'       => 'Adicionar Novo Cliente',
			'new_item'           => 'Novo cliente',
			'edit_item'          => 'Editar Peça',
			'view_item'          => 'Visualizar cliente',
			'all_items'          => 'Todos os Clientes',
			'search_items'       => 'Buscar clientes',
			'parent_item_colon'  => 'Peças Pai:',
			'not_found'          => 'Nenhum cliente encontrado.',
			'not_found_in_trash' => 'Nenhum cliente encontrado na lixeira.'
		);

		$args = array(
			'description'         => 'Clientes',
			'labels'              => $labels,
			'supports'            => array( 'title', 'thumbnail' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'			  => 'dashicons-portfolio',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => array( 'slug' => 'cliente', 'with_front' => false ),
			'capability_type'     => 'post'
		);

		register_post_type( 'Cliente-item', $args );

	}
	


	// Hook into the 'init' action
	add_action( 'init', 'cliente_item_post_type', 0 );
	
	
	function on_transitioning_post_status2( $new_status, $old_status, $post ) {
		
	  if ( ( $old_status == 'new' || $old_status == 'draft' || $old_status == 'auto-draft' || $old_status == 'pending' ) && $new_status == 'publish' ) { 

		  if ( 'cliente-item' == get_post_type($post) ) {

			  $count_portfolio_item = wp_count_posts( 'cliente-item' );

			  if( $count_portfolio_item->publish == 57 ) {

				$oldest = get_posts( array( 'posts_per_page' 	=> 1, 
																		'orderby'      		=> 'date', 
																		'order'         	=> 'ASC',
																		'post_type'       => 'cliente-item',
																		'post_status'    	=> 'publish' ) );

				$oldest = $oldest[0];

				wp_update_post( array( 'ID' 					=> $oldest->ID,
															 'post_status' 	=> 'draft' ) );

			  }

		  }

		}

	}
	add_action( 'transition_post_status', 'on_transitioning_post_status2', 10, 3 );
	
	// fim clientes
 
?>