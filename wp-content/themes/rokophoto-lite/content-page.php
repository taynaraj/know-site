<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RokoPhoto
 */
?>

<!-- Blog post -->

<div <?php post_class( 'blog-post' ); ?> id="post-<?php the_ID(); ?>">

	<div class="container">
		<div class="post wow fadeIn" data-wow-duration="2s">
			
			<div class="post-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
