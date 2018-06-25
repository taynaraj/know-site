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
<div class="container">
<div <?php post_class( 'blog-posts row category-item' ); ?> id="post-<?php the_ID(); ?>">

	
		<div class="post wow fadeIn col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12" data-wow-duration="2s">
			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<?php
					$image_id         = get_post_thumbnail_id();
					$image_url_mobile = wp_get_attachment_image_src( $image_id, 'blog_post_thumbnail_mobile', true );
				?>
				<picture>
					<source media="(max-width: 200px)" srcset="<?php echo $image_url_mobile[0]; ?>">
						<?php
						the_post_thumbnail(
							'blog_post_thumbnail', array(
								'class' => 'img-responsive',
							)
						);
						?>
				</picture>
			<?php endif; ?>	
			<div class="tag-category"> <?php the_category( ', ' ); ?></div>
		
		</div>
		<div class="post wow fadeIn col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
		<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<ul class="list-inline">
				<li><?php _e( 'Post By:', 'rokophoto-lite' ); ?> <?php the_author_posts_link(); ?></li>
				<li><?php _e( 'Date:', 'rokophoto-lite' ); ?> <time><?php the_time( get_option( 'date_format' ) ); ?></time></li>
			</ul>
			<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
		</div>
			
			
			
			
		
	

</div>
</div>