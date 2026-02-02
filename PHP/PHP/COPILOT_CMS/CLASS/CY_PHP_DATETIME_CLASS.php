<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_DATETIME_CLASS
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_DATETIME_CLASS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_DATETIME_CLASS.php
    AVIS-TYPE: CLASS_REGISTRY
=====================================================================*/

class CY_PHP_DATETIME_CLASS
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CLASS.CY_PHP_DATETIME_CLASS',
            'family' => 'PHP_DATETIME_CLASSES',
        ];
    }

    public static function names(): array
    {
        return [
            'DateTime', 'DateTimeImmutable', 'DateTimeZone',
            'DateInterval', 'DatePeriod'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_DATETIME_CLASSES',
            'count'  => count(self::names()),
        ];
    }

    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'names'    => self::names(),
            'summary'  => self::summary(),
        ];
    }
}
?>
