<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SIMPLEXML_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_SIMPLEXML_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_SIMPLEXML_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_SIMPLEXML_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_SIMPLEXML_FUNC',
            'family' => 'PHP_SIMPLEXML_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'simplexml_load_file',
            'simplexml_load_string',
            'simplexml_import_dom'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_SIMPLEXML_FUNCTIONS',
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
