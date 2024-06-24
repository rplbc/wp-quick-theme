<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/#what-is-functions-php
 *
 * @package Quick
 */

namespace Quick;

// define('QUICK_ENVIRONMENT', 'production');
define('QUICK_ENVIRONMENT', 'development');

use Quick\Utils\FileLoader;

require_once __DIR__ . '/vendor/autoload.php';

FileLoader::loadFiles(['inc/setup.php']);
