<?php get_header(); ?>

<div id="main-background">
		<div id="container-main">
			<div id="header-images">
		
			<div id="image-1">			
				<a href="http://instagram.com/p/T-XIjfRYy9/"><img class="instagram-image" src="http://distilleryimage9.s3.amazonaws.com/0049343a54b511e2a74822000a9e2993_7.jpg" width="210" height="210"></a>			
			</div>
			
			<div id="image-2">			
				<a href="http://instagram.com/p/SR_qG4RY7Q/"><img class="instagram-image" src="http://distilleryimage0.s3.amazonaws.com/d81e960e33a211e280a722000a9e28dc_7.jpg" width="220" height="220"></a>			
			</div>
			
			<div id="image-3">			
				<a href="http://instagram.com/p/TRyroyAoVY/"><img class="instagram-image" src="http://distilleryimage4.s3.amazonaws.com/01169df0471b11e2aaa222000a1fb843_7.jpg" width="240" height="240"></a>			
			</div>
			
			<div id="image-4">			
					<a href="http://instagram.com/p/Twwm-lAoZs/"><img class="instagram-image" src="http://distilleryimage4.s3.amazonaws.com/5954b458508e11e2ae2622000a1fb7e1_7.jpg" width="220" height="220"></a>			
			</div>
		
		</div> <!--header-images div ends-->
		
		<div id="banner-text">
			<h2>Pull up a chair, take a load off.</h2>
			<h2>Let’s get suburban.</h2>	
		</div>
		
		<div id="main">
		
			<?php if (have_posts()) : ?>
			<ul id="excerpts">
			<?php while (have_posts()) : ?>
			      
			<li><?php the_post(); ?>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'F j, Y' ); ?>" pubdate><?php the_date(); ?></time>
			<?php the_excerpt(); ?>
			</li>
			
			
			<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		
		</div> <!--main div ends-->
		
		<div style="clear: both"></div>
	
	</div> <!--container-main div ends-->

</div> <!--main-background div ends-->

<?php get_footer(); ?>