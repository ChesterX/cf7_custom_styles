<?php
add_filter('wpcf7_autop_or_not', '__return_false');

function add_content_before_submit_button($output, $class) {
    // Check class
    if ( $class == 'wpcf7-form' ) {
        $content = 'Ваше содержимое';
        $output = $content . $output;
    }
    return $output;
}
add_filter('wpcf7_response_output', 'add_content_before_submit_button', 10, 2);