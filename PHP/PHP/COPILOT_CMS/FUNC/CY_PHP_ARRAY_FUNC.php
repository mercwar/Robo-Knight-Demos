<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_ARRAY_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_ARRAY_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_ARRAY_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_ARRAY_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_ARRAY_FUNC',
            'family' => 'PHP_ARRAY_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'array_merge', 'array_diff', 'array_intersect', 'array_keys',
            'array_values', 'array_map', 'array_filter', 'array_reduce',
            'array_reverse', 'array_unique', 'sort', 'rsort', 'asort',
            'ksort', 'shuffle', 'in_array', 'count'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_ARRAY_FUNCTIONS',
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
