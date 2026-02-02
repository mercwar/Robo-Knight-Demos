<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_LOCALE_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_LOCALE_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_LOCALE_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP locale constants.
=====================================================================*/

class CY_PHP_LOCALE_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_LOCALE_CONST',
            'family' => 'PHP_LOCALE_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'LC_ALL',
            'LC_COLLATE',
            'LC_CTYPE',
            'LC_MONETARY',
            'LC_NUMERIC',
            'LC_TIME',
            'LC_MESSAGES',
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
