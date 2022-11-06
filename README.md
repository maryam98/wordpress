
get_header();
have_posts();
the_post();
the_permalink();
the_title();
the_content();
get_footer();

language_attributes();
bloginfo( 'charset' );
bloginfo( 'name' );
body_class();
bloginfo( 'description' );
wp_head();

body_class();
bloginfo( 'name' )

wp_footer();
wp_enqueue_style( 'style', get_stylesheet_uri() );
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
