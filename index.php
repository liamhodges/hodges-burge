<?php get_header(); ?>
	<div id="header">			<h1><a href="/"><div id="logo-banner"></div> <!--logo-banner div ends--></a></h1>	</div> <!--header div ends--></div> <!--container-header div ends-->
<div id="main-background">
		<div id="container-main">
			<div id="header-images">
		
			<div id="image-1" class="single-header-image"></div>
			<div id="image-2" class="single-header-image"></div>
			<div id="image-3" class="single-header-image"></div>
			<div id="image-4" class="single-header-image"></div>
		
		</div> <!--header-images div ends-->
		
		<div id="banner-text">
			<h2>Pull up a chair, take a load off.</h2>			<h2>Let’s get suburban.</h2>		</div>
		
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