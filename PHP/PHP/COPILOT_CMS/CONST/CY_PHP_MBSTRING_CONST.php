<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_MBSTRING_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_MBSTRING_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_MBSTRING_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_MBSTRING_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_MBSTRING_CONST',
            'family' => 'PHP_MBSTRING_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'MB_CASE_UPPER',
            'MB_CASE_LOWER',
            'MB_CASE_TITLE',
            'MB_OVERLOAD_MAIL',
            'MB_OVERLOAD_STRING',
            'MB_OVERLOAD_REGEX',
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
