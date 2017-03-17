<?php
/**
 * The template for displaying contact page.
 *
 * This is the template that displays contact page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Contact
 * @package BonnJoel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'contact' );				

			endwhile; // End of the loop.
			?>

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/down-arrow.png" alt="" class="downarrow">

			<div class="h230-purple"></div>

			<div class="map-container">
				<div class="w900">
					<div class="google-maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2472.8284867462817!2d-0.196150048457586!3d51.69958367956731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48763d4b8bbb3e39%3A0xbe7bfeb2b41a6226!2s12+Station+Cl%2C+Potters+Bar+EN6+1TL%2C+UK!5e0!3m2!1sen!2sph!4v1489495152244" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
