<?php get_header();?>


	<div class="container a-service">
		<div class="content-title-container">
			<span class="h1 content-title"><?php the_title();?></span>
		</div>
		<div class="row">
			<div class="col-md-9">
				<?php the_content();?>
			</div>
			<div class="col-md-3">
				<?php echo do_shortcode(get_post_meta($post->ID, "form", true));?>
			</div>
		</div>
	</div>
	


<?php get_footer();?>