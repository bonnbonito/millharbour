<div class="more-projects">
	<div class="container">
		<div class="text-center">
			<h2 class="more-projects-title">MORE PROJECTS</h2>
		</div>		
		<div class="w900">
			 <?php
			 	global $post;
		        $args = array( 
		          'post_type' => 'case_studies',
		          'posts_per_page' => 2,
		          'post__not_in' => array($post->ID)
		        );
		        $the_query = new WP_Query( $args );
		      ?>
			<div class="row justify-content-center">
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-6">
					<div class="what-we-do-item">									
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/yellow-box.png" alt="" class="yellowbox">
							<div class="hover-title">
								<?php the_title(); ?>
							</div>
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>								
				</div>
				<?php endwhile; endif; ?>				
			</div>
		</div>
	</div>
</div>
