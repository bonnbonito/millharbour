<?php
/**
 * Template part for displaying page content in page-what-we-do.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<div class="col-md-6 cat-wrap">
	<div class="cat-inner-wrap">
		<div class="cat-img">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('full'); ?>
			</a>	
		</div>
		<h2 class="term-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>										
		</h2>
		<div class="short-description">
			<?php the_excerpt(); ?>
		</div>
		<div class="readmore-wrap">
			<hr>
			<a href="<?php the_permalink(); ?>" class="readmore">Read More</a>			
		</div>	
	</div>
</div>
