<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_LIBXML_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_LIBXML_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_LIBXML_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_LIBXML_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_LIBXML_CONST',
            'family' => 'PHP_LIBXML_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'LIBXML_NOENT',
            'LIBXML_DTDLOAD',
            'LIBXML_DTDATTR',
            'LIBXML_DTDVALID',
            'LIBXML_NOERROR',
            'LIBXML_NOWARNING',
            'LIBXML_NOBLANKS',
            'LIBXML_XINCLUDE',
            'LIBXML_NSCLEAN',
            'LIBXML_NOCDATA',
            'LIBXML_NONET',
            'LIBXML_COMPACT',
            'LIBXML_PARSEHUGE',
            'LIBXML_BIGLINES',
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
