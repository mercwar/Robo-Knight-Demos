<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_MATH_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_MATH_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_MATH_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_MATH_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_MATH_FUNC',
            'family' => 'PHP_MATH_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'abs', 'ceil', 'floor', 'round', 'sqrt', 'pow', 'exp', 'log',
            'log10', 'sin', 'cos', 'tan', 'asin', 'acos', 'atan', 'mt_rand',
            'rand', 'min', 'max'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_MATH_FUNCTIONS',
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
