<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SAPI_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_SAPI_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_SAPI_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_SAPI_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_SAPI_FUNC',
            'family' => 'PHP_SAPI_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'php_sapi_name', 'phpversion', 'ini_get', 'ini_set',
            'ini_restore', 'get_cfg_var', 'get_current_user'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_SAPI_FUNCTIONS',
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
