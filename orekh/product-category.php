<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
					<h1>Орех Причерноморья asss2</h1>
					<p>Единственный в Украине сад совместного<br> выращивание фундука и грецкого ореха</p>
					<span><i class="nut-icon icons-play-icon"></i></span>
				</a>
			</div>
		</div>
	</section>


<?php

get_footer();
