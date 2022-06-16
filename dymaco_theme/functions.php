<?php

function load_stylesheets(){

    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(),false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style',get_template_directory_uri() . '/style.css', array(),rand(111,9999), 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts','load_stylesheets');

function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery3.1.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs(){
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', array(),rand(111,9999), true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

function example_form_plugin(){
	$content = '';
	$content .= '<form method="post" action="https://dymaco.flywheelsites.com/page.php/">';
	$content .= 'Contact Us';
	$content .= '</br><label for="your_name">Name</label>';
	$content .= '</br><input type="text" name="your_name" placeholder="Name" class="form-control"/>';
	
	$content .= '</br><label for="your_email">Email</label>';
	$content .= '</br><input type="email" name="your_email" class="form-control" placeholder="Email"/>';
	
	$content .= '</br><label for="your_email">Email</label>';
	$content .= '</br><textarea name="your_comments" class="form-control" placeholder="your message"></textarea>';
	$content .= '</form>';
	
	$content .= '</br><input type="submit" name="example_type_submit" class="form-control" class="btn btn-md " value="Submit"/>';
	
	return $content;
}

add_shortcode('example_form', 'example_form_plugin');

function example_form_capture(){
	if(isset($_POST['example_type_submit'])){
		$name = sanatize_text_field($_POST['your_name']);
		$email = sanatize_text_field($_POST['your_email']);
		$comments = sanatize_textarea_field($_POST['your_comments']);
		
		$to='paoloafenu@gmail.com';
		$subject='test form submission';
		$message = comments.'-'.$name.'-'.$email;
		wp_mail($to,$subject,$message);
	}
}

add_action('wp_head', 'example_form_capture');

