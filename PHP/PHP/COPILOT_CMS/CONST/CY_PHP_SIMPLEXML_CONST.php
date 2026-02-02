<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SIMPLEXML_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_SIMPLEXML_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_SIMPLEXML_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_SIMPLEXML_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_SIMPLEXML_CONST',
            'family' => 'PHP_SIMPLEXML_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'LIBXML_NOCDATA',
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
