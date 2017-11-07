<?php

/**
 * General Configuration
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */
$protocol = (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") ? 'http:' : 'https:';
$siteUrl  = $protocol . '//' . $_SERVER['HTTP_HOST'] . '/';
return array(
    'siteUrl'              => $siteUrl,
    'environmentVariables' => array(),
    'defaultWeekStartDay'  => 0,
    'enableCsrfProtection' => true,
    'omitScriptNameInUrls' => true,
    'cpTrigger'            => 'admin',
    'devMode'              => false,
    'loginPath'            => 'members/login',
);
