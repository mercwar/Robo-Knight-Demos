<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_INDEX
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_INDEX
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_INDEX.php
    AVIS-TYPE: INDEX
    AVIS-DESCRIPTION:
        Deterministic index descriptor for the COPILOT_CMS PUBLISH subsystem.
        Provides canonical registry of subsystem artifacts, layers, schemas,
        maps, and structural descriptors. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Index descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_SCHEMA.php';
require_once __DIR__ . '/PUBLISH_MAP.php';
require_once __DIR__ . '/PUBLISH_API.php';
require_once __DIR__ . '/PUBLISH_UI.php';
require_once __DIR__ . '/PUBLISH_RUNTIME.php';
require_once __DIR__ . '/PUBLISH_ENGINE.php';

class PUBLISH_INDEX
{
    /*=============================================================
        INDEX IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'index_id'   => PUBLISH_INDEX_ID::AVIS_ID,
            'index_type' => PUBLISH_INDEX_ID::AVIS_TYPE,
            'index_ver'  => PUBLISH_INDEX_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        ARTIFACT REGISTRY
    ==============================================================*/
    public static function artifacts(): array
    {
        return [
            'LOADER'   => 'PUBLISH_LOADER.php',
            'ENGINE'   => 'PUBLISH_ENGINE.php',
            'RUNTIME'  => 'PUBLISH_RUNTIME.php',
            'BRIDGE'   => 'PUBLISH_BRIDGE.php',
            'UI'       => 'PUBLISH_UI.php',
            'API'      => 'PUBLISH_API.php',
            'SCHEMA'   => 'PUBLISH_SCHEMA.php',
            'MAP'      => 'PUBLISH_MAP.php',
            'INDEX'    => 'PUBLISH_INDEX.php',
            'CONST'    => 'PUBLISH_CONST.php',
            'HELPER'   => 'PUBLISH_HELPER.php',
            'FORMAT'   => 'PUBLISH_FORMAT.php',
            'OUTPUT'   => 'PUBLISH_OUTPUT.php',
            'DOC'      => 'PUBLISH_DOC.php',
            'TEST'     => 'PUBLISH_TEST.php',
            'DEBUG'    => 'PUBLISH_DEBUG.php',
            'INFO'     => 'PUBLISH_INFO.php',
            'META'     => 'PUBLISH_META.php',
            'MANIFEST' => 'PUBLISH_MANIFEST.php',
            'REGISTER' => 'PUBLISH_REGISTER.php',
            'SYSTEM'   => 'PUBLISH_SYSTEM.php',
            'CORE'     => 'PUBLISH_CORE.php',
            'ROOT'     => 'PUBLISH_ROOT.php',
        ];
    }

    /*=============================================================
        LAYER REGISTRY
    ==============================================================*/
    public static function layers(): array
    {
        return [
            'primary' => [
                'ENGINE', 'RUNTIME', 'BRIDGE', 'UI', 'API',
            ],
            'structural' => [
                'SCHEMA', 'MAP', 'INDEX', 'CONST',
            ],
            'support' => [
                'HELPER', 'FORMAT', 'OUTPUT',
            ],
            'meta' => [
                'DOC', 'TEST', 'DEBUG', 'INFO', 'META',
                'MANIFEST', 'REGISTER', 'SYSTEM', 'CORE', 'ROOT',
            ],
        ];
    }

    /*=============================================================
        RELATIONSHIP MAP
    ==============================================================*/
    public static function relationships(): array
    {
        return [
            'ENGINE → RUNTIME'  => 'Runtime depends on engine identity.',
            'RUNTIME → BRIDGE'  => 'Bridge adapts runtime structures.',
            'BRIDGE → UI'       => 'UI depends on bridge descriptors.',
            'UI → API'          => 'API contracts map from UI events.',
            'API → SCHEMA'      => 'Schemas define API payload structures.',
            'SCHEMA → MAP'      => 'Maps define schema usage patterns.',
            'MAP → INDEX'       => 'Index aggregates maps and schemas.',
        ];
    }

    /*=============================================================
        PROVIDE INDEX SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'index_id'   => PUBLISH_INDEX_ID::AVIS_ID,
            'index_type' => PUBLISH_INDEX_ID::AVIS_TYPE,
            'index_ver'  => PUBLISH_INDEX_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL INDEX PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'      => self::identity(),
            'artifacts'     => self::artifacts(),
            'layers'        => self::layers(),
            'relationships' => self::relationships(),
            'schema'        => PUBLISH_SCHEMA::full(),
            'map'           => PUBLISH_MAP::full(),
            'api'           => PUBLISH_API::summary(),
            'ui'            => PUBLISH_UI::summary(),
            'runtime'       => PUBLISH_RUNTIME::summary(),
            'engine'        => PUBLISH_ENGINE::summary(),
        ];
    }
}

class PUBLISH_INDEX_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_INDEX';
    public const AVIS_TYPE = 'INDEX';
    public const VERSION   = '1.0.0';
}

?>
