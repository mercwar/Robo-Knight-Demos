<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_SYSTEM
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_SYSTEM
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_SYSTEM.php
    AVIS-TYPE: SYSTEM
    AVIS-DESCRIPTION:
        Deterministic system descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines system-level identity, boundaries, capabilities, integration
        points, and subsystem relationships. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - System descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_MANIFEST.php';
require_once __DIR__ . '/PUBLISH_REGISTER.php';
require_once __DIR__ . '/PUBLISH_INDEX.php';
require_once __DIR__ . '/PUBLISH_INFO.php';

class PUBLISH_SYSTEM
{
    /*=============================================================
        SYSTEM IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'system_id'   => PUBLISH_SYSTEM_ID::AVIS_ID,
            'system_type' => PUBLISH_SYSTEM_ID::AVIS_TYPE,
            'system_ver'  => PUBLISH_SYSTEM_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        SYSTEM BOUNDARIES
    ==============================================================*/
    public static function boundaries(): array
    {
        return [
            'input' => [
                'publish_payload',
                'publish_state',
                'channel_descriptors',
            ],
            'output' => [
                'publish_result',
                'output_envelope',
            ],
            'exclusions' => [
                'no_rendering',
                'no_environment_access',
                'no_external_calls',
                'no_dynamic_execution',
            ],
        ];
    }

    /*=============================================================
        SYSTEM CAPABILITIES
    ==============================================================*/
    public static function capabilities(): array
    {
        return [
            'payload_normalization' => 'Normalize and structure publish payloads',
            'metadata_processing'   => 'Prepare and validate metadata blocks',
            'channel_mapping'       => 'Map channels to deterministic descriptors',
            'result_generation'     => 'Produce AVIS-law compliant publish results',
            'output_serialization'  => 'Produce deterministic output envelopes',
        ];
    }

    /*=============================================================
        SYSTEM INTEGRATION POINTS
    ==============================================================*/
    public static function integration(): array
    {
        return [
            'EDITOR' => [
                'provides' => 'content blocks + metadata',
                'consumes' => 'publish_state',
            ],
            'SYSTEM' => [
                'provides' => 'global identity + environment descriptors',
                'consumes' => 'subsystem manifests',
            ],
            'MEDIA' => [
                'optional' => true,
                'provides' => 'media asset descriptors',
            ],
            'AUTH' => [
                'optional' => true,
                'provides' => 'user identity + permissions',
            ],
        ];
    }

    /*=============================================================
        SYSTEM RELATIONSHIPS
    ==============================================================*/
    public static function relationships(): array
    {
        return [
            'manifest' => PUBLISH_MANIFEST::summary(),
            'register' => PUBLISH_REGISTER::summary(),
            'index'    => PUBLISH_INDEX::summary(),
            'info'     => PUBLISH_INFO::summary(),
        ];
    }

    /*=============================================================
        PROVIDE SYSTEM SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'system_id'   => PUBLISH_SYSTEM_ID::AVIS_ID,
            'system_type' => PUBLISH_SYSTEM_ID::AVIS_TYPE,
            'system_ver'  => PUBLISH_SYSTEM_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL SYSTEM PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'boundaries'   => self::boundaries(),
            'capabilities' => self::capabilities(),
            'integration'  => self::integration(),
            'relationships'=> self::relationships(),
            'manifest'     => PUBLISH_MANIFEST::summary(),
            'register'     => PUBLISH_REGISTER::summary(),
            'index'        => PUBLISH_INDEX::summary(),
            'info'         => PUBLISH_INFO::summary(),
        ];
    }
}

class PUBLISH_SYSTEM_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_SYSTEM';
    public const AVIS_TYPE = 'SYSTEM';
    public const VERSION   = '1.0.0';
}

?>
