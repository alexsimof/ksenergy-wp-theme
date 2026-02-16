<?php

if ( !function_exists( 'construct_theme_setup' ) ) :

  function construct_theme_setup() {
		
		// Миниатюры
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
  }
endif;
add_action( 'after_setup_theme', 'construct_theme_setup' );



// Подключение скриптов

function enqueue_construct_theme() {

  wp_enqueue_style( 'style', get_stylesheet_uri() );


  wp_enqueue_style( 'ksenergy-theme', get_template_directory_uri() . '/assets/css/ksenergy.css', 'style');

  wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap rel="stylesheet"');

  wp_enqueue_style( 'Open Sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@75..100,300..800&display=swap" rel="stylesheet"');

  
  wp_deregister_script( 'jquery-core' );
  wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.6.0.min.js');
  wp_enqueue_script( 'jquery' );
  

  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', [], time(), true);
  wp_enqueue_script( 'pop-up', get_template_directory_uri() . '/assets/js/pop-up.js', [], time(), true);


}
add_action( 'wp_enqueue_scripts', 'enqueue_construct_theme' );




// breadcrumbs

function construct_breadcrumb( $sep, $home ) {
	global $post;
	$out = '';
	$out .= '<div class="policies-breadcrumbs">';
	$out .= '<a href="' . home_url( '/' ) . '">'.$home.'</a>';
	$out .= '<span class="policies-breadcrumbs-sep">' . $sep . '</span>';
	if ( is_single() ) {
		$terms = get_the_terms( $post, 'category' );
		if ( is_array( $terms ) && $terms !== array() ) {
			$out .= '<a href="' . get_term_link( $terms[0] ) . '">' . $terms[0]->name . '</a>';
			$out .= '<span class="policies-breadcrumbs-sep">' . $sep . '</span>';
		}
	}
	if ( is_singular() ) {
		$out .= '<span class="policies-breadcrumbs-last">' . get_the_title() . '</span>';
	}
	if ( is_search() ) {
		$out .= get_search_query();
	}
	$out .= '</div><!--.policies-breadcrumbs-->';
	return $out;
}




# Automatically sets the image Title, Alt-Text, Caption & Description upon upload

add_action('add_attachment', 'pami_set_image_meta_upon_upload');

# Helper function
if (!function_exists('pami_image_meta_first')) {
	
	function pami_image_meta_first($my_image_title, $encoding = 'UTF-8') {
		
		$my_image_title = mb_ereg_replace('^[\ ]+', '', $my_image_title);
		$my_image_title = mb_strtoupper(mb_substr($my_image_title, 0, 1, $encoding), $encoding). mb_substr($my_image_title, 1, mb_strlen($my_image_title), $encoding);
		
		return $my_image_title;
		
	}
	
}

# Main function
function pami_set_image_meta_upon_upload($post_ID) {

	if (!wp_attachment_is_image($post_ID)) return;
		
	$my_image_title = get_post($post_ID)->post_title;
		
	// Sanitize the title: remove hyphens, underscores & extra spaces:
	$my_image_title = preg_replace('%\s*[-_\s]+\s*%', ' ', $my_image_title);
	
	// Sanitize the title: capitalize first letter of every word (other letters lower case):
	$my_image_title = str_replace('"', '', $my_image_title);
	$my_image_title = str_replace('«', '', $my_image_title);
	$my_image_title = str_replace('»', '', $my_image_title);
	$my_image_title = str_replace('—', '', $my_image_title);
	$my_image_title = str_replace(':', '', $my_image_title);
	$my_image_title = str_replace('  ', ' ', $my_image_title);
	$my_image_title = str_replace('   ', ' ', $my_image_title);

	$my_image_title = pami_image_meta_first(mb_strtolower($my_image_title));

	// Set the image Alt-Text
	update_post_meta($post_ID, '_wp_attachment_image_alt', $my_image_title);

	$my_image_title = mb_strtolower($my_image_title);

	$my_image_meta = [
		'ID' => $post_ID,
		'post_title' => $my_image_title, // Set image Title to sanitized title
	]; 

	// Set the image meta (e.g. Title, Excerpt, Content)
	wp_update_post($my_image_meta);

}


// form

add_action('wp_ajax_send_energy_form', 'send_energy_form');
add_action('wp_ajax_nopriv_send_energy_form', 'send_energy_form');

function send_energy_form() {
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $phone   = sanitize_text_field($_POST['phone']);
    $city    = sanitize_text_field($_POST['city']);
    $reason  = sanitize_text_field($_POST['reason']);
    $message = sanitize_textarea_field($_POST['message']);

    $to      = get_option('admin_email');
    $subject = 'New Energy Form Submission';
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nCity: $city\nReason: $reason\nMessage:\n$message";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json(['success' => true]);
    } else {
        wp_send_json(['success' => false]);
    }
}


function my_form_scripts() {
    // Подключаем JS
    wp_enqueue_script('energy-form', get_template_directory_uri() . '/assets/js/energy-form.js', ['jquery'], null, true );

    // Передаём переменные в JS
    wp_localize_script('energy-form', 'energyFormData', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('energy_form_nonce')
    ]);
}
add_action('wp_enqueue_scripts', 'my_form_scripts');


// acf-json

add_filter('acf/settings/save_json', function() {
    return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function($paths) {
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});
