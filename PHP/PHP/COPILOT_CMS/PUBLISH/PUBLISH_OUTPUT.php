<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_OUTPUT
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_OUTPUT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_OUTPUT.php
    AVIS-TYPE: OUTPUT
    AVIS-DESCRIPTION:
        Deterministic output descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural output envelopes, serialization rules, metadata
        wrappers, and normalization structures. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Output descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_FORMAT.php';
require_once __DIR__ . '/PUBLISH_SCHEMA.php';
require_once __DIR__ . '/PUBLISH_CONST.php';

class PUBLISH_OUTPUT
{
    /*=============================================================
        OUTPUT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'output_id'   => PUBLISH_OUTPUT_ID::AVIS_ID,
            'output_type' => PUBLISH_OUTPUT_ID::AVIS_TYPE,
            'output_ver'  => PUBLISH_OUTPUT_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        OUTPUT ENVELOPE STRUCTURE
    ==============================================================*/
    public static function envelope(): array
    {
        return [
            'status'   => 'success|failure|partial',
            'payload'  => 'publish_result schema',
            'metadata' => 'output metadata block',
        ];
    }

    /*=============================================================
        OUTPUT SERIALIZATION RULES
    ==============================================================*/
    public static function serialization(): array
    {
        return [
            'normalize_keys'      => true,
            'strip_null_fields'   => true,
            'enforce_data_types'  => true,
            'allowed_formats'     => ['json', 'xml', 'array'],
            'default_format'      => 'json',
        ];
    }

    /*=============================================================
        OUTPUT METADATA STRUCTURE
    ==============================================================*/
    public static function metadata(): array
    {
        return [
            'timestamp' => 'ISO-8601 timestamp placeholder',
            'engine'    => 'PUBLISH_ENGINE identity summary',
            'runtime'   => 'PUBLISH_RUNTIME identity summary',
            'schema'    => 'PUBLISH_SCHEMA identity summary',
        ];
    }

    /*=============================================================
        OUTPUT NORMALIZATION RULES
    ==============================================================*/
    public static function normalize(): array
    {
        return [
            'status' => [
                'map' => [
                    'success' => 'SUCCESS',
                    'failure' => 'FAILURE',
                    'partial' => 'PARTIAL',
                ],
            ],
            'details' => [
                'strip_empty' => true,
                'normalize_structure' => true,
            ],
            'errors' => [
                'normalize_codes' => true,
                'sanitize_messages' => true,
            ],
        ];
    }

    /*=============================================================
        PROVIDE OUTPUT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'output_id'   => PUBLISH_OUTPUT_ID::AVIS_ID,
            'output_type' => PUBLISH_OUTPUT_ID::AVIS_TYPE,
            'output_ver'  => PUBLISH_OUTPUT_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL OUTPUT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'envelope'     => self::envelope(),
            'serialization'=> self::serialization(),
            'metadata'     => self::metadata(),
            'normalize'    => self::normalize(),
            'format'       => PUBLISH_FORMAT::summary(),
            'schema'       => PUBLISH_SCHEMA::summary(),
            'const'        => PUBLISH_CONST::summary(),
        ];
    }
}

class PUBLISH_OUTPUT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_OUTPUT';
    public const AVIS_TYPE = 'OUTPUT';
    public const VERSION   = '1.0.0';
}

?>
