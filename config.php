<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Denise Bigelow',
        'nav_menu' => [
            '' => 'home',
            'about-us' => 'about me',
            'products' => 'resume',
            'contact' => 'contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v1.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
