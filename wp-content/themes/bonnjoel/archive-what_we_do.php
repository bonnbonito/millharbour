<?php
/**
 * The template for displaying what we do.
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
				<h1 class="entry-title align-self-center what-we-do-header">What We Do</h1>
			</header><!-- .entry-header -->

			<div class="container">
				<div class="w900">
					<div class="row">
						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'whatwedo' );				

							endwhile; // End of the loop.
							?>
					</div>
				</div>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
