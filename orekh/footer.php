<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package orekh
 */

?>

	
</div><!-- #page -->

<footer class="footer__bottom">
		<div class="container">
		<!-- Подключение произвольных полей контакты radio -->
		<?php
										
											
			$crb_phone_one_code_footer = carbon_get_theme_option('crb_phone_one_code_footer') ? carbon_get_theme_option('crb_phone_one_code_footer') : get_bloginfo('description');
			$crb_num_bef_code_first_footer = carbon_get_theme_option('crb_num_bef_code_first_footer') ? carbon_get_theme_option('crb_num_bef_code_first_footer') : get_bloginfo('description');
			$crb_first_num_url_footer = carbon_get_theme_option('crb_first_num_url_footer') ? carbon_get_theme_option('crb_first_num_url_footer') : get_bloginfo('description');

			$crb_phone_two_code_footer = carbon_get_theme_option('crb_phone_two_code_footer') ? carbon_get_theme_option('crb_phone_two_code_footer') : get_bloginfo('description');
			$crb_num_bef_code_second_footer = carbon_get_theme_option('crb_num_bef_code_second_footer') ? carbon_get_theme_option('crb_num_bef_code_second_footer') : get_bloginfo('description');
			$crb_second_num_url_footer = carbon_get_theme_option('crb_second_num_url') ? carbon_get_theme_option('crb_second_num_url_footer') : get_bloginfo('description');
											
			$crb_social_url_viber_footer = carbon_get_theme_option('crb_social_url_viber_footer') ? carbon_get_theme_option('crb_social_url_viber_footer') : get_bloginfo('description');
			$crb_social_url_telegram_footer = carbon_get_theme_option('crb_social_url_telegram_footer') ? carbon_get_theme_option('crb_social_url_telegram_footer') : get_bloginfo('description');
			$crb_social_url_whatsapp_footer = carbon_get_theme_option('crb_social_url_whatsapp_footer') ? carbon_get_theme_option('crb_social_url_whatsapp_footer') : get_bloginfo('description');

			$crb_mail_footer = carbon_get_theme_option('crb_mail_footer') ? carbon_get_theme_option('crb_mail_footer') : get_bloginfo('description');
			$crb_mail_url_footer = carbon_get_theme_option('crb_mail_url_footer') ? carbon_get_theme_option('crb_mail_url_footer') : get_bloginfo('description');
			$crb_office_footer = carbon_get_theme_option('crb_office_footer');
			$crb_production_footer = carbon_get_theme_option('crb_production_footer') ? carbon_get_theme_option('crb_production_footer') : get_bloginfo('description');
		?>
			<?php 
				$news = carbon_get_theme_option('est_footer_newsletter_show');
				if ('on' === $news):
			?>
			<div class="row">
				<div class="col-lg-5 col-12">
					<div class="wrap">
						<h2>Контакты</h2>
						<div class="bottom_social">
							<div class="bottom_social_tel">
								<i class="nut-icon icons-phone"></i>
								<ul>
									<li>
										<a href="<?php echo $crb_first_num_url_footer; ?>"><span><?php echo $crb_phone_one_code_footer; ?></span> <?php echo $crb_num_bef_code_first_footer; ?></a>
									</li>
									<li>
										<a href="<?php echo $crb_second_num_url_footer; ?>"><span><?php echo $crb_phone_two_code_footer; ?></span> <?php echo $crb_num_bef_code_second_footer; ?></a>
									</li>
								</ul>
							</div>
							<div class="bottom_social_links">
								<ul>
									<li>
										<a href="<?php echo $crb_social_url_viber_footer; ?>"><i class="nut-icon icons-viber"></i></a>
									</li>
									<li>
										<a href="<?php echo $crb_social_url_telegram_footer; ?>"><i class="nut-icon icons-telegram"></i></a>
									</li>
									<li>
										<a href="<?php echo $crb_social_url_whatsapp_footer; ?>"><i class="nut-icon icons-whatsapp"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="bottom_mail">
							<a href="<?php echo $crb_mail_url_footer; ?>"><i class="nut-icon icons-post"></i> <?php echo $crb_mail_footer; ?></a>
						</div>
						<address class="bottom_address">
							<ul>
								<li>
									<b>Офис и отдел продаж</b>
									<p><?php echo $crb_office_footer ?></p>
									<!-- <p>Украина, г. Одесса,<br> ул. Космонавтов, 32</p> -->
								</li>
								<li>
									<b>Производство</b>
									<p><?php echo $crb_production_footer ?></p>
									<!-- <p>Украина, Одесская обл,<br> с. Яськи, ул. Центральная, 232</p> -->
								</li>
							</ul>
						</address>
					</div>
				</div>
				<div class="col-lg-7 col-12">
					<div id="map"></div>
				</div>
			</div>
			<?php endif;?>

			<!-- Подключение произвольных полей виджеты radio -->
			<?php
			$widget_footer = carbon_get_theme_option('est_footer_widgets_show');
				if (  'on' === $widget_footer) : ?>

			<div class="bottom_menu">
				<div class="row align-items-center ">
					<div class="col-lg-2">
						<div class="wraper">
							<a href="<? echo bloginfo('url') ?>" class="logo">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="alt">
								<span><? echo bloginfo('name') ?></span>
							</a>
						</div>
					</div>
					<div class="col-lg-10">
						<!-- Меню -->
                    	<?php wp_nav_menu( [
                            'theme_location'  => 'footer',
                            'container'       => 'ul', 
                            'menu_class'      => 'menu_main_ul'
                            
                         ])
                        ?>
						<!-- <ul class="menu_main_ul">
							<li>
								<a href="#">Магазин</a>
							</li>
							<li>
								<a href="#">О производстве</a>
							</li>
							<li>
								<a href="#">Оплата и доставка</a>
							</li>
							<li>
								<a href="#">Оптовым и корпоративным клиентам</a>
							</li>
							<li>
								<a href="#">Новости и статьи</a>
							</li>
							<li>
								<a href="#">Контакты</a>
							</li>
						</ul> -->
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="copy">
			<div class="container">
						<!-- Подключение произвольных полей -->
						<?php 
							$copy_footer = carbon_get_theme_option('est_footer_copy');
						?>

				<div class="row align-items-center ">
					<div class="col-md-4 col-12">
						<p>Разработано <a href="#" class="dev"><span>AVADA</span> MEDIA</a></p>
					</div>
					<div class="col-md-4 col-12">
						<p class="copy_year"><?php echo $copy_footer; ?></p>
					</div>
					<div class="col-md-4 col-12">
						<ul class="copy__social">
							<li>
								<a href="#"><i class="nut-icon icons-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="nut-icon icons-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="nut-icon icons-youtube"></i></a>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</footer>
    
	<!-- <script src="js/scripts.min.js"></script> -->
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVofcK1JyIWtVb3kaEbvHi9WqHCteWpxI&amp;callback=initMap">
    </script>
    <!-- <script>
        let theme_directory = "<?php echo get_template_directory_uri() ?>";
        let bloginfo_url = "<? echo bloginfo('url') ?>";
        let bloginfo_name = "<? echo bloginfo('name') ?>";

    </script> -->

<?php wp_footer(); ?>

</body>
</html>
