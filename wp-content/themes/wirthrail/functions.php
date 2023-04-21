<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

function theme_enqueue_styles() {
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'my-js', get_stylesheet_directory_uri() . '/js/my.js', array(), $the_theme->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
    

/* christianthibault.com */

require_once get_stylesheet_directory() . '/inc/my-class-wp-bootstrap-navwalker.php';

add_action('wp_head', 'ajout_entete');
function ajout_entete(){
?>
<link rel="stylesheet" href="https://use.typekit.net/zot8tjs.css">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="160x160" href="/fav/favicon-160.png">
<link rel="icon" type="image/png" sizes="64x64" href="/fav/favicon-64.png">
<link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16.png">
<link rel="apple-touch-icon" href="/fav/favicon-57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/fav/favicon-114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/fav/favicon-72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/fav/favicon-144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/fav/favicon-60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/fav/favicon-120.png">
<link rel="apple-touch-icon" sizes="152x152" href="/fav/favicon-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/fav/favicon-180.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="/fav/favicon-144.png">
<meta name="msapplication-config" content="/fav/browserconfig.xml">

<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/og_facebook.jpg" />
<meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/share_twitter.jpg" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SZWP8YSGGN"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-SZWP8YSGGN');
</script>

<?php
};

function custom_menus() {
    register_nav_menus(
        array(
            'footer-navigation' => 'Footer navigation',
            'footer-rails-1'    => 'Footer rails 1',
            'footer-rails-2'    => 'Footer rails 2',
            'sub-footer'        => 'Footer',
        )
    );
}
add_action( 'init', 'custom_menus' );


// custom excerpt length
function custom_excerpt_length( $length ) {
   return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


function understrap_all_excerpts_get_more_link( $post_excerpt ) {
    if ( !is_admin() ) {
        $post_excerpt;
    }
    return $post_excerpt;
}

if(function_exists("acf_add_options_sub_page")) {
	// List of options page
        acf_add_options_sub_page('Contact');
}
