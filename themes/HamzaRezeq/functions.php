<?php

function rond_load_header(){
	$version='1.0.0';
	wp_enqueue_style('customstyle1', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $version, 'all');
	wp_enqueue_style('customstyle2', get_template_directory_uri() . '/css/bootstrap-rtl.min.css', array(), $version, 'all');
	wp_enqueue_style('customstyle3', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), $version, 'all');
	wp_enqueue_style('customstyle4', get_template_directory_uri() . '/css/style.css', array(), $version, 'all');
	
	wp_enqueue_script('customscript1', get_template_directory_uri() . '/js/jquery.min.js', array(), $version, true);
	wp_enqueue_script('customscript2', get_template_directory_uri() . '/js/bootstrap.min.js', array(), $version, true);
	wp_enqueue_script('customscript3', get_template_directory_uri() . '/js/parallax.min.js', array(), $version, true);
	wp_enqueue_script('customscript4', get_template_directory_uri() . '/js/scroll.js', array(), $version, true);
	wp_enqueue_script('customscript5', get_template_directory_uri() . '/js/carousel.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'rond_load_header');

function rond_theme_setup(){

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary header navigation');
}
add_action('init', 'rond_theme_setup');

add_theme_support('post-thumbnails');

function rond_custom_post_type(){
	$labels = array(
		'name'               => 'المشاريع',
		'singular_name'      => 'projects',
		'menu_name'          => 'المشاريع',
		'name_admin_bar'     => 'مشروع'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Description.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
	);

	register_post_type('project', $args);

	$labels = array(
		'name'               => 'الخدمات',
		'singular_name'      => 'services',
		'menu_name'          => 'الخدمات',
		'name_admin_bar'     => 'خدمة'
	);
	$args['rewrite'] = array( 'slug' => 'service' );
	$args['labels'] = $labels;

	register_post_type('service', $args);

}
add_action('init', 'rond_custom_post_type');


add_action( 'admin_bar_menu', function( \WP_Admin_Bar $bar )
{
	if(get_option('notificationActive') == "yes")
		$str='<span class="notification-icon-active">';
	else
		$str='<span class="notification-icon">';
    $bar->add_menu( array(
        'id'     => 'wpse',
        'parent' => null,
        'group'  => null,
        'title'  => __( $str, 'some-textdomain' ),
        'href'   => admin_url( 'admin.php?page=ufbl-form-entries' ),
        'meta'   => array(
            'target'   => '_self',
            'title'    => 'الإدخالات',
            //'html'     => $str,
            'tabindex' => PHP_INT_MAX,
        ),
    ) );
} );

function custom_css() {
   echo '
	<style type="text/css">
		.notification-icon::before{
			font-family: "dashicons";
			content: "\f227";
    		top: 2px;
		    font-size: 20px;
		}
		.notification-icon-active::before{
			font-family: "dashicons";
			content: "\f227";
    		top: 2px;
		    font-size: 20px;
    		color: red;
		}
	</style>
	';
}
add_action('admin_head', 'custom_css');
//add_action('admin_head', 'custom_css');