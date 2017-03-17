<?php
/**
 * The template for displaying case studies.
 *
 * This is the template that displays case studies by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package BonnJoel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main casestudies" role="main">

			<header class="entry-header">
				<h1 class="entry-title align-self-center case-study-header">Case Studies</h1>
			</header><!-- .entry-header -->

			<div class="container">
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'case-studies' );				

					endwhile; // End of the loop.
					?>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
