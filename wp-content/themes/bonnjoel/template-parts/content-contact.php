<?php
/**
 * Template part for displaying page content in page-contact.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('whatwedo'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title align-self-center what-we-do-header">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content contact-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bonnjoel' ),
				'after'  => '</div>',
			) );
		?>
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
</article><!-- #post-## -->
