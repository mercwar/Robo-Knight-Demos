<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_PREDEFINED_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_PREDEFINED_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_PREDEFINED_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of core PHP predefined constants (non-magic).
        Includes values like PHP_VERSION, PHP_OS, etc.
        No I/O, no globals, no mutation.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
=====================================================================*/

class CY_PHP_PREDEFINED_CONST
{
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.CONST.CY_PHP_PREDEFINED_CONST',
            'family'    => 'PHP_PREDEFINED_CONSTANTS',
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
            'PHP_OS',
            'PHP_OS_FAMILY',
            'PHP_SAPI',
            'PHP_INT_MAX',
            'PHP_INT_MIN',
            'PHP_INT_SIZE',
            'PHP_FLOAT_DIG',
            'PHP_FLOAT_EPSILON',
            'PHP_FLOAT_MIN',
            'PHP_FLOAT_MAX',
            'DEFAULT_INCLUDE_PATH',
            'PEAR_INSTALL_DIR',
            'PEAR_EXTENSION_DIR',
            'PHP_EXTENSION_DIR',
            'PHP_PREFIX',
            'PHP_BINDIR',
            'PHP_BINARY',
            'PHP_MANDIR',
            'PHP_LIBDIR',
            'PHP_DATADIR',
            'PHP_SYSCONFDIR',
            'PHP_LOCALSTATEDIR',
            'PHP_CONFIG_FILE_PATH',
            'PHP_CONFIG_FILE_SCAN_DIR',
            'PHP_SHLIB_SUFFIX',
            'PHP_EOL',
            'PHP_MAXPATHLEN',
            'PHP_WINDOWS_VERSION_MAJOR',
            'PHP_WINDOWS_VERSION_MINOR',
            'PHP_WINDOWS_VERSION_BUILD',
            'PHP_WINDOWS_VERSION_PLATFORM',
            'PHP_WINDOWS_VERSION_SP_MAJOR',
            'PHP_WINDOWS_VERSION_SP_MINOR',
            'PHP_WINDOWS_VERSION_SUITEMASK',
            'PHP_WINDOWS_VERSION_PRODUCTTYPE',
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
            'family' => 'PHP_PREDEFINED_CONSTANTS',
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
