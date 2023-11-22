<?php

/** 
 * TGM Class
 */
require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';

function plainpost_additional_plugins()
{
    $plugins = [
        [
            'name' => __( 'Plain Post Features', 'plainpost' ),
            'slug' => 'plainpost-features',
            'source' => 'https://plainpost.mashiurz.com/additional-assets/plainpost-features.zip',
            'required' => false,
        ],

        [
            'name' => __( 'One Click Demo Import', 'plainpost' ),
            'slug' => 'one-click-demo-import',
            'required' => false,
        ]
    ];

    $config = [
        'id' => 'plainpost-tgmpa',
        'default_path' => '',
        'menu' => 'plainpost-install-additional-plugins',
        'parent_slug' => 'themes.php',
        'has_notices' => true,
        'dismissable' => false,
        'dismiss_msg' => __( 'You have to install all required plugins to use all the features of this theme, okay?', 'plainpost' ), // this message will be output at top of nag 
        'is_automatic' => false,
        'message' => '',
        'strings' => [
            'page_title' => __('Install Required Plugins', 'plainpost'),
            'menu_title' => __('Additional Plugins', 'plainpost'),
        ],
    ];

    tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'plainpost_additional_plugins');


/**
 * One Click Demo Import
 */


/**
 * Register Required Plugin for DEMO
 */
function plainpost_demo_required_plugins($plugins)
{
    $theme_plugins = [
        [
            'name' => __( 'Plain Post Features', 'plainpost' ),
            'slug' => 'plainpost-features',
            'description' => __('This plugin is an essential component for unlocking the full spectrum of capabilities offered by this theme.', 'plainpost'),
            'source' => 'https://plainpost.mashiurz.com/additional-assets/plainpost-features.zip',
            'preselected' => true,
            'required' => true,
        ],
    ];

    return array_merge($plugins, $theme_plugins);
}
add_filter('ocdi/register_plugins', 'plainpost_demo_required_plugins');

/**
 * Define Theme Demo
 */

function plainpost_ocdi_import_files()
{
    return [
        [
            'import_file_name' => __('Theme DEMO', 'plainpost'),
            'import_file_url' => 'https://plainpost.mashiurz.com/additional-assets/demo_plainpost.mashiurz.com.xml',
            'import_preview_image_url' => 'https://plainpost.mashiurz.com/additional-assets/screenshot.png',
            'preview_url' => 'http://plainpost.mashiurz.com',
        ],
    ];
}
add_filter('ocdi/import_files', 'plainpost_ocdi_import_files');