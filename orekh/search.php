<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
					<h1>Орех Причерно2222222222222морья SIRCH</h1>
					<p>Единственный в Украине сад совместного<br> выращивание фундука и грецкого ореха</p>
					<span><i class="nut-icon icons-play-icon"></i></span>
				</a>
			</div>
		</div>
	</section>


	
<!-- *********************** -->
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'orekh' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
