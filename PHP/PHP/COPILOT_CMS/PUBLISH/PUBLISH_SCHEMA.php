<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_SCHEMA
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_SCHEMA
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_SCHEMA.php
    AVIS-TYPE: SCHEMA
    AVIS-DESCRIPTION:
        Deterministic schema descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural schemas for publish state, payloads, channels,
        metadata, and results. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Schema descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_API.php';
require_once __DIR__ . '/PUBLISH_RUNTIME.php';

class PUBLISH_SCHEMA
{
    /*=============================================================
        SCHEMA IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'schema_id'   => PUBLISH_SCHEMA_ID::AVIS_ID,
            'schema_type' => PUBLISH_SCHEMA_ID::AVIS_TYPE,
            'schema_ver'  => PUBLISH_SCHEMA_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        PUBLISH STATE SCHEMA
    ==============================================================*/
    public static function state(): array
    {
        return [
            'status'    => 'pending|ready|processing|complete|failed',
            'timestamp' => 'ISO-8601 timestamp placeholder',
            'origin'    => 'editor|api|system',
            'id'        => 'unique publish operation identifier',
        ];
    }

    /*=============================================================
        PUBLISH PAYLOAD SCHEMA
    ==============================================================*/
    public static function payload(): array
    {
        return [
            'content' => [
                'type'    => 'structured content block',
                'version' => 'content version identifier',
            ],
            'metadata' => [
                'author'      => 'author identifier',
                'created_at'  => 'ISO-8601 timestamp placeholder',
                'updated_at'  => 'ISO-8601 timestamp placeholder',
                'tags'        => 'list of metadata tags',
            ],
            'format' => [
                'type'    => 'html|json|markdown|custom',
                'version' => 'format version identifier',
            ],
        ];
    }

    /*=============================================================
        PUBLISH CHANNEL SCHEMA
    ==============================================================*/
    public static function channels(): array
    {
        return [
            'channel_id'   => 'unique channel identifier',
            'channel_type' => 'web|api|feed|custom',
            'endpoint'     => 'target endpoint descriptor',
            'options'      => 'channel-specific configuration',
        ];
    }

    /*=============================================================
        PUBLISH RESULT SCHEMA
    ==============================================================*/
    public static function result(): array
    {
        return [
            'status'    => 'success|failure|partial',
            'timestamp' => 'ISO-8601 timestamp placeholder',
            'details'   => 'structured result metadata',
            'errors'    => 'list of error descriptors',
        ];
    }

    /*=============================================================
        PROVIDE SCHEMA SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'schema_id'   => PUBLISH_SCHEMA_ID::AVIS_ID,
            'schema_type' => PUBLISH_SCHEMA_ID::AVIS_TYPE,
            'schema_ver'  => PUBLISH_SCHEMA_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL SCHEMA PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'state'    => self::state(),
            'payload'  => self::payload(),
            'channels' => self::channels(),
            'result'   => self::result(),
            'api'      => PUBLISH_API::summary(),
            'runtime'  => PUBLISH_RUNTIME::summary(),
        ];
    }
}

class PUBLISH_SCHEMA_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_SCHEMA';
    public const AVIS_TYPE = 'SCHEMA';
    public const VERSION   = '1.0.0';
}

?>
