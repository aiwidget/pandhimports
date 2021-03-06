<?php
global $mk_options;
extract( shortcode_atts( array(
	'desc' 					=> '',
	'desc_text_size' 		=> 15,
	'desc_color' 			=> '#444',
	'percent' 				=> 50,
	'bar_color' 			=> $mk_options['skin_color'],
	'track_color' 			=> '#ececec',
	'line_width' 			=> 10,
	'bar_size' 				=> 150,
	'content' 				=> '',
	'content_type' 			=> 'percent',
	'icon' 					=> '',
	'custom_text' 			=> '',
	'percentage_text_size' 	=> '15',
	'percentage_color' 		=> '#444',
	'el_class' 				=> '',
	'icon_size' 			=> '32',
	'icon_color' 			=> '#444',
	'visibility' 			=> '',
	'animation' 			=> '',
), $atts ) );

$animation_css = '';
if ( $animation != '' ) {
	$animation_css = ' mk-animate-element ' . $animation . ' ';
}

$icon = (strpos($icon, 'mk-') !== FALSE) ? $icon : ( 'mk-'.$icon.'' );

$output = '<div class="'.$animation_css.' '.$visibility.'">';
$output .= '<div class="mk-chart" style="width:'.$bar_size.'px;height:'.$bar_size.'px;" data-percent="'.$percent.'" data-barColor="'.$bar_color.'" data-trackColor="'.$track_color.'" data-lineWidth="'.$line_width.'" data-barSize="'.$bar_size.'">';
if ( $content_type == 'icon' ) {
	$icon_size = (!empty($icon_size)) ? $icon_size : floor( $bar_size/4 );
	$icon_color =  (!empty($icon_color)) ? $icon_color : '#444';
	$output .= '<i style="line-height:'.$bar_size.'px; font-size:'.$icon_size.'px;color:'.$icon_color.'" class="'.$icon.'"></i>';
} elseif ( $content_type == 'custom_text' ) {
	$output .= '<span class="chart-custom-text">'.$custom_text.'</span>';
} else {
	$output .= '<div class="chart-percent" style="color:'.$percentage_color.'; font-size:'.$percentage_text_size.'px;"><span>'.$percent.'</span>%</div>';
}
$output .= '</div>';
$output .= '<div class="mk-chart-desc" style="color:'.$desc_color.'; font-size:'.$desc_text_size.'px;">'.$desc.'</div>';
$output .= '</div>';
echo $output;
