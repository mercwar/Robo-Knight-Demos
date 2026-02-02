<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_INTL_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_INTL_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_INTL_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_INTL_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_INTL_FUNC',
            'family' => 'PHP_INTL_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'locale_get_default', 'locale_set_default',
            'numfmt_create', 'numfmt_format', 'numfmt_parse',
            'datefmt_create', 'datefmt_format', 'datefmt_parse'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_INTL_FUNCTIONS',
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
