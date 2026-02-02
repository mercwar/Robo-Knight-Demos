<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_BRIDGE
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_BRIDGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_BRIDGE.php
    AVIS-TYPE: BRIDGE
    AVIS-DESCRIPTION:
        Deterministic bridge descriptor for the COPILOT_CMS PUBLISH subsystem.
        Adapts runtime structures to UI/API layers using AVIS-law structural
        descriptors. Contains NO rendering, NO mutation, NO environment access,
        NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Bridge descriptor ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_RUNTIME.php';
require_once __DIR__ . '/PUBLISH_ENGINE.php';

class PUBLISH_BRIDGE
{
    /*=============================================================
        BRIDGE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'bridge_id'   => PUBLISH_BRIDGE_ID::AVIS_ID,
            'bridge_type' => PUBLISH_BRIDGE_ID::AVIS_TYPE,
            'bridge_ver'  => PUBLISH_BRIDGE_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        BRIDGE ADAPTER MAP
    ==============================================================*/
    public static function adapter(): array
    {
        return [
            'runtime_to_ui' => [
                'publish_state'   => 'UI-ready state descriptor',
                'publish_targets' => 'UI-ready target descriptor',
                'publish_payload' => 'UI-ready payload descriptor',
            ],
            'runtime_to_api' => [
                'publish_state'   => 'API-ready state descriptor',
                'publish_targets' => 'API-ready target descriptor',
                'publish_payload' => 'API-ready payload descriptor',
            ],
        ];
    }

    /*=============================================================
        BRIDGE CONSTRAINTS
    ==============================================================*/
    public static function constraints(): array
    {
        return [
            'immutable_bridge_identity',
            'deterministic_mapping',
            'no_side_effects',
        ];
    }

    /*=============================================================
        PROVIDE BRIDGE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'bridge_id'   => PUBLISH_BRIDGE_ID::AVIS_ID,
            'bridge_type' => PUBLISH_BRIDGE_ID::AVIS_TYPE,
            'bridge_ver'  => PUBLISH_BRIDGE_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL BRIDGE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'adapter'     => self::adapter(),
            'constraints' => self::constraints(),
            'runtime'     => PUBLISH_RUNTIME::summary(),
            'engine'      => PUBLISH_ENGINE::summary(),
        ];
    }
}

class PUBLISH_BRIDGE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_BRIDGE';
    public const AVIS_TYPE = 'BRIDGE';
    public const VERSION   = '1.0.0';
}

?>
