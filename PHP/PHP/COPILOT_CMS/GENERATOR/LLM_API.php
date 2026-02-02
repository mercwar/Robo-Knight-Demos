<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_API
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_API
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_API.php
    AVIS-TYPE: API-ADAPTER
    AVIS-DESCRIPTION:
        API-facing adapter for COPILOT_CMS LLM generator environment.
        Provides deterministic, AVIS-law compliant access to bridge
        data for backend/API consumers. Contains NO rendering,
        NO mutation, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No rendering
        - No environment mutation
        - No external execution
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_BRIDGE.php';

class LLM_API
{
    /*=============================================================
        PROVIDE FULL STATUS PACKAGE TO API
    ==============================================================*/
    public static function status(): array
    {
        return LLM_BRIDGE::status();
    }

    /*=============================================================
        PROVIDE ENVIRONMENT SUMMARY TO API
    ==============================================================*/
    public static function environment(): array
    {
        return LLM_BRIDGE::environment();
    }

    /*=============================================================
        PROVIDE DEBUG SUMMARY TO API
    ==============================================================*/
    public static function debug(): array
    {
        return LLM_BRIDGE::debug();
    }

    /*=============================================================
        PROVIDE PACKAGED CONTENT TO API
    ==============================================================*/
    public static function package(string $title, string $content): array
    {
        return LLM_BRIDGE::package($title, $content);
    }
}

class LLM_API_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_API';
    public const AVIS_TYPE = 'API-ADAPTER';
    public const VERSION   = '1.0.0';
}

?>
