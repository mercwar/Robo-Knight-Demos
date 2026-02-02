<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_HASH_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_HASH_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_HASH_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_HASH_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_HASH_CONST',
            'family' => 'PHP_HASH_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'HASH_HMAC',
            'PASSWORD_DEFAULT',
            'PASSWORD_BCRYPT',
            'PASSWORD_ARGON2I',
            'PASSWORD_ARGON2ID',
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
