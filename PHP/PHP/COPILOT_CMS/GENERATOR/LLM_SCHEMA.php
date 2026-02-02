<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_SCHEMA
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_SCHEMA
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_SCHEMA.php
    AVIS-TYPE: SCHEMA
    AVIS-DESCRIPTION:
        Canonical schema definitions for COPILOT_CMS LLM structures.
        Provides deterministic, immutable schema arrays for runtime,
        engine, UI, and API layers. Contains NO logic, NO mutation,
        NO environment access, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Schema ONLY
        - No dynamic values
        - No external calls
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class LLM_SCHEMA
{
    /*=============================================================
        RUNTIME STATUS SCHEMA
    ==============================================================*/
    public const STATUS = [
        'engine'      => 'string',
        'engine_ver'  => 'string',
        'environment' => 'array',
        'debug'       => 'array',
    ];

    /*=============================================================
        ENVIRONMENT SCHEMA
    ==============================================================*/
    public const ENVIRONMENT = [
        'server' => [
            'name'     => 'string|null',
            'addr'     => 'string|null',
            'port'     => 'string|null',
            'protocol' => 'string|null',
            'software' => 'string|null',
            'uri'      => 'string|null',
            'method'   => 'string|null',
        ],
        'php' => [
            'version'      => 'string',
            'sapi'         => 'string',
            'memory_limit' => 'string',
            'max_exec'     => 'string',
            'upload_max'   => 'string',
            'post_max'     => 'string',
        ],
    ];

    /*=============================================================
        DEBUG SUMMARY SCHEMA
    ==============================================================*/
    public const DEBUG = [
        'php_debug' => 'array',
        'js_debug'  => 'array',
    ];

    /*=============================================================
        PACKAGE SCHEMA
    ==============================================================*/
    public const PACKAGE = [
        'meta' => [
            'runtime' => 'string',
            'engine'  => 'string',
            'title'   => 'string',
        ],
        'payload' => 'string',
    ];
}

class LLM_SCHEMA_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_SCHEMA';
    public const AVIS_TYPE = 'SCHEMA';
    public const VERSION   = '1.0.0';
}

?>
