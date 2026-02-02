<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_MBSTRING_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_MBSTRING_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_MBSTRING_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_MBSTRING_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_MBSTRING_FUNC',
            'family' => 'PHP_MBSTRING_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'mb_strlen', 'mb_strpos', 'mb_strrpos', 'mb_strtolower',
            'mb_strtoupper', 'mb_substr', 'mb_convert_encoding',
            'mb_detect_encoding', 'mb_list_encodings'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_MBSTRING_FUNCTIONS',
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
