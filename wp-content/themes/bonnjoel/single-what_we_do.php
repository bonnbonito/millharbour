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
					<div class="w900">
						<?php
							global $post;
					        $args = array( 
					          'post_type' => 'service',
					          'posts_per_page' => -1,
					          'tax_query'	=> array(
					          					array(
					          						'taxonomy' => 'what_we_do_category',
					          						'field'	=> 'slug',
					          						'terms'	=> $post->post_name
					          					)
					          				)
					        );
					        $the_query = new WP_Query( $args );
					      ?>
						<div class="row">
							<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-md-6">
								<div class="what-we-do-item">									
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/yellow-box.png" alt="" class="yellowbox">
										<div class="hover-title">
											<?php the_title(); ?>
										</div>
										<?php if (has_post_thumbnail()): ?>
											<?php the_post_thumbnail('full'); ?>
										<?php else: ?>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.jpg" alt="no featured image">
										<?php endif ?>
									</a>
								</div>								
							</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
