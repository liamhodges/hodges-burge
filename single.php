<?php get_header(); ?>
	<div id="header-alt">			<h1><a href="/"><div id="logo-banner"></div> <!--logo-banner div ends--></a></h1>	</div> <!--header-alt div ends--></div> <!--container-header div ends--><div id="main-background">		<div id="container-main">		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>				<div id="post">					<h2><?php the_title(); ?></h2>			<p><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>posted on <?php the_date(); ?> • </time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></p>			<?php the_content(); ?>									<?php if ( get_the_author_meta( 'description' ) ) : ?>			<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>			<h3>About <?php echo get_the_author() ; ?></h3>			<?php the_author_meta( 'description' ); ?>			<?php endif; ?>		</div>		<?php endwhile; ?>

		<div id="sidebar">
		
			<?php get_sidebar(); ?>
		
		</div> <!--sidebar div ends-->				<?php comments_template( '', true ); ?>		
	<div style="clear: both"></div>	</div> <!--container-main ends-->	</div> <!--main-background ends--><?php get_footer(); ?>