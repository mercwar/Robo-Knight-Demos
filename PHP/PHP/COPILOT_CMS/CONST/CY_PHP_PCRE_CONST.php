<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_PCRE_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_PCRE_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_PCRE_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_PCRE_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_PCRE_CONST',
            'family' => 'PHP_PCRE_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'PREG_NO_ERROR',
            'PREG_INTERNAL_ERROR',
            'PREG_BACKTRACK_LIMIT_ERROR',
            'PREG_RECURSION_LIMIT_ERROR',
            'PREG_BAD_UTF8_ERROR',
            'PREG_BAD_UTF8_OFFSET_ERROR',
            'PREG_JIT_STACKLIMIT_ERROR',
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
