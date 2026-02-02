<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_TEST
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_TEST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_TEST.php
    AVIS-TYPE: TEST-HARNESS
    AVIS-DESCRIPTION:
        Deterministic test harness for the COPILOT_CMS LLM subsystem.
        Provides AVIS-law compliant test payloads for validating
        engine, runtime, schema, mapping, and output layers.
        Contains NO rendering, NO mutation, NO environment access,
        NO phpinfo(), NO external calls, NO dynamic execution.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Test harness ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_OUTPUT.php';
require_once __DIR__ . '/LLM_SCHEMA.php';
require_once __DIR__ . '/LLM_MAP.php';
require_once __DIR__ . '/LLM_ENGINE.php';
require_once __DIR__ . '/LLM_RUNTIME.php';

class LLM_TEST
{
    /*=============================================================
        TEST: BASIC ENGINE SUMMARY
    ==============================================================*/
    public static function engine(): array
    {
        return LLM_OUTPUT::summary([
            'engine_id'  => LLM_ENGINE_ID::AVIS_ID,
            'engine_ver' => LLM_ENGINE_ID::VERSION,
        ]);
    }

    /*=============================================================
        TEST: RUNTIME STATUS PACKAGE
    ==============================================================*/
    public static function runtime(): array
    {
        return LLM_RUNTIME::status();
    }

    /*=============================================================
        TEST: SCHEMA VALIDATION PAYLOAD
    ==============================================================*/
    public static function schema(): array
    {
        return LLM_OUTPUT::summary([
            'status_schema'  => LLM_SCHEMA::STATUS,
            'env_schema'     => LLM_SCHEMA::ENVIRONMENT,
            'debug_schema'   => LLM_SCHEMA::DEBUG,
            'package_schema' => LLM_SCHEMA::PACKAGE,
        ]);
    }

    /*=============================================================
        TEST: MAP VALIDATION PAYLOAD
    ==============================================================*/
    public static function map(): array
    {
        return LLM_OUTPUT::summary([
            'debug_map'  => LLM_MAP::DEBUG,
            'system_map' => LLM_MAP::SYSTEM,
            'package'    => LLM_MAP::PACKAGE,
            'status'     => LLM_MAP::STATUS,
        ]);
    }

    /*=============================================================
        TEST: FULL SYSTEM SNAPSHOT
    ==============================================================*/
    public static function full(): array
    {
        return [
            'engine'  => self::engine(),
            'runtime' => self::runtime(),
            'schema'  => self::schema(),
            'map'     => self::map(),
        ];
    }
}

class LLM_TEST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_TEST';
    public const AVIS_TYPE = 'TEST-HARNESS';
    public const VERSION   = '1.0.0';
}

?>
