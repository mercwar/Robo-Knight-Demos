<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_OUTPUT
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_OUTPUT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_OUTPUT.php
    AVIS-TYPE: OUTPUT
    AVIS-DESCRIPTION:
        Canonical output descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic output structures, output blocks,
        result descriptors, and canonical media output invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Output descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_OUTPUT
{
    /*=============================================================
        OUTPUT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'output_id'   => MEDIA_OUTPUT_ID::AVIS_ID,
            'output_type' => MEDIA_OUTPUT_ID::AVIS_TYPE,
            'output_ver'  => MEDIA_OUTPUT_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        OUTPUT BLOCKS
    ==============================================================*/
    public static function blocks(): array
    {
        return [
            'validation_block' => [
                'status'  => 'string',
                'details' => 'array',
            ],
            'transform_block' => [
                'operation' => 'string',
                'result'    => 'string',
            ],
            'thumbnail_block' => [
                'size' => 'string',
                'path' => 'string',
            ],
            'metadata_block' => [
                'metadata' => 'array',
            ],
        ];
    }

    /*=============================================================
        RESULT DESCRIPTORS
    ==============================================================*/
    public static function results(): array
    {
        return [
            'validation_result' => 'describes validation output',
            'transform_result'  => 'describes transform output',
            'thumbnail_result'  => 'describes thumbnail output',
            'metadata_result'   => 'describes metadata output',
        ];
    }

    /*=============================================================
        OUTPUT INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'canonical_format' => 'MEDIA_FORMAT',
            'generation'       => 'AVIS-CMS-GEN-1',
            'law'              => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        OUTPUT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'output_id'   => MEDIA_OUTPUT_ID::AVIS_ID,
            'output_type' => MEDIA_OUTPUT_ID::AVIS_TYPE,
            'output_ver'  => MEDIA_OUTPUT_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL OUTPUT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'blocks'     => self::blocks(),
            'results'    => self::results(),
            'invariants' => self::invariants(),
        ];
    }
}

class MEDIA_OUTPUT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_OUTPUT';
    public const AVIS_TYPE = 'OUTPUT';
    public const VERSION   = '1.0.0';
}

?>
