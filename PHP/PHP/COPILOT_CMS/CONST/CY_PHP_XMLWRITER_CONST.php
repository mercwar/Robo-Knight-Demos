<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_XMLWRITER_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_XMLWRITER_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_XMLWRITER_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP XMLWriter constants.
=====================================================================*/

class CY_PHP_XMLWRITER_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_XMLWRITER_CONST',
            'family' => 'PHP_XMLWRITER_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'XMLWriter::PI',
            'XMLWriter::ELEMENT',
            'XMLWriter::ATTRIBUTE',
            'XMLWriter::TEXT',
            'XMLWriter::CDATA',
            'XMLWriter::COMMENT',
            'XMLWriter::DOC',
            'XMLWriter::DOC_TYPE',
            'XMLWriter::DOC_FRAGMENT',
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
