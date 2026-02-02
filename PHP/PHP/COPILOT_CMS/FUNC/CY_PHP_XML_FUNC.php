<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_XML_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_XML_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_XML_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_XML_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_XML_FUNC',
            'family' => 'PHP_XML_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'xml_parser_create', 'xml_parser_free', 'xml_parse',
            'xml_set_element_handler', 'xml_set_character_data_handler',
            'xml_set_default_handler', 'xml_set_start_namespace_decl_handler',
            'xml_set_end_namespace_decl_handler'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_XML_FUNCTIONS',
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
