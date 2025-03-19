<?php

// $autoload_path = get_template_directory() . '/inc/autoload.php';
// if (file_exists($autoload_path)) {
//     require_once $autoload_path;
//     var_dump('autoload.php exists');die();
// } 
require_once get_template_directory() . '/inc/autoload.php';
function custom_func()
{
    /**‚
     * Enables support for post thumbnails in the theme.
     * 
     * The `post-thumbnails` feature allows you to add support for featured images or post thumbnails in your WordPress theme.
     * Once enabled, you can use functions like `the_post_thumbnail()` to display the featured image of a post.
     * 
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */

    // javascript effects
    wp_register_style('animateOnScroll_css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_register_script('animateOnScroll_js', 'https://unpkg.com/aos@2.3.1/dist/aos.js');



    // add bootstrap
    wp_register_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');

    // Add attribute to the link when registering JavaScript
    // wp_script_add_data('animateOnScroll_js', 'async', true);
    wp_script_add_data('bootstrap_js', 'defer', true);

    // Enqueue
    wp_enqueue_style('animateOnScroll_css');
    wp_enqueue_script('animateOnScroll_js');

    wp_enqueue_style('bootstrap_css');
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_script('animateOnScroll_js');

    // TIMELINE
    wp_register_style('timeline_css',  get_template_directory_uri() . '/parts/vertical-timeline-master/assets/css/style.css');

    wp_enqueue_style('timeline_css');

    // ICONS
    wp_enqueue_script('fontawesome_js', 'https://kit.fontawesome.com/502b87f90c.js', array(), '1.0', true);




    // SLIDER CARDS
    // wp_register_style('slider-cards-bundle_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    // wp_enqueue_style('slider_cards_css');

    wp_register_style('slider_cards_css',  get_template_directory_uri() . '/parts/cards/style.css');
    wp_enqueue_style('slider_cards_css');

 


    //  WP Features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5');
    // register_nav_menu('header', 'en tête du menu');

    // Logo features

    add_theme_support(
        'custom-logo',
        array(
            'height' => 50,
            'width' => 100,
            // 'flex-height' => true,
            // 'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        )
    );
}



add_action('after_setup_theme', 'custom_func');

function my_custom_styles()
{
    wp_enqueue_style('my-custom-style', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_custom_styles');


//

add_filter('nav_menu_css_class', 'jespi_nav_menu');

function jespi_nav_menu($classes): array
{
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_link_attributes', 'jespi_nav_menu_link');
function jespi_nav_menu_link($atts): array
{
    $atts['class'] = 'nav-link';
    return $atts;
}

function register_my_menus()
{
    register_nav_menus(
        array(
            'custom-menu' => __('Primary Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');


function my_custom_scripts()
{

    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');

// LOADING AFTER DOM
add_action('wp_footer', 'load_after_html_document');
function load_after_html_document()
{
    wp_enqueue_script('slider_cards_js', get_template_directory_uri() . '/parts/cards/scripts.js', array(), '1.0', true);
}




