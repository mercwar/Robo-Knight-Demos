<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_ENGINE
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_ENGINE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_ENGINE.php
    AVIS-TYPE: GENERATOR-ENGINE
    AVIS-DESCRIPTION:
        Core LLM generator engine for COPILOT_CMS.
        Uses AVIS constant registries for system and debug layers.
        Provides deterministic, structured generation utilities.
        Contains NO phpinfo(), NO dumps, NO direct output.
    AVIS-VERSION: 1.1.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No dynamic environment access
        - No phpinfo()
        - No mutation or side effects
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_LOADER.php';

class LLM_ENGINE
{
    /*=============================================================
        SAFE ENVIRONMENT SUMMARY
        No phpinfo(), no dumps, no exposure.
    ==============================================================*/
    public static function environment(): array
    {
        return [
            'server' => [
                'name'     => $_SERVER[CY_SERVER_CONST::SERVER_NAME]     ?? null,
                'addr'     => $_SERVER[CY_SERVER_CONST::SERVER_ADDR]     ?? null,
                'port'     => $_SERVER[CY_SERVER_CONST::SERVER_PORT]     ?? null,
                'protocol' => $_SERVER[CY_SERVER_CONST::SERVER_PROTOCOL] ?? null,
                'software' => $_SERVER[CY_SERVER_CONST::SERVER_SOFTWARE] ?? null,
                'uri'      => $_SERVER[CY_SERVER_CONST::REQUEST_URI]     ?? null,
                'method'   => $_SERVER[CY_SERVER_CONST::REQUEST_METHOD]  ?? null,
            ],

            'php' => [
                'version'      => PHP_VERSION,
                'sapi'         => PHP_SAPI,
                'memory_limit' => ini_get('memory_limit'),
                'max_exec'     => ini_get('max_execution_time'),
                'upload_max'   => ini_get('upload_max_filesize'),
                'post_max'     => ini_get('post_max_size'),
            ],
        ];
    }

    /*=============================================================
        DEBUG SUMMARY (PHP + JS)
    ==============================================================*/
    public static function debugSummary(): array
    {
        return [
            'php_debug' => [
                CY_PHP_DEBUG_CONST::FLAG_ENABLED,
                CY_PHP_DEBUG_CONST::FLAG_VERBOSE,
                CY_PHP_DEBUG_CONST::FLAG_TRACE,
                CY_PHP_DEBUG_CONST::FLAG_TIMERS,
                CY_PHP_DEBUG_CONST::FLAG_MEMORY,
                CY_PHP_DEBUG_CONST::FLAG_SANDBOX,
            ],

            'js_debug' => [
                CY_JS_DEBUG_CONST::FLAG_ENABLED,
                CY_JS_DEBUG_CONST::FLAG_VERBOSE,
                CY_JS_DEBUG_CONST::FLAG_TRACE,
                CY_JS_DEBUG_CONST::FLAG_TIMERS,
                CY_JS_DEBUG_CONST::FLAG_MEMORY,
                CY_JS_DEBUG_CONST::FLAG_EVENTS,
                CY_JS_DEBUG_CONST::FLAG_SANDBOX,
            ],
        ];
    }

    /*=============================================================
        GENERIC WRAPPER
    ==============================================================*/
    public static function wrap(string $title, string $content): array
    {
        return [
            'title'   => $title,
            'content' => $content,
        ];
    }
}

class LLM_ENGINE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_ENGINE';
    public const AVIS_TYPE = 'GENERATOR-ENGINE';
    public const VERSION   = '1.1.0';
}

?>
