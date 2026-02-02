<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_STREAMFILTER_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_STREAMFILTER_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_STREAMFILTER_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_STREAMFILTER_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_STREAMFILTER_CONST',
            'family' => 'PHP_STREAMFILTER_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'STREAM_FILTER_READ',
            'STREAM_FILTER_WRITE',
            'STREAM_FILTER_ALL',
        ];
    }

    public static function map(): array
    {
        $m = [];
        foreach (self::names() as $n)
            if (defined($n)) $m[$n] = constant($n);
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
