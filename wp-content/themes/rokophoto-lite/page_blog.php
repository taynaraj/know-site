<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RokoPhoto
 */

get_header(); ?>

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
