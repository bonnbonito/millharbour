<div class="management-team">
	<div class="container">
		<h2>THE MANAGEMENT TEAM</h2>		
		<?php 
		$posts = get_field('management_team_members');
		if( $posts ): ?>
	    <div class="row justify-content-center">
	    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        <div class="col-md-3">
	        	<div class="team-member-wrap">
	        		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	        			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-border.png" alt="" class="team-border">
	        			<div class="team-details">
	        				<p><?php the_title(); ?></p>
	        				<p><?php the_field('job'); ?></p>
	        			</div>
	        			<?php the_post_thumbnail('team'); ?>
	        		</a>
	        	</div>
	        </div>
	    <?php endforeach; ?>
	    </div>
	    <?php wp_reset_postdata(); ?>
		<?php endif; ?>	
		
		<div class="text-center">
			<a href="<?php bloginfo('url'); ?>/our-team/" class="back-news">Meet the full team</a>
		</div>

	</div>
</div>
