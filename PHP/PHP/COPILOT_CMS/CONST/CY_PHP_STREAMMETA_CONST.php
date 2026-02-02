<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_STREAMMETA_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_STREAMMETA_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_STREAMMETA_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_STREAMMETA_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_STREAMMETA_CONST',
            'family' => 'PHP_STREAMMETA_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'STREAM_META_TOUCH',
            'STREAM_META_OWNER',
            'STREAM_META_OWNER_NAME',
            'STREAM_META_GROUP',
            'STREAM_META_GROUP_NAME',
            'STREAM_META_ACCESS',
        ];
    }

    public static function map(): array
    {
        $m = [];
        foreach (self::names() as $n)
            if (defined($n)) $m[$n] = constant($n);
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
