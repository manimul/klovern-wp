<?php

/* Alerts
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_alert( $atts, $content = null) {

    extract( shortcode_atts( array(
        'type'  => 'warning',
        'close_button' => ''
    ), $atts ) );

    if( $close_button == 'yes' ) $close_button = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';

    return '<div class="alert alert-' . $type . ' alert-dismissable">' . do_shortcode($content) . $close_button . '</div>';
}