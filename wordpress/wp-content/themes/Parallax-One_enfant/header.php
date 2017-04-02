<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package parallax-one
 */
?><!DOCTYPE html>
<?php parallax_hook_html_before(); ?>
<html <?php language_attributes(); ?> class="no-js">
<head>
<?php parallax_hook_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php parallax_hook_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage" <?php body_class(); ?> dir="<?php if ( is_rtl() ) { echo 'rtl'; } else { echo 'ltr';} ?>">
<?php parallax_hook_body_top(); ?>
<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
	<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'parallax-one' ); ?></a>
	<!-- =========================
	 PRE LOADER
	============================== -->
	<?php

	if ( is_front_page() && ! is_customize_preview() && get_option( 'show_on_front' ) != 'page' ) :

		$parallax_one_disable_preloader = get_theme_mod( 'paralax_one_disable_preloader' );

		if ( isset( $parallax_one_disable_preloader ) && ($parallax_one_disable_preloader != 1) ) :

			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';

		endif;

	endif; ?>


	<!-- =========================
	 SECTION: HOME / HEADER
	============================== -->
	<!--header-->
	<?php parallax_hook_header_before(); ?>
	<header itemscope itemtype="http://schema.org/WPHeader" id="masthead" role="banner" data-stellar-background-ratio="0.5" class="header header-style-one site-header">
        <div class="container_bgM">
            <img id="bg-mobile"src="wp-content/themes/Parallax-One_enfant/images/bg-mobile.jpg"/>
            <video id="background" autoplay loop>
                <source src="wp-content/themes/Parallax-One_enfant/vidéos/background.mp4" type="video/mp4">
                <source src="wp-content/themes/Parallax-One_enfant/vidéos/background_npec.ogv" type="video/ogg">
            </video>
            <div id="pizzeria">
                
            </div>
            <div id="infos_pizzas">
                Pizzas cuites au feu de bois
            </div>
            <div id="infos_livraison">
                À emporter ou en livraison
            </div>
            <div id="btn_menu">
                <a id="href_menu" href="#customers">Voir notre menu</a>
            </div>
            <div id="btn_commande">
                <a id="href_commande" href="#contactinfo">Ou passez votre commande</a>
            </div>
        </div>
	   
	    
	<?php parallax_hook_header_top(); ?>
		<!-- COLOR OVER IMAGE -->
		<?php
			$paralax_one_sticky_header = get_theme_mod( 'paralax_one_sticky_header','parallax-one' );
		if ( isset( $paralax_one_sticky_header ) && ($paralax_one_sticky_header != 1) ) {
			$fixedheader = 'sticky-navigation-open';
		} else {
			if ( ! is_front_page() ) {
				$fixedheader = 'sticky-navigation-open';
			} else {
				$fixedheader = '';
				if ( 'posts' != get_option( 'show_on_front' ) ) {
					if ( isset( $paralax_one_sticky_header ) && ($paralax_one_sticky_header != 1) ) {
						$fixedheader = 'sticky-navigation-open';
					} else {
						$fixedheader = '';
					}
				}
			}
		}
		?>
