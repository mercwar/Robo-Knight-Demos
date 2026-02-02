<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_ZIP_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_ZIP_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_ZIP_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP ZIP constants.
        Describes ZipArchive modes, flags, and compression methods.
        Deterministic, side-effect free, no I/O, no mutation.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
=====================================================================*/

class CY_PHP_ZIP_CONST
{
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.CONST.CY_PHP_ZIP_CONST',
            'family'    => 'PHP_ZIP_CONSTANTS',
            'version'   => '1.0.0',
            'subsystem' => 'COPILOT_CMS_CONST',
        ];
    }

    public static function names(): array
    {
        return [
            // Open / create flags
            'ZipArchive::CREATE',
            'ZipArchive::OVERWRITE',
            'ZipArchive::EXCL',
            'ZipArchive::CHECKCONS',

            // File flags
            'ZipArchive::FL_NOCASE',
            'ZipArchive::FL_NODIR',
            'ZipArchive::FL_COMPRESSED',
            'ZipArchive::FL_UNCHANGED',

            // Compression methods
            'ZipArchive::CM_DEFAULT',
            'ZipArchive::CM_STORE',
            'ZipArchive::CM_SHRINK',
            'ZipArchive::CM_REDUCE_1',
            'ZipArchive::CM_REDUCE_2',
            'ZipArchive::CM_REDUCE_3',
            'ZipArchive::CM_REDUCE_4',
            'ZipArchive::CM_IMPLODE',
            'ZipArchive::CM_DEFLATE',
            'ZipArchive::CM_DEFLATE64',
            'ZipArchive::CM_PKWARE_IMPLODE',
            'ZipArchive::CM_BZIP2',
            'ZipArchive::CM_LZMA',
            'ZipArchive::CM_TERSE',
            'ZipArchive::CM_LZ77',
            'ZipArchive::CM_WAVPACK',
            'ZipArchive::CM_PPMD',
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
            'family' => 'PHP_ZIP_CONSTANTS',
            'count'  => count(self::names()),
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
