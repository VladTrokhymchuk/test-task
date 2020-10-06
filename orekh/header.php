<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package orekh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!--  -->

	<title>My title</title>
	<meta name="description" content="My description">

	<!-- Responsive -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta name="theme-color" content="#337D5A">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="128x128" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple.png">

	<!-- Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:image:type" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image.jpg">
	<meta property="og:image:width" content="500">
	<meta property="og:image:height" content="500">
	<meta property="og:title" content="My title">
	<meta property="og:description" content="My description">

	<!-- Touch -->
	<meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    
    

	<!-- <link rel="stylesheet" href="css/main.min.css"> -->
<!--  -->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--  -->
<header class="top-header">
		<div class="top-header__line">
			<div class="container">
				<!-- Подключение произвольных полей -->
			<?php $logo_id = carbon_get_theme_option('est_header_logo');
										
											$crb_sale = carbon_get_theme_option('crb_sale') ? carbon_get_theme_option('crb_sale') : get_bloginfo('description');

											$crb_social_url_facebook = carbon_get_theme_option('crb_social_url_facebook') ? carbon_get_theme_option('crb_social_url_facebook') : get_bloginfo('description');
											$crb_social_url_instagram = carbon_get_theme_option('crb_social_url_instagram') ? carbon_get_theme_option('crb_social_url_instagram') : get_bloginfo('description');
											$crb_social_url_youtube = carbon_get_theme_option('crb_social_url_youtube') ? carbon_get_theme_option('crb_social_url_youtube') : get_bloginfo('description');
											
											$crb_phone_one_code = carbon_get_theme_option('crb_phone_one_code') ? carbon_get_theme_option('crb_phone_one_code') : get_bloginfo('description');
											$crb_num_bef_code_first = carbon_get_theme_option('crb_num_bef_code_first') ? carbon_get_theme_option('crb_num_bef_code_first') : get_bloginfo('description');
											$crb_first_num_url = carbon_get_theme_option('crb_first_num_url') ? carbon_get_theme_option('crb_first_num_url') : get_bloginfo('description');

											$crb_phone_two_code = carbon_get_theme_option('crb_phone_two_code') ? carbon_get_theme_option('crb_phone_two_code') : get_bloginfo('description');
											$crb_num_bef_code_second = carbon_get_theme_option('crb_num_bef_code_second') ? carbon_get_theme_option('crb_num_bef_code_second') : get_bloginfo('description');
											$crb_second_num_url = carbon_get_theme_option('crb_second_num_url') ? carbon_get_theme_option('crb_second_num_url') : get_bloginfo('description');
											
											$crb_social_url_viber = carbon_get_theme_option('crb_social_url_viber') ? carbon_get_theme_option('crb_social_url_viber') : get_bloginfo('description');
											$crb_social_url_telegram = carbon_get_theme_option('crb_social_url_telegram') ? carbon_get_theme_option('crb_social_url_telegram') : get_bloginfo('description');
											$crb_social_url_whatsapp = carbon_get_theme_option('crb_social_url_whatsapp') ? carbon_get_theme_option('crb_social_url_whatsapp') : get_bloginfo('description');
										?>
				<div class="row align-items-center">
					<div class="col-lg-4 col-12 d-lg-block d-none">
						<ul class="line_social">
							<li>
								<a href="<?php echo $crb_social_url_facebook; ?>"><i class="nut-icon icons-facebook"></i></a>
							</li>
							<li>
								<a href="<?php echo $crb_social_url_instagram; ?>"><i class="nut-icon icons-instagram"></i></a>
							</li>
							<li>
								<a href="<?php echo $crb_social_url_youtube; ?>"><i class="nut-icon icons-youtube"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-12 d-lg-flex d-none justify-content-center">
						<p><?php echo $crb_sale; ?></p>
					</div>
					<div class="col-lg-4 col-12">
						<div class="wrap">
							<ul class="log_in d-lg-flex d-none">
								<li>
									<a href="#"><i class="nut-icon icons-man-user"></i><span>Вход</span></a>
								</li>
								<li>
									<a href="#"><span>Регистрация</span></a>
								</li>
							</ul>
							<div id="lang-menu" class="lang-menu">
								<span class="title">Ru</span>
								<ul>
									<li><a href="#">En</a></li>
									<li><a href="#">Ru</a></li>
									<li><a href="#">Uk</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="top-header__logo">
			<div class="container">
				<div class="row">
					<div class="col-2 d-lg-none">
						<div class="mobile-menu-button d-lg-none d-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/menu.svg" alt="alt"></div>
					</div>
					<div class="col-xl-4 col-lg-3 col-8 align-self-center">
                    
						<a href="<? echo bloginfo('url') ?>" class="logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="alt">
                            <span><? echo bloginfo('name') ?></span>
						</a>
					</div>
					<div class="col-xl-8 col-lg-9 col-2 align-self-center">
						<div class="row">
							<div class="col-lg-6 col-12 align-self-center d-lg-block d-none">
								<div class="wrap">
									<ul class="logo_social">
										
										<li>
											<a href="<?php echo $crb_social_url_viber; ?>"><i class="nut-icon icons-viber"></i></a>
										</li>
										<li>
										
										<a href="<?php echo $crb_social_url_telegram; ?>"><i class="nut-icon icons-telegram"></i></a>
										</li>
										<li>
											<a href="<?php echo $crb_social_url_whatsapp; ?>"><i class="nut-icon icons-whatsapp"></i></a>
										</li>
									</ul>
									<ul class="logo_tel">
										<li>
											<a href="<?php echo $crb_first_num_url; ?>"><span><?php echo $crb_phone_one_code; ?></span> <?php echo $crb_num_bef_code_first; ?></a>
										</li>
										<li>
											<a href="<?php echo $crb_second_num_url; ?>"><span><?php echo $crb_phone_two_code; ?></span> <?php echo $crb_num_bef_code_second; ?></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 col-12 align-self-center">
								<div class="wraper">
									<ul class="logo_tel_mobile d-lg-none d-flex">
										<li>
											<a href="<?php echo $crb_first_num_url; ?>"><span><?php echo $crb_phone_one_code; ?></span> <?php echo $crb_num_bef_code_first; ?></a>
										</li>
									</ul>
									<ul class="logo_button_mobile d-lg-none d-flex">
										<li>
											<a href="#" class="button">Заказать звонок</a>
										</li>
									</ul>
									<ul class="logo_button d-lg-flex d-none">
										<li>
											<a href="#" class="button">Заказать звонок</a>
										</li>
										<li>
										
											<p>Ждем Вашего звонка<br> ежедневно с 9 до 18</p>
										</li>
									</ul>
									<!-- Корзина -->
									<?php estore_woocommerce_cart_link(); ?>
									<!-- <?php the_widget('WC_Widget_Cart', 'title=' ); ?> -->
									<!-- <a href="#" class="logo_number">
										
										<i class="nut-icon icons-number"></i>
										<span class="quantity">0</span>
									</a> -->
									<!-- Корзина -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="top-header__discount d-lg-none d-flex">
			<p>Ваша персональная скидка - 5%</p>
			<?php estore_woocommerce_header_cart(); ?>
		</div>
		<div class="top-header__menu d-lg-flex d-none">
			<div class="container">
				<div class="row">
					<nav class="menu_main menu_top">
                        <div class="mobile-line d-lg-none d-flex"></div>
                        <?php wp_nav_menu( [
                            'theme_location'  => 'top',
                            'container'       => 'ul', 
                            'menu_class'      => 'menu_main_ul'
                            
                         ])
                        ?>
					
					</nav>
				</div>

			</div>
		</div>
	</header>
	<!-- Корзина -->
    <div class="container pr">
		<div class="popup__cart" style="display: block;  padding-top: 20px; margin-top: 0px; padding-bottom: 20px; margin-bottom: 0px;">
			<div class="wrap">

	<!-- ITEM -->
				
				<?php do_action( 'woocommerce_before_cart' ); ?>

<form class="popup__cart_item" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

				
						<td class="item_title" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}
					
						 
						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>
							<!-- маса -->
						<td class="item_title" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_attribute( 'massa' ), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_attribute( 'massa' ) ), $cart_item, $cart_item_key ) );
						}
					
						 
						

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>
						<!-- маса -->

						<!-- quantity -->
						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>
					<!-- quantity -->
					<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								
							?>
						</td>

						<td class="product-remove">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>
					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">
					<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>
<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

	<!-- ITEM -->
				<div class="popup__cart_sum">
					<div class="sum_item">
						<div class="sum_item_title">
							<p>Всего </p>
						</div>
						<div class="sum_item_new">
							<p> <?php  echo $cart_total_price = WC()->cart->get_cart_contents_total();?> <i>грн.</i></p>
						</div>
					</div>
					<div class="sum_item">
						<div class="sum_item_button">
							<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="button">Перейти в корзину</a>
						</div>
					</div>
				</div>
				<!-- Если корзина пуста -->
				<!-- <div class="popup__cart_clean">
					<p>Ваша корзина пуста</p>
				</div> -->
			</div>
		</div>
	</div>
<!--  --><!-- Корзина -->





<?php do_action( 'woocommerce_after_cart' ); ?>



