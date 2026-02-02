<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_CONST_INDEX
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_CONST_INDEX
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_CONST_INDEX.php
    AVIS-TYPE: CONST_INDEX
    AVIS-DESCRIPTION:
        Master index of all PHP constant registry artifacts.
        Provides unified lookup, enumeration, and subsystem summary.
        Deterministic, immutable, side-effect free.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
=====================================================================*/

class CY_PHP_CONST_INDEX
{
    /*=============================================================
        IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.CONST.CY_PHP_CONST_INDEX',
            'family'    => 'PHP_CONSTANT_UNIVERSE',
            'version'   => '1.0.0',
            'total_families' => 34,
        ];
    }

    /*=============================================================
        CONSTANT FAMILY MAP
        Maps family keys → class names
    ==============================================================*/
    public static function families(): array
    {
        return [

            // Core
            'error'            => 'CY_PHP_ERROR_CONST',
            'error_reporting'  => 'CY_PHP_ERROR_REPORTING_CONST',
            'predefined'       => 'CY_PHP_PREDEFINED_CONST',
            'magic'            => 'CY_PHP_MAGIC_CONST',
            'version'          => 'CY_PHP_VERSION_CONST',
            'sapi'             => 'CY_PHP_SAPI_CONST',
            'ini'              => 'CY_PHP_INI_CONST',

            // Filesystem / Network
            'filesystem'       => 'CY_PHP_FILESYSTEM_CONST',
            'network'          => 'CY_PHP_NETWORK_CONST',
            'ftp'              => 'CY_PHP_FTP_CONST',
            'streamfilter'     => 'CY_PHP_STREAMFILTER_CONST',
            'streammeta'       => 'CY_PHP_STREAMMETA_CONST',
            'socket'           => 'CY_PHP_SOCKET_CONST',

            // Date / Time / Locale
            'datetime'         => 'CY_PHP_DATETIME_CONST',
            'calendar'         => 'CY_PHP_CALENDAR_CONST',
            'timezone'         => 'CY_PHP_TIMEZONE_CONST',
            'locale'           => 'CY_PHP_LOCALE_CONST',
            'intl_format'      => 'CY_PHP_INTL_FORMATTING_CONST',

            // Data formats
            'json'             => 'CY_PHP_JSON_CONST',
            'xml'              => 'CY_PHP_XML_CONST',
            'xmlparser'        => 'CY_PHP_XMLPARSER_CONST',
            'xmlreader'        => 'CY_PHP_XMLREADER_CONST',
            'xmlwriter'        => 'CY_PHP_XMLWRITER_CONST',
            'simplexml'        => 'CY_PHP_SIMPLEXML_CONST',
            'dom'              => 'CY_PHP_DOM_CONST',
            'libxml'           => 'CY_PHP_LIBXML_CONST',
            'tidy'             => 'CY_PHP_TIDY_CONST',

            // Compression
            'zlib'             => 'CY_PHP_ZLIB_CONST',
            'zip'              => 'CY_PHP_ZIP_CONST',

            // Protocols
            'curl'             => 'CY_PHP_CURL_CONST',

            // Math / Hash / Image
            'math'             => 'CY_PHP_MATH_CONST',
            'hash'             => 'CY_PHP_HASH_CONST',
            'image'            => 'CY_PHP_IMAGE_CONST',

            // Mbstring / PCRE / Session
            'mbstring'         => 'CY_PHP_MBSTRING_CONST',
            'pcre'             => 'CY_PHP_PCRE_CONST',
            'session'          => 'CY_PHP_SESSION_CONST',
        ];
    }

    /*=============================================================
        LOAD A FAMILY
        Returns the full() array of a constant registry
    ==============================================================*/
    public static function load(string $family): array
    {
        $map = self::families();
        if (!isset($map[$family])) {
            return [
                'error' => 'Unknown constant family: ' . $family,
            ];
        }

        $class = $map[$family];
        if (!class_exists($class)) {
            return [
                'error' => 'Class not loaded: ' . $class,
            ];
        }

        return $class::full();
    }

    /*=============================================================
        SUMMARY OF ALL FAMILIES
    ==============================================================*/
    public static function summary(): array
    {
        $out = [];
        foreach (self::families() as $key => $class) {
            if (class_exists($class)) {
                $out[$key] = $class::summary();
            } else {
                $out[$key] = ['error' => 'Class not loaded'];
            }
        }
        return $out;
    }

    /*=============================================================
        FULL PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'families' => self::families(),
            'summary'  => self::summary(),
        ];
    }
}
?>
