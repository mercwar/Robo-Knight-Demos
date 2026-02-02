<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_DOM_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_DOM_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_DOM_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_DOM_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_DOM_FUNC',
            'family' => 'PHP_DOM_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'dom_import_simplexml',
            'domxml_open_file',      // legacy
            'domxml_open_mem',       // legacy
            'domxml_version'         // legacy
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_DOM_FUNCTIONS',
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
