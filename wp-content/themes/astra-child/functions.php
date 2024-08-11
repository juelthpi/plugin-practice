<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


// Start custome code
function label_text_filter_hook($label_text_heading_arg){
	  $label_text_heading_arg="My Word Count";
	return $label_text_heading_arg;
}
add_filter('label_text_heading','label_text_filter_hook');

function label_text_tag_hook($label_text_tag_arg){
	$label_text_tag_arg="h4";
	return $label_text_tag_arg;
}
add_filter('label_text_tag','label_text_tag_hook');

function pqrc_post_type_input($post_type_arg){
	$post_type_arg[]='page';
	// $post_type_arg=array_push('$post_type_arg','page');
	return $post_type_arg;
}
add_filter('pqrc_excluded_post_type','pqrc_post_type_input');

function pqrc_prcode_height_width($height_width_arrg){
	return '200×600';
}
add_filter('pqrc_prcode_dimension','pqrc_prcode_height_width');

function class_name_add_funciton($class_name_add_arg){
$class_name_add_arg="juel";
return $class_name_add_arg;

}
add_filter('class_name_add','class_name_add_funciton');

function pqrc_seeting_init(){
	add_settings_field('pqrc_hight','qr_code_height','pqrc_height_call','general');
	add_settings_field('pqrc_width','qr_code_width','pqrc_weight_call','general');

	register_setting('general','QR_Code_height');
	register_setting('general','QR_Code_width');
}
function pqrc_height_call(){
	$height=get_option('QR_Code_height');
	printf("<input type='text' id='%s' name='%s' value='%s'/>",'pqrc_hight','QR_Code_height',$height);
}
function pqrc_weight_call(){
	$width=get_option('QR_Code_width');
	printf("<input type='text' id='%s' name='%s' value='%s'/>",'pqrc_width','QR_Code_width',$width);
}
 


add_action("admin_init","pqrc_seeting_init");