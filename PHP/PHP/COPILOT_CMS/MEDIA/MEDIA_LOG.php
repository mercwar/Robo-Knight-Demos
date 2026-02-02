<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_LOG
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_LOG
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_LOG.php
    AVIS-TYPE: LOG
    AVIS-DESCRIPTION:
        Canonical log descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic log channels, log event structures,
        log categories, and subsystem-wide logging invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Log descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_LOG
{
    /*=============================================================
        LOG IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'log_id'     => MEDIA_LOG_ID::AVIS_ID,
            'log_type'   => MEDIA_LOG_ID::AVIS_TYPE,
            'log_ver'    => MEDIA_LOG_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        LOG CHANNELS
    ==============================================================*/
    public static function channels(): array
    {
        return [
            'UPLOAD'     => 'log_upload',
            'PROCESS'    => 'log_process',
            'METADATA'   => 'log_metadata',
            'OUTPUT'     => 'log_output',
            'RUNTIME'    => 'log_runtime',
            'ENGINE'     => 'log_engine',
            'MAP'        => 'log_map',
            'STATUS'     => 'log_status',
            'EVENT'      => 'log_event',
            'ERROR'      => 'log_error',
        ];
    }

    /*=============================================================
        LOG EVENT STRUCTURES
    ==============================================================*/
    public static function structures(): array
    {
        return [
            'log_upload' => [
                'media_id'  => 'string',
                'file_name' => 'string',
                'file_size' => 'int',
                'status'    => 'string',
            ],
            'log_process' => [
                'media_id'  => 'string',
                'operation' => 'string',
                'result'    => 'string',
            ],
            'log_metadata' => [
                'media_id' => 'string',
                'metadata' => 'array',
            ],
            'log_output' => [
                'media_id' => 'string',
                'format'   => 'string',
            ],
            'log_error' => [
                'media_id' => 'string|null',
                'error'    => 'string',
            ],
        ];
    }

    /*=============================================================
        LOG CATEGORIES
    ==============================================================*/
    public static function categories(): array
    {
        return [
            'STATE'      => 'log_state_changes',
            'INVARIANT'  => 'log_invariant_checks',
            'MAPPING'    => 'log_mapping_resolution',
            'SCHEMA'     => 'log_schema_alignment',
            'ENGINE'     => 'log_engine_activity',
            'OUTPUT'     => 'log_output_generation',
        ];
    }

    /*=============================================================
        LOG INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_logs'   => true,
            'immutable_descriptors'=> true,
            'law'                  => 'AVIS-LAW',
            'generation'           => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        LOG SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'log_id'   => MEDIA_LOG_ID::AVIS_ID,
            'log_type' => MEDIA_LOG_ID::AVIS_TYPE,
            'log_ver'  => MEDIA_LOG_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL LOG PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'channels'    => self::channels(),
            'structures'  => self::structures(),
            'categories'  => self::categories(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_LOG_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_LOG';
    public const AVIS_TYPE = 'LOG';
    public const VERSION   = '1.0.0';
}

?>
