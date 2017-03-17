<?php
/**
 * The template for displaying about pages.
 *
 * This is the template that displays about pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: About
 * @package BonnJoel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main whatwedo" role="main">

			<header class="entry-header">
				<h1 class="entry-title align-self-center what-we-do-header">WHO WE ARE</h1>
			</header><!-- .entry-header -->

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'about' );				

			endwhile; // End of the loop.
			?>

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/down-arrow.png" alt="" class="downarrow">

			<div class="h100-purple">
					
			</div>

			<div class="section-3">
				<div class="container">
					<div class="vidwrapper">
						<?php if (get_field('youtube_video_id')): ?>
							<iframe id="ytplayer" type="text/html" width="640" height="360"
							src="https://www.youtube.com/embed/<?php the_field('youtube_video_id'); ?>?autoplay=0"
							frameborder="0"></iframe>
						<?php else: ?>
							<img src="http://localhost:4567/millharbour/wp-content/themes/bonnjoel/img/main-vid.png" alt="">
						<?php endif ?>
					</div>
				</div>		
			</div>

			<div class="about-content2-wrap">
				<div class="container">
					<div class="w700">
						<div class="about-content2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down.png" alt="" class="about-arrow">
							<?php the_field('section_2'); ?>
						</div>
					</div>				
				</div>
			</div>

			<div class="our-approach">
				<div class="container">
					<h2>Our Approach</h2>
					
					<?php if( have_rows('our_approach') ): ?>
					<div class="row">
						<?php while( have_rows('our_approach') ): the_row(); ?>
						<div class="col-md-3">
							<div class="about-approach">
								<div class="approach-icon">
									<img src="<?php echo get_sub_field('icon')['url']; ?>" alt="">
								</div>								
								<div class="approach-title"><?php the_sub_field('title'); ?></div>
								<?php the_sub_field('description'); ?>
							</div>
						</div>
						<?php endwhile; ?>						
					</div>
					<?php endif; ?>

					<div class="sep100"></div>


					<a href="<?php the_field('approach_page_link'); ?>" class="readmore">Read More</a>


				</div>
			</div>

			<?php get_template_part( 'template-parts/management', 'team' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

