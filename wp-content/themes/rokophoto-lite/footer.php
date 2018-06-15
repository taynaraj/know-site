<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RokoPhoto
 */

global $wp_customize;
$rokophoto_social_display_settings = get_theme_mod( 'rokophotolite_social_display_settings' );

if ( ( isset( $rokophoto_social_display_settings ) && $rokophoto_social_display_settings != 1 ) || isset( $wp_customize ) ) :
?>

<!-- About Section
================================================== -->

<footer class="footerPrincipal wow bounceIn animated" style="opacity: 1;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footerInfo">
					<?php
					$logourl = get_theme_mod( 'rokophotolite_logo_image', get_template_directory_uri() . '/img/logo.png' );
					
					echo '<a class="footerLogo" href="/"><span class="navbar-brand navbar-brand-logo"><img src="' . $logourl . '" alt="logo"></span></a>';
						?>
                        <div class="footerTxt">
                            <p>
							<?php
			$subheadtitle = get_theme_mod( 'rokophotolite_subhead_title', __( 'Welcome to', 'rokophoto-lite' ) );
			
				echo $subheadtitle ;
		
			?>
							</p>
                        </div>
                       
						<ul class="footerLinkIcon">
			<?php
			$rokophoto_link_tab = get_theme_mod( 'rokophotolite_link_tab' );
			$facebookurl        = get_theme_mod( 'rokophotolite_facebook_link', '#' );
			$linkedinurl        = get_theme_mod( 'rokophotolite_linkedin_link','#' );
			$twitterurl         = get_theme_mod( 'rokophotolite_twitter_link' );
			$behanceurl         = get_theme_mod( 'rokophotolite_behance_link');
			$dribbbleurl        = get_theme_mod( 'rokophotolite_dribbble_link' );
			$flickrurl          = get_theme_mod( 'rokophotolite_flickr_link' );
			$googleplusurl      = get_theme_mod( 'rokophotolite_googleplus_link', '#' );
			$instagramurl       = get_theme_mod( 'rokophotolite_instagram_link' );
			
			$mailurl            = get_theme_mod( 'rokophotolite_mail_link' );
			if ( isset( $rokophoto_link_tab ) && $rokophoto_link_tab == 1 ) {
				$target = '_blank';
			} else {
				$target = '_self';
			}
			if ( ! empty( $facebookurl ) || isset( $wp_customize ) ) {
				if ( empty( $facebookurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-fa rokophoto_only_customizer">';
				} else {
					echo '<li class="social-fa">';
				}
				echo '<a target="' . $target . '" href="' . $facebookurl . '"><i class="fa fa-facebook fa-2x"></i></a></li>';
			}

			if ( ! empty( $twitterurl ) || isset( $wp_customize ) ) {
				if ( empty( $twitterurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-tw rokophoto_only_customizer">';
				} else {
					echo '<li class="social-tw">';
				}
				echo '<a target="' . $target . '" href="' . $twitterurl . '"><i class="fa fa-twitter fa-2x"></i></a></li>';
			}

			if ( ! empty( $behanceurl ) || isset( $wp_customize ) ) {
				if ( empty( $behanceurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-be rokophoto_only_customizer">';
				} else {
					echo '<li class="social-be">';
				}
				echo '<a target="' . $target . '" href="' . $behanceurl . '"><i class="fa fa-behance fa-2x"></i></a></li>';
			}

			if ( ! empty( $dribbbleurl ) || isset( $wp_customize ) ) {
				if ( empty( $dribbbleurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-dr rokophoto_only_customizer">';
				} else {
					echo '<li class="social-dr">';
				}
				echo '<a target="' . $target . '" href="' . $dribbbleurl . '"><i class="fa fa-dribbble fa-2x"></i></a></li>';
			}

			if ( ! empty( $flickrurl ) || isset( $wp_customize ) ) {
				if ( empty( $flickrurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-fl rokophoto_only_customizer">';
				} else {
					echo '<li class="social-fl">';
				}
				echo '<a target="' . $target . '" href="' . $flickrurl . '"><i class="fa fa-flickr fa-2x"></i></a></li>';
			}

			if ( ! empty( $googleplusurl ) || isset( $wp_customize ) ) {
				if ( empty( $googleplusurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-go rokophoto_only_customizer">';
				} else {
					echo '<li class="social-go">';
				}
				echo '<a target="' . $target . '" href="' . $googleplusurl . '"><i class="fa fa-google-plus fa-2x"></i></a></li>';
			}

			if ( ! empty( $instagramurl ) || isset( $wp_customize ) ) {
				if ( empty( $instagramurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-in rokophoto_only_customizer">';
				} else {
					echo '<li class="social-in">';
				}
				echo '<a target="' . $target . '" href="' . $instagramurl . '"><i class="fa fa-instagram fa-2x"></i></a></li>';
			}

			if ( ! empty( $linkedinurl ) || isset( $wp_customize ) ) {
				if ( empty( $linkedinurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-li rokophoto_only_customizer">';
				} else {
					echo '<li class="social-li">';
				}
				echo '<a target="' . $target . '" href="' . $linkedinurl . '"><i class="fa fa-linkedin fa-2x"></i></a></li>';
			}

			if ( ! empty( $mailurl ) || isset( $wp_customize ) ) {
				if ( empty( $mailurl ) && isset( $wp_customize ) ) {
					echo '<li class="social-em rokophoto_only_customizer">';
				} else {
					echo '<li class="social-em">';
				}
				echo '<a href="mailto:' . $mailurl . '"><i class="fa fa-envelope fa-2x"></i></a></li>';
			}
			?>
		</ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
						<div class="h4">Acesse</div>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'menu'            => 'Primary Menu',
								'container_class' => 'menu-container',
								'fallback_cb'     => 'rokophoto_new_setup',
								'items_wrap'      => '<ul class="footerLink">%3$s</ul>',
							)
						);
					?>
                       
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <div class="h4">Destaques Blog</div>
                        <ul class="footerLink">
                            <li><a href="#"></a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="contactInfo">
                        <div class="h4">Entre em Contato</div>
                        <span class="call"><a href="tel:+55213269-5594"><i class="fa fa-phone"></i>(21) 3269-5594</a></span>
                        <span class="email"><a href="mailto:contato@knowsolution.com.br"><i class="fa fa-envelope"></i>contato@knowsolution.com.br</a></span>
                        <a href="" class="contactBtn Btn">Entre em Contato</a>

                    </div>
                </div>
            </div>
            
        </div>
    </footer>

	
</section>
<?php endif; ?>


<?php wp_footer(); ?>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3UWpZYYcZLh3mofzHKvN9j4fzMMjiZ68";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
</body>
</html>
