<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_UI
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_UI
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_UI.php
    AVIS-TYPE: UI-ADAPTER
    AVIS-DESCRIPTION:
        UI-facing adapter for COPILOT_CMS LLM generator environment.
        Provides deterministic, AVIS-law compliant access to bridge
        data for any CMS or frontend layer. Contains NO rendering,
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

class LLM_UI
{
    /*=============================================================
        PROVIDE FULL STATUS PACKAGE TO UI
    ==============================================================*/
    public static function status(): array
    {
        return LLM_BRIDGE::status();
    }

    /*=============================================================
        PROVIDE ENVIRONMENT SUMMARY TO UI
    ==============================================================*/
    public static function environment(): array
    {
        return LLM_BRIDGE::environment();
    }

    /*=============================================================
        PROVIDE DEBUG SUMMARY TO UI
    ==============================================================*/
    public static function debug(): array
    {
        return LLM_BRIDGE::debug();
    }

    /*=============================================================
        PROVIDE PACKAGED CONTENT TO UI
    ==============================================================*/
    public static function package(string $title, string $content): array
    {
        return LLM_BRIDGE::package($title, $content);
    }
}

class LLM_UI_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_UI';
    public const AVIS_TYPE = 'UI-ADAPTER';
    public const VERSION   = '1.0.0';
}

?>
