<?php
   /**
    * Template Name: Blog
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
<section class="header-home backgroundHeaderBlog" >
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
			<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
				<?php query_posts ('showposts=1'); if(have_posts()) : ?>
				<?php while(have_posts())  : the_post(); ?>
	
					
						<div class="image-featured">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
							<div class="tag-category"><?php the_category( ', ' ); ?></div>
						</div>
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
						</a>
					
				
				<?php endwhile; endif;?>
				<div class="row recents-posts">
					
				<?php query_posts ('posts_per_page=3&offset=1'); if(have_posts()) : ?>
				<?php while(have_posts())  : the_post(); ?>
               
			
					<div class="post-recent-item col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
						<a href="<?php the_permalink(); ?>">
							<div class="zoom"><?php the_post_thumbnail(); ?>
						    </div>
							<div class="tag-category"><?php the_category( ', ' ); ?></div>
							<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3><br />
							<?php the_excerpt(); ?>
							</a>
						</a>
					</div>
			 
				<?php endwhile; endif;?>

				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
				<div class="list-category">
					<h2>Categorias</h2>
					<?php $argslist = array(
							'style'              => 'list',
							'show_count'         => 0,
							'use_desc_for_title' => 1,
							'child_of'           => 0,
							'title_li'           => __( '' ),
							'number'             => null,
							'echo'               => 1,
							'depth'              => 2,
						); ?>

					<?php wp_list_categories($argslist) ?>

					<h2>Posts Populares</h2>
					<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title,post_excerpt FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 4");
					foreach ($result as $post) {
					setup_postdata($post);
					$postid = $post->ID;
					$title = $post->post_title;
					$excerpt = $post->post_excerpt;
					$commentcount = $post->comment_count;
					if ($commentcount != 0) { ?>
					<div class="post-popular-item"><a href="<?php echo get_permalink($postid); ?>"title="<?php echo $title ?>"> 
					<h4><?php echo $title ?></h4><br />
					<p><?php echo $excerpt ?></p>
					</a> </div> <?php } } ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				<a href=" http://knowsolution.com.br/911-2/" class="materiais">
					<img src="http://knowsolution.com.br/wp-content/uploads/2017/06/02.png" style="width: 100%">
				</a>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 form-group">
			<form id="mc4wp-form-1" class="" method="post" data-id="1117"
								 data-name="Newsletter">
									<div class="mc4wp-form-fields">
										<div>
											<p>
												<strong>Receba conteúdos em primeira mão!</strong>
											</p>
											<p>
												<input type="email" name="EMAIL" placeholder="Seu e-mail" class="form-control" required />
											</p>
											<p>
												<input class="btn-news" type="submit" value="Enviar" />
											</p>
										</div>
										<label style="display: none !important;">Leave this field empty if you're human:
											<input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"
											/>
										</label>
										<input type="hidden" name="_mc4wp_timestamp" value="1529614311" />
										<input type="hidden" name="_mc4wp_form_id" value="1117" />
										<input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
									</div>
									<div class="mc4wp-response"></div>
								</form>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKnowSolutions%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=359719794176827"
									width="100%" height="220px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
		</div>
   </div>
  
</div>



<?php
   get_sidebar( 'bottom' );
   get_footer();
   ?>

