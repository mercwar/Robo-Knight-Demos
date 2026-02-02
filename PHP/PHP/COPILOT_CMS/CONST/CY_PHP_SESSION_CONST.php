<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SESSION_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_SESSION_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_SESSION_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_SESSION_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_SESSION_CONST',
            'family' => 'PHP_SESSION_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'SID',
            'PHP_SESSION_DISABLED',
            'PHP_SESSION_NONE',
            'PHP_SESSION_ACTIVE',
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
