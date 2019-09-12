<?php
function css_enqueue_styles(){
	//enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/custom.css', array('parent-theme'));
	//enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
	//enqueue modal styles
	wp_enqueue_style('child-theme', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css');
	//enqueue modal script
	wp_enqueue_script('child-theme', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js');	
}
add_action('wp_enqueue_scripts','css_enqueue_styles');
