<?php
/**
 * The template for displaying single case studies.
 *
 * This is the template that displays single case studies by default.
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
			
			<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single-case-studies' );				

				endwhile; // End of the loop.
				?>

			<div class="text-center">
				<div class="details">
					<p><strong>Client:</strong> <?php the_field('client'); ?></p>
					<p><strong>Location:</strong> <?php the_field('location'); ?></p>
					<p><strong>Discipline:</strong> <?php the_field('discipline'); ?></p>
					<p><strong>Completion:</strong> <?php the_field('completion'); ?></p>
				</div>
			</div>

			<div class="h100-purple"></div>

			<div class="case-study-gallery">

				<div class="container">

					<script>
						jQuery(document).ready(function($) {
							$('.slick-slider').slick({
								adaptiveHeight: true
							});
						});
					</script>
					<?php 
						$images = get_field('slider');
						if( $images ):
					 ?>
					<div class="slick-slider">
						<?php foreach( $images as $image ): ?>
						<div>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
					<?php endforeach; ?>
					</div>	
					<?php endif; ?>
				</div>
				
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

	<?php get_template_part( 'template-parts/content', 'more-projects' ); ?>

<?php
get_footer();
