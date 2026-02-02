<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SAPI_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_SAPI_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_SAPI_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP SAPI constants and identifiers.
        Includes PHP_SAPI and related interface descriptors.
=====================================================================*/

class CY_PHP_SAPI_CONST
{
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.CONST.CY_PHP_SAPI_CONST',
            'family'    => 'PHP_SAPI_CONSTANTS',
            'version'   => '1.0.0',
        ];
    }

    public static function names(): array
    {
        return [
            'PHP_SAPI',
        ];
    }

    public static function map(): array
    {
        $map = [];
        foreach (self::names() as $name) {
            if (defined($name)) $map[$name] = constant($name);
        }
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
