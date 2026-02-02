<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_STREAM_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_STREAM_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_STREAM_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_STREAM_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_STREAM_FUNC',
            'family' => 'PHP_STREAM_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'stream_context_create', 'stream_context_set_option',
            'stream_context_get_options', 'stream_get_contents',
            'stream_copy_to_stream', 'stream_select',
            'stream_get_meta_data', 'stream_set_blocking',
            'stream_set_timeout'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_STREAM_FUNCTIONS',
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
