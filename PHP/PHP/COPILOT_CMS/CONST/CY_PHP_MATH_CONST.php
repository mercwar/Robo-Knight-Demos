<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_MATH_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_MATH_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_MATH_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_MATH_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_MATH_CONST',
            'family' => 'PHP_MATH_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'M_PI',
            'M_E',
            'M_LOG2E',
            'M_LOG10E',
            'M_LN2',
            'M_LN10',
            'M_PI_2',
            'M_PI_4',
            'M_1_PI',
            'M_2_PI',
            'M_2_SQRTPI',
            'M_SQRT2',
            'M_SQRT1_2',
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
