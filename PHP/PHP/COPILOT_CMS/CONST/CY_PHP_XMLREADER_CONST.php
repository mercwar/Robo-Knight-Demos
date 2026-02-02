<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_XMLREADER_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_XMLREADER_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_XMLREADER_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP XMLReader constants.
=====================================================================*/

class CY_PHP_XMLREADER_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_XMLREADER_CONST',
            'family' => 'PHP_XMLREADER_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'XMLReader::NONE',
            'XMLReader::ELEMENT',
            'XMLReader::ATTRIBUTE',
            'XMLReader::TEXT',
            'XMLReader::CDATA',
            'XMLReader::ENTITY_REF',
            'XMLReader::ENTITY',
            'XMLReader::PI',
            'XMLReader::COMMENT',
            'XMLReader::DOC',
            'XMLReader::DOC_TYPE',
            'XMLReader::DOC_FRAGMENT',
            'XMLReader::NOTATION',
            'XMLReader::WHITESPACE',
            'XMLReader::SIGNIFICANT_WHITESPACE',
            'XMLReader::END_ELEMENT',
            'XMLReader::END_ENTITY',
            'XMLReader::XML_DECLARATION',
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
