<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_XML_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_XML_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_XML_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of core PHP XML constants.
=====================================================================*/

class CY_PHP_XML_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_XML_CONST',
            'family' => 'PHP_XML_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'XML_ERROR_NONE',
            'XML_ERROR_NO_MEMORY',
            'XML_ERROR_SYNTAX',
            'XML_ERROR_NO_ELEMENTS',
            'XML_ERROR_INVALID_TOKEN',
            'XML_ERROR_UNCLOSED_TOKEN',
            'XML_ERROR_PARTIAL_CHAR',
            'XML_ERROR_TAG_MISMATCH',
            'XML_ERROR_DUPLICATE_ATTRIBUTE',
            'XML_ERROR_JUNK_AFTER_DOC_ELEMENT',
            'XML_ERROR_PARAM_ENTITY_REF',
            'XML_ERROR_UNDEFINED_ENTITY',
            'XML_ERROR_RECURSIVE_ENTITY_REF',
            'XML_ERROR_ASYNC_ENTITY',
            'XML_ERROR_BAD_CHAR_REF',
            'XML_ERROR_BINARY_ENTITY_REF',
            'XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF',
            'XML_ERROR_MISPLACED_XML_PI',
            'XML_ERROR_UNKNOWN_ENCODING',
            'XML_ERROR_INCORRECT_ENCODING',
            'XML_ERROR_UNCLOSED_CDATA_SECTION',
            'XML_ERROR_EXTERNAL_ENTITY_HANDLING',
        ];
    }

    public static function map(): array
    {
        $m = [];
        foreach (self::names() as $n) if (defined($n)) $m[$n] = constant($n);
        return $m;
    }

    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'names'    => self::names(),
            'map'      => self::map(),
        ];
    }
}
?>
