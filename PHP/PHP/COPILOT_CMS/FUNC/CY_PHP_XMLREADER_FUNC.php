<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_XMLREADER_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_XMLREADER_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_XMLREADER_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_XMLREADER_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_XMLREADER_FUNC',
            'family' => 'PHP_XMLREADER_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'xmlreader_open',   // wrapper for XMLReader::open
            'xmlreader_xml',    // wrapper for XMLReader::XML
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_XMLREADER_FUNCTIONS',
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
