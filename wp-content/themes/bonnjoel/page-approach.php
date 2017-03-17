<?php
/**
 * The template for displaying our approach page.
 *
 * This is the template that displays our approach page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Our Approach
 * @package BonnJoel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main whatwedo" role="main">

			<header class="entry-header">
				<h1 class="entry-title align-self-center what-we-do-header">WHO WE ARE</h1>
			</header><!-- .entry-header -->

			<div class="container">
				<div class="w900">
					<div class="row">
						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

							endwhile; // End of the loop.
							?>
					</div>
				</div>
			</div>

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/down-arrow.png" alt="" class="downarrow">

			<div class="h100-purple">				
			</div>

			<div class="approach-wrap">				
					<?php if( have_rows('our_approach') ): $i = 1;?>
					<div class="container">						
						<?php while( have_rows('our_approach') ): the_row(); ?>
						<div class="row approach-row">
							<div class="col-md-6 <?php echo ($i % 2 == 0 ? 'flex-last' : ''); ?>">
								<div class="approach-header">									
									<h2><img src="<?php echo get_sub_field('image')['url']; ?>" alt=""><?php the_sub_field('title') ?></h2>
								</div>
								<div class="approach-content">
									<?php the_sub_field('content') ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="approach-vid">
									<?php if (get_sub_field('youtube_video_id')) {									
									} else { ?>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/approach-vid.png" alt="">
									<?php } ?>
								</div>
							</div>
						</div>
						<?php $i++; endwhile; ?>						
					</div>
				<?php endif; ?>				
			</div>

			<?php get_template_part( 'template-parts/management', 'team' ); ?>


			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
