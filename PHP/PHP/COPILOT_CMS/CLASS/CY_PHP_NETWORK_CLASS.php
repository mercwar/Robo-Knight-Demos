<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_NETWORK_CLASS
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_NETWORK_CLASS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_NETWORK_CLASS.php
    AVIS-TYPE: CLASS_REGISTRY
=====================================================================*/

class CY_PHP_NETWORK_CLASS
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CLASS.CY_PHP_NETWORK_CLASS',
            'family' => 'PHP_NETWORK_CLASSES',
        ];
    }

    public static function names(): array
    {
        return [
            'Socket', 'AddressInfo'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_NETWORK_CLASSES',
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
