<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_JSON_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_JSON_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_JSON_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_JSON_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_JSON_FUNC',
            'family' => 'PHP_JSON_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'json_encode', 'json_decode', 'json_last_error', 'json_last_error_msg'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_JSON_FUNCTIONS',
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
