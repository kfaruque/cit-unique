<?php


/*-------------------------------------------*/
/* Theme Scripts
/*-------------------------------------------*/

if( ! function_exists('unique_theme_scripts') ) {
    function unique_theme_scripts() {

        wp_enqueue_style(
            'bootstrap',
            get_template_directory_uri() . '/css/bootstrap.min.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_style(
            'font-awesome',
            get_template_directory_uri() . '/css/font-awesome.min.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_style(
            'swiper',
            get_template_directory_uri() . '/css/swiper.min.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_style(
            'owl.carousel',
            get_template_directory_uri() . '/css/owl.carousel.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_style(
            'nivo-lightbox',
            get_template_directory_uri() . '/css/nivo-lightbox.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_style(
            'default',
            get_template_directory_uri() . '/css/default.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_style(
            'animate',
            get_template_directory_uri() . '/css/animate.min.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_style(
            'style',
            get_template_directory_uri() . '/css/style.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_style(
            'responsive',
            get_template_directory_uri() . '/css/responsive.css',
            array(),
            '1.0.0',
            'all'
        );



        wp_enqueue_script( 'jquery' );

//        wp_enqueue_script(
//            'google-map',
//            '//maps.google.com/maps/api/js?sensor=true'
//        );
//
//        wp_enqueue_script(
//            'gmap',
//            get_template_directory_uri() . '/js/gmaps.min.js',
//            array(),
//            '1.0.0',
//            true
//        );

        wp_enqueue_script(
            'jquery-easing',
            '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'
        );

        wp_enqueue_script(
            'waypoints',
            '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'
        );

        wp_enqueue_script(
            'counterup',
            get_template_directory_uri() . '/js/jquery.counterup.min.js',
            array(),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'sticky',
            get_template_directory_uri() . '/js/jquery.sticky.js',
            array(),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'lightbox',
            get_template_directory_uri() . '/js/nivo-lightbox.min.js',
            array(),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'owlCarousel',
            get_template_directory_uri() . '/js/owl.carousel.min.js',
            array(),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'bootstrap',
            get_template_directory_uri() . '/js/bootstrap.min.js',
            array(),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'wow',
            get_template_directory_uri() . '/js/wow.min.js',
            array(),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'mixitup',
            get_template_directory_uri() . '/js/jquery.mixitup.min.js',
            array(),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'swiper',
            get_template_directory_uri() . '/js/swiper.min.js',
            array(),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'main',
            get_template_directory_uri() . '/js/main.js',
            array(),
            '1.0.0',
            true
        );

    }

    add_action( 'wp_enqueue_scripts', 'unique_theme_scripts' );
}


/*-------------------------*/
/* Theme Initialize
/*-------------------------*/
if( ! function_exists('unique_theme_initialize')) {
    add_action( 'after_setup_theme', 'unique_theme_initialize' );
    function unique_theme_initialize() {
        
        // Register menu
        register_nav_menus(array(
            'primary_menu' => __('Header Menu', 'cit-unique')
        ));
        
        // Theme Support
        add_theme_support('post-thumbnails');
        
    }
}



/*-------------------------*/
/* Slider Custom Post
/*-------------------------*/
function unique_slider_post() {
    
    $args = array(
        'public' => true,
        'label'  => __( 'Slider', 'cit-unique'),
        'menu_icon' => 'dashicons-welcome-view-site',
        'supports'  => array('title', 'editor', 'thumbnail')
    );
    
    register_post_type( 'unique-slider', $args );
}
add_action( 'init', 'unique_slider_post' );



/*-------------------------*/
/* Service Custom Post
/*-------------------------*/
function unique_service_post() {
    
    $args = array(
        'public' => true,
        'label'  => __( 'Service', 'cit-unique'),
        'menu_icon' => 'dashicons-image-filter',
        'supports'  => array('title', 'excerpt', 'custom-fields')
    );
    
    register_post_type( 'unique-service', $args );
}
add_action( 'init', 'unique_service_post' );


add_action( 'init', 'portfolio_custom_post_type' );
function portfolio_custom_post_type() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'portfolios', 'cit-unique' ),
		'singular_name'      => _x( 'Portfolio', 'portfolio', 'cit-unique' ),
		'menu_name'          => _x( 'Portfolios', 'Portfolios', 'cit-unique' ),
		'name_admin_bar'     => _x( 'Portfolio', 'Portfolio', 'cit-unique' ),
		'add_new'            => _x( 'Add New', 'portfolio', 'cit-unique' ),
		'add_new_item'       => __( 'Add New Portfolio', 'cit-unique' ),
		'new_item'           => __( 'New Portfolio', 'cit-unique' ),
		'edit_item'          => __( 'Edit Portfolio', 'cit-unique' ),
		'view_item'          => __( 'View Portfolio', 'cit-unique' ),
		'all_items'          => __( 'All Portfolios', 'cit-unique' ),
		'search_items'       => __( 'Search Portfolios', 'cit-unique' ),
		'not_found'          => __( 'No Portfolios found.', 'cit-unique' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'cit-unique' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'cit-unique' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-admin-appearance',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio-item' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'unique-portfolio', $args );
}



if(! function_exists('unique_portfolio_taxonomy')) {

add_action( 'init', 'unique_portfolio_taxonomy' );
    function unique_portfolio_taxonomy() {
        $labels = array(
            'name'              => _x( 'Portfolio Category', 'portfolio category', 'cit-unique' ),
            'singular_name'     => _x( 'Category', 'category', 'cit-unique' )
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'portfolio-cat' ),
        );

        register_taxonomy( 'portfolios_cat', array( 'unique-portfolio' ), $args );

    }
}