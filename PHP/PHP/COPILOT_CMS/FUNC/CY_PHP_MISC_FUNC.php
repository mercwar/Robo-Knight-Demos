<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_MISC_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_MISC_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_MISC_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_MISC_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_MISC_FUNC',
            'family' => 'PHP_MISC_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'phpinfo', 'memory_get_usage', 'memory_get_peak_usage',
            'get_loaded_extensions', 'extension_loaded', 'getenv',
            'putenv', 'uniqid', 'sleep', 'usleep'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_MISC_FUNCTIONS',
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
