<?php get_header();?>


	<div>
		<div class="content-title-container">
			<span class="h1 content-title"><?php the_title();?></span>
		</div>
		<div class="qouuoute">
			<q>
				Build a future where people live in harmony with nature.<br/>
				Build a future where people live in harmony with nature.<br/>
				Build a future where people live in harmony with nature.<br/>
				Build a future where people live in harmony with nature.<br/>
				Build a future where people live in harmony with nature.<br/>
				Build a future where people live in harmony with nature.<br/>
			</q>
		</div>
		<div class="container-fluid myProjects" id="projects">
			<div class="row">
				<?php
				$args=array(
				  'post_type' => 'project',
				  'post_status' => 'publish',
				  'posts_per_page' => -1,
				  'caller_get_posts'=> 1
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				$i=0;
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts() && $i!=6) : $i++; $my_query->the_post(); ?>
						<div class="col-md-2 col-sm-4 col-xs-6 project">
							<a href="<?php the_permalink(); ?>">
								<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>"/>
							</a>
							<p><?php the_title(); ?></p>
						</div>
					<?php
					endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
			</div>
		</div>
	</div>
	


<?php get_footer();?>