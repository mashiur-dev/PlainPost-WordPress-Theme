<?php
if (!function_exists('plainpost_setup')) {

    function plainpost_setup()
    {
        // Add support for editor styles.
        add_theme_support('editor-styles');
        // Enqueue editor styles.
        add_editor_style('./assets/style/main.css');

    }
    
}
add_action('after_setup_theme', 'plainpost_setup');


/**
 * Enqueue Assets
 */

if (!function_exists("plainpost_enqueue_scripts")) {
    function plainpost_enqueue_scripts()
    {
        wp_enqueue_style(
            "plainpost-style", 
            get_template_directory_uri() . "/assets/style/main.css", 
            array(), 
            wp_get_theme()->get("version")
        );

        wp_enqueue_script(
            "plainpost-main", 
            get_template_directory_uri() . "/assets/js/main.js", 
            array(), 
            wp_get_theme()->get("version"), 
            [
                'strategy' => 'defer', 
                'in_footer' => true
            ]
        );

        wp_localize_script("plainpost-main", "plainpost_author_info", [
            'authorName' => esc_html(get_the_author()),
            'authorPhoto' => esc_url(get_avatar_url(get_the_author_meta('ID'), ['size' => 100])),
            'postUrl' => esc_url(get_the_permalink()),
        ]);

    }
}
add_action("wp_enqueue_scripts", "plainpost_enqueue_scripts");

/**
 * Register Custom Pattern Category
 */
function plainpost_register_pattern_categories()
{
    register_block_pattern_category(
        'plainpost-patterns',
        array('label' => __('Plain Post Patterns', 'plain-post'))
    );
}
add_action('init', 'plainpost_register_pattern_categories');


/**
 * Customize Archive Page Title 
 */

if (!function_exists('plainpost_rewrite_archive_page_title')) {
    function plainpost_rewrite_archive_page_title($title)
    {

        if (is_category() || is_tag() || is_author()) {
            $post_text = $GLOBALS['wp_query']->post_count > 1 ? 'Posts' : 'Post';
            $post_count = intval($GLOBALS['wp_query']->post_count); // Sanitize post count
            $title = esc_html($title) . "<span class='archive-post-count'>" . esc_html($post_count) . " " . esc_html($post_text) . "</span>";
        }

        return $title;
    }
}
add_filter('get_the_archive_title', 'plainpost_rewrite_archive_page_title');


/** 
 * Functionalities for single post page
 */
require_once dirname(__FILE__) . '/inc/functions-single-post.php';



/** 
 * Additional Plugins Activation
 */
require_once dirname(__FILE__) . '/inc/active-additional-plugins.php';
