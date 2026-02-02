<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_PCRE_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_PCRE_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_PCRE_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_PCRE_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_PCRE_FUNC',
            'family' => 'PHP_PCRE_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'preg_match', 'preg_match_all', 'preg_replace',
            'preg_replace_callback', 'preg_split', 'preg_grep',
            'preg_last_error'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_PCRE_FUNCTIONS',
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
