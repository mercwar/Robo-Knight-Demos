<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_RUNTIME
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_RUNTIME
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_RUNTIME.php
    AVIS-TYPE: RUNTIME
    AVIS-DESCRIPTION:
        Runtime layer for COPILOT_CMS LLM generator environment.
        Provides deterministic, AVIS-law compliant runtime utilities
        for higher-level CMS operations. Contains NO external calls,
        NO shell execution, NO phpinfo(), NO mutation.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No external execution
        - No environment mutation
        - No phpinfo()
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_ENGINE.php';

class LLM_RUNTIME
{
    /*=============================================================
        RUNTIME STATUS PACKAGE
        Returns a deterministic snapshot of engine + environment.
    ==============================================================*/
    public static function status(): array
    {
        return [
            'engine'      => LLM_ENGINE_ID::AVIS_ID,
            'engine_ver'  => LLM_ENGINE_ID::VERSION,
            'environment' => LLM_ENGINE::environment(),
            'debug'       => LLM_ENGINE::debugSummary(),
        ];
    }

    /*=============================================================
        RUNTIME WRAPPER
        Wraps content with metadata for CMS consumption.
    ==============================================================*/
    public static function package(string $title, string $content): array
    {
        return [
            'meta' => [
                'runtime' => LLM_RUNTIME_ID::VERSION,
                'engine'  => LLM_ENGINE_ID::VERSION,
                'title'   => $title,
            ],
            'payload' => $content,
        ];
    }
}

class LLM_RUNTIME_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_RUNTIME';
    public const AVIS_TYPE = 'RUNTIME';
    public const VERSION   = '1.0.0';
}

?>
