<?php
if (!function_exists('ufo_theme_setup')) {
    function ufo_theme_setup()
    {
        /** text domain */
        // load_theme_textdomain('ufo', get_template_directory() . '/languages');
        /**RSS link */
        add_theme_support('automatic-feed-links');
        /* Post Thumbnail (futured image for post) */
        add_theme_support('post-thumbnails');
        /**title tag */
        add_theme_support('title-tag');
        /**Menu */
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Main Menu', 'ufo'),
            )
        );
        /**sidebar */
        $sidebar = array(
            'name' => __('Main sidebar', 'ufo'),
            'id'   => 'main-sidebar',
            'description' => 'sidebar',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',

        );
        register_sidebar($sidebar);
    }
    add_action('init', 'ufo_theme_setup');
}
/** get Menu */
if (!function_exists('ufo_menu')) {
    function ufo_menu($menu)
    {
        $menu = array(
            'theme_location' => $menu,
            'container_class' => $menu,
        );
        wp_nav_menu($menu);
    }
}
if (!function_exists('ufo_loadstyle')) {
    function ufo_loadstyle()
    {
        // css
        wp_enqueue_style('ufo-bootraps-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
        wp_enqueue_style('ufo-swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css');
        wp_enqueue_style('ufo-clouflare-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
        wp_enqueue_style('ufo-style-css', get_template_directory_uri() . '/assets/css/style.css');

        //js
        wp_enqueue_script('ufo-popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'), true);
        wp_enqueue_script('ufo-bootraps-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), true);
        wp_enqueue_script('ufo-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array('jquery'), true);
        wp_enqueue_script('ufo-index-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), '', true);

    }
    add_action('wp_enqueue_scripts', 'ufo_loadstyle');
}
// upload svg
function my_own_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'my_own_mime_types');


//require get_template_directory() .'/inc/panigation.php';

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}