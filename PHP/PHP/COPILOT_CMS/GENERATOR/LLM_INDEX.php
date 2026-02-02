<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_INDEX
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_INDEX
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_INDEX.php
    AVIS-TYPE: ENTRYPOINT
    AVIS-DESCRIPTION:
        Canonical entrypoint for the COPILOT_CMS LLM generator system.
        Provides deterministic access to UI, API, runtime, engine,
        schema, and mapping layers. Contains NO rendering, NO mutation,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Entrypoint ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_UI.php';
require_once __DIR__ . '/LLM_API.php';
require_once __DIR__ . '/LLM_RUNTIME.php';
require_once __DIR__ . '/LLM_ENGINE.php';
require_once __DIR__ . '/LLM_SCHEMA.php';
require_once __DIR__ . '/LLM_MAP.php';

class LLM_INDEX
{
    /*=============================================================
        PROVIDE FULL SYSTEM EXPORT
    ==============================================================*/
    public static function export(): array
    {
        return [
            'ui'      => LLM_UI_ID::AVIS_ID,
            'api'     => LLM_API_ID::AVIS_ID,
            'runtime' => LLM_RUNTIME_ID::AVIS_ID,
            'engine'  => LLM_ENGINE_ID::AVIS_ID,
            'schema'  => LLM_SCHEMA_ID::AVIS_ID,
            'map'     => LLM_MAP_ID::AVIS_ID,
        ];
    }
}

class LLM_INDEX_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_INDEX';
    public const AVIS_TYPE = 'ENTRYPOINT';
    public const VERSION   = '1.0.0';
}

?>
