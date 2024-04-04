<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/#what-is-functions-php
 *
 * @package Quick
 */

namespace Quick;

use Quick\Utils\FileLoader;

require_once __DIR__ . '/vendor/autoload.php';

FileLoader::loadFiles(['inc/cleanup.php', 'inc/setup.php', 'inc/wysiwyg.php']);

if (file_exists(FileLoader::file('inc/dev-setup.php'))) {
    FileLoader::loadFile('inc/dev-setup.php');
}
