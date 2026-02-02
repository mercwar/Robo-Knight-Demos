<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_DATETIME_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_DATETIME_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_DATETIME_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP Date/Time constants.
=====================================================================*/

class CY_PHP_DATETIME_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_DATETIME_CONST',
            'family' => 'PHP_DATETIME_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'DATE_ATOM',
            'DATE_COOKIE',
            'DATE_ISO8601',
            'DATE_RFC822',
            'DATE_RFC850',
            'DATE_RFC1036',
            'DATE_RFC1123',
            'DATE_RFC2822',
            'DATE_RFC3339',
            'DATE_RFC3339_EXTENDED',
            'DATE_RSS',
            'DATE_W3C',
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
