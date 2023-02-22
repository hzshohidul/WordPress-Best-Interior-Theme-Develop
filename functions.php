<?php
	function architect_css_js_link(){
		wp_enqueue_style('architect-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
		wp_enqueue_style('architect-owl-carousel', get_template_directory_uri().'/css/font-awesome.css');
		wp_enqueue_style('architect-fontawesome', get_template_directory_uri().'/css/owl.carousel.css');
		wp_enqueue_style('architect-lightbox', get_template_directory_uri().'/css/lightbox.min.css');
		wp_enqueue_style('architect-settings', get_template_directory_uri().'/rs-plugin/css/settings.css');
		wp_enqueue_style('architect-style', get_template_directory_uri().'/css/style.css');
		wp_enqueue_style('architect-responsive', get_template_directory_uri().'/css/responsive.css');
		wp_enqueue_style('main-css', get_stylesheet_uri());
		
		
		wp_enqueue_script('ajs-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'',true);
		wp_enqueue_script('ajs-themepunch', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'),'',true);
		wp_enqueue_script('ajs-themepunch-revolution', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'),'',true);
		wp_enqueue_script('ajs-owl-carousel', get_template_directory_uri().'/js/owl.carousel.js', array('jquery'),'',true);
		wp_enqueue_script('ajs-lightbox', get_template_directory_uri().'/js/lightbox.min.js', array('jquery'),'',true);
		wp_enqueue_script('ajs-counter', get_template_directory_uri().'/js/counter.js', array('jquery'),'',true);
		wp_enqueue_script('ajs-script', get_template_directory_uri().'/js/script.js', array('jquery'),'',true);

	}
	add_action('wp_enqueue_scripts','architect_css_js_link');


	function amader_architect_theme(){
		add_theme_support('title-tag');
		add_theme_support('custom-header');
		add_theme_support('custom-background');
		add_theme_support('menus');
		add_theme_support('post-thumbnails');
		
		load_theme_textdomain('architectwp', get_template_directory(). '/languages');
		
		
		register_nav_menus(array(
			'top-menu'		=> __('Top Menu','architectwp'),
			'footer-menu'	=> __('Footer Menu','architectwp'),
		));
		
		
		register_post_type('slides',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'author', 'thumbnail' ),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-images-alt2',
			
			'labels'	=> array(
				'menu_name'		=> __('Slides','architectwp'),
				'all_items'		=> __('All Slides','architectwp'),
				'add_new'		=> __('Add New slide','architectwp'),
				'add_new_item'	=> __('Slide Title','architectwp'),
			),
		));
		register_post_type('serviceicon',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'author', 'thumbnail' ),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-welcome-add-page',
			
			'labels'	=> array(
				'menu_name'		=> __('Some Icon','architectwp'),
				'all_items'		=> __('All Icon','architectwp'),
				'add_new'		=> __('Add New Icon','architectwp'),
				'add_new_item'	=> __('Icon Title','architectwp'),
			),
		));
		
		
		register_post_type('homeabout',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'thumbnail',),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-text-page',
			
			'labels'	=> array(
				'menu_name'		=> __('About Homeside','architectwp'),
			),
		));
		
		register_post_type('aboutus',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'thumbnail',),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-text-page',
			
			'labels'	=> array(
				'menu_name'		=> __('About Us','architectwp'),
			),
		));
		
		
		register_post_type('service',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'thumbnail'),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-admin-multisite',
			
			'labels'	=> array(
				'menu_name'		=> __('Our Service','architectwp'),
				'all_items'		=> __('All Service','architectwp'),
				'add_new'		=> __('Add New Service','architectwp'),
				'add_new_item'	=> __('Service Name','architectwp'),
			),
		));
		register_taxonomy('port-type','service',array(
			'public'		=> true,
			'label'			=> __('Catagory','architectwp'),
			'hierarchical' => true,
			'show_admin_column' => true,
		));
		//-----------Service End---------------------
		
		register_post_type('ourproject',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-schedule',
			
			'labels'	=> array(
				'menu_name'		=> __('Our Project','architectwp'),
				'all_items'		=> __('All Project','architectwp'),
				'add_new'		=> __('Add Project','architectwp'),
				'add_new_item'	=> __('Add New Project','architectwp'),
			),
		));
		
		register_taxonomy('port-type','ourproject',array(
			'public'		=> true,
			'label'			=> __('Catagory','architectwp'),
			'hierarchical' => true,
			'show_admin_column' => true,
		));
		
		//-----------Our Project End---------------------
		
		register_post_type('gallery',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-format-gallery',
			
			'labels'	=> array(
				'menu_name'		=> __('Gallery','architectwp'),
				'all_items'		=> __('All Gallery','architectwp'),
				'add_new'		=> __('Add Gallery','architectwp'),
				'add_new_item'	=> __('Add New Gallery','architectwp'),
			),
		));
		
		register_taxonomy('port-type','gallery',array(
			'public'		=> true,
			'label'			=> __('Catagory','architectwp'),
			'hierarchical' => true,
			'show_admin_column' => true,
		));
		
		//-----------gallery End---------------------
		
		register_post_type('students',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-welcome-learn-more',
			
			'labels'	=> array(
				'menu_name'		=> __('Students','architectwp'),
				'all_items'		=> __('All Students','architectwp'),
				'add_new'		=> __('Add New Student','architectwp'),
				'add_new_item'	=> __('Students Name','architectwp'),
			),
		));
		//---------students end------------
		
		register_post_type('teammember',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor','thumbnail' ),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-businessman',
			
			'labels'	=> array(
				'menu_name'		=> __('Our Team','architectwp'),
				'all_items'		=> __('All Team Member','architectwp'),
				'add_new'		=> __('Add New Member','architectwp'),
				'add_new_item'	=> __('Member Name','architectwp'),
			),
		));
		//---------team member end------------
		register_post_type('member',array(
			'public'		=> true,
			'supports'		=>  array( 'title', 'editor', 'author', 'thumbnail' ),
			'menu_position'	=> 10,
			'menu_icon'		=> 'dashicons-buddicons-buddypress-logo',
			
			'labels'	=> array(
				'menu_name'		=> __('FOUNDER & CEO','architectwp'),
				'all_items'		=> __('All Member','architectwp'),
				'add_new'		=> __('Add New Member','architectwp'),
				'add_new_item'	=> __('Member Name','architectwp'),
			),
		));
		
		//-----------FOUNDER & CEO End---------------------

		flush_rewrite_rules();
	}
	add_action('after_setup_theme','amader_architect_theme');

	//==========Function End==================

	function amra_widget_reg_korbo(){
		register_sidebar(array(
			'name'		=> __('Footer One','architectwp'),
			'id'		=> 'footerone',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',
		));
		register_sidebar(array(
			'name'		    => __('Footer Two','architectwp'),
			'id'		    => 'footertwo',
			'before_widget'	=> '<ul class="instragram">',
			'after_widget'	=> '</ul>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',
		));
	}
	add_action('widgets_init','amra_widget_reg_korbo');
	
	//==========Function End==================
	
	
	
	
	
	require_once('inc/CMB2/init.php');
	require_once('inc/CMB2/config.php');
	require_once('inc/THEME-OPTION/ReduxCore/framework.php');
	require_once('inc/THEME-OPTION/sample/config.php');
	
?>