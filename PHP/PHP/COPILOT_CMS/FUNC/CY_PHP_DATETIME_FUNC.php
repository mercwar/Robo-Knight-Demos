<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_DATETIME_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_DATETIME_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_DATETIME_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_DATETIME_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_DATETIME_FUNC',
            'family' => 'PHP_DATETIME_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'date', 'time', 'mktime', 'gmmktime', 'strtotime',
            'checkdate', 'date_create', 'date_format',
            'date_modify', 'date_add', 'date_sub'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_DATETIME_FUNCTIONS',
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
