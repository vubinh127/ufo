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
        wp_enqueue_style('ufo-google-font-preconnect', 'https://fonts.googleapis.com', array(), null);
        wp_enqueue_style('ufo-google-font', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', array(), null);
        wp_enqueue_style('ufo-animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
        wp_enqueue_style('ufo-style-css', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('ufo-custom-css', get_template_directory_uri() . '/assets/css/custom.css');

        //js
        wp_enqueue_script('ufo-popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'), true);
        wp_enqueue_script('ufo-bootraps-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), true);
        wp_enqueue_script('ufo-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array('jquery'), true);
        wp_enqueue_script('ufo-wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array('jquery'), null, true);
        wp_enqueue_script('ufo-index-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), '', true);

        wp_add_inline_script('ufo-wow-js', '
            new WOW({
                live: true,
                resetAnimation: true,
                mobile: false
            }).init();
        ');
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

function register_post_type_courses() {

    $labels = [
        'name'               => 'Courses',
        'singular_name'      => 'Course',
        'menu_name'          => 'Courses',
        'name_admin_bar'     => 'Course',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Course',
        'new_item'           => 'New Course',
        'edit_item'          => 'Edit Course',
        'view_item'          => 'View Course',
        'all_items'          => 'All Courses',
        'search_items'       => 'Search Courses',
        'not_found'          => 'No courses found.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => ['title', 'thumbnail', 'revisions'],
        'has_archive'        => true,
        'rewrite'            => ['slug' => 'courses'],
        'show_in_rest'       => true, // quan trọng để dùng Gutenberg + API
        'menu_position'      => 5,
    ];

    register_post_type('courses', $args);
}
add_action('init', 'register_post_type_courses');

function register_taxonomy_course_category() {

    register_taxonomy(
        'course_category', // slug nên đặt riêng
        ['courses'],
        [
            'labels' => [
                'name' => 'Course Categories',
                'singular_name' => 'Course Category',
            ],
            'public'       => true,
            'hierarchical' => true, // giống category
            'rewrite'      => ['slug' => 'course-category'],
            'show_in_rest' => true,
        ]
    );
}
add_action('init', 'register_taxonomy_course_category');

function register_post_type_document() {

    $labels = [
        'name'               => 'Documents',
        'singular_name'      => 'Document',
        'menu_name'          => 'Documents',
        'name_admin_bar'     => 'Document',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Document',
        'new_item'           => 'New Document',
        'edit_item'          => 'Edit Document',
        'view_item'          => 'View Document',
        'all_items'          => 'All Documents',
        'search_items'       => 'Search Documents',
        'not_found'          => 'No documents found.',
    ];

    $args = [
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-media-document',
        'supports'      => ['title','editor','thumbnail', 'revisions'],
        'has_archive'   => true,
        'rewrite'       => ['slug' => 'documents'],
        'show_in_rest'  => true,
        'menu_position' => 6,
    ];

    register_post_type('document', $args);
}
add_action('init', 'register_post_type_document');

function register_taxonomy_document_category() {

    register_taxonomy(
        'document_category',
        ['document'],
        [
            'labels' => [
                'name'          => 'Document Categories',
                'singular_name' => 'Document Category',
            ],
            'public'       => true,
            'hierarchical' => true,
            'rewrite'      => ['slug' => 'document-category'],
            'show_in_rest' => true,
        ]
    );
}
add_action('init', 'register_taxonomy_document_category');

function filter_courses_by_category($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('courses')) {

        if (!empty($_GET['course_category'])) {

            $query->set('tax_query', [
                [
                    'taxonomy' => 'course_category',
                    'field'    => 'slug',
                    'terms'    => sanitize_text_field($_GET['course_category']),
                ]
            ]);
        }
    }
}
add_action('pre_get_posts', 'filter_courses_by_category');