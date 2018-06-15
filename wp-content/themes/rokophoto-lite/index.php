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

	<!-- Blog Posts
	================================================== -->
	<?php get_sidebar(); ?>
	<?php
  //variável com o nome do diretório do template na instalação do wordpress	
  $pasta = esc_url( get_template_directory_uri() ); 
?>
	
	
	<div class="blog">
	<div class="container">
	<div class="featured-page">
	<?php query_posts ('page_id=2'); if(have_posts()) : ?>
             <?php while(have_posts())  : the_post(); ?>
               
			<div class="row featured-line">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 item-left">
			
				<a href="<?php the_permalink(); ?>" class="item-graph"> <?php the_post_thumbnail(); ?></a>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 item-right">
				<div>
			 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><br />
			 <p><?php the_excerpt(); ?></div>
</div>
           
     
        
		 
		 
			
			</div>
			<?php endwhile; endif;?>
			<?php query_posts ('page_id=19'); if(have_posts()) : ?>
             <?php while(have_posts())  : the_post(); ?>
               
			<div class="row featured-line">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  item-left">
				<div>
			 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><br />
			 <p><?php the_excerpt(); ?></div>
				
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  item-right">
			<a href="<?php the_permalink(); ?>" class="item-graph"> <?php the_post_thumbnail(); ?></a>
</div>
           
     
        
		 
		 
				</div>
			
			<?php endwhile; endif;?>
			<?php query_posts ('page_id=62'); if(have_posts()) : ?>
             <?php while(have_posts())  : the_post(); ?>
               
			<div class="row featured-line">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 item-left">
			
				<a href="<?php the_permalink(); ?>" class="item-graph"> <?php the_post_thumbnail(); ?></a>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 item-right">
				<div>
			 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><br />
			 <p><?php the_excerpt(); ?></div>
</div>
           
     
        
		 
		 
			
			</div>
			<?php endwhile; endif;?>
	</div>
	</div>
	<div class="backgroundDigital backgroundFeatured">

	<div class="container">
		

		<!--img src="<!?php echo $pasta;?>/img/digital-bg.jpg" /!-->
		<h2>Nossos Clientes</h2>
</div>
</div>
		
	</div>
	<div class="featuredClients">
		<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<p class="center">
			A <strong>Know Solutions</strong> atende clientes de todo o Brasil. Abaixo, você confere as principais empresas* que se beneficiam com as soluções de <strong>Business Intelligence (BI)</strong> propostas pela nossa equipe.</p>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<?php echo do_shortcode("[logo_carousel_slider]"); ?>
</div>
</div>
		
		
	</div>
	<div class="backgroundDepoimentos backgroundFeatured">

	<div class="container">
	<h2>Depoimentos</h2>
</div>
</div>
	<div class="depoimentos">
	<div class="container">
		<div class="row">
			

			<div class="col-xs-12">
				<?php echo do_shortcode("[show_testimonials]"); ?>
			</div>
		</div>
	</div>
</div>
<div class="backgroundContato backgroundFeatured">

	<div class="container">
	<h2>Entre em Contato</h2>
</div>
</div>
<div class="faleConosco">
<div class="container">
		<div class="row">
			

			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
<?php echo do_shortcode("[contact-form-7 id='85' title='Fale Conosco']"); ?>
</div>
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
	<h3>Onde Estamos</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.5233101719464!2d-43.35515018562433!3d-22.93094684449718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd84664c98739%3A0x48058057305130ce!2sAv.+Gerem%C3%A1rio+Dantas%2C+807+-+Pechincha%2C+Rio+de+Janeiro+-+RJ%2C+22743-011!5e0!3m2!1spt-PT!2sbr!4v1529071546782" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<p><strong>Endereço:</strong><br />
Avenida Geremário Dantas, 807. 9º andar, Sala 809.<br /> Bairro: Pechincha</p>
<p><strong>Telefone:</strong><br />
<a href="tel:+55213269-5594"><i class="fa fa-phone"></i>(21) 3269-5594</a></p>

</div>
</div>
</div>

</div>


</div>
</div>
<?php
get_sidebar( 'bottom' );
get_footer();
?>