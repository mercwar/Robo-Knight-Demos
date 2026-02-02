<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_CLASS_INDEX
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_CLASS_INDEX
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_CLASS_INDEX.php
    AVIS-TYPE: CLASS_INDEX
    AVIS-DESCRIPTION:
        Master index of all PHP class/interface registry artifacts.
        Provides unified lookup, enumeration, and subsystem summary.
        Deterministic, immutable, side-effect free.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
=====================================================================*/

class CY_PHP_CLASS_INDEX
{
    /*=============================================================
        IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'id'            => 'COPILOT_CMS.CLASS.CY_PHP_CLASS_INDEX',
            'family'        => 'PHP_CLASS_UNIVERSE',
            'version'       => '1.0.0',
            'total_families'=> 15,
        ];
    }

    /*=============================================================
        CLASS FAMILY MAP
        Maps family keys → class registry names
    ==============================================================*/
    public static function families(): array
    {
        return [

            // Core SPL
            'spl'              => 'CY_PHP_SPL_CLASS',
            'spl_exception'    => 'CY_PHP_SPL_EXCEPTION_CLASS',

            // Exceptions
            'exception'        => 'CY_PHP_EXCEPTION_CLASS',

            // Iterators
            'iterator'         => 'CY_PHP_ITERATOR_CLASS',

            // Date / Time
            'datetime'         => 'CY_PHP_DATETIME_CLASS',

            // XML ecosystem
            'xml'              => 'CY_PHP_XML_CLASS',

            // JSON
            'json'             => 'CY_PHP_JSON_CLASS',

            // Compression
            'zip'              => 'CY_PHP_ZIP_CLASS',

            // Intl / Locale
            'intl'             => 'CY_PHP_INTL_CLASS',

            // Streams / Network
            'stream'           => 'CY_PHP_STREAM_CLASS',
            'network'          => 'CY_PHP_NETWORK_CLASS',

            // CURL
            'curl'             => 'CY_PHP_CURL_CLASS',

            // Reflection
            'reflection'       => 'CY_PHP_REFLECTION_CLASS',

            // Misc
            'misc'             => 'CY_PHP_MISC_CLASS',
        ];
    }

    /*=============================================================
        LOAD A FAMILY
        Returns the full() array of a class registry
    ==============================================================*/
    public static function load(string $family): array
    {
        $map = self::families();
        if (!isset($map[$family])) {
            return [
                'error' => 'Unknown class family: ' . $family,
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
