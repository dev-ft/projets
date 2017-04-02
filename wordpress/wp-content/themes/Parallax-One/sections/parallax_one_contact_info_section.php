<?php
/**
 * SECTION: CONTACT INFO
 *
 * @package parallax-one
 */

$parallax_one_contact_info_item = get_theme_mod( 'parallax_one_contact_info_content', json_encode( array(
	array( 'icon_value' => 'icon-basic-mail' ,'text' => 'contact@site.com', 'link' => '#', 'id' => 'parallax_one_56d450a72cb3a' ),
	array( 'icon_value' => 'icon-basic-geolocalize-01' ,'text' => 'Company address', 'link' => '#', 'id' => 'parallax_one_56d069b88cb6f' ),
	array( 'icon_value' => 'icon-basic-tablet' ,'text' => '0 332 548 954', 'link' => '#', 'id' => 'parallax_one_56d069b98cb70' ),
) )	);
$parallax_one_frontpage_animations = get_theme_mod( 'parallax_one_enable_animations', false );

$allowed_protocols = wp_allowed_protocols();
array_push( $allowed_protocols,'callto' );

if ( ! parallax_one_general_repeater_is_empty( $parallax_one_contact_info_item ) ) {
	$parallax_one_contact_info_item_decoded = json_decode( $parallax_one_contact_info_item );
	parallax_hook_contact_before(); ?>
	<div class="contact-info" id="contactinfo" role="region" aria-label="<?php esc_html_e( 'Contact Info','parallax-one' ); ?>">
		<?php parallax_hook_contact_top(); ?>
		<div class="section-overlay-layer">
			<div class="container">
				<div class="row contact-links">
					<?php
					if ( ! empty( $parallax_one_contact_info_item_decoded ) ) {
						foreach ( $parallax_one_contact_info_item_decoded as $parallax_one_contact_item ) {

							if ( ! empty( $parallax_one_contact_item->id ) ) {
								$id = esc_attr( $parallax_one_contact_item->id );
							}

							if ( ! empty( $parallax_one_contact_item->icon_value ) ) {
								if ( function_exists( 'pll__' ) ) {
									$icon = pll__( $parallax_one_contact_item->icon_value );
								} else {
									$icon = apply_filters( 'wpml_translate_single_string', $parallax_one_contact_item->icon_value, 'Parallax One -> Contact section', 'Contact box icon ' . $id );
								}
							}

							if ( ! empty( $parallax_one_contact_item->text ) ) {
								if ( function_exists( 'pll__' ) ) {
									$text = pll__( $parallax_one_contact_item->text );
								} else {
									$text = apply_filters( 'wpml_translate_single_string', $parallax_one_contact_item->text, 'Parallax One -> Contact section', 'Contact box text ' . $id );
								}
							}

							if ( ! empty( $parallax_one_contact_item->link ) ) {
								if ( function_exists( 'pll__' ) ) {
									$link = pll__( $parallax_one_contact_item->link );
								} else {
									$link = apply_filters( 'wpml_translate_single_string', $parallax_one_contact_item->link, 'Parallax One -> Contact section', 'Contact box link ' . $id );
								}
							}

							if ( ! empty( $icon ) || ! empty( $text ) ) {
								parallax_hook_contact_entry_before(); ?>
								<div class="col-sm-4 contact-link-box col-xs-12" <?php if ( ! empty( $parallax_one_frontpage_animations ) && ( (bool) $parallax_one_frontpage_animations === true ) ) {
									echo 'data-scrollreveal="enter top after 0.15s over 1s"';
}?>>
									<?php
									parallax_hook_contact_entry_top();

									if ( ! empty( $icon ) ) {  ?>
											<div class="icon-container"><span class="fa <?php echo esc_attr( $icon )?> colored-text"></span></div>
									<?php
									}
                                    
                                    //// GV
                                    $tmp = str_ireplace('<br />', "\n", html_entity_decode($text));
                                    $tmp = str_ireplace('<br/>', "\n", $tmp);
                                    $tmp = str_ireplace('<br>', "\n", $tmp);
                                    while (false != stripos("\n", $tmp)) {
                                        $tmp = str_ireplace("\n\n", "\n", $tmp);
                                    }
                                
                                    $tmp = explode("\n", $tmp);
                                    $text1=$text2=null;
                                    if (count($tmp)>=2) {
                                        $text1 = $tmp[0];
                                        $text2 = implode('<br />', array_slice ($tmp , 1));
                                        
                                        $cleanNumber = str_replace(' ', '', $text2);
                                        $cleanNumber = trim($cleanNumber);
                                        if (is_phone_number($cleanNumber)) {
                                            $text2 = '<a href="tel:'.$cleanNumber.'">'.$text2.'</a>';
                                        }
                                    }
                                    ///
                                
									if ( ! empty( $text ) ) {
										if ( ! empty( $link ) ) {  ?>
										<?php
                                            /*
											<a href="<?php echo esc_url( $link, $allowed_protocols ); ?>" class="strong">
											 */
                                                
                                                if (!isset($text1) && !isset($text2)) {
                                                    echo html_entity_decode( $text ); 
                                                } else {
                                                    echo '<div class="huet-line1">'.( $text1 ).'</div>';
                                                  //  echo '<br />';
                                                    echo '<span class="huet-line2">'.( $text2 ).'</span>';
                                                }
                                                
											//</a>
											?>
										<?php
										} else {
                                            if (!isset($text1) && !isset($text2)) {
                                                echo html_entity_decode( $text ); 
                                            } else {
                                                echo '<div class="huet-line1">'.( $text1 ).'</div>';
                                                  //  echo '<br />';
                                                echo '<span class="huet-line2">'.( $text2 ).'</span>';
                                            }
                                        }
									}
									parallax_hook_contact_entry_bottom(); ?>
								</div>
								<?php
								parallax_hook_contact_entry_after();
							}
						}// End foreach().
					}// End if().
	?>
				</div><!-- .contact-links -->
			</div><!-- .container -->
		</div>
		<?php parallax_hook_contact_bottom(); ?>
	</div><!-- .contact-info -->
	<?php parallax_hook_contact_after(); ?>
<?php
}// End if().

function is_phone_number($inPhone) {
    error_log(__FUNCTION__." receive ".$inPhone);
    $res = preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $inPhone);
    error_log(__FUNCTION__." returns ".$res);
    
    return 1 === preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $inPhone);
}

	?>
