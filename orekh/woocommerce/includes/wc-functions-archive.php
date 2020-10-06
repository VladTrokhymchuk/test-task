<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/*********** */
add_action( 'woocommerce_before_main_content', 'estore_archive_wrapper_start', 40 );
function estore_archive_wrapper_start(){
?>
	<section class="production">
		<div class="container">
			
				
<?php
}
add_action( 'woocommerce_after_main_content', 'estore_archive_wrapper_end', 30 );
function estore_archive_wrapper_end(){
?>
				
				
			
		</div>
	</section>
	<?php
}
/*********** */
add_action( 'woocommerce_before_main_content', 'estore_archive_content_wrapper_start', 60 );
function estore_archive_content_wrapper_start(){
	?>
	<div class="row justify-content-center">
	<?php
}
add_action( 'woocommerce_after_main_content', 'estore_archive_content_wrapper_end', 25 );
function estore_archive_content_wrapper_end(){
	?>
	</div>
	<?php
}

/************ */
add_action( 'woocommerce_before_shop_loop', 'estore_archive_content_wrapper_start1', 60 );
function estore_archive_content_wrapper_start1(){
	?>
	<div class="production__item">
	<?php
}
add_action( 'woocommerce_after_shop_loop', 'estore_archive_content_wrapper_end1', 25 );
function estore_archive_content_wrapper_end1(){
	?>
	</div>
	<?php
}
