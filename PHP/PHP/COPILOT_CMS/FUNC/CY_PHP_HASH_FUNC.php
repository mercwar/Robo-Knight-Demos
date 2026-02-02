<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_HASH_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_HASH_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_HASH_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_HASH_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_HASH_FUNC',
            'family' => 'PHP_HASH_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'hash', 'hash_file', 'hash_hmac', 'hash_hmac_file',
            'hash_algos', 'password_hash', 'password_verify',
            'password_needs_rehash'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_HASH_FUNCTIONS',
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
