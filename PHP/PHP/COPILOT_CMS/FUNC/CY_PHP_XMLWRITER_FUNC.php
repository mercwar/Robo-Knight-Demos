<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_XMLWRITER_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_XMLWRITER_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_XMLWRITER_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_XMLWRITER_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_XMLWRITER_FUNC',
            'family' => 'PHP_XMLWRITER_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'xmlwriter_open_uri',
            'xmlwriter_open_memory',
            'xmlwriter_start_document',
            'xmlwriter_end_document',
            'xmlwriter_start_element',
            'xmlwriter_end_element',
            'xmlwriter_write_element',
            'xmlwriter_write_attribute',
            'xmlwriter_output_memory'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_XMLWRITER_FUNCTIONS',
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
