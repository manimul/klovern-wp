<?php

/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array(
	'contextual_help' => array(
	  'content'       => array( 
		array(
		  'id'        => 'general_help',
		  'title'     => 'General',
		  'content'   => '<p>Help content goes here!</p>'
		)
	  ),
	  'sidebar'       => '<p>Sidebar content goes here!</p>',
	),
	'sections'        => array(
	  array(
		'id'          => 'general',
		'title'       => 'General'
	  ),	  	  
	  array(
		'id'          => 'header',
		'title'       => 'Header'
	  ),
	  array(
		'id'          => 'color',
		'title'       => 'Color / Layout'
	  ),
	  array(
		'id'          => 'typography',
		'title'       => 'Typography'
	  ),
	  array(
		'id'          => 'blog',
		'title'       => 'Blog'
	  ),
	  array(
		'id'          => 'footer',
		'title'       => 'Footer'
	  ),
	),



/* General */
	'settings'        => array(
	  array(
		'id'          => 'favicon',
		'label'       => 'Favicon (16x16)',
		'desc'        => '',
		'std'         => '',
		'type'        => 'upload',
		'section'     => 'general',
		'class'       => '',
	  ),
	  array(
		'id'          => 'favicon_mobile',
		'label'       => 'Favicon Mobile (57x57)',
		'desc'        => '',
		'std'         => '',
		'type'        => 'upload',
		'section'     => 'general',
		'class'       => '',
	  ),
	  array(
		'id'          => 'favicon_tablet',
		'label'       => 'Favicon Tablet (72x72)',
		'desc'        => '',
		'std'         => '',
		'type'        => 'upload',
		'section'     => 'general',
		'class'       => '',
	  ),
	  array(
		'id'          => 'google-font-api',
		'label'       => 'Google Developer API Key',
		'desc'        => 'Need for Google Maps and Fonts working! Learn how to get yours <a href="https://developers.google.com/api-client-library/python/guide/aaa_apikeys" target="_blank">here</a>.',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'general',
		'class'       => '',
	  ),
	  array(
		'id'          => 'custom_js',
		'label'       => 'Custom JS',
		'desc'        => '',
		'std'         => '',
		'type'        => 'textarea-simple',
		'rows'        => 5,
		'section'     => 'general',
		'class'       => '',
	  ),
	  array(
		'id'          => 'custom_css',
		'label'       => 'Custom CSS',
		'desc'        => '',
		'std'         => '/* DO NOT CHANGE THE CODE BELOW */

html {
	background-color: {{page_background|background-color}};
	background-repeat: {{page_background|background-repeat}};
	background-attachment: {{page_background|background-attachment}};
	background-position: {{page_background|background-position}};
	background-size: {{page_background|background-size}};
	background-image: url("{{page_background|background-image}}");
}

.navbar {
	background-color: {{header_background|background-color}};
	background-repeat: {{header_background|background-repeat}};
	background-attachment: {{header_background|background-attachment}};
	background-position: {{header_background|background-position}};
	background-size: {{header_background|background-size}};
	background-image: url("{{header_background|background-image}}");
}
.dropdown-menu { background-color: {{header_background|background-color}}; }

body > footer {
	background-color: {{footer_background|background-color}};
	background-repeat: {{footer_background|background-repeat}};
	background-attachment: {{footer_background|background-attachment}};
	background-position: {{footer_background|background-position}};
	background-size: {{footer_background|background-size}};
	background-image: url("{{footer_background|background-image}}");
}

body { color: {{text_color}}; }
h1,h2,h3 { color: {{main_headings_color}}; }
h4,h5,h6 { color: {{secondary_headings_color}}; }

.scheme-alternative body { color: {{alternative_text_color}}; }
.scheme-alternative h1,.scheme-alternative h2,.scheme-alternative h3 { color: {{alternative_main_headings_color}}; }
.scheme-alternative h4,.scheme-alternative h5,.scheme-alternative h6 { color: {{alternative_secondary_headings_color}}; }

a,
a:hover,
.navbar-nav > li > a:hover,
.navbar-nav > li > a:focus,
.navbar-nav > .active > a,
.navbar-nav > .active > a:hover,
.navbar-nav > .active > a:focus,
.navbar-nav > .open > a,
.navbar-nav > .open > a:hover,
.navbar-nav > .open > a:focus { color: {{accent_color}}; }

.btn-primary,
.teaser .icon { background-color: {{accent_color}}; }

.btn-primary, .btn-primary:hover { border-color: {{darken_accent_color}}; }
.btn-primary:hover { background-color: {{darken_accent_color}}; }

.navbar-nav > li > a { color: {{menu_color}}; }
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus,
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus,
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus { color: {{menu_color_active}}; }

.dropdown-menu > li > a { color: {{sub_menu_color}}; }

.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus,
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus { color: {{sub_menu_color}}; }

.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {	background-color: {{sub_menu_bg_hover}}; }

body > footer {	color: {{footer_text_color}}; }
body > footer a,
body > footer a:hover { color: {{footer_link_color}}; }

/* Fonts */

body { {{body_font}} }

h1,h2,h3 { {{primary_headings_font}} }

h4,h5,h6 { {{secondary_headings_font}} }

h4,h5,h6 { {{secondary_headings_font}} }

.navbar-nav > li > a { {{navigation_font}} }

.dropdown-menu { {{dropdown_navigation_font}} }',
		'type'        => 'css',
		'rows'        => 10,
		'section'     => 'general',
		'class'       => '',
	  ),


/* Header */

	  array(
		'id'          => 'logo',
		'label'       => 'Logo',
		'desc'        => 'To center your logo vertically - create transparetn PNG-24 canvas with the height of the header, and width of logo image. Put your logo in the center of canvas and upload here.',
		'std'         => '',
		'type'        => 'upload',
		'section'     => 'header',
		'class'       => '',
	  ),
	  array(
		'id'          => 'header_height',
		'label'       => 'Header Height',
		'desc'        => 'In pixels.',
		'std'         => 90,
		'type'        => 'text',
		'section'     => 'header',
		'class'       => '',
	  ),


/* Colors */
	  array(
		'id'          => 'page_layout',
		'label'       => 'Page Layout',
		'desc'        => '',
		'std'         => 'wide',
		'type'        => 'select',
		'section'     => 'color',
		'class'       => '',
		'choices'     => array(
		  array( 
			'value' => 'wide',
			'label' => 'Wide'
		  ),
		  array( 
			'value' => 'boxed',
			'label' => 'Boxed' 
		  )
		)
	  ),
	  array(
		'id'          => 'page_background',
		'label'       => 'Page Background',
		'desc'        => 'Limited page layout background.',
		'std'         => '',
		'type'        => 'background',
		'section'     => 'color',
		'class'       => '',
	  ),


	  array(
		'id'          => 'accent_color',
		'label'       => 'Theme Accent Color',
		'desc'        => 'Your brand color (will be used also for links).',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'darken_accent_color',
		'label'       => 'Darken Accent Color',
		'desc'        => 'For some hover states.',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'text_color',
		'label'       => 'Text Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'main_headings_color',
		'label'       => 'H1 - H3 Color',
		'desc'        => 'Main headings color.',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'secondary_headings_color',
		'label'       => 'H4 - H6 Color',
		'desc'        => 'Secondary headings color.',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),


	  array(
		'id'          => 'alternative_text_color',
		'label'       => 'Alternative Text Color',
		'desc'        => 'This color will be used when you set "Content Colors" in page options.',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'alternative_main_headings_color',
		'label'       => 'Alternative H1 - H3 Color',
		'desc'        => 'This color will be used when you set "Content Colors" in page options.',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'alternative_secondary_headings_color',
		'label'       => 'Alternative H4 - H6 Color',
		'desc'        => 'This color will be used when you set "Content Colors" in page options.',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),

	  array(
		'id'          => 'header_background',
		'label'       => 'Header Background',
		'desc'        => 'Background color also applied as the color for the dropdown menu active item color.',
		'std'         => '',
		'type'        => 'background',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'menu_color',
		'label'       => 'Menu Item Color',
		'desc'        => 'Color of the top level menu items.',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'menu_color_active',
		'label'       => 'Menu Item Color When Active/Hovered',
		'desc'        => 'Also applied for the dropdown active menu item background.',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'sub_menu_color',
		'label'       => 'Dropdown Menu Item Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'sub_menu_color_active',
		'label'       => 'Dropdown Menu Item Color When Hovered',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'sub_menu_bg_hover',
		'label'       => 'Dropdown Menu Item Background Color When Hover',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),

	  array(
		'id'          => 'footer_background',
		'label'       => 'Footer Background',
		'desc'        => '',
		'std'         => '',
		'type'        => 'background',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'footer_text_color',
		'label'       => 'Footer Text Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),
	  array(
		'id'          => 'footer_link_color',
		'label'       => 'Footer Link Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => 'color',
		'class'       => '',
	  ),

/* Typography */
	  array(
		'id'          => 'primary_headings_font',
		'label'       => 'H1-H3 Headings Font',
		'desc'        => '"Font Weight" parameter is optional.',
		'std'         => '',
		'type'        => 'typography',
		'section'     => 'typography',
		'class'       => '',
	  ),
	  array(
		'id'          => 'secondary_headings_font',
		'label'       => 'H4-H6 Headings Font',
		'desc'        => '"Font Weight" parameter is optional.',
		'std'         => '',
		'type'        => 'typography',
		'section'     => 'typography',
		'class'       => '',
	  ),
	  array(
		'id'          => 'navigation_font',
		'label'       => 'Navigation Font',
		'desc'        => '"Font Weight" parameter is optional.',
		'type'        => 'typography',
		'section'     => 'typography',
		'class'       => '',
	  ),
	  array(
		'id'          => 'dropdown_navigation_font',
		'label'       => 'Dropdown Navigation Font',
		'desc'        => '"Font Weight" parameter is optional.',
		'type'        => 'typography',
		'section'     => 'typography',
		'class'       => '',
	  ),
	  array(
		'id'          => 'body_font',
		'label'       => 'Body Font',
		'desc'        => '"Font Weight" parameter is optional.',
		'std'         => '',
		'type'        => 'typography',
		'section'     => 'typography',
		'class'       => '',
	  ),

/* Blog */
	  array(
		'id'          => 'blog_title',
		'label'       => 'Blog Title',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'blog',
		'class'       => '',
	  ),
	  array(
		'id'          => 'blog_sidebar',
		'label'       => 'Blog Sidebar',
		'desc'        => '',
		'std'         => '',
		'type'        => 'select',
		'section'     => 'blog',
		'class'       => '',
		'choices'     => array(
		  array( 
			'value' => 1,
			'label' => 'Enabled' 
		  ),
		  array( 
			'value' => 0,
			'label' => 'Disabled' 
		  )
		)
	  ),

/* Footer */
	  array(
		'id'          => 'magicreche_copyright',
		'label'       => 'Copyright Text',
		'desc'        => '',
		'std'         => '',
		'type'        => 'textarea-simple',
		'section'     => 'footer',
		'class'       => '',
	  ),

	  array(
		'id'          => 'magicreche_social_profiles',
		'label'       => 'Social Profiles',
		'desc'        => '',
		'std'         => '',
		'type'        => 'select',
		'section'     => 'footer',
		'class'       => '',
		'choices'     => array(
		  array( 
			'value' => 1,
			'label' => 'Enabled' 
		  ),
		  array( 
			'value' => 0,
			'label' => 'Disabled' 
		  )
		)
	  ),
	  array(
		'id'          => 'magicreche_facebook',
		'label'       => 'Facebook URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_twitter',
		'label'       => 'Twitter URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_google',
		'label'       => 'Google+ URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_flickr',
		'label'       => 'Flickr URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_youtube',
		'label'       => 'YouTube URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_linkedin',
		'label'       => 'LinkedIn URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_skype_call',
		'label'       => 'Skype Name (Call)',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_skype_chat',
		'label'       => 'Skype Name (Chat)',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_pinterest',
		'label'       => 'Pinterest URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_instagram',
		'label'       => 'Instagram URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_vimeo',
		'label'       => 'Vimeo URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_tumblr',
		'label'       => 'Tumblr URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),
	  array(
		'id'          => 'magicreche_xing',
		'label'       => 'Xing URL',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => 'footer',
		'class'       => '',
	  ),


	)
  );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
	update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}