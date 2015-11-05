<?php

if (!function_exists('bdw_setup')) :

  function bdw_setup() {

    // adds theme support
    add_theme_support('nav-menus');

    // registers a "nav_menu" to be called into theme customization
    // create an area in the "customize" section for a nav menu.
    register_nav_menu('primary', __('Navigation Menu', 'bdw'));

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // add support for common post types. 
    add_theme_support('post-formats', [
        'aside',
        'chat',
        'gallery',
        'image',
        'link',
        'quote',
        'status',
        'video',
        'audio'
    ]);

    // add theme support for thumbnails.
    add_theme_support('post-thumbnails');

    // custom images sizes
    add_image_size('custom', 300, 200, true);
  }
  // end bdw setup

  endif;

add_action('after_setup_theme', 'bdw_setup');

// adds area for wordpress widgets.
function bdw_widgets_init() {
  register_sidebar([
      'name' => __('Primary Widget Area', 'bdw'),
      'id' => 'widget01',
      'description' => __('The primary widget area'),
      'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ]);
// creates second widget
  register_sidebar([
      'name' => __('Surprise Mother Fucker', 'bdw'),
      'description' => __('Surprise Mother Fucker'),
      'id' => 'widget02',
      'before_widget' => '<li id="%1s" class="widget-container %2s">',
      'after_widget' => '</li>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ]);
}

add_action('widgets_init', 'bdw_widgets_init');


// creating custom post types. 
//defaults to single.php, need to add single-show.php to for custom template. 
add_action('init', 'create_post_type');

function create_post_type() {
  register_post_type('show', [
      'labels' => [
          'name' => __('Show'),
          'singular_name' => __('Show'),
          'add_new_item' => __('Add New Show Item'),
          'edit_item' => __('Edit Show item'),
          'new_item' => __('New Show Item'),
          'all_items' => __('All Show Items'),
          'view_items' => __('View Show'),
          'search_items' => __('Search Show'),
          'not_found' => __('No Show Found'),
          'not_found_in_trash' => __('No Show items in trash'),
          'parent_item_colon' => '',
          'menu_name' => 'Show'
      ],
      'public' => true,
      'has_archive' => true,
      'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'comments', 'categories']
  ]);
}

//jQuery Insert From Google
// coppied from css tricks
if (!is_admin()) {
  add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
}

function my_jquery_enqueue() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
  wp_enqueue_script('jquery');
}
