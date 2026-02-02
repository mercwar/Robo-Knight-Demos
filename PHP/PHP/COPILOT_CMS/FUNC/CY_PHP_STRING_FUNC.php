<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_STRING_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_STRING_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_STRING_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_STRING_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_STRING_FUNC',
            'family' => 'PHP_STRING_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'strlen', 'strpos', 'strrpos', 'substr', 'strtolower', 'strtoupper',
            'trim', 'ltrim', 'rtrim', 'explode', 'implode', 'str_replace',
            'str_ireplace', 'str_split', 'str_repeat', 'str_pad', 'addslashes',
            'stripslashes', 'htmlspecialchars', 'htmlentities', 'md5', 'sha1'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_STRING_FUNCTIONS',
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
