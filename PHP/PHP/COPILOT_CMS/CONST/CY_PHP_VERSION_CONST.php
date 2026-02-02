<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_VERSION_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_VERSION_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_VERSION_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Focused registry of PHP version-related constants.
        A semantic slice of the predefined constants family.
        No I/O, no globals, no mutation.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
=====================================================================*/

class CY_PHP_VERSION_CONST
{
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.CONST.CY_PHP_VERSION_CONST',
            'family'    => 'PHP_VERSION_CONSTANTS',
            'version'   => '1.0.0',
            'subsystem' => 'COPILOT_CMS_CONST',
        ];
    }

    public static function names(): array
    {
        return [
            'PHP_VERSION',
            'PHP_MAJOR_VERSION',
            'PHP_MINOR_VERSION',
            'PHP_RELEASE_VERSION',
            'PHP_VERSION_ID',
            'PHP_EXTRA_VERSION',
        ];
    }

    public static function map(): array
    {
        $map = [];
        foreach (self::names() as $name) {
            if (defined($name)) {
                $map[$name] = constant($name);
            }
        }
        return $map;
    }

    public static function summary(): array
    {
        return [
            'count'  => count(self::names()),
            'family' => 'PHP_VERSION_CONSTANTS',
        ];
    }

    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'names'    => self::names(),
            'map'      => self::map(),
            'summary'  => self::summary(),
        ];
    }
}
?>
