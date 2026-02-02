<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_TIMEZONE_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_TIMEZONE_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_TIMEZONE_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP timezone constants.
=====================================================================*/

class CY_PHP_TIMEZONE_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_TIMEZONE_CONST',
            'family' => 'PHP_TIMEZONE_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'DATE_TIMEZONE',
            'INI_ALL',
            'INI_SYSTEM',
            'INI_USER',
        ];
    }

    public static function map(): array
    {
        $map = [];
        foreach (self::names() as $n) if (defined($n)) $map[$n] = constant($n);
        return $map;
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
