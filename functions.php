<?php 
	
	function fullmotion_theme_setup(){
		load_theme_textdomain( 'fullmotion' );
		add_theme_support( 'post-thumbnails' );
	}

	add_action('after_setup_theme','fullmotion_theme_setup') ;

?>