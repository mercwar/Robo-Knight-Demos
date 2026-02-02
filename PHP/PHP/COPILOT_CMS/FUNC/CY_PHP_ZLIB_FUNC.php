<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_ZLIB_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_ZLIB_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_ZLIB_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_ZLIB_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_ZLIB_FUNC',
            'family' => 'PHP_ZLIB_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'gzopen', 'gzread', 'gzwrite', 'gzclose',
            'gzcompress', 'gzuncompress', 'gzencode', 'gzdecode'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_ZLIB_FUNCTIONS',
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
