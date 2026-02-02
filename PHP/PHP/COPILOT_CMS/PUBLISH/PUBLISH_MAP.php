<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_MAP
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_MAP
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_MAP.php
    AVIS-TYPE: MAP
    AVIS-DESCRIPTION:
        Deterministic mapping descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural maps for publish operations, channels, payload
        transformations, and result structures. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Map descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_SCHEMA.php';
require_once __DIR__ . '/PUBLISH_API.php';

class PUBLISH_MAP
{
    /*=============================================================
        MAP IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'map_id'   => PUBLISH_MAP_ID::AVIS_ID,
            'map_type' => PUBLISH_MAP_ID::AVIS_TYPE,
            'map_ver'  => PUBLISH_MAP_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        OPERATION MAP
    ==============================================================*/
    public static function operations(): array
    {
        return [
            'CREATE'  => 'publish.create',
            'PREVIEW' => 'publish.preview',
            'EXECUTE' => 'publish.execute',
            'STATUS'  => 'publish.status',
            'HISTORY' => 'publish.history',
        ];
    }

    /*=============================================================
        CHANNEL MAP
    ==============================================================*/
    public static function channels(): array
    {
        return [
            'WEB' => [
                'type'     => 'web',
                'endpoint' => 'web publishing endpoint descriptor',
            ],
            'API' => [
                'type'     => 'api',
                'endpoint' => 'api publishing endpoint descriptor',
            ],
            'FEED' => [
                'type'     => 'feed',
                'endpoint' => 'feed publishing endpoint descriptor',
            ],
            'CUSTOM' => [
                'type'     => 'custom',
                'endpoint' => 'custom publishing endpoint descriptor',
            ],
        ];
    }

    /*=============================================================
        PAYLOAD TRANSFORM MAP
    ==============================================================*/
    public static function transforms(): array
    {
        return [
            'content_to_payload' => [
                'input'  => 'structured content block',
                'output' => 'publish_payload schema',
            ],
            'payload_to_preview' => [
                'input'  => 'publish_payload',
                'output' => 'preview_descriptor',
            ],
            'payload_to_result' => [
                'input'  => 'publish_payload + channels',
                'output' => 'publish_result schema',
            ],
        ];
    }

    /*=============================================================
        RESULT MAP
    ==============================================================*/
    public static function results(): array
    {
        return [
            'SUCCESS' => [
                'status' => 'success',
                'details' => 'successful publish metadata',
            ],
            'FAILURE' => [
                'status' => 'failure',
                'details' => 'failure metadata',
            ],
            'PARTIAL' => [
                'status' => 'partial',
                'details' => 'partial success metadata',
            ],
        ];
    }

    /*=============================================================
        PROVIDE MAP SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'map_id'   => PUBLISH_MAP_ID::AVIS_ID,
            'map_type' => PUBLISH_MAP_ID::AVIS_TYPE,
            'map_ver'  => PUBLISH_MAP_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL MAP PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'operations' => self::operations(),
            'channels'   => self::channels(),
            'transforms' => self::transforms(),
            'results'    => self::results(),
            'schema'     => PUBLISH_SCHEMA::summary(),
            'api'        => PUBLISH_API::summary(),
        ];
    }
}

class PUBLISH_MAP_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_MAP';
    public const AVIS_TYPE = 'MAP';
    public const VERSION   = '1.0.0';
}

?>
