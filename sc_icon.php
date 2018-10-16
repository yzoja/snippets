<?php 

function sc_icon( $atts , $content = null ) {
	$atts = shortcode_atts(
		array(
			'icon' => '',
		),
		$atts
	);
	return '<p class="icon-box"><i class="fa fa-'.$atts["icon"].'"></i><span>' . $content . '</span></p>';
}
add_shortcode( 'icon', 'sc_icon' );