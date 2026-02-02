<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_TIDY_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_TIDY_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_TIDY_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_TIDY_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_TIDY_CONST',
            'family' => 'PHP_TIDY_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'TIDY_TAG_UNKNOWN',
            'TIDY_TAG_A',
            'TIDY_TAG_ABBR',
            'TIDY_TAG_ACRONYM',
            'TIDY_TAG_ADDRESS',
            'TIDY_TAG_ALIGN',
            'TIDY_TAG_APPLET',
            'TIDY_TAG_AREA',
            'TIDY_TAG_B',
            'TIDY_TAG_BASE',
            'TIDY_TAG_BASEFONT',
            'TIDY_TAG_BDO',
            'TIDY_TAG_BIG',
            'TIDY_TAG_BLOCKQUOTE',
            'TIDY_TAG_BODY',
            'TIDY_TAG_BR',
            'TIDY_TAG_BUTTON',
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
