<?php

/** 
 * TGM Class
 */
require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';

function plainpost_additional_plugins()
{
    $plugins = [
        [
            'name' => __( 'One Click Demo Import', 'plain-post' ),
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
        'dismiss_msg' => __( 'You have to install all required plugins to use all the features of this theme, okay?', 'plain-post' ), // this message will be output at top of nag 
        'is_automatic' => false,
        'message' => '',
        'strings' => [
            'page_title' => __('Install Required Plugins', 'plain-post'),
            'menu_title' => __('Additional Plugins', 'plain-post'),
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
// function plainpost_demo_required_plugins($plugins)
// {
//     $theme_plugins = [
//         [
//             'name' => __( 'Plain Post Features', 'plain-post' ),
//             'slug' => 'plainpost-features',
//             'description' => __('This plugin is an essential component for unlocking the full spectrum of capabilities offered by this theme.', 'plain-post'),
//             'source' => 'https://plainpost.mashiurz.com/additional-assets/plainpost-features.zip',
//             'preselected' => true,
//             'required' => true,
//         ],
//     ];

//     return array_merge($plugins, $theme_plugins);
// }
// add_filter('ocdi/register_plugins', 'plainpost_demo_required_plugins');

/**
 * Define Theme Demo
 */

function plainpost_ocdi_import_files()
{
    return [
        [
            'import_file_name' => __('Theme DEMO', 'plain-post'),
            'import_file_url' => 'https://plainpost.mashiurz.com/additional-assets/demo_plainpost.mashiurz.com.xml',
            'import_preview_image_url' => 'https://plainpost.mashiurz.com/additional-assets/screenshot.png',
            'preview_url' => 'http://plainpost.mashiurz.com',
        ],
    ];
}
add_filter('ocdi/import_files', 'plainpost_ocdi_import_files');


function ocdi_plugin_intro_text($default_text)
{
    //is-dismissible
    $default_text .= '<div class="notice notice-warning ">
                <p style="font-size: 18px;">To fully experience the capabilities of this theme, kindly install the custom plugin exclusively designed for the Plain Post before initiating the demo import.</p>
                <p class="ocdi__button-container">
                    <a target="_blank" class="ocdi__button  button  button-hero  button-primary" href="https://plainpost.mashiurz.com/additional-assets/plainpost-features.zip">Download Now!</a>
                </p>
            </div>';

    return $default_text;
}
add_filter('ocdi/plugin_intro_text', 'ocdi_plugin_intro_text');