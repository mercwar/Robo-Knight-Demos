<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_ZIP_CLASS
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_ZIP_CLASS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_ZIP_CLASS.php
    AVIS-TYPE: CLASS_REGISTRY
=====================================================================*/

class CY_PHP_ZIP_CLASS
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CLASS.CY_PHP_ZIP_CLASS',
            'family' => 'PHP_ZIP_CLASSES',
        ];
    }

    public static function names(): array
    {
        return [
            'ZipArchive', 'ZipArchive::FL_OVERWRITE', 'ZipArchive::FL_RECOMPRESS'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_ZIP_CLASSES',
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
