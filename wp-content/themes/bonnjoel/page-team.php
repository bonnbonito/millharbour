<?php
/**
 * The template for displaying what we do single what we do.
 *
 * This is the template that displays what we do single what we do by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Team Members
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

								get_template_part( 'template-parts/single', 'whatwedo' );

							endwhile; // End of the loop.
							?>
					</div>
				</div>
			</div>

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/down-arrow.png" alt="" class="downarrow">

			<div class="h100-purple">
				
			</div>

			<div class="what-we-do-items-wrap">
				<div class="container">
					<?php
				        $args = array( 
				          'post_type' => 'team',
				          'posts_per_page' => -1,
				          'orderby' => 'ID',
				          'order'	=> 'ASC'
				        );
				        $the_query = new WP_Query( $args );

				      ?>
					<div class="row justify-content-center">
						<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-md-3">
							<div class="team-member-wrap">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-border.png" alt="" class="team-border">
									<div class="team-details">
										<p><?php the_title(); ?></p>
										<p><?php the_field('job'); ?></p>
									</div>
									<?php the_post_thumbnail('team'); ?>
								</a>
							</div>
						</div>
						 <?php endwhile; endif; ?>		
					</div>
				</div>
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
