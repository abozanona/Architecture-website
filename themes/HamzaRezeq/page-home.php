<?php get_header();?>
<!--div class="text-center" style="background:url(<?= get_template_directory_uri() ?>/img/header_bg.jpg)">
	<img src="<?= get_template_directory_uri() ?>/img/hdr_img.jpg"/>
</div-->
<div class="mySlider">
	<div class="mySliderCover">
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://4.bp.blogspot.com/-xodY29S36Bw/U_oKuovE6aI/AAAAAAAAB2w/BkNvIfbatjs/s1600/3rd%2Bcover.png" alt="Chania">
				<div class="carousel-caption">
					<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			</div>
			<div class="item">
				<img src="http://images.firstcovers.com/covers/flash/c/civil_engineering-1308248.jpg" alt="Chania">
				<div class="carousel-caption">
					<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			</div>
			<div class="item">
				<img src="http://1.bp.blogspot.com/-HX6FZpP9PXY/U_oKy8ptv0I/AAAAAAAAB24/_zBRMF1OU20/s1600/2ndcover.png" alt="Chania">
				<div class="carousel-caption">
					<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			</div>
			<div class="item">
				<img src="http://images.firstcovers.com/covers/flash/c/civil_engineer-754167.jpg" alt="Chania">
				<div class="carousel-caption">
					<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			</div>
			<div class="item">
				<img src="http://images.firstcovers.com/covers/flash/c/civil_engineering-1243475.jpg" alt="Chania">
				<div class="carousel-caption">
					<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			</div>
			<div class="item">
				<img src="http://4.bp.blogspot.com/-WUipsD0gDpc/U_oK_jLlftI/AAAAAAAAB3I/7tFPuFDNd7w/s1600/6TH%2BCOVER.png" alt="Chania">
				<div class="carousel-caption">
					<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.pagecovers.com/covers/other/civil_engineering.jpg" alt="Chania">
				<div class="carousel-caption">
					<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.cee.ntu.edu.sg/Programmes/graduate/MSc_CE/PublishingImages/MSc_CE.jpg" alt="Chania">
				<div class="carousel-caption">
					<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="parallax-window parallax-2" data-parallax="scroll" data-image-src="<?= get_template_directory_uri() ?>/img/parallax2.png">
	<h2 class="white-color text-center">مرحباً بك في ....</h2>
	<h3 class="white-color text-center">يمكنك طلب خدماتنا من هنا</h3>
	<h3 class="white-color text-center"> ......خدماتنا متوافرة على مدى ..</h3>
</div>
<div class="container-fluid myServices" id="servicse">
	<div class="row">
		<?php
		$args=array(
		  'post_type' => 'service',
		  'post_status' => 'publish',
		  'posts_per_page' => -1,
		  'caller_get_posts'=> 1
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="box box1">
						<a href="<?php the_permalink(); ?>" style="background-image:url(<?php the_post_thumbnail_url(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
					</div>
				</div>
			<?php
			endwhile;
		}
		wp_reset_query();  // Restore global post data stomped by the_post().
		?>
	</div> 
</div>
<div class="parallax-window parallax-1 hidden-sm hidden-xs" data-parallax="scroll" data-image-src="<?= get_template_directory_uri() ?>/img/parallax1.png">
	<div class="quote">
		<div class="quote-container">
			<div class="quote_block">
				<div class="quote_img">
					<img class="img-responsive" src="<?= get_template_directory_uri() ?>/img/quotation_img.jpg" alt="">
				</div>
				<div class="quote_text">
					<p>
						Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="text-center">
	<h2>مشاريعنا</h2>
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
		<h4 class="text-left"><a href="<?= get_permalink( get_page_by_path( 'projects' ) ) ?>">رؤية المزيد من المشاريع ..</a></h4>
	</div>
</div>
<?php get_footer();?>