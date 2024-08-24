add_action('wp_enqueue_scripts', 'register_styles_scripts');

function register_styles_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri());
}
