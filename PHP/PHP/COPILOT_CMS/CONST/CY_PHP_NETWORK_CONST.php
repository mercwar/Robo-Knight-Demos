<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_NETWORK_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_NETWORK_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_NETWORK_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP network constants.
        Includes socket, stream, and network-related flags.
=====================================================================*/

class CY_PHP_NETWORK_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_NETWORK_CONST',
            'family' => 'PHP_NETWORK_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'STREAM_CLIENT_CONNECT',
            'STREAM_CLIENT_ASYNC_CONNECT',
            'STREAM_CLIENT_PERSISTENT',
            'STREAM_SERVER_BIND',
            'STREAM_SERVER_LISTEN',
        ];
    }

    public static function map(): array
    {
        $map = [];
        foreach (self::names() as $name) {
            if (defined($name)) $map[$name] = constant($name);
        }
        return $map;
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
