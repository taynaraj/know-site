<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RokoPhoto
 */

get_header(); ?>
	<!-- Blog Posts
	================================================== -->
	<section class="header-home backgroundHeaderBlog" >
   <div class="dark-overlay vision">
      <div class="container">
         <div class="centered vision-border wow bounceIn">
            <h2><?php echo single_cat_title(); ?></h2>
         </div>
      </div>
   </div>
</section>
	<?php get_sidebar(); ?>
	<div class="blog">
		<div class="container">
			<div class="row">

			<?php if ( have_posts() ) : ?>

				<?php
				while ( have_posts() ) :
					the_post();
?>
						<?php get_template_part( 'content' ); ?>
				<?php endwhile; ?>

				<!-- Pagination -->
				<?php rokophoto_pagination(); ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

			</div>
		</div>
	</div>
	<?php get_sidebar( 'bottom' ); ?>

<?php get_footer(); ?>
