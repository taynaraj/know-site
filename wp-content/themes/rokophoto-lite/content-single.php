<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RokoPhoto
 */
?>
<!-- Blog post -->

<!-- Blog post real -->
<section class="header-blog" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
	<div class="dark-overlay vision">
		<div class="container">
		<div class="centered vision-border wow bounceIn">
			
			<!--<h2><a href="<php echo esc_url( home_url( '/' ) ); ?>"><php bloginfo( 'name' ); ?></a></h2>!-->
			<h2><?php the_title(); ?></h2>
			<?/*php get_template_part( 'loop-meta' ); */?>
		</div>
		</div>
	</div>
</section>


<div <?php post_class( 'blog-post' ); ?> id="post-<?php the_ID(); ?>">


	<div class="container">
		<div class="post wow fadeIn" data-wow-duration="2s">
			<div class="row info-author">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<ul class="list-author">
						<li><?php _e( 'Publicado por:', 'rokophoto-lite' ); ?> <?php the_author_posts_link(); ?></li>
						<li><?php _e( 'Data:', 'rokophoto-lite' ); ?> <time><?php the_time( get_option( 'date_format' ) ); ?></time></li>
						
					</ul>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right alignRight">
					<?php echo do_shortcode( '[wpusb]' );?>
				</div>
			</div>
			<h2><?php the_title(); ?></h2>
			
			<div class="post-content">
			
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
