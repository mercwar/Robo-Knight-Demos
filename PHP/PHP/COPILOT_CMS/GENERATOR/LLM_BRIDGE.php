<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_BRIDGE
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_BRIDGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_BRIDGE.php
    AVIS-TYPE: BRIDGE
    AVIS-DESCRIPTION:
        Bridge layer between LLM_RUNTIME and CMS/UI layers.
        Provides deterministic, AVIS-law compliant access to
        runtime status, environment summaries, and debug maps.
        Contains NO rendering, NO mutation, NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No environment mutation
        - No external execution
        - No phpinfo()
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_RUNTIME.php';

class LLM_BRIDGE
{
    /*=============================================================
        PROVIDE FULL RUNTIME STATUS PACKAGE
    ==============================================================*/
    public static function status(): array
    {
        return LLM_RUNTIME::status();
    }

    /*=============================================================
        PROVIDE ENVIRONMENT SUMMARY ONLY
    ==============================================================*/
    public static function environment(): array
    {
        return LLM_ENGINE::environment();
    }

    /*=============================================================
        PROVIDE DEBUG SUMMARY ONLY
    ==============================================================*/
    public static function debug(): array
    {
        return LLM_ENGINE::debugSummary();
    }

    /*=============================================================
        PROVIDE PACKAGED CONTENT FOR CMS
    ==============================================================*/
    public static function package(string $title, string $content): array
    {
        return LLM_RUNTIME::package($title, $content);
    }
}

class LLM_BRIDGE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_BRIDGE';
    public const AVIS_TYPE = 'BRIDGE';
    public const VERSION   = '1.0.0';
}

?>
