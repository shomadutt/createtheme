

<?php


function shoma_menus()
{
  register_nav_menus(
    array(
      'primary' => __('Desktop Primary Left Sidebar'),
      'footer' => __('Footer Menu Items')
    )
  );
}
add_action('init', 'shoma_menus');


function shoma_theme_support()
{

  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

do_action('after_theme_setup', shoma_theme_support());



function shoma_register_styles()
{

  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('shoma-style', get_template_directory_uri() . "/style.css", array('shoma-bootstrap'), $version, 'all');
  wp_enqueue_style('shoma-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('shoma-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

do_action('wp_enqueue_scripts', shoma_register_styles());


function shoma_register_scripts()
{

  wp_enqueue_script('shoma-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', 'all', true);
  wp_enqueue_script('shoma-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', 'all', true);
  wp_enqueue_script('shoma-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', 'all', true);
  wp_enqueue_script('shoma-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

do_action('wp_enqueue_scripts', shoma_register_scripts());


function shoma_widget_areas()
{
  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
      'after_widget' => '</ul>',
      'name' => 'Sidebar area',
      'id' => 'sidebar-1',
      'description' => 'Sidebar widget area'
    )

  );

  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
      'after_widget' => '</ul>',
      'name' => 'Footer area',
      'id' => 'footer-1',
      'description' => 'Footer widget area'
    )

  );
}

add_action('widgets_init', 'shoma_widget_areas');

?>
