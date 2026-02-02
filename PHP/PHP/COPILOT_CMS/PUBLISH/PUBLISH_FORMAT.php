<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_FORMAT
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_FORMAT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_FORMAT.php
    AVIS-TYPE: FORMAT
    AVIS-DESCRIPTION:
        Deterministic formatting descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural formatting rules for publish payloads, metadata,
        channels, and results. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Format descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_SCHEMA.php';
require_once __DIR__ . '/PUBLISH_CONST.php';
require_once __DIR__ . '/PUBLISH_HELPER.php';

class PUBLISH_FORMAT
{
    /*=============================================================
        FORMAT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'format_id'   => PUBLISH_FORMAT_ID::AVIS_ID,
            'format_type' => PUBLISH_FORMAT_ID::AVIS_TYPE,
            'format_ver'  => PUBLISH_FORMAT_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        PAYLOAD FORMAT RULES
    ==============================================================*/
    public static function payload(): array
    {
        return [
            'content' => [
                'normalize_whitespace' => true,
                'strip_invalid_chars'  => true,
                'enforce_structure'    => true,
            ],
            'metadata' => [
                'normalize_keys'       => true,
                'enforce_timestamp'    => true,
                'sanitize_tags'        => true,
            ],
            'format' => [
                'allowed_types' => ['html', 'json', 'markdown', 'custom'],
                'default_type'  => 'html',
            ],
        ];
    }

    /*=============================================================
        CHANNEL FORMAT RULES
    ==============================================================*/
    public static function channel(): array
    {
        return [
            'normalize_endpoint' => true,
            'enforce_channel_type' => true,
            'strip_invalid_options' => true,
        ];
    }

    /*=============================================================
        RESULT FORMAT RULES
    ==============================================================*/
    public static function result(): array
    {
        return [
            'status' => [
                'allowed' => [
                    'success',
                    'failure',
                    'partial',
                ],
            ],
            'details' => [
                'normalize_structure' => true,
                'strip_empty_fields'  => true,
            ],
            'errors' => [
                'normalize_error_codes' => true,
                'sanitize_messages'     => true,
            ],
        ];
    }

    /*=============================================================
        METADATA FORMAT RULES
    ==============================================================*/
    public static function metadata(): array
    {
        return [
            'author' => [
                'normalize_case' => true,
                'strip_invalid'  => true,
            ],
            'timestamps' => [
                'enforce_iso8601' => true,
                'default_timezone' => 'UTC',
            ],
            'tags' => [
                'normalize_case' => true,
                'deduplicate'    => true,
            ],
        ];
    }

    /*=============================================================
        PROVIDE FORMAT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'format_id'   => PUBLISH_FORMAT_ID::AVIS_ID,
            'format_type' => PUBLISH_FORMAT_ID::AVIS_TYPE,
            'format_ver'  => PUBLISH_FORMAT_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL FORMAT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'payload'  => self::payload(),
            'channel'  => self::channel(),
            'result'   => self::result(),
            'metadata' => self::metadata(),
            'schema'   => PUBLISH_SCHEMA::summary(),
            'const'    => PUBLISH_CONST::summary(),
            'helper'   => PUBLISH_HELPER::summary(),
        ];
    }
}

class PUBLISH_FORMAT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_FORMAT';
    public const AVIS_TYPE = 'FORMAT';
    public const VERSION   = '1.0.0';
}

?>
