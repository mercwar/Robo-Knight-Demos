<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_CURL_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_CURL_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_CURL_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_CURL_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_CURL_FUNC',
            'family' => 'PHP_CURL_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'curl_init', 'curl_setopt', 'curl_exec', 'curl_close',
            'curl_errno', 'curl_error', 'curl_getinfo',
            'curl_multi_init', 'curl_multi_add_handle',
            'curl_multi_exec', 'curl_multi_select', 'curl_multi_close'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_CURL_FUNCTIONS',
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
