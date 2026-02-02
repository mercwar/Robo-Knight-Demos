<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_TRACE
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_TRACE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_TRACE.php
    AVIS-TYPE: TRACE
    AVIS-DESCRIPTION:
        Canonical trace descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic trace channels, trace event structures,
        trace categories, and subsystem-wide trace invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Trace descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_TRACE
{
    /*=============================================================
        TRACE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'trace_id'   => MEDIA_TRACE_ID::AVIS_ID,
            'trace_type' => MEDIA_TRACE_ID::AVIS_TYPE,
            'trace_ver'  => MEDIA_TRACE_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        TRACE CHANNELS
    ==============================================================*/
    public static function channels(): array
    {
        return [
            'UPLOAD'     => 'trace_upload',
            'PROCESS'    => 'trace_process',
            'METADATA'   => 'trace_metadata',
            'OUTPUT'     => 'trace_output',
            'RUNTIME'    => 'trace_runtime',
            'ENGINE'     => 'trace_engine',
            'MAP'        => 'trace_map',
            'STATUS'     => 'trace_status',
            'EVENT'      => 'trace_event',
            'ERROR'      => 'trace_error',
        ];
    }

    /*=============================================================
        TRACE EVENT STRUCTURES
    ==============================================================*/
    public static function structures(): array
    {
        return [
            'trace_upload' => [
                'media_id'  => 'string',
                'file_name' => 'string',
                'file_size' => 'int',
                'stage'     => 'string',
            ],
            'trace_process' => [
                'media_id'  => 'string',
                'operation' => 'string',
                'stage'     => 'string',
            ],
            'trace_metadata' => [
                'media_id' => 'string',
                'stage'    => 'string',
            ],
            'trace_output' => [
                'media_id' => 'string',
                'format'   => 'string',
                'stage'    => 'string',
            ],
            'trace_error' => [
                'media_id' => 'string|null',
                'error'    => 'string',
                'stage'    => 'string',
            ],
        ];
    }

    /*=============================================================
        TRACE CATEGORIES
    ==============================================================*/
    public static function categories(): array
    {
        return [
            'STATE'      => 'trace_state_progression',
            'INVARIANT'  => 'trace_invariant_checks',
            'MAPPING'    => 'trace_mapping_resolution',
            'SCHEMA'     => 'trace_schema_alignment',
            'ENGINE'     => 'trace_engine_activity',
            'OUTPUT'     => 'trace_output_generation',
        ];
    }

    /*=============================================================
        TRACE INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_traces'   => true,
            'immutable_descriptors'  => true,
            'law'                    => 'AVIS-LAW',
            'generation'             => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        TRACE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'trace_id'   => MEDIA_TRACE_ID::AVIS_ID,
            'trace_type' => MEDIA_TRACE_ID::AVIS_TYPE,
            'trace_ver'  => MEDIA_TRACE_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL TRACE PACKAGE
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

class MEDIA_TRACE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_TRACE';
    public const AVIS_TYPE = 'TRACE';
    public const VERSION   = '1.0.0';
}

?>
