<?php include (TEMPLATEPATH . '/header-alt.php'); ?>
<div id="main-background">		<div id="container-main">		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>				<div id="post">					<h2><?php the_title(); ?></h2>			<p><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>posted on <?php the_date(); ?> • </time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></p>			<?php the_content(); ?>									<?php if ( get_the_author_meta( 'description' ) ) : ?>			<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>			<h3>About <?php echo get_the_author() ; ?></h3>			<?php the_author_meta( 'description' ); ?>			<?php endif; ?>						<?php comments_template( '', true ); ?>				</div>				<div style="clear: both"></div>		<?php endwhile; ?>

		<div id="sidebar">
		
			<?php get_sidebar(); ?>
		
		</div> <!--sidebar div ends-->
	</div> <!--container-main ends-->	</div> <!--main-background ends--><?php get_footer(); ?>