<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<div class="post-date"><?php echo get_the_date(); ?></div><!-- .entry-meta -->
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/underline2.png" alt="">		
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bonnjoel' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bonnjoel' ),
				'after'  => '</div>',
			) );
		?>

		<p><?php echo '<a class="back-news" href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">Back to news</a>'; ?></p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bonnjoel_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
