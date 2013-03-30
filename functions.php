<?php
/*	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
*/
    if(function_exists('register_nav_menus')){
        register_nav_menu('main_nav', 'Main Menu');
    }

    if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
            'name' => 'Right Sidebar1',
            'id' => 'sidebar1'
            ));
        register_sidebar(array(
            'name' => 'Right Sidebar2',
            'id' => 'sidebar2'
            ));
    }

    function start_el (&$output, $item, $depth, $args){
        global $wp_query;
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $class_names = $value = '';
    }
?>
