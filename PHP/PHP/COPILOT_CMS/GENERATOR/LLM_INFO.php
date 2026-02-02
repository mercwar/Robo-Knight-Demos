<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_INFO
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_INFO
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_INFO.php
    AVIS-TYPE: INFO
    AVIS-DESCRIPTION:
        Informational metadata provider for the COPILOT_CMS LLM subsystem.
        Exposes deterministic AVIS-law compliant metadata for all generator
        layers. Contains NO rendering, NO mutation, NO environment access,
        NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Informational metadata ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_ENGINE.php';
require_once __DIR__ . '/LLM_RUNTIME.php';
require_once __DIR__ . '/LLM_BRIDGE.php';
require_once __DIR__ . '/LLM_UI.php';
require_once __DIR__ . '/LLM_API.php';
require_once __DIR__ . '/LLM_SCHEMA.php';
require_once __DIR__ . '/LLM_MAP.php';
require_once __DIR__ . '/LLM_OUTPUT.php';
require_once __DIR__ . '/LLM_CONST.php';

class LLM_INFO
{
    /*=============================================================
        PROVIDE METADATA FOR ALL LAYERS
    ==============================================================*/
    public static function layers(): array
    {
        return [
            'loader'  => LLM_CONST::LAYER_LOADER,
            'engine'  => LLM_CONST::LAYER_ENGINE,
            'runtime' => LLM_CONST::LAYER_RUNTIME,
            'bridge'  => LLM_CONST::LAYER_BRIDGE,
            'ui'      => LLM_CONST::LAYER_UI,
            'api'     => LLM_CONST::LAYER_API,
            'schema'  => LLM_CONST::LAYER_SCHEMA,
            'map'     => LLM_CONST::LAYER_MAP,
            'index'   => LLM_CONST::LAYER_INDEX,
        ];
    }

    /*=============================================================
        PROVIDE VERSION MAP FOR ALL LAYERS
    ==============================================================*/
    public static function versions(): array
    {
        return [
            'engine'  => LLM_ENGINE_ID::VERSION,
            'runtime' => LLM_RUNTIME_ID::VERSION,
            'bridge'  => LLM_BRIDGE_ID::VERSION,
            'ui'      => LLM_UI_ID::VERSION,
            'api'     => LLM_API_ID::VERSION,
            'schema'  => LLM_SCHEMA_ID::VERSION,
            'map'     => LLM_MAP_ID::VERSION,
            'output'  => LLM_OUTPUT_ID::VERSION,
            'const'   => LLM_CONST_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE IDENTIFIER MAP FOR ALL LAYERS
    ==============================================================*/
    public static function ids(): array
    {
        return [
            'engine'  => LLM_ENGINE_ID::AVIS_ID,
            'runtime' => LLM_RUNTIME_ID::AVIS_ID,
            'bridge'  => LLM_BRIDGE_ID::AVIS_ID,
            'ui'      => LLM_UI_ID::AVIS_ID,
            'api'     => LLM_API_ID::AVIS_ID,
            'schema'  => LLM_SCHEMA_ID::AVIS_ID,
            'map'     => LLM_MAP_ID::AVIS_ID,
            'output'  => LLM_OUTPUT_ID::AVIS_ID,
            'const'   => LLM_CONST_ID::AVIS_ID,
        ];
    }

    /*=============================================================
        PROVIDE FULL SYSTEM METADATA PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'layers'   => self::layers(),
            'versions' => self::versions(),
            'ids'      => self::ids(),
        ];
    }
}

class LLM_INFO_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_INFO';
    public const AVIS_TYPE = 'INFO';
    public const VERSION   = '1.0.0';
}

?>
