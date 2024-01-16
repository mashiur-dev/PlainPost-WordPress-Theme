<?php
/**
 * Functionalities for single post page
 */

function plainpost_single_post_scripts()
{
    /**
     * single post information
     */
    wp_localize_script("plainpost-main", "plainpost_single_post_info", [
        'postUrl' => get_the_permalink(),
    ]);
    
}
add_action('wp_enqueue_scripts', 'plainpost_single_post_scripts');