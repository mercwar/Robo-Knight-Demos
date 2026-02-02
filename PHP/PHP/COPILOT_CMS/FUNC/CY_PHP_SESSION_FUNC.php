<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SESSION_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_SESSION_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_SESSION_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_SESSION_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_SESSION_FUNC',
            'family' => 'PHP_SESSION_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'session_start', 'session_destroy', 'session_id',
            'session_regenerate_id', 'session_get_cookie_params',
            'session_set_cookie_params', 'session_write_close'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_SESSION_FUNCTIONS',
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
