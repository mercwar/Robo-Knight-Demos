<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_IMAGE_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_IMAGE_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_IMAGE_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_IMAGE_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_IMAGE_FUNC',
            'family' => 'PHP_IMAGE_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'imagecreate', 'imagecreatetruecolor', 'imagecolorallocate',
            'imagefill', 'imagesetpixel', 'imageline', 'imagearc',
            'imageellipse', 'imagepng', 'imagejpeg', 'imagegif',
            'imagedestroy', 'getimagesize'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_IMAGE_FUNCTIONS',
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
