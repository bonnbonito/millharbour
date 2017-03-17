<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BonnJoel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main newsheader" role="main">

			<header class="entry-header">
				<h1 class="entry-title align-self-center news-header">NEWS</h1>
			</header><!-- .entry-header -->

			<div class="container">				
				<?php
				while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'post' );				

				endwhile; // End of the loop.
				?>
			</div>

			<div class="other-posts">
				<div class="container">
					<div class="row">
						<?php 
						global $post;
						$args = array( 
							'post_type' => 'post',
							'post__not_in' => array($post->ID),
							'posts_per_page' => 2
							);
						$the_query = new WP_Query( $args );						
						
						if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

							get_template_part( 'template-parts/content', 'news' );	

						endwhile; endif; ?>
						
					</div>
				</div>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
