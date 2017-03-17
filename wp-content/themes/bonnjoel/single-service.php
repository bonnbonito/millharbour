<?php
/**
 * The template for displaying what we do single-service.php.
 *
 * This is the template that displays what we do single-service by default.
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

								get_template_part( 'template-parts/content', 'service' );

							endwhile; // End of the loop.
							?>
					</div>
				</div>
			</div>

			<div class="text-center">
				<div class="details">
					<p><strong>Client:</strong> <?php the_field('client'); ?></p>
					<p><strong>Location:</strong> <?php the_field('location'); ?></p>
					<p><strong>Discipline:</strong> <?php the_field('discipline'); ?></p>
					<p><strong>Completion:</strong> <?php the_field('completion'); ?></p>
				</div>
			</div>

			<div class="h100-purple"></div>

			<div class="service-gallery">
				
			</div>

			<?php get_template_part( 'template-parts/content', 'more-projects' ); ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
