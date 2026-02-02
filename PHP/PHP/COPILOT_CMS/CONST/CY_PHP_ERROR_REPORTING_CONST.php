<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_ERROR_REPORTING_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_ERROR_REPORTING_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_ERROR_REPORTING_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP error reporting constants and masks.
        Describes constants used with error_reporting().
        No I/O, no globals, no mutation.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
=====================================================================*/

class CY_PHP_ERROR_REPORTING_CONST
{
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.CONST.CY_PHP_ERROR_REPORTING_CONST',
            'family'    => 'PHP_ERROR_REPORTING_CONSTANTS',
            'version'   => '1.0.0',
            'subsystem' => 'COPILOT_CMS_CONST',
        ];
    }

    public static function names(): array
    {
        // Many overlap with error constants; kept separate as a reporting family.
        return [
            'E_ERROR',
            'E_WARNING',
            'E_PARSE',
            'E_NOTICE',
            'E_CORE_ERROR',
            'E_CORE_WARNING',
            'E_COMPILE_ERROR',
            'E_COMPILE_WARNING',
            'E_USER_ERROR',
            'E_USER_WARNING',
            'E_USER_NOTICE',
            'E_STRICT',
            'E_RECOVERABLE_ERROR',
            'E_DEPRECATED',
            'E_USER_DEPRECATED',
            'E_ALL',
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
            'family' => 'PHP_ERROR_REPORTING_CONSTANTS',
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
