<?php

/* Progressbar
-------------------------------------------------------------------------------------------------------------------*/

function shortcode_progressbar( $atts, $content = null) {

    extract( shortcode_atts( array(
        'percentage'  => '50',
        'color' => 'success'
    ), $atts ) );

    return '<div class="progress"><div class="progress-bar progress-bar-' . $color . '" role="progressbar" aria-valuenow="' . $percentage . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $percentage . '%"><span class="sr-only">' . do_shortcode($content) . '</span></div></div>';
}