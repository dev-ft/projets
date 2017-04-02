<?php
/**
 * Header section
 *
 * @package parallax-one
 */

$paralax_one_header_logo = get_theme_mod( 'paralax_one_header_logo', parallax_get_file( '/images/logo-2.png' ) );
$parallax_one_header_title = get_theme_mod( 'parallax_one_header_title',esc_html__( 'Simple, Reliable and Awesome.','parallax-one' ) );
$parallax_one_header_subtitle = get_theme_mod( 'parallax_one_header_subtitle','Lorem ipsum dolor sit amet, consectetur adipiscing elit.' );
$parallax_one_header_button_text = get_theme_mod( 'parallax_one_header_button_text',esc_html__( 'GET STARTED','parallax-one' ) );
$parallax_one_header_button_link = get_theme_mod( 'parallax_one_header_button_link','#' );
if ( ! empty( $parallax_one_header_button_link ) && strpos( $parallax_one_header_button_link, '#' ) === 0 ) {
	$parallax_one_go_to = 'onclick="return false;" data-anchor="' . esc_attr( $parallax_one_header_button_link ) . '"';
} else {
	$parallax_one_go_to = 'onclick="parent.location=\'' . esc_url( $parallax_one_header_button_link ) . '\'" data-anchor=""';
}

$parallax_one_enable_move = get_theme_mod( 'paralax_one_enable_move' );
$parallax_one_first_layer = get_theme_mod( 'paralax_one_first_layer', parallax_get_file( '/images/background1.png' ) );
$parallax_one_second_layer = get_theme_mod( 'paralax_one_second_layer',parallax_get_file( '/images/background2.png' ) );

if ( ! empty( $paralax_one_header_logo ) || ! empty( $parallax_one_header_title ) || ! empty( $parallax_one_header_subtitle ) || ! empty( $parallax_one_header_button_text ) ) {

	if ( ! empty( $parallax_one_enable_move ) && $parallax_one_enable_move ) {

		echo '<ul id="parallax_move">';


		if ( empty( $parallax_one_first_layer ) && empty( $parallax_one_second_layer ) ) {

			$parallax_one_header_image2 = get_header_image();
			echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . $parallax_one_header_image2 . ');"></li>';

		} else {

			if ( ! empty( $parallax_one_first_layer ) ) {
				echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . $parallax_one_first_layer . ');"></li>';
			}
			if ( ! empty( $parallax_one_second_layer ) ) {
				echo '<li class="layer layer2" data-depth="0.20" style="background-image: url(' . $parallax_one_second_layer . ');"></li>';
			}
		}

		echo '</ul>';

	} ?>

	<?php parallax_hook_heading_before(); ?>
	

	<?php parallax_hook_heading_after(); ?>
	<?php
} // End if(). ?>
