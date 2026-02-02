<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_FILESYSTEM_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_FILESYSTEM_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_FILESYSTEM_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP filesystem constants.
        Includes path, directory, and file mode constants.
=====================================================================*/

class CY_PHP_FILESYSTEM_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_FILESYSTEM_CONST',
            'family' => 'PHP_FILESYSTEM_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'DIRECTORY_SEPARATOR',
            'PATH_SEPARATOR',
            'SCANDIR_SORT_ASCENDING',
            'SCANDIR_SORT_DESCENDING',
            'SCANDIR_SORT_NONE',
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
