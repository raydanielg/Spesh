<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * This file redirects all root-level requests to the /public directory,
 * so the app can be served without explicitly pointing the web root to /public.
 */

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists(__DIR__.'/storage/framework/maintenance.php')) {
    require __DIR__.'/storage/framework/maintenance.php';
}

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__.'/bootstrap/app.php';

// Set the public path so Laravel knows where assets are
$app->instance('path.public', __DIR__.'/public');

use Illuminate\Http\Request;

$app->handleRequest(Request::capture());
