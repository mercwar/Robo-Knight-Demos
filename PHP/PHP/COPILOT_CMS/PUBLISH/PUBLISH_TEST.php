<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_TEST
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_TEST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_TEST.php
    AVIS-TYPE: TEST
    AVIS-DESCRIPTION:
        Deterministic test descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural test cases for schemas, maps, constants, helpers,
        formatting rules, and output envelopes. Contains NO execution,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Test descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_SCHEMA.php';
require_once __DIR__ . '/PUBLISH_MAP.php';
require_once __DIR__ . '/PUBLISH_CONST.php';
require_once __DIR__ . '/PUBLISH_HELPER.php';
require_once __DIR__ . '/PUBLISH_FORMAT.php';
require_once __DIR__ . '/PUBLISH_OUTPUT.php';

class PUBLISH_TEST
{
    /*=============================================================
        TEST IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'test_id'   => PUBLISH_TEST_ID::AVIS_ID,
            'test_type' => PUBLISH_TEST_ID::AVIS_TYPE,
            'test_ver'  => PUBLISH_TEST_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        SCHEMA TESTS
    ==============================================================*/
    public static function schemaTests(): array
    {
        return [
            'state_schema' => [
                'verify_fields' => ['status', 'timestamp', 'origin', 'id'],
                'verify_types'  => 'structural only',
            ],
            'payload_schema' => [
                'verify_fields' => ['content', 'metadata', 'format'],
                'verify_rules'  => 'structural only',
            ],
            'result_schema' => [
                'verify_fields' => ['status', 'timestamp', 'details', 'errors'],
            ],
        ];
    }

    /*=============================================================
        MAP TESTS
    ==============================================================*/
    public static function mapTests(): array
    {
        return [
            'operation_map' => [
                'verify_ops' => [
                    'CREATE', 'PREVIEW', 'EXECUTE', 'STATUS', 'HISTORY',
                ],
            ],
            'channel_map' => [
                'verify_channels' => ['WEB', 'API', 'FEED', 'CUSTOM'],
            ],
            'transform_map' => [
                'verify_transforms' => [
                    'content_to_payload',
                    'payload_to_preview',
                    'payload_to_result',
                ],
            ],
        ];
    }

    /*=============================================================
        CONSTANT TESTS
    ==============================================================*/
    public static function constTests(): array
    {
        return [
            'status_constants' => [
                'verify' => [
                    'PUBLISH_PENDING',
                    'PUBLISH_READY',
                    'PUBLISH_PROCESSING',
                    'PUBLISH_COMPLETE',
                    'PUBLISH_FAILED',
                ],
            ],
            'channel_constants' => [
                'verify' => [
                    'CHANNEL_WEB',
                    'CHANNEL_API',
                    'CHANNEL_FEED',
                    'CHANNEL_CUSTOM',
                ],
            ],
            'operation_constants' => [
                'verify' => [
                    'OP_CREATE',
                    'OP_PREVIEW',
                    'OP_EXECUTE',
                    'OP_STATUS',
                    'OP_HISTORY',
                ],
            ],
        ];
    }

    /*=============================================================
        HELPER TESTS
    ==============================================================*/
    public static function helperTests(): array
    {
        return [
            'validate_payload' => [
                'required_fields' => ['content', 'metadata', 'format'],
            ],
            'normalize_channel' => [
                'verify_output_fields' => [
                    'channel_id', 'channel_type', 'endpoint',
                ],
            ],
            'prepare_metadata' => [
                'verify_output_fields' => [
                    'author', 'created_at', 'updated_at', 'tags',
                ],
            ],
        ];
    }

    /*=============================================================
        FORMAT TESTS
    ==============================================================*/
    public static function formatTests(): array
    {
        return [
            'payload_format' => [
                'verify_rules' => [
                    'normalize_whitespace',
                    'strip_invalid_chars',
                    'enforce_structure',
                ],
            ],
            'result_format' => [
                'verify_status_allowed' => ['success', 'failure', 'partial'],
            ],
            'metadata_format' => [
                'verify_timestamp_rules' => ['enforce_iso8601'],
            ],
        ];
    }

    /*=============================================================
        OUTPUT TESTS
    ==============================================================*/
    public static function outputTests(): array
    {
        return [
            'envelope_structure' => [
                'verify_fields' => ['status', 'payload', 'metadata'],
            ],
            'serialization_rules' => [
                'verify' => [
                    'normalize_keys',
                    'strip_null_fields',
                    'enforce_data_types',
                ],
            ],
            'normalization_rules' => [
                'verify' => [
                    'status.map',
                    'details.normalize_structure',
                    'errors.normalize_codes',
                ],
            ],
        ];
    }

    /*=============================================================
        PROVIDE TEST SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'test_id'   => PUBLISH_TEST_ID::AVIS_ID,
            'test_type' => PUBLISH_TEST_ID::AVIS_TYPE,
            'test_ver'  => PUBLISH_TEST_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL TEST PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'schemaTests'  => self::schemaTests(),
            'mapTests'     => self::mapTests(),
            'constTests'   => self::constTests(),
            'helperTests'  => self::helperTests(),
            'formatTests'  => self::formatTests(),
            'outputTests'  => self::outputTests(),
        ];
    }
}

class PUBLISH_TEST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_TEST';
    public const AVIS_TYPE = 'TEST';
    public const VERSION   = '1.0.0';
}

?>
