<div class="container">
	<?php
        $args = array( 
          'post_type' => 'what_we_do',
          'posts_per_page' => 8,
          'orderby'	=> 'id',
          'order'	=> 'ASC'
        );
        $the_query = new WP_Query( $args );
     ?>
    <?php if ( $the_query->have_posts() ) : ?>
	<div class="row justify-content-center">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="col-md-3">					
			<div class="service-item">
				<a href="<?php the_permalink(); ?>">
					<div class="service-item-content">
						<?php the_title(); ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" alt="">
					</div>
				</a>
			</div>
		</div>
		<?php endwhile; ?>			
	</div>
	<?php endif; ?>
</div>
