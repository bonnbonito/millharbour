<?php
/**
 * The template for displaying all single team post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BonnJoel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main whatwedo" role="main">

			<header class="entry-header">
				<h1 class="entry-title align-self-center what-we-do-header">WHO WE ARE</h1>
			</header><!-- .entry-header -->

			<div class="container">
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/single', 'content-team' );

					endwhile; // End of the loop.
					?>
			</div>

			<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

			<div class="range-services">
				<div class="container">
					<h2>A wide range of services</h2>
					<div class="w700">
						<p><strong>Ibus ducipsunt resciis ilistium eventib usciendae ni dio. Itat plaut ad est officip idendebitiat eictium eosa venis aut a nus dolorro volorpo riandan debitio remodip</strong></p>
					</div>
				</div>
				<?php get_template_part( 'template-parts/content', 'range-services' ); ?>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
