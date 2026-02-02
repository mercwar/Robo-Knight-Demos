<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_FTP_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_FTP_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_FTP_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP FTP constants.
        Includes transfer modes, options, and FTP flags.
=====================================================================*/

class CY_PHP_FTP_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_FTP_CONST',
            'family' => 'PHP_FTP_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'FTP_ASCII',
            'FTP_BINARY',
            'FTP_AUTORESUME',
            'FTP_TIMEOUT_SEC',
            'FTP_AUTOSEEK',
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
