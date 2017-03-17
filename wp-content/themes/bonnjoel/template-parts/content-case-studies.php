<?php
/**
 * Template part for displaying page content in archive-case_studies.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<div class="row">
	<div class="col-md-6 <?php echo (($wp_query->current_post + 1) % 2 == 0 ? 'flex-last' : ''); ?>">
		<div class="case-study-content">
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
			<hr>
			<a href="<?php the_permalink(); ?>" class="readmore">Read more</a>
		</div>
	</div>
	<div class="col-md-6">
		<div class="gallery">
			<?php the_post_thumbnail('full'); ?>
		</div>
	</div>
</div>
<div class="sep100"></div>

