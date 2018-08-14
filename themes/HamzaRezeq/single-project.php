<?php get_header();?>


	<div class="container a-project">
		<div class="content-title-container">
			<span class="h1 content-title"><?php the_title();?></span>
		</div>
		<div class="row">
			<div class="col-md-9">
				<?php the_content();?>
				<div class="row">
					<h3 class="other-projects-header">مشاريع أخرى قمنا بها <a href="<?= get_permalink( get_page_by_path( 'projects' ) ) ?>">(تصفح المشاريع)</a></h3>
					<div >
						<?php
							$pagePostID=get_the_ID();
							$maxPostNo = 6;
							$i=0;
							$args=array(
							  'post_type' => 'project',
							  'post_status' => 'publish',
							  'posts_per_page' => -1,
							  'caller_get_posts'=> 1,
							  'orderby' => 'rand'
							);
							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
								while ( $my_query->have_posts() && $i!= $maxPostNo) { 
									$my_query->the_post(); 
									if(get_the_ID()!=$pagePostID){
										$i++;?>
									<div class="col-md-2 col-sm-4 col-xs-6 project">
										<a href="<?php the_permalink(); ?>">
											<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>"/>
										</a>
										<p><?php the_title(); ?></p>
									</div>
								<?php
									}
								}
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
						?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<?php echo do_shortcode(get_post_meta($post->ID, "form", true));?>
			</div>
		</div>
	</div>
	


<?php get_footer();?>