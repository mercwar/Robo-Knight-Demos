<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_IMAGE_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_IMAGE_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_IMAGE_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_IMAGE_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_IMAGE_CONST',
            'family' => 'PHP_IMAGE_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'IMG_GIF',
            'IMG_JPG',
            'IMG_JPEG',
            'IMG_PNG',
            'IMG_WBMP',
            'IMG_XPM',
            'IMG_COLOR_TRANSPARENT',
            'IMG_ARC_PIE',
            'IMG_ARC_CHORD',
            'IMG_ARC_NOFILL',
            'IMG_ARC_EDGED',
            'GD_BUNDLED',
        ];
    }

    public static function map(): array
    {
        $m = [];
        foreach (self::names() as $n) if (defined($n)) $m[$n] = constant($n);
        return $m;
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
