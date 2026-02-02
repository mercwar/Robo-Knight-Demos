<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_INI_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_INI_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_INI_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP INI-related constants.
        Includes configuration path constants and scan directories.
=====================================================================*/

class CY_PHP_INI_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_INI_CONST',
            'family' => 'PHP_INI_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'PHP_CONFIG_FILE_PATH',
            'PHP_CONFIG_FILE_SCAN_DIR',
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
