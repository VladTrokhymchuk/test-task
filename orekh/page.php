<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package orekh
 */

get_header();
?>
	<section class="first-section overlay" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-home.jpg)">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<a href="#">
					<h1>Орех Причерноморья PAGE11</h1>
					<p>Единственный в Украине сад совместного<br> выращивание фундука и грецкого ореха</p>
					<span><i class="nut-icon icons-play-icon"></i></span>
				</a>
			</div>
		</div>
	</section>
	
	

	<!-- *************** -->
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
