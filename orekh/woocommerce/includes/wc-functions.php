<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//* Change Woo Product H1 Tag to H3
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

// Отключил хлебные крошки
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'estore_add_breadcrumbs', 20 );
// add_action( 'woocommerce_after_cart_item_name', 'truemisha_artikul_in_cart', 25 );
function estore_add_breadcrumbs(){
    ?>
    <div class="container">
	    <div class="breadcrumbs">
            
                <?php woocommerce_breadcrumb(); ?>
           
			
		</div>
	</div>
<?php
}

add_action( 'woocommerce_before_single_product', 'estore_wrapper_product_start', 5 );
function estore_wrapper_product_start() {
	?>
	<!-- <div class="single-section"> -->
    <div class="product">
		<div class="container">
          <div class="row no-gutters">
            <div class="col-lg-5 col-md-6">
	<?php
}


add_action( 'woocommerce_after_single_product', 'estore_wrapper_product_end', 5 );
function estore_wrapper_product_end() {
    ?>
            </div>
        </div>
    </div>
</div>
	<?php
}

/************ */
add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_image_start', 5 );
function estore_wrapper_product_image_start() {
	?>
	<div class="wrap">
        <div class="product__item">
                <div class="sticker">
                    <i class="nut-icon icons-actciya"></i>
                        <p>Акция</p>
                </div>
            <div class="products-container swiper-container">
                <div class="swiper-wrapper">
	<?php
}


add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_image_end', 25 );
function estore_wrapper_product_image_end() {
    ?>              
                    <div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
					<img class="zoom" src="img/zoom.svg" alt="alt">
                </div>
            </div>
        </div>
   </div>
	<?php
}
/************ */
add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_entry_start', 30 );
function estore_wrapper_product_entry_start() {
	?>
	<div class="col-lg-7 col-md-6">
        <div class="product__content">
			<div class="row">
	<?php
}
add_action( 'woocommerce_after_single_product_summary', 'estore_wrapper_product_entry_end', 5 );
function estore_wrapper_product_entry_end() {
    ?>
            </div>
        </div>
	</div>
	<!-- <div class="clearfix"> </div> -->
	<?php
}




// add_action( 'woocommerce_single_product_summary', 'sgl_template_single_title', 5 );
// function sgl_template_single_title() {
//     the_title( '<h3 class="product__content_name">', '</h3>' );
// }