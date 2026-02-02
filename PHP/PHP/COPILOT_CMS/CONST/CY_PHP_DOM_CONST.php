<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_DOM_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_DOM_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_DOM_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_DOM_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_DOM_CONST',
            'family' => 'PHP_DOM_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'XML_ELEMENT_NODE',
            'XML_ATTRIBUTE_NODE',
            'XML_TEXT_NODE',
            'XML_CDATA_SECTION_NODE',
            'XML_ENTITY_REF_NODE',
            'XML_ENTITY_NODE',
            'XML_PI_NODE',
            'XML_COMMENT_NODE',
            'XML_DOCUMENT_NODE',
            'XML_DOCUMENT_TYPE_NODE',
            'XML_DOCUMENT_FRAG_NODE',
            'XML_NOTATION_NODE',
            'XML_HTML_DOCUMENT_NODE',
            'XML_DTD_NODE',
            'XML_ELEMENT_DECL_NODE',
            'XML_ATTRIBUTE_DECL_NODE',
            'XML_ENTITY_DECL_NODE',
            'XML_NAMESPACE_DECL_NODE',
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
