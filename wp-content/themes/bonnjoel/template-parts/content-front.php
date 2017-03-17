<?php
/**
 * Template part for displaying page content in front-page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<div class="revslider">
		<?php echo do_shortcode( '[rev_slider alias="front"]' ); ?>
		</div>

		<div class="section-1">
			<div class="container">
				<div class="w740">
					<h2 class="underline"><?php the_field('section_1_title'); ?></h2>
					<div class="section-1-content">
						<?php the_field('section_1_content'); ?>
						
						<a href="<?php the_field('section_1_read_more_link'); ?>" class="big-rm">Read More</a>

					</div>				
				</div>
			</div>		
		</div>

		<div class="section-2">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3">
						<div class="section-2-item">
							<img src="<?php echo get_field('image_1')['url']; ?>" alt="<?php echo get_field('image_1')['alt']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="section-2-item">
							<img src="<?php echo get_field('image_2')['url']; ?>" alt="<?php echo get_field('image_2')['alt']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="section-2-item">
							<img src="<?php echo get_field('image_3')['url']; ?>" alt="<?php echo get_field('image_3')['alt']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="section-2-item">
							<img src="<?php echo get_field('image_4')['url']; ?>" alt="<?php echo get_field('image_4')['alt']; ?>">
						</div>
					</div>
					<div class="arrow-down-right hidden-md-down">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-right.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="section-3">
			<div class="container">
				<div class="vidwrapper">
					<?php if (get_field('youtube_video_id')): ?>
						<iframe id="ytplayer" type="text/html" width="640" height="360"
							src="https://www.youtube.com/embed/<?php the_field('youtube_video_id'); ?>?autoplay=0"
							frameborder="0"></iframe>
					<?php else: ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/main-vid.png" alt="">
					<?php endif; ?>					
				</div>
			</div>		
		</div>

		<div class="section-4">
			<div class="container">
				<h2><?php the_field('section_4_title'); ?></h2>
				<div class="w700">
					<?php the_field('section_4_content') ?>
				</div>
			</div>
			
			<div class="service-bg">
				<?php get_template_part( 'template-parts/content', 'range-services' ); ?>				
			</div>
		</div>

		<div class="section-5">
			<div class="container">
				<?php
			        $args = array( 
			          'post_type' => 'case_studies',
			          'posts_per_page' => 2
			        );
			        $the_query = new WP_Query( $args );
			      ?>
			      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
			      		get_template_part( 'template-parts/content', 'case-studies' );
			      endwhile; endif; ?>
			</div>
			<div class="case-more">
				<a href="<?php the_field('more_case_studies_link'); ?>">MORE CASE STUDIES</a>
			</div>
			<?php if ( get_edit_post_link() ) : ?>
			<div class="container">
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'bonnjoel' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
						'<span class="edit-link">',
						'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				</div>
			<?php endif; ?>
		</div>	
	</div><!-- .entry-content -->
</article><!-- #post-## -->
