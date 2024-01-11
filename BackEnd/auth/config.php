<?php

$GLOBALS['config'] = array(
    'database' => array(
        'host' => 'localhost',
        'dbname' => 'webshop',
        'username' => 'root',
        'password' => ''
    ),
    'urls' => array(
        'base_url' => 'http://localhost/your-app/',
        'frontend_url' => 'http://localhost/your-app/frontend/',
        'backend_url' => 'http://localhost/your-app/backend/'
    ),
    'error_reporting' => array(
        'level' => E_ALL,
        'display_errors' => true
    ),
    'session' => array(
        'cookie_lifetime' => 3600
    ),
    'csrf_token_key' => 'your_random_key_here',
    'site_name' => 'Your Webshop',
    'timezone' => 'America/New_York'
);
