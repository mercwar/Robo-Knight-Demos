<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_FILESYSTEM_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_FILESYSTEM_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_FILESYSTEM_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_FILESYSTEM_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_FILESYSTEM_FUNC',
            'family' => 'PHP_FILESYSTEM_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'fopen', 'fclose', 'fread', 'fwrite', 'file_get_contents',
            'file_put_contents', 'unlink', 'mkdir', 'rmdir', 'copy', 'rename',
            'scandir', 'is_file', 'is_dir', 'file_exists'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_FILESYSTEM_FUNCTIONS',
            'count'  => count(self::names()),
        ];
    }

    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'names'    => self::names(),
            'summary'  => self::summary(),
        ];
    }
}
?>
