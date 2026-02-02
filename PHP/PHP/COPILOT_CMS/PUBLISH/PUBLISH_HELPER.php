<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_HELPER
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_HELPER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_HELPER.php
    AVIS-TYPE: HELPER
    AVIS-DESCRIPTION:
        Deterministic helper descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural helper utilities for validating publish payloads,
        mapping schemas, preparing metadata, and normalizing channel data.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Helper descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_CONST.php';
require_once __DIR__ . '/PUBLISH_SCHEMA.php';
require_once __DIR__ . '/PUBLISH_MAP.php';

class PUBLISH_HELPER
{
    /*=============================================================
        HELPER IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'helper_id'   => PUBLISH_HELPER_ID::AVIS_ID,
            'helper_type' => PUBLISH_HELPER_ID::AVIS_TYPE,
            'helper_ver'  => PUBLISH_HELPER_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        PAYLOAD VALIDATION STRUCTURE
    ==============================================================*/
    public static function validatePayload(): array
    {
        return [
            'required_fields' => [
                'content',
                'metadata',
                'format',
            ],
            'metadata_fields' => [
                'author',
                'created_at',
                'updated_at',
            ],
            'format_rules' => [
                'allowed_types' => ['html', 'json', 'markdown', 'custom'],
            ],
        ];
    }

    /*=============================================================
        CHANNEL NORMALIZATION STRUCTURE
    ==============================================================*/
    public static function normalizeChannel(): array
    {
        return [
            'input' => 'raw channel descriptor',
            'output' => [
                'channel_id'   => 'normalized identifier',
                'channel_type' => 'normalized type',
                'endpoint'     => 'normalized endpoint',
            ],
        ];
    }

    /*=============================================================
        METADATA PREPARATION STRUCTURE
    ==============================================================*/
    public static function prepareMetadata(): array
    {
        return [
            'input' => 'raw metadata block',
            'output' => [
                'author'      => 'normalized author identifier',
                'created_at'  => 'ISO-8601 timestamp placeholder',
                'updated_at'  => 'ISO-8601 timestamp placeholder',
                'tags'        => 'normalized tag list',
            ],
        ];
    }

    /*=============================================================
        RESULT STRUCTURE BUILDER
    ==============================================================*/
    public static function buildResult(): array
    {
        return [
            'input' => [
                'status',
                'details',
                'errors',
            ],
            'output' => 'publish_result schema',
        ];
    }

    /*=============================================================
        PROVIDE HELPER SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'helper_id'   => PUBLISH_HELPER_ID::AVIS_ID,
            'helper_type' => PUBLISH_HELPER_ID::AVIS_TYPE,
            'helper_ver'  => PUBLISH_HELPER_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL HELPER PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'        => self::identity(),
            'validatePayload' => self::validatePayload(),
            'normalizeChannel'=> self::normalizeChannel(),
            'prepareMetadata' => self::prepareMetadata(),
            'buildResult'     => self::buildResult(),
            'const'           => PUBLISH_CONST::summary(),
            'schema'          => PUBLISH_SCHEMA::summary(),
            'map'             => PUBLISH_MAP::summary(),
        ];
    }
}

class PUBLISH_HELPER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_HELPER';
    public const AVIS_TYPE = 'HELPER';
    public const VERSION   = '1.0.0';
}

?>
