<?php
/**
 * SECTION: CLIENTS LOGOs
 *
 * @package parallax-one
 */

$parallax_one_logos = get_theme_mod('parallax_one_logos_content', json_encode( array(
	array( 'image_url' => parallax_get_file( '/images/companies/1.png' ) ,'link' => '#', 'id' => 'parallax_one_56d7ea7f40f56' ),
	array( 'image_url' => parallax_get_file( '/images/companies/2.png' ) ,'link' => '#', 'id' => 'parallax_one_56d7f2cb8a158' ),
	array( 'image_url' => parallax_get_file( '/images/companies/3.png' ) ,'link' => '#', 'id' => 'parallax_one_56d7f2cc8a159' ),
	array( 'image_url' => parallax_get_file( '/images/companies/4.png' ) ,'link' => '#', 'id' => 'parallax_one_56d7f2ce8a15a' ),
	array( 'image_url' => parallax_get_file( '/images/companies/5.png' ) ,'link' => '#', 'id' => 'parallax_one_56d7f2cf8a15b' ),
) ) );
$parallax_one_frontpage_animations = get_theme_mod( 'parallax_one_enable_animations', false );

if ( ! empty( $parallax_one_logos ) ) {
	$parallax_one_logos_decoded = json_decode( $parallax_one_logos );
	parallax_hook_logos_before(); ?>

	
		<?php
		parallax_hook_logos_bottom();?>
	</div>
	<?php
	parallax_hook_logos_after();
} // End if(). ?>
