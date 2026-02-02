<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_XMLPARSER_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_XMLPARSER_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_XMLPARSER_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP XML Parser constants.
=====================================================================*/

class CY_PHP_XMLPARSER_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_XMLPARSER_CONST',
            'family' => 'PHP_XMLPARSER_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'XML_OPTION_CASE_FOLDING',
            'XML_OPTION_TARGET_ENCODING',
            'XML_OPTION_SKIP_TAGSTART',
            'XML_OPTION_SKIP_WHITE',
            'XML_OPTION_PARSE_HUGE',
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
