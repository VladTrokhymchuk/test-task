<?php



if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

add_action('after_setup_theme', 'crb_load');
function crb_load(){
	load_template(get_template_directory() . '/includes/carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action('carbon_fields_register_fields', 'orekh_register_custom_fields');
function orekh_register_custom_fields(){
	require get_template_directory() . '/includes/custom-fields-options/metabox.php';
	require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}

//Стили
// function style_theme() {
// 	wp_enqueue_style('style', get_stylesheet_uri());
// 	wp_enqueue_style( 'main.min.css', get_template_directory_uri() . '/assets/css/main.min.css');
// }
// //Скрипты
// function scripts_theme() {
//    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.min.js');
// }
// Подключение настроек темы
require get_template_directory() . '/includes/theme-settings.php';
// Подключение области виджетов
require get_template_directory() . '/includes/widget-areas.php';
// Подключение области стилей
require get_template_directory() . '/includes/enqueue-script-style.php';
// Подключение воспомогательных функции
require get_template_directory() . '/includes/helpers.php';





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	//require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
	// require get_template_directory() . '/woocommerce/includes/wc-functions-archive.php';
	
}

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
// add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
// add_action( 'woocommerce_after_cart_item_name', 'truemisha_artikul_in_cart', 25 );

function wsb_add_to_cart_button( ) {
    global $product;

    $classes = implode( ' ',  array(
        'button',
        'product_type_' . $product->get_type(),
        $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
        $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
    )  );

    return apply_filters( 'woocommerce_loop_add_to_cart_link',
        sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button %s product_type_%s">%s</a>',
            esc_url( $product->add_to_cart_url() ),
            esc_attr( $product->get_id() ),
            esc_attr( $product->get_sku() ),
            esc_attr( isset( $quantity ) ? $quantity : 1 ),
            esc_attr( isset( $classes ) ? $classes : 'button' ),
            esc_attr( $product->get_type() ),
            esc_html( $product->add_to_cart_text() )
        ),
    $product );
} 




