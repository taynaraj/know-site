<?php
   /**
    * Template Name: Ebook Formulário
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
<?php
   //variável com o nome do diretório do template na instalação do wordpress	
   $pasta = esc_url( get_template_directory_uri() ); 
?>
<section class="header-home backgroundHeaderEbook" >
   <div class="dark-overlay vision">
      <div class="container">
         <div class="centered vision-border wow bounceIn">
            <h2><?php echo get_the_title(); ?></h2>
         </div>
      </div>
   </div>
</section>
<!-- Home Blog Content -->
<?php get_sidebar(); ?>
<div class="blog">
   <div class="container container-blog">
	   <h3 class="subtitle-page"><?php the_excerpt(); ?></h3>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php the_content(); ?>
				
			</div>
		
		</div>

		
   </div>
  
</div>



<?php
   get_sidebar( 'bottom' );
   get_footer();
   ?>

