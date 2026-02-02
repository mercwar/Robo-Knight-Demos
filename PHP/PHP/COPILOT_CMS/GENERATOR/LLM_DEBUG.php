<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_DEBUG
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_DEBUG
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_DEBUG.php
    AVIS-TYPE: DEBUG-INSPECTOR
    AVIS-DESCRIPTION:
        Deterministic debug inspector for the COPILOT_CMS LLM subsystem.
        Provides AVIS-law compliant debug payloads for engine, runtime,
        schema, mapping, and output layers. Contains NO rendering,
        NO mutation, NO environment access, NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Debug inspection ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_ENGINE.php';
require_once __DIR__ . '/LLM_RUNTIME.php';
require_once __DIR__ . '/LLM_MAP.php';
require_once __DIR__ . '/LLM_SCHEMA.php';
require_once __DIR__ . '/LLM_OUTPUT.php';

class LLM_DEBUG
{
    /*=============================================================
        DEBUG: ENGINE SUMMARY
    ==============================================================*/
    public static function engine(): array
    {
        return [
            'engine_id'     => LLM_ENGINE_ID::AVIS_ID,
            'engine_type'   => LLM_ENGINE_ID::AVIS_TYPE,
            'engine_ver'    => LLM_ENGINE_ID::VERSION,
            'debug_summary' => LLM_ENGINE::debugSummary(),
        ];
    }

    /*=============================================================
        DEBUG: RUNTIME SUMMARY
    ==============================================================*/
    public static function runtime(): array
    {
        return [
            'runtime_id'   => LLM_RUNTIME_ID::AVIS_ID,
            'runtime_type' => LLM_RUNTIME_ID::AVIS_TYPE,
            'runtime_ver'  => LLM_RUNTIME_ID::VERSION,
            'status'       => LLM_RUNTIME::status(),
        ];
    }

    /*=============================================================
        DEBUG: SCHEMA SUMMARY
    ==============================================================*/
    public static function schema(): array
    {
        return [
            'schema_id'   => LLM_SCHEMA_ID::AVIS_ID,
            'schema_type' => LLM_SCHEMA_ID::AVIS_TYPE,
            'schema_ver'  => LLM_SCHEMA_ID::VERSION,
            'schemas'     => [
                'status'  => LLM_SCHEMA::STATUS,
                'env'     => LLM_SCHEMA::ENVIRONMENT,
                'debug'   => LLM_SCHEMA::DEBUG,
                'package' => LLM_SCHEMA::PACKAGE,
            ],
        ];
    }

    /*=============================================================
        DEBUG: MAP SUMMARY
    ==============================================================*/
    public static function map(): array
    {
        return [
            'map_id'   => LLM_MAP_ID::AVIS_ID,
            'map_type' => LLM_MAP_ID::AVIS_TYPE,
            'map_ver'  => LLM_MAP_ID::VERSION,
            'maps'     => [
                'debug'  => LLM_MAP::DEBUG,
                'system' => LLM_MAP::SYSTEM,
                'status' => LLM_MAP::STATUS,
                'package'=> LLM_MAP::PACKAGE,
            ],
        ];
    }

    /*=============================================================
        DEBUG: OUTPUT SUMMARY
    ==============================================================*/
    public static function output(): array
    {
        return [
            'output_id'   => LLM_OUTPUT_ID::AVIS_ID,
            'output_type' => LLM_OUTPUT_ID::AVIS_TYPE,
            'output_ver'  => LLM_OUTPUT_ID::VERSION,
        ];
    }

    /*=============================================================
        DEBUG: FULL SYSTEM SNAPSHOT
    ==============================================================*/
    public static function full(): array
    {
        return [
            'engine'  => self::engine(),
            'runtime' => self::runtime(),
            'schema'  => self::schema(),
            'map'     => self::map(),
            'output'  => self::output(),
        ];
    }
}

class LLM_DEBUG_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_DEBUG';
    public const AVIS_TYPE = 'DEBUG-INSPECTOR';
    public const VERSION   = '1.0.0';
}

?>
