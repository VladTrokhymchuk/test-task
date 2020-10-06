<?php
get_header(); 
the_post();
global $product;

$terms = get_the_terms($product->get_id(), 'product_cat');
$gallery_products = $product->get_gallery_image_ids();

global $post, $woocommerce;
$woocommerce->cart->add_to_cart( $post->ID );

?>



<section class="first-section no-bg">
			<div class="container">
				<div class="breadcrumbs">
				<?php woocommerce_breadcrumb(); ?>
				
				</div>
			</div>
		</section>

	<section class="product">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-5 col-md-6">
							<div class="wrap">
									<div class="product__item">
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
												<!-- <div class="swiper-slide">
													<a href="#"><img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="alt"/></a>
												</div> -->

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
													<!-- <a href="#"><img src="img/pic10.png" alt="alt"/></a> -->	
											</div>
											
	
											<!-- If we need navigation buttons -->
											<div class="swiper-button-prev"></div>
											<div class="swiper-button-next"></div>
											<img class="zoom" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/zoom.svg" alt="alt">
										</div>
									</div>
								</div>
					</div>
					<div class="col-lg-7 col-md-6">
						<div class="product__content">
							<div class="row">
								<div class="col-md-6">
									<div class="product__content_name">
										 <!-- <?= $terms[0]->name ?>  категория товара-->
										 <?php the_title(); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="product__content_art">
											Арт:<span> <?php echo ( $sku = $product->get_sku() ); ?></span>
									</div>
								</div>
								<div class="col-lg-9">
									<?php the_excerpt(); ?> 
								</div>
								<div class="col-lg-3"></div>
								<div class="col-12">
									<div class="product__content_descr">
										<ul>
											<li>
												<div class="row">
														<div class="col-md-5">
															<strong>Состав:</strong>
														</div>
														<div class="col-md-7">
															<span><?php echo $product->get_attribute( 'sostav' ); ?> </span>
														</div>
													</div>
											</li>
											<li>
												<div class="row">
													<div class="col-md-5">
														<strong>Масса нетто:</strong>
													</div>
													<div class="col-md-7">
														<span><?php echo $product->get_attribute( 'massa' ); ?></span>
													</div>
												</div>
											</li>
											<li>
													<div class="row">
														<div class="col-md-5">
															<strong>Энергетическая ценность:</strong>
														</div>
														<div class="col-md-7">
															<span><?php echo $product->get_attribute( 'energiy' ); ?></span>
														</div>
													</div>
												</li>
												<li>
														<div class="row">
															<div class="col-md-5">
																<strong>Срок годности:</strong>
															</div>
															<div class="col-md-7">
																<span><?php echo $product->get_attribute( 'srok-godnosty' ); ?></span>
															</div>
														</div>
													</li>
										</ul>
									</div>
								</div>
								<div class="col-12">
									<div class="warning">
											<i class="nut-icon icons-warning-sigh"></i>
											<p><?php echo $product->get_attribute( 'note' ); ?></p>
									</div>
								</div>
						
								<div class="col-12">
										<div class="product__content_sum">
												<div class="sum_item">
													<div class="sum_item_title">
														<p>Ваша цена:  </p>
													</div>
													<div class="sum_item_new">
														<p><?php echo $product->get_price(); ?> <i>грн.</i></p>
													</div>
													<div class="sum_item_old">
														<p><?php echo $product->get_regular_price(); ?> <i>грн.</i></p>
													</div>
												</div>
												
												<div class="sum_item">
													<div class="sum_item_button">
													<?php echo wsb_add_to_cart_button(); ?>
												</div>
												
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="payment payment__product">
				<div class="tabs">
					<div class="tabs__wrap">
						<div class="container">
								<div class="row">
									<ul class="tabs__caption">
										<li class="active"><span>Описание</span></li>
										<li><span>Упаковка</span></li>
										<li><span>Оплата</span></li>
										<li><span>Доставка</span></li>
									</ul>
								</div>
							</div>
					</div>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="tabs__content active">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-12">
										<img src="<?= get_the_post_thumbnail_url('', 'full') ?>" class="tabs__content_img" alt="alt">
									</div>
									<div class="col-lg-8 col-md-6 col-12 align-self-center">
										<div class="tabs__content_product">
										<?php the_content(); ?> 
											
										</div>
									</div>
								</div>
							</div>
							<div class="tabs__content">
								<!-- Содержимое второго блока -->
								<?php echo $product->get_attribute( 'box' ); ?>
							</div>
							<div class="tabs__content">
								<!-- Содержимое 3-го блока -->
							<?php echo $product->get_attribute( 'payment' ); ?>
							</div>

							<div class="tabs__content">
								<!-- Содержимое 4-го блока -->
								<?php echo $product->get_attribute( 'delivery' ); ?>		
							</div>
							</div>
						</div>
					</div>
				</div>
			</section>



<?php get_footer(); 


