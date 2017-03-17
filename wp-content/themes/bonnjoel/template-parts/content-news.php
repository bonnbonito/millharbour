<?php
/**
 * Template part for displaying page content in home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<div class="col-md-6 cat-wrap">
	<div class="cat-inner-wrap">
		<div class="cat-img <?php echo get_post_format(); ?>">
			<a href="<?php the_permalink(); ?>">
				<?php if (get_post_format() === 'video'): ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vid-play.png" alt="" class="vidplay">
				<?php endif; ?>
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
			<span class="post-date"><?php echo get_the_date(); ?></span>
		</div>	
	</div>
</div>
