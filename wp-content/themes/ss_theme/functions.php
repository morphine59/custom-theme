<?php
function ss_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'ss_theme' ),
    ) );
}
add_action( 'after_setup_theme', 'ss_theme_setup' );

/**
 * Enqueue styles
 */
function ss_enqueue_assets() {
  // Theme stylesheet
  wp_enqueue_style(
    'ss-style',
    get_stylesheet_uri(),
    [],
    '1.0'
  );

  // Font Awesome
  wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
    [],
    '6.5.1'
  );
}
add_action('wp_enqueue_scripts', 'ss_enqueue_assets');
?>
<?php
// Register Custom Post Types
function ss_register_cpts() {
// Blog CPT
register_post_type('blog', [
    'labels' => [
      'name' => 'Blog',
      'singular_name' => 'Blog Post'
    ],
    'public' => true,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'supports' => ['title'],
    'has_archive' => true,
    'rewrite' => ['slug' => 'blog'],
    'show_in_rest' => true,
  ]);
  
  // Services (replaces previous 'service' CPT)
  register_post_type('services', array(
    'labels' => array(
      'name' => 'Services',
      'singular_name' => 'Service'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-hammer',
    'supports' => array('title'),
    'has_archive' => false,
    'rewrite' => array('slug' => 'services'),
    'show_in_rest' => true,
  ));

  // Projects
  register_post_type('project', [
    'labels' => [
      'name' => 'Projects',
      'singular_name' => 'Project'
    ],
    'public' => true,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => ['title'],
    'has_archive' => true,
    'rewrite' => ['slug' => 'projects'],
    'show_in_rest' => true,
  ]);

  // Testimonials
  register_post_type('testimonial', [
    'labels' => [
      'name' => 'Testimonials',
      'singular_name' => 'Testimonial'
    ],
    'public' => true,
    'menu_icon' => 'dashicons-format-quote',
    'supports' => ['title'],
    'has_archive' => true,
    'rewrite' => ['slug' => 'testimonials'],
    'show_in_rest' => true,
  ]);


}
add_action('init', 'ss_register_cpts');
