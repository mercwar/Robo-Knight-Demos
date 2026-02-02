<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_CURL_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_CURL_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_CURL_CONST.php
    AVIS-TYPE: CONST_REGISTRY
=====================================================================*/

class CY_PHP_CURL_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_CURL_CONST',
            'family' => 'PHP_CURL_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'CURLOPT_URL',
            'CURLOPT_RETURNTRANSFER',
            'CURLOPT_POST',
            'CURLOPT_POSTFIELDS',
            'CURLOPT_HTTPHEADER',
            'CURLOPT_TIMEOUT',
            'CURLOPT_CONNECTTIMEOUT',
            'CURLOPT_FOLLOWLOCATION',
            'CURLOPT_SSL_VERIFYPEER',
            'CURLOPT_SSL_VERIFYHOST',
            'CURLOPT_USERAGENT',
            'CURLOPT_COOKIE',
            'CURLOPT_COOKIEFILE',
            'CURLOPT_COOKIEJAR',
            'CURLOPT_CUSTOMREQUEST',
            'CURLOPT_NOBODY',
            'CURLOPT_HEADER',
            'CURLOPT_VERBOSE',
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
