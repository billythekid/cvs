<?php

// Path to your craft/ folder
switch ($_SERVER['HTTP_HOST'])
{
    case 'jordan.dev':
        $craftPath = '../craft';
        define('CRAFT_BASE_PATH', '../craft/');
        break;
    default:
        $craftPath = '/home/eqdev/sites/god/craft';
        define('CRAFT_BASE_PATH', '../craft/');
        break;
}
// Do not edit below this line
$path = rtrim($craftPath, '/') . '/app/index.php';

if (!is_file($path))
{
    if (function_exists('http_response_code'))
    {
        http_response_code(503);
    }

    exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in ' . __FILE__);
}

require_once $path;
