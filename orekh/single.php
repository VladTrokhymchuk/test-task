<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package orekh
 */

get_header();
?>
<!-- *********************** -->
<section class="first-section overlay" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-home.jpg)">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<a href="#">
					<h1>Орех Причерно2222222222222морья SINGLE</h1>
					<p>Единственный в Украине сад совместного<br> выращивание фундука и грецкого ореха</p>
					<span><i class="nut-icon icons-play-icon"></i></span>
				</a>
			</div>
		</div>
	</section>


	
<!-- *********************** -->
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'orekh' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'orekh' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

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
