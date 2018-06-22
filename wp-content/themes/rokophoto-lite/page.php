<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RokoPhoto
 */

get_header(); ?>
<section class="header-home backgroundHeaderPage" style="background-image:url('<?php the_post_thumbnail_url(); ?>')" >
   <div class="dark-overlay vision">
      <div class="container">
         <div class="centered vision-border wow bounceIn">
            <h2><?php echo get_the_title(); ?></h2>
         </div>
      </div>
   </div>
</section>
	<!-- Page
	================================================== -->
	<div class="blog">
		<div class="container">
			<div class="row">

			<?php if ( have_posts() ) : ?>

				<?php
				while ( have_posts() ) :
					the_post();
?>
						<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

			</div>
		</div>
	</div>
	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		echo '<div class="comments-wrap">';
		comments_template();
		echo '</div>';
	endif;
	?>

<?php get_footer(); ?>
