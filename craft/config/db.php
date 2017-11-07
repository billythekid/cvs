<?php

/**
 * Database Configuration
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return [
    '*'                => [
        'server'      => 'localhost',
        'database'    => 'jordan',
        'user'        => 'root',
        'password'    => '',
        'tablePrefix' => 'craft',
    ],
    '.fortytwo.studio' => [
        'database'    => 'jordan_stage_db',
        'user'        => 'jordan',
        'password'    => 'VBXr6pkzwEgEWvhpXu9EZ',
    ],
];
