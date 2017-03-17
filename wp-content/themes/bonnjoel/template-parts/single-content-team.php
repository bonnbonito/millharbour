<?php
/**
 * Template part for displaying page content in single-team.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-sm-3">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="col-sm-9">
			<?php the_title( '<h2 class="whatwedo-title">', '</h2>' ); ?>
			<p class="job-description"><?php the_field('job'); ?></p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/underline2.png" alt="">
			
			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bonnjoel' ),
						'after'  => '</div>',
					) );
				?>

				<a href="<?php bloginfo('url'); ?>/our-team" class="back-news">Back to full team</a>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
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
			<?php endif; ?>
		</div>
	</div>
</article><!-- #post-## -->
