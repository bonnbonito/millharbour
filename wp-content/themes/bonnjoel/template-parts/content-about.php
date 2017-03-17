<?php
/**
 * Template part for displaying page content in page-about.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">	

		<div class="about-content">
			<div class="container">
				<div class="w900">
					<h2 class="page-title"><?php the_title(); ?></h2>
			
					<?php the_content(); ?>
				</div>				
			</div>
		</div>
			
	</div><!-- .entry-content -->
</article><!-- #post-## -->
