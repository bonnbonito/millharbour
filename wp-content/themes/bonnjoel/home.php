<?php
/**
 * The template for displaying news page.
 *
 * This is the template that displays what we do by default.
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
		<main id="main" class="site-main whatwedo" role="main">

			<header class="entry-header">
				<h1 class="entry-title align-self-center what-we-do-header">NEWS</h1>
			</header><!-- .entry-header -->

			<div class="arrow-title">
				<h2>ALL - NEWS - VLOG</h2>
			</div>

			<div class="h100-purple"></div>			

			<div class="container mt-50">
				<div class="w900">
					<div class="row justify-content-start">
						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'news' );				

							endwhile; // End of the loop.
							?>
					</div>
				</div>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
