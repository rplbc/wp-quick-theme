<?php

namespace Quick\Utils;

/**
 * Provides a set of methods that are used to load files.
 */
class FileLoader
{
    /**
     * Returns the absolute path of the specified file within the template directory.
     *
     * @param string $file The file name or path relative to the template directory.
     * @return string The absolute path of the file.
     */
    public static function file(string $file): string
    {
        return trailingslashit(get_template_directory()) . $file;
    }

    /**
     * Loads the specified file once.
     *
     * @param string $file The file name or path relative to the template directory.
     * @return void
     */
    public static function loadFile(string $file): void
    {
        require_once self::file($file);
    }

    /**
     * Loads multiple files once.
     *
     * @param array $files An array of file names or paths relative to the template directory.
     * @return void
     */
    public static function loadFiles(array $files): void
    {
        foreach ($files as $file) {
            self::loadFile($file);
        }
    }
}
