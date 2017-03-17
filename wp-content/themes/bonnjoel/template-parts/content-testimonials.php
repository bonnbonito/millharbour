<div class="testimonial-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="testi-vid">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vid1.png" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="testi-content">
					<?php the_field('content', 'option'); ?>
					<p class="testi-name"><?php the_field('name', 'option'); ?></p>
					<p class="testi-job"><?php the_field('job', 'option'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
