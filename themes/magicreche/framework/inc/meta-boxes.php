<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', '_custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types
 * in demo-theme-options.php.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _custom_meta_boxes() {

  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */

  $reviews = array(
    'id'          => 'reviews',
    'title'       => 'Review Details',
    'desc'        => '',
    'pages'       => array( 'review' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Review Text',
        'id'          => 'magicreche_review',
        'type'        => 'textarea-simple',
        'desc'        => '',
        'std'         => '',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Author',
        'id'          => 'magicreche_review_author',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
    )
  );

  $staff = array(
    'id'          => 'staff',
    'title'       => 'Employee Details',
    'desc'        => '',
    'pages'       => array( 'staff' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Name',
        'id'          => 'magicreche_staff_name',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Position',
        'id'          => 'magicreche_staff_position',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Facebook',
        'id'          => 'magicreche_staff_facebook',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Twitter',
        'id'          => 'magicreche_staff_twitter',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Google+',
        'id'          => 'magicreche_staff_google',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'LinkedIn',
        'id'          => 'magicreche_staff_linkedin',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Flickr',
        'id'          => 'magicreche_staff_flickr',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Pinterest',
        'id'          => 'magicreche_staff_pinterest',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Instagram',
        'id'          => 'magicreche_staff_instagram',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'YouTube',
        'id'          => 'magicreche_staff_youtube',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Vimeo',
        'id'          => 'magicreche_staff_vimeo',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Email',
        'id'          => 'magicreche_staff_email',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
    )
  );

  $page = array(
    'id'          => 'page-options',
    'title'       => 'Page',
    'desc'        => '', 
    'pages'       => array('page', 'events'),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Title',
        'id'          => 'magicreche-page-title',
        'type'        => 'select',
        'desc'        => '',
        'std'         => 'enabled',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => 'enabled',
            'label' => 'Enabled' 
          ),
          array( 
            'value' => 'disabled',
            'label' => 'Disabled' 
          ),
        ),
      ),
      array(
        'label'       => 'Sub Title',
        'id'          => 'magicreche-sub-title',
        'type'        => 'text',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Content Colors',
        'id'          => 'magicreche-content-color',
        'type'        => 'select',
        'desc'        => 'Select predefined content color scheme for text and titles. In case if the default are not readable on specific page background - setup and use alternative color scheme.',
        'std'         => 'default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => 'default',
            'label' => 'Default' 
          ),
          array( 
            'value' => 'alternative',
            'label' => 'Alternative' 
          ),
        ),
      ),
    )
  );

  $page_image_bg = array(
    'id'          => 'page-options-image-bg',
    'title'       => 'Image / Background',
    'desc'        => '', 
    'pages'       => array('page'),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Min Height',
        'id'          => 'magicreche-min-height',
        'type'        => 'text',
        'desc'        => 'Minimal height of the section. Set in percents (related to browser screen height) or pixels, examples: 50%, 100%, 250px.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Background',
        'id'          => 'magicreche-background',
        'type'        => 'background',
        'desc'        => 'Setup the background for the section.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Overlay',
        'id'          => 'magicreche-overlay',
        'type'        => 'colorpicker',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Overlay Opacity',
        'id'          => 'magicreche-overlay-opacity',
        'type'        => 'select',
        'desc'        => 'Select predefined content color scheme for text and titles. In case if the default are not readable on specific page background - setup and use alternative color scheme.',
        'std'         => 'default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => '0.1',
            'label' => '10%' 
          ),
          array( 
            'value' => '0.2',
            'label' => '20%' 
          ),
          array( 
            'value' => '0.3',
            'label' => '30%' 
          ),
          array( 
            'value' => '0.4',
            'label' => '40%' 
          ),
          array( 
            'value' => '0.5',
            'label' => '50%' 
          ),
          array( 
            'value' => '0.6',
            'label' => '60%' 
          ),
          array( 
            'value' => '0.7',
            'label' => '70%' 
          ),
          array( 
            'value' => '0.8',
            'label' => '80%' 
          ),
          array( 
            'value' => '0.9',
            'label' => '90%' 
          ),
        ),
      ),
    )
  );

  $page_slider = array(
    'id'          => 'page-slider',
    'title'       => 'Slider',
    'desc'        => '', 
    'pages'       => array('page'),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Fullscreen',
        'id'          => 'magicreche-fullscreen',
        'type'        => 'select',
        'desc'        => '',
        'std'         => 'default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => 'no',
            'label' => 'No' 
          ),
          array( 
            'value' => 'yes',
            'label' => 'Yes' 
          ),
        ),
      ),
      array(
        'label'       => 'Min Height',
        'id'          => 'magicreche-min-height',
        'type'        => 'text',
        'desc'        => 'Minimal height of the section. Set in percents (related to browser screen height) or pixels, examples: 50%, 100%, 250px.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Overlay',
        'id'          => 'magicreche-overlay',
        'type'        => 'colorpicker',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Overlay Opacity',
        'id'          => 'magicreche-overlay-opacity',
        'type'        => 'select',
        'desc'        => 'Select predefined content color scheme for text and titles. In case if the default are not readable on specific page background - setup and use alternative color scheme.',
        'std'         => 'default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => '0.1',
            'label' => '10%' 
          ),
          array( 
            'value' => '0.2',
            'label' => '20%' 
          ),
          array( 
            'value' => '0.3',
            'label' => '30%' 
          ),
          array( 
            'value' => '0.4',
            'label' => '40%' 
          ),
          array( 
            'value' => '0.5',
            'label' => '50%' 
          ),
          array( 
            'value' => '0.6',
            'label' => '60%' 
          ),
          array( 
            'value' => '0.7',
            'label' => '70%' 
          ),
          array( 
            'value' => '0.8',
            'label' => '80%' 
          ),
          array( 
            'value' => '0.9',
            'label' => '90%' 
          ),
        ),
      ),
      array(
        'label'       => 'Slides',
        'id'          => 'magicreche-slides',
        'type'        => 'list-item',
        'desc'        => 'Add your slides here.',
        'settings'    => array(
          array(
            'label'       => 'Upload Image',
            'id'          => 'slide-image',
            'type'        => 'upload',
            'desc'        => '',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Arrows',
        'id'          => 'magicreche-arrows',
        'type'        => 'select',
        'desc'        => '',
        'std'         => 1,
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => 0,
            'label' => 'No' 
          ),
          array( 
            'value' => 1,
            'label' => 'Yes' 
          ),
        ),
      ),
      array(
        'label'       => 'Pagination',
        'type'        => 'select',
        'id'          => 'magicreche-pagination',
        'desc'        => '',
        'std'         => 1,
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => 0,
            'label' => 'No' 
          ),
          array( 
            'value' => 1,
            'label' => 'Yes' 
          ),
        ),
      ),
      array(
        'label'       => 'Pause',
        'id'          => 'magicreche-pause',
        'type'        => 'text',
        'desc'        => 'Pause between slides in milliseconds &mdash; 1000 = 1 second. Set to 0 to disable. Default is 5000.',
        'std'         => '5000',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Animation Speed',
        'id'          => 'magicreche-animation',
        'type'        => 'text',
        'desc'        => 'Slide change animation speed in milliseconds &mdash; 1000 = 1 second. Default is 1000.',
        'std'         => '1000',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Effect',
        'type'        => 'select',
        'id'          => 'magicreche-effect',
        'desc'        => 'Slide change effect.',
        'std'         => 'fade',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => 'fade',
            'label' => 'Fade' 
          ),
          array( 
            'value' => 'slide',
            'label' => 'Slide' 
          ),
        ),
      ),
    )
  );

  $page_map = array(
    'id'          => 'page-map',
    'title'       => 'Map',
    'desc'        => '', 
    'pages'       => array('page'),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Fullscreen',
        'id'          => 'magicreche-fullscreen',
        'type'        => 'select',
        'desc'        => '',
        'std'         => 'default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => 'no',
            'label' => 'No' 
          ),
          array( 
            'value' => 'yes',
            'label' => 'Yes' 
          ),
        ),
      ),
      array(
        'label'       => 'Min Height',
        'id'          => 'magicreche-min-height',
        'type'        => 'text',
        'desc'        => 'Minimal height of the section. Set in percents (related to browser screen height) or pixels, examples: 50%, 100%, 250px.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => 'Hue Color',
        'id'          => 'magicreche-hue-color',
        'type'        => 'colorpicker',
        'desc'        => 'Map color setting.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => 'Min Center Latitude',
        'id'          => 'magicreche-map-center-lat',
        'type'        => 'text',
        'desc'        => 'Example: 30.000000',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Min Center Longitude',
        'id'          => 'magicreche-map-center-lng',
        'type'        => 'text',
        'desc'        => 'Example: 31.000000',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => 'Map Zoom',
        'id'          => 'magicreche-map-zoom',
        'type'        => 'text',
        'desc'        => 'Number from 0 to 21.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => 'Map Type',
        'id'          => 'magicreche-map-type',
        'type'        => 'select',
        'desc'        => '',
        'std'         => 'roadmap',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => 'ROADMAP',
            'label' => 'Roadmap' 
          ),
          array( 
            'value' => 'SATELLITE',
            'label' => 'Satellite' 
          ),
          array( 
            'value' => 'HYBRID',
            'label' => 'Hybrid' 
          ),
          array( 
            'value' => 'TERRAIN',
            'label' => 'Terrain' 
          ),
        ),
      ),

      array(
        'label'       => 'Marker Icon',
        'id'          => 'magicreche-map-marker',
        'type'        => 'upload',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => 'Locations',
        'id'          => 'magicreche-locations',
        'type'        => 'list-item',
        'desc'        => 'Add map locations here.',
        'settings'    => array(
          array(
            'label'       => 'Latitude',
            'id'          => 'magicreche-map-lat',
            'type'        => 'text',
            'desc'        => 'Example: 30.000000',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'label'       => 'Longitude',
            'id'          => 'magicreche-map-lng',
            'type'        => 'text',
            'desc'        => 'Example: 31.000000',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
          array(
            'label'       => 'Popup Content',
            'id'          => 'magicreche-location-content',
            'type'        => 'textarea',
            'desc'        => '',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Overlay',
        'id'          => 'magicreche-overlay',
        'type'        => 'colorpicker',
        'desc'        => '',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'label'       => 'Overlay Opacity',
        'id'          => 'magicreche-overlay-opacity',
        'type'        => 'select',
        'desc'        => 'Select predefined content color scheme for text and titles. In case if the default are not readable on specific page background - setup and use alternative color scheme.',
        'std'         => 'default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices' => array(
          array( 
            'value' => '0.1',
            'label' => '10%' 
          ),
          array( 
            'value' => '0.2',
            'label' => '20%' 
          ),
          array( 
            'value' => '0.3',
            'label' => '30%' 
          ),
          array( 
            'value' => '0.4',
            'label' => '40%' 
          ),
          array( 
            'value' => '0.5',
            'label' => '50%' 
          ),
          array( 
            'value' => '0.6',
            'label' => '60%' 
          ),
          array( 
            'value' => '0.7',
            'label' => '70%' 
          ),
          array( 
            'value' => '0.8',
            'label' => '80%' 
          ),
          array( 
            'value' => '0.9',
            'label' => '90%' 
          ),
        ),
      ),

    )
  );

  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  ot_register_meta_box( $page );
  ot_register_meta_box( $reviews );
  ot_register_meta_box( $staff );

  $post_id = (isset($_GET['post'])) ? $_GET['post'] : ((isset($_POST['post_ID'])) ? $_POST['post_ID'] : false);
  if ($post_id) : 
    $post_template = get_post_meta($post_id, '_wp_page_template', true);
    if ($post_template == 'page-section-image-bg.php') ot_register_meta_box( $page_image_bg );
    if ($post_template == 'page-section-slider.php') ot_register_meta_box( $page_slider );
    if ($post_template == 'page-section-map.php') ot_register_meta_box( $page_map );
  endif;


}