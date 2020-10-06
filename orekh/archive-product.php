<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );


global $product;

?>
<!-- Подключение произвольных полей контакты radio -->
<?php											
$crb_title_head = carbon_get_theme_option('crb_title_head');
$crb_title_desc = carbon_get_theme_option('crb_title_desc');
$crb_title_cart = carbon_get_theme_option('crb_title_cart');
$crb_desc_cart = carbon_get_theme_option('crb_desc_cart');							
?>
	<section class="first-section overlay" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-home.jpg)">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<a href="#">
					<h1><?php echo $crb_title_head; ?> </h1>
					<p><?php echo $crb_title_desc; ?></p>
					<span><i class="nut-icon icons-play-icon"></i></span>
				</a>
			</div>
		</div>
	</section>
	<section class="production">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-12">
					<h2><?php echo $crb_title_cart; ?></h2>
					<p><?php echo $crb_desc_cart; ?></p>
				</div>
			</div>
			<div class="row justify-content-center">
	<?php

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();
			?>
				<div class="col-lg-4 col-md-6	col-12">
					<div class="wrap">
						<div class="production__item">
							<div class="sticker">
								<!-- Стикер новинок и акции -->
								<?php if( $product->get_attribute( 'novelty-stock' ) ): ?>
												<i class="nut-icon icons-actciya"></i>
  												<p><?php echo $product->get_attribute( 'novelty-stock' ); ?></p>
								<?php endif; ?> 
							</div>
							<!-- Slider main container -->
							<div class="products-container swiper-container">
								<!-- Additional required wrapper -->
								<div class="swiper-wrapper">
									<!-- Slides -->
									<?php 
										$attachment_ids = $product->get_gallery_image_ids();
										if ($attachment_ids) {
										foreach($attachment_ids as $attachment_id){
										?>
											<div class="swiper-slide">
											<a href="" href="<?= wp_get_attachment_url(  $attachment_id, 'full' );?>" rel="prettyPhoto[gallery]">
											<img src="<?= wp_get_attachment_url(  $attachment_id, 'full' );?>" alt="" /></a>
											</div>
										<? } ?>
									<?}?>
								</div>

								<!-- If we need navigation buttons -->
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
								<img class="zoom"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/zoom.svg" alt="alt">
							</div>
							<div class="wrap">
								<div class="production__item_title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div class="production__item_art">
									<span>Арт:</span> <?php echo ( $sku = $product->get_sku() ); ?>
								</div>
								<div class="production__item_descr">
											<?php 
												$search_text = get_the_excerpt();

												// Strip the <p> tag by replacing it empty string
												$tags = array("<h1>", "</h1>");
												$search_content = str_replace($tags, "", $search_text);
							
												// Echo the content
												echo $search_content;
											?>
								</div>
								<div class="production__item_weight">
									<div class="weight_item">
										<div class="weight_item_icon">
											<i class="nut-icon icons-food-scale-tool"></i>
										</div>
										<div class="weight_item_descr">
											<p>Масса</p>
											<p><span><?php echo $product->get_attribute( 'massa' ); ?><i></i></span></p>
										</div>
									</div>
									<div class="weight_item">
										<div class="weight_item_icon">
											<i class="nut-icon icons-group"></i>
										</div>
										<div class="weight_item_descr">
											<p>Упаковка</p>
											<p><span><?php echo $product->get_attribute( 'box' ); ?></span></p>
										</div>
									</div>
								</div>
								<div class="production__item_sum">
									<div class="sum_item">
										<div class="sum_item_title">
											<p>Цена: </p>
										</div>
										<div class="sum_item_new">
											<p><?php echo $product->get_price(); ?> <i>грн.</i></p>
										</div>
										<div class="sum_item_old">
											<p><?php echo $product->get_regular_price(); ?> <i>грн.</i></p>
										</div>
									</div>
									<div class="sum_item">
										<div class="sum_item_button"><?php echo wsb_add_to_cart_button(); ?>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}
	}

	?>
	</div>
	<div class="row">
				<div class="wrapper">
					<a href="#" class="button button_transparent">Перейти в магазин</a>
				</div>
			</div>
		</div>
	</section>
	<?php											
$crb_titlr_proizvodstvo = carbon_get_theme_option('crb_titlr_proizvodstvo');
$crb_desc_proizvodstvo = carbon_get_theme_option('crb_desc_proizvodstvo');

?>
	<section class="manufacturer gray_section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5">
					<h2> <?php echo $crb_titlr_proizvodstvo; ?></h2>
					<?php echo $crb_desc_proizvodstvo; ?>
					
					<a href="#" class="button button_transparent">Подробнее</a>
				
				</div>
				<div class="col-md-7">
					<!-- Swiper -->
					<div class="manufacturer-container swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="manufacturer__item manufacturer__item_video">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/manufacturer.jpg" alt="alt">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="manufacturer__item manufacturer__item_video">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/manufacturer.jpg" alt="alt">
								</div>
							</div>
						</div>
						<!-- Add Arrows -->
						<div class="wrap">
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="timer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="wrap">
						<span class="timer__single" data-from="1" data-to="240" data-speed="3000"
							data-refresh-interval="50"></span>
						<sup>Га</sup>
						<div class="timer__descr">
							<div>Cмешанных</div> садов
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-12">
					<div class="wrap">
						<span class="timer__single" data-from="1" data-to="1" data-speed="3000"
							data-refresh-interval="50"></span>
						<sup>Га</sup>
						<div class="timer__descr">
							<div>Тепличного</div> комплекса
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="wrap">
						<span class="timer__single" data-from="1" data-to="10" data-speed="5000"></span>
						<sup>Га</sup>
						<div class="timer__descr">
							<div>Первая промышленная плантация</div> шиповника в Украине
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="wrap">
						<span class="timer__single" data-from="1" data-to="80" data-speed="3000"
							data-refresh-interval="50"></span>
						<sup>%</sup>
						<div class="timer__descr">
							<div>Приживаемости</div> саженцев
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
			<?php											
				$crb_titlr_na_video = carbon_get_theme_option('crb_titlr_na_video');
				$crb_link_video = carbon_get_theme_option('crb_link_video');
							
			?>
	<div class="parallax" data-scrollax-parent="true">
		<section class="goal overlay cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/goal.jpg)"
			data-scrollax="properties: { translateY: '30%' }">

			<div class="container">
				<div class="row align-items-center justify-content-center">
					<a href="<?php echo  $crb_link_video?>" data-scrollax="properties: { 'translateY': '5%', 'opacity': 1 }">
						<?php echo  $crb_titlr_na_video?>
						<span><i class="nut-icon icons-play-icon"></i></span>
						<p><i>Cмотреть видео о производстве</i></p>
					</a>
				</div>
			</div>
		</section>
	</div>
	<?php											
				$crb_titlr_prod = carbon_get_theme_option('crb_titlr_prod');
				$crb_desc_prod = carbon_get_theme_option('crb_desc_prod');

				$crb_title_item_one = carbon_get_theme_option('crb_title_item_one');
				$crb_desc_item_one = carbon_get_theme_option('crb_desc_item_one');

				$crb_title_item_two = carbon_get_theme_option('crb_title_item_two');
				$crb_desc_item_two = carbon_get_theme_option('crb_desc_item_two');

				$crb_title_item_three = carbon_get_theme_option('crb_title_item_three');
				$crb_desc_item_three = carbon_get_theme_option('crb_desc_item_three');
							
			?>
	<section class="benefit">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-12">
					<h2> <?php echo $crb_titlr_prod ?></h2>
					<p><?php echo $crb_desc_prod ?></p>					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6	col-12">
					<div class="wrap">
						<div class="benefit__item overlay" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/walnuts.jpg)">
							<i class="nut-icon icons-group4"></i>
							<h3><?php echo $crb_title_item_one ?></h3>
						</div>
						<div class="benefit__item item_hover overlay_green">
							<i class="nut-icon icons-group4"></i>
							<h3><?php echo $crb_title_item_one ?></h3>
							<p><?php echo $crb_desc_item_one ?></p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6	col-12">
					<div class="wrap">
						<div class="benefit__item overlay" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nut.jpg)">
							<i class="nut-icon icons-vector4"></i>
							<h3><?php echo $crb_title_item_two ?></h3>
						</div>
						<div class="benefit__item item_hover overlay_green">
							<i class="nut-icon icons-vector4"></i>
							<h3><?php echo $crb_title_item_two ?></h3>
							<p><?php echo $crb_desc_item_two ?></p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6	col-12">
					<div class="wrap">
						<div class="benefit__item overlay" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/berry.jpg)">
							<i class="nut-icon icons-group5"></i>
							<h3><?php echo $crb_title_item_three ?></h3>
						</div>
						<div class="benefit__item item_hover overlay_green">
							<i class="nut-icon icons-group5"></i>
							<h3><?php echo $crb_title_item_three ?></h3>
							<p><?php echo $crb_desc_item_three ?></p>
						
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php											
		$crb_title_orech_par = carbon_get_theme_option('crb_title_orech_par');
		$crb_desc_orech_par = carbon_get_theme_option('crb_desc_orech_par');

	?>
	<div class="parallax" data-scrollax-parent="true">
		<section class="eco overlay" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eco.jpg)"
			data-scrollax="properties: { translateY: '30%' }">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<a href="#" data-scrollax="properties: { 'translateY': '5%', 'opacity': 1 }">
						<i class="nut-icon icons-eco"></i>
						<h2><?php echo $crb_title_orech_par ?></h2>
						<p><?php echo $crb_desc_orech_par ?></p>
					</a>
				</div>
			</div>
		</section>
	</div>

	<section class="news gray_section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-12">
					<h2>Новости</h2>
					<p class="news__descr">Свежие новости и полезная информация</p>

				</div>
				<div class="col-md-6 col-12 d-flex justify-content-end">
					<div class="wrap">
						<div class="navigation"></div>
					</div>
				</div>
				<div class="col-12">
					<!-- Swiper -->
					<div class="news-container swiper-container">
						<!-- Add Arrows -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-wrapper">
 						<!-- *************блок новостей************************ -->
                        <!-- ************************************* -->
                        <?php 
                        // параметры по умолчанию
                        $posts = get_posts( array(
                        'numberposts' => 5,
                        'category' => 0,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'include' => array(),
                        'exclude' => array(),
                        'meta_key' => '',
                        'meta_value' =>'',
                        'post_type' => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                       

                        foreach( $posts as $post ){ setup_postdata($post);
                        // формат вывода the_title() ...
						  ?>
						  <div class="swiper-slide">
								<div class="news__item">
									<span class="video_wrap">
										<img src="<?php the_post_thumbnail(); ?>
									</span>
									<div class="wraper">
										<div class="item_data">
											<?php the_time('d.m.Y') ?>
										</div>
										<h3><?php the_title(); ?></h3>
										<p><?php the_excerpt($post) ?></p>
										<a href="#">Читать <i class="nut-icon icons-read-more"></i></a>
									</div>
								</div>
							</div>
                        <?php
                        }
                        
                        wp_reset_postdata(); // сброс
                        ?>
                        
                        <!-- *****************блок новостей конец******************** -->
                        <!-- ************************************* -->

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="wrapper">
					<a href="#" class="button button_transparent">Смотреть все новости</a>
				</div>
			</div>
		</div>
	</section>

<?php get_footer( 'shop' );
