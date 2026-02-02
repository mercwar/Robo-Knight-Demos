<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_ENGINE
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_ENGINE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_ENGINE.php
    AVIS-TYPE: ENGINE
    AVIS-DESCRIPTION:
        Deterministic engine descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines subsystem engine identity, structural roles, and canonical
        publishing engine metadata. Contains NO rendering, NO mutation,
        NO environment access, NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Engine descriptor ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class PUBLISH_ENGINE
{
    /*=============================================================
        ENGINE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'engine_id'   => PUBLISH_ENGINE_ID::AVIS_ID,
            'engine_type' => PUBLISH_ENGINE_ID::AVIS_TYPE,
            'engine_ver'  => PUBLISH_ENGINE_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        ENGINE ROLES
    ==============================================================*/
    public static function roles(): array
    {
        return [
            'ROLE_INPUT'      => 'PUBLISH_INPUT',
            'ROLE_OUTPUT'     => 'PUBLISH_OUTPUT',
            'ROLE_ADAPTER'    => 'PUBLISH_ADAPTER',
            'ROLE_RUNTIME'    => 'PUBLISH_RUNTIME',
            'ROLE_ENGINE'     => 'PUBLISH_ENGINE',
            'ROLE_SCHEMA'     => 'PUBLISH_SCHEMA',
            'ROLE_MAP'        => 'PUBLISH_MAP',
        ];
    }

    /*=============================================================
        ENGINE STRUCTURE
    ==============================================================*/
    public static function structure(): array
    {
        return [
            'supports' => [
                'publish_state',
                'publish_targets',
                'publish_channels',
                'publish_payloads',
                'publish_metadata',
            ],
            'constraints' => [
                'deterministic_output',
                'immutable_engine_identity',
                'no_side_effects',
            ],
        ];
    }

    /*=============================================================
        PROVIDE ENGINE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'engine_id'   => PUBLISH_ENGINE_ID::AVIS_ID,
            'engine_type' => PUBLISH_ENGINE_ID::AVIS_TYPE,
            'engine_ver'  => PUBLISH_ENGINE_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL ENGINE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'roles'     => self::roles(),
            'structure' => self::structure(),
        ];
    }
}

class PUBLISH_ENGINE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_ENGINE';
    public const AVIS_TYPE = 'ENGINE';
    public const VERSION   = '1.0.0';
}

?>
