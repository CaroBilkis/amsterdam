<?php

function damcito_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/amsterdam.css', array(), rand(111,9999), 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.1.0', 'all');

	wp_enqueue_script('jquery');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/amsterdam.js', array(), rand(111,9999), true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.1.0', true);

}

add_action( 'wp_enqueue_scripts', 'damcito_script_enqueue');

function damcito_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Secondary Header Navigation');
	register_nav_menu('tertiary', 'Terciary Header Navigation');
	register_nav_menu('fourty', 'Four Header Navigation');

	register_nav_menu('filtro', 'filter navigation');
}

add_action('init', 'damcito_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('html5',array('search-form'));

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
/*
	==========================================
	 Sidebar function
	==========================================
*/
function awesome_widget_setup() {

	register_sidebar(
		array(
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);

}
add_action('widgets_init','awesome_widget_setup');

add_filter( 'um_myprofile_edit_menu_items', 'my_profile_edit_menu_items', 20, 1 );function my_profile_edit_menu_items( $items ) {$items = array(
'editprofile' => '<a href="' . um_edit_profile_url() . '" class="real_url">' . __( 'Editar', 'ultimate-member' ) . '</a>',
'myaccount'   => '<a href="' . um_get_core_page( 'account' ) . '" class="real_url">' . __( 'Mi cuenta', 'ultimate-member' ) . '</a>','Logout'      => '<a href="' . um_get_core_page( 'logout' ) . '" class="real_url">' . __( 'Salir', 'ultimate-member' ) . '</a>',
'cancel'      => '<a href="#" class="um-dropdown-hide">' . __( 'Cancelar', 'ultimate-member' ) . '</a>',);return $items;}


add_action( 'login_form_middle', 'add_lost_password_link' );
function add_lost_password_link() {
    return '<a href="/wp-login.php?action=lostpassword">Forgot Your Password?</a>';
}

if(!function_exists('vivid_login_page'))
{
  function vivid_login_page()
  {
      $args = array(
        'echo'           => true,
        'remember'       => true,
        'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
        'form_id'        => 'loginform',
        'id_username'    => 'user_login',
        'id_password'    => 'user_pass',
        'id_remember'    => 'rememberme',
        'id_submit'      => 'wp-submit',
        'label_username' => __( 'Username or Email Address' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in'   => __( 'Log In' ),
        'value_username' => '',
        'value_remember' => false
    );
    wp_login_form($args);
    add_lost_password_link();
  }
  add_shortcode('vivid-login-page', 'vivid_login_page');
}

add_action('wp_logout','auto_redirect_after_logout');

function auto_redirect_after_logout(){
  wp_safe_redirect( home_url() );
  exit;
}

function add_search_to_wp_menu ( $items, $args ) {
	if( 'tertiary' === $args -> theme_location ) {
$items .= '<li class="menu-item menu-item-search">';
$items .= '<form method="get" class="menu-search-form" action="' . get_bloginfo('home') . '/"><input type="search" class="form-control" value="Buscar" name="s" id="s" onfocus="if (this.value == \'Buscar\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Buscar\';}" /></form>';
$items .= '</li>';
} else if ('fourty'=== $args -> theme_location ){
	$items .= '<li class="menu-item menu-item-search">';
	$items .= '<form method="get" class="menu-search-form" action="' . get_bloginfo('home') . '/"><input type="search" class="form-control" value="Buscar" name="s" id="s" onfocus="if (this.value == \'Buscar\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Buscar\';}" /></form>';
	$items .= '</li>';
}
return $items;
}
add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);
