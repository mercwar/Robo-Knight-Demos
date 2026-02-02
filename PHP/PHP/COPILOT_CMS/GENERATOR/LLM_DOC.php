<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_DOC
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_DOC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_DOC.php
    AVIS-TYPE: DOCUMENTATION
    AVIS-DESCRIPTION:
        Documentation generator for the COPILOT_CMS LLM subsystem.
        Produces deterministic, AVIS-law compliant documentation
        blocks for engine, runtime, schema, mapping, and output
        layers. Contains NO rendering, NO mutation, NO environment
        access, NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Documentation ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_OUTPUT.php';
require_once __DIR__ . '/LLM_SCHEMA.php';
require_once __DIR__ . '/LLM_MAP.php';
require_once __DIR__ . '/LLM_CONST.php';

class LLM_DOC
{
    /*=============================================================
        DOCUMENT: ENGINE
    ==============================================================*/
    public static function engine(): array
    {
        return LLM_OUTPUT::block(
            'LLM Engine',
            'Core deterministic engine providing environment and debug summaries.'
        );
    }

    /*=============================================================
        DOCUMENT: RUNTIME
    ==============================================================*/
    public static function runtime(): array
    {
        return LLM_OUTPUT::block(
            'LLM Runtime',
            'Runtime layer providing packaged status and structured output.'
        );
    }

    /*=============================================================
        DOCUMENT: SCHEMA
    ==============================================================*/
    public static function schema(): array
    {
        return LLM_OUTPUT::block(
            'LLM Schema',
            'Canonical schema definitions for status, environment, debug, and package structures.'
        );
    }

    /*=============================================================
        DOCUMENT: MAP
    ==============================================================*/
    public static function map(): array
    {
        return LLM_OUTPUT::block(
            'LLM Map',
            'Deterministic mapping of schema definitions to constant registries.'
        );
    }

    /*=============================================================
        DOCUMENT: OUTPUT
    ==============================================================*/
    public static function output(): array
    {
        return LLM_OUTPUT::block(
            'LLM Output',
            'Final output assembler for structured generator responses.'
        );
    }

    /*=============================================================
        DOCUMENT: FULL SYSTEM
    ==============================================================*/
    public static function full(): array
    {
        return LLM_OUTPUT::blocks([
            'Engine'  => 'Core deterministic engine.',
            'Runtime' => 'Runtime status and packaging layer.',
            'Schema'  => 'Canonical structure definitions.',
            'Map'     => 'Schema-to-constant mapping layer.',
            'Output'  => 'Final output assembler.',
        ]);
    }
}

class LLM_DOC_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_DOC';
    public const AVIS_TYPE = 'DOCUMENTATION';
    public const VERSION   = '1.0.0';
}

?>
