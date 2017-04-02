<?php
/**
 * SECTION: CUSTOMERS
 *
 * @package parallax-one
 */

$parallax_one_happy_customers_title = get_theme_mod( 'parallax_one_happy_customers_title',esc_html__( 'Happy Customers','parallax-one' ) );
$parallax_one_happy_customers_subtitle = get_theme_mod( 'parallax_one_happy_customers_subtitle',esc_html__( 'Cloud computing subscription model out of the box proactive solution.','parallax-one' ) );
$parallax_one_testimonials_content = get_theme_mod( 'parallax_one_testimonials_content', json_encode( array(
	array( 'image_url' => parallax_get_file( '/images/clients/1.jpg' ),'title' => esc_html__( 'Happy Customer','parallax-one' ),'subtitle' => esc_html__( 'Lorem ipsum','parallax-one' ),'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','parallax-one' ),'id' => 'parallax_one_56fd526edcd4e' ),
	array( 'image_url' => parallax_get_file( '/images/clients/2.jpg' ),'title' => esc_html__( 'Happy Customer','parallax-one' ),'subtitle' => esc_html__( 'Lorem ipsum','parallax-one' ),'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','parallax-one' ),'id' => 'parallax_one_56fd526ddcd4d' ),
	array( 'image_url' => parallax_get_file( '/images/clients/3.jpg' ),'title' => esc_html__( 'Happy Customer','parallax-one' ),'subtitle' => esc_html__( 'Lorem ipsum','parallax-one' ),'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo. Fusce malesuada vulputate faucibus. Integer in hendrerit nisi. Praesent a hendrerit urna. In non imperdiet elit, sed molestie odio. Fusce ac metus non purus sollicitudin laoreet.','parallax-one' ),'id' => 'parallax_one_56fd5259dcd4c' ),
) ) );
$happy_customers_wrap_piterest = get_theme_mod( 'paralax_one_testimonials_pinterest_style','5' );
$parallax_one_frontpage_animations = get_theme_mod( 'parallax_one_enable_animations', false );


if ( ! empty( $parallax_one_happy_customers_title ) || ! empty( $parallax_one_happy_customers_subtitle ) || ! parallax_one_general_repeater_is_empty( $parallax_one_testimonials_content ) ) { ?>
	<?php parallax_hook_tetimonials_before(); ?>
	<section class="testimonials" id="customers" role="region" aria-label="<?php esc_html_e( 'Testimonials','parallax-one' ) ?>">
		
		<div class="ruban-menus_flex">
			<h2 id="menus">+ de 100 pizzas ø 33CM</h2>
		</div>
		
		<?php parallax_hook_tetimonials_top(); ?>
		<div class="section-overlay-layer">
			<div class="container">
				<?php
				if ( ! empty( $parallax_one_happy_customers_title ) || ! empty( $parallax_one_happy_customers_subtitle ) ) { ?>
					
					
				<?php
				}

				if ( ! empty( $parallax_one_testimonials_content ) ) { ?>
				<div id="happy_customers_wrap" class="testimonials-wrap <?php if ( ! empty( $happy_customers_wrap_piterest ) ) { echo 'happy_customers_wrap_piterest'; } else { echo ''; } ?>">
				    <img id="menu" src="wp-content\themes\Parallax-One_enfant\images\menu.jpg" alt="CARTE MENU">
                </div>
                <div id="container_vc">
                    <a id="notre-menu" href="wp-content\themes\Parallax-One_enfant\documents\menu.pdf" target="_blank">Agrandir le menu</a>
                </div>
            </div>
					<?php
				} // End if(). ?>
			</div>
		</div>
		<?php parallax_hook_tetimonials_bottom(); ?>
	</section><!-- customers -->
	<?php parallax_hook_tetimonials_after(); ?>
<?php
} else {
	if ( is_customize_preview() ) { ?>
		<?php parallax_hook_tetimonials_before(); ?>
		<section class="testimonials paralax_one_only_customizer" id="customers" role="region" aria-label="<?php esc_html_e( 'Testimonials','parallax-one' ); ?>">
			<?php parallax_hook_tetimonials_top(); ?>
			<div class="section-overlay-layer">
				<div class="container">
					<div class="section-header">
						<h2 class="dark-text paralax_one_only_customizer"></h2><div class="colored-line paralax_one_only_customizer"></div>
						<div class="sub-heading paralax_one_only_customizer"></div>
					</div>
				</div>
			</div>
			<?php parallax_hook_tetimonials_bottom(); ?>
		</section><!-- customers -->
		<?php parallax_hook_tetimonials_after(); ?>
<?php
	}
} // End if().
