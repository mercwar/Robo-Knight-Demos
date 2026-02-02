<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_NETWORK_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_NETWORK_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_NETWORK_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_NETWORK_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_NETWORK_FUNC',
            'family' => 'PHP_NETWORK_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'fsockopen', 'pfsockopen', 'stream_socket_client',
            'stream_socket_server', 'stream_socket_accept',
            'stream_set_blocking', 'stream_set_timeout',
            'gethostbyname', 'gethostbynamel', 'dns_get_record'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_NETWORK_FUNCTIONS',
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
