<?php
if (!function_exists('blogx_setup')) {

    function blogx_setup()
    {
        // Add support for editor styles.
        add_theme_support('editor-styles');
        // Enqueue editor styles.
        add_editor_style('./assets/style/main.css');


    }
}
add_action('after_setup_theme', 'blogx_setup');



/**
 * Enqueue Assets
 */

if (!function_exists("blogx_enqueue_scripts")) {
    function blogx_enqueue_scripts()
    {
        wp_enqueue_style("blogx-style", get_template_directory_uri() . "/assets/style/main.css", array(), wp_get_theme()->get("version"));
    }
}
add_action("wp_enqueue_scripts", "blogx_enqueue_scripts");

/**
 * Customize Archive Page Title 
 */

if (!function_exists('blogx_rewrite_archive_page_title')) {
    function blogx_rewrite_archive_page_title( $title ) {

        if ( is_category() ) {

            $post_text = $GLOBALS['wp_query']->post_count > 1 ? 'Posts' : 'Post';
            $title = $title . "<span class='archive-post-count'>{$GLOBALS['wp_query']->post_count} $post_text</span>";

        } elseif ( is_tag() ) {

            $post_text = $GLOBALS['wp_query']->post_count > 1 ? 'Posts' : 'Post';
            $title = $title . "<span class='archive-post-count'>{$GLOBALS['wp_query']->post_count} $post_text</span>";

        } elseif ( is_author() ) {

            $post_text = $GLOBALS['wp_query']->post_count > 1 ? 'Posts' : 'Post';
            $title = $title . "<span class='archive-post-count'>{$GLOBALS['wp_query']->post_count} $post_text</span>";

        }

        return $title;

    }
}
add_filter('get_the_archive_title', 'blogx_rewrite_archive_page_title');
