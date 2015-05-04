<?php

/* Remove extra P tags
-------------------------------------------------------------------------------------------------------------------*/

function shortcodes_formatter($content) {
	$block = join("|", array(
		"row",
		"columns",
		"tabs",
		"tab",
		"accordion",
		"teaser",
		"btn",
		"blog",
		"staff",
		"testimonials",
		"gallery",
		"pricing_table",
		"item",
		"progressbar",
		//"images",
		"alert",
		"icon",
		"helper"
   	)	);

	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);

	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)/","[/$2]",$rep);

	return $rep;
}

add_filter('the_content', 'shortcodes_formatter');
add_filter('widget_text', 'shortcodes_formatter');


/* Pre Process Shortcodes
-------------------------------------------------------------------------------------------------------------------*/

function pre_process_shortcode($content) {
    global $shortcode_tags;
    
	add_shortcode('row', 'shortcode_row');
	add_shortcode('column', 'shortcode_column');
	add_shortcode('tabs', 'shortcode_tabs');
	add_shortcode('tab', 'shortcode_tab');
	add_shortcode('accordion', 'shortcode_accordion');
	add_shortcode('teaser', 'shortcode_teaser');
	add_shortcode('btn', 'shortcode_btn');
	add_shortcode('blog', 'shortcode_blog');
	add_shortcode('staff', 'shortcode_staff');
	add_shortcode('testimonials', 'shortcode_testimonials');
	add_shortcode('gallery', 'shortcode_gallery');
	add_shortcode('pricing_table', 'shortcode_pricing_table');
	add_shortcode('item', 'shortcode_item');
	add_shortcode('progressbar', 'shortcode_progressbar');
	//add_shortcode('images', 'shortcode_images');
	add_shortcode('alert', 'shortcode_alert');
	add_shortcode('icon', 'shortcode_icon');
	add_shortcode('helper', 'shortcode_helper');
 
    $content = do_shortcode($content);
 
    return $content;
}

add_filter('the_content', 'pre_process_shortcode', 7);
add_filter('widget_text', 'pre_process_shortcode', 7);


/* Including Shortcodes
-------------------------------------------------------------------------------------------------------------------*/

include_once('accordion.php');
include_once('column.php');
include_once('icon.php');
include_once('row.php');
include_once('tabs.php');
include_once('button.php');
include_once('teaser.php');
include_once('helper.php');
include_once('pricing.php');
include_once('alerts.php');
include_once('progressbar.php');
include_once('staff.php');
include_once('testimonials.php');
include_once('blog.php');


/* Tiny MCE buttons
-------------------------------------------------------------------------------------------------------------------*/

add_action('init', 'add_button');

function add_button() {  
	if ( current_user_can('edit_posts') && current_user_can('edit_pages') ) {
		add_filter('mce_external_plugins', 'add_plugin');
		add_filter('mce_buttons_3', 'register_buttons');
	}
}

// Define Position of TinyMCE Icons
function register_buttons($buttons) {  
	array_push(
   		$buttons,
		"row",
		"column",
		"tabs",
		"accordion",
		"teaser",
		"btn",
		"blog",
		"staff",
		"testimonials",
		"gallery",
		"pricing_table",
		"progressbar",
		//"images",
		"alert",
		"video",
		"audio",
		"embed",
		"icon",
		"helper"
	);
   return $buttons;  
}

// Add Buttons to Visual Editor
function add_plugin($plugin_array) {  
   $plugin_array['row'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['column'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['tabs'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['accordion'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['teaser'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['btn'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['blog'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['staff'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['testimonials'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['gallery'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['pricing_table'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['progressbar'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   //$plugin_array['images'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['alert'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['video'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';
   $plugin_array['audio'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js'; 
   $plugin_array['embed'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js'; 
   $plugin_array['icon'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js'; 
   $plugin_array['helper'] = get_template_directory_uri().'/framework/inc/shortcodes/tinymce/tinymce.js';

   return $plugin_array;  
}