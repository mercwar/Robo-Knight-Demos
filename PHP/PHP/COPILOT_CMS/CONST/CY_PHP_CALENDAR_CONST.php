<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_CALENDAR_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_CALENDAR_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_CALENDAR_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP calendar extension constants.
=====================================================================*/

class CY_PHP_CALENDAR_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_CALENDAR_CONST',
            'family' => 'PHP_CALENDAR_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'CAL_GREGORIAN',
            'CAL_JULIAN',
            'CAL_JEWISH',
            'CAL_FRENCH',
            'CAL_NUM_CALS',
            'CAL_DOW_DAYNO',
            'CAL_DOW_SHORT',
            'CAL_DOW_LONG',
            'CAL_MONTH_GREGORIAN_SHORT',
            'CAL_MONTH_GREGORIAN_LONG',
            'CAL_MONTH_JULIAN_SHORT',
            'CAL_MONTH_JULIAN_LONG',
            'CAL_MONTH_JEWISH',
            'CAL_MONTH_FRENCH',
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
