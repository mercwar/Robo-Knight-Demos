<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SOCKET_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_SOCKET_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_SOCKET_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_SOCKET_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_SOCKET_CONST',
            'family' => 'PHP_SOCKET_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'AF_INET',
            'AF_INET6',
            'SOCK_STREAM',
            'SOCK_DGRAM',
            'SOL_TCP',
            'SOL_UDP',
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
