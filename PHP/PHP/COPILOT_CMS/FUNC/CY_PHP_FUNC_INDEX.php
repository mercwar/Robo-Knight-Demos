<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_FUNC_INDEX
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_FUNC_INDEX
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_FUNC_INDEX.php
    AVIS-TYPE: FUNC_INDEX
    AVIS-DESCRIPTION:
        Master index of all PHP function registry artifacts.
        Provides unified lookup, enumeration, and subsystem summary.
        Deterministic, immutable, side-effect free.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
=====================================================================*/

class CY_PHP_FUNC_INDEX
{
    /*=============================================================
        IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.FUNC.CY_PHP_FUNC_INDEX',
            'family'    => 'PHP_FUNCTION_UNIVERSE',
            'version'   => '1.0.0',
            'total_families' => 20,
        ];
    }

    /*=============================================================
        FUNCTION FAMILY MAP
        Maps family keys → class names
    ==============================================================*/
    public static function families(): array
    {
        return [

            // Core data manipulation
            'string'       => 'CY_PHP_STRING_FUNC',
            'array'        => 'CY_PHP_ARRAY_FUNC',
            'math'         => 'CY_PHP_MATH_FUNC',
            'json'         => 'CY_PHP_JSON_FUNC',

            // Filesystem / Streams / Network
            'filesystem'   => 'CY_PHP_FILESYSTEM_FUNC',
            'stream'       => 'CY_PHP_STREAM_FUNC',
            'network'      => 'CY_PHP_NETWORK_FUNC',

            // Protocols
            'curl'         => 'CY_PHP_CURL_FUNC',

            // XML ecosystem
            'xml'          => 'CY_PHP_XML_FUNC',
            'xmlreader'    => 'CY_PHP_XMLREADER_FUNC',
            'xmlwriter'    => 'CY_PHP_XMLWRITER_FUNC',
            'simplexml'    => 'CY_PHP_SIMPLEXML_FUNC',

            // Compression
            'zlib'         => 'CY_PHP_ZLIB_FUNC',
            'zip'          => 'CY_PHP_ZIP_FUNC',

            // Text / Regex
            'mbstring'     => 'CY_PHP_MBSTRING_FUNC',
            'pcre'         => 'CY_PHP_PCRE_FUNC',

            // Runtime / Environment
            'session'      => 'CY_PHP_SESSION_FUNC',
            'error'        => 'CY_PHP_ERROR_FUNC',
            'sapi'         => 'CY_PHP_SAPI_FUNC',

            // Miscellaneous
            'misc'         => 'CY_PHP_MISC_FUNC',
        ];
    }

    /*=============================================================
        LOAD A FAMILY
        Returns the full() array of a function registry
    ==============================================================*/
    public static function load(string $family): array
    {
        $map = self::families();
        if (!isset($map[$family])) {
            return [
                'error' => 'Unknown function family: ' . $family,
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
