<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_SIGNAL
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_SIGNAL
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_SIGNAL.php
    AVIS-TYPE: SIGNAL
    AVIS-DESCRIPTION:
        Canonical signal descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic signal types, signal payload schemas,
        signal routing, and subsystem-wide signaling invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Signal descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_SIGNAL
{
    /*=============================================================
        SIGNAL IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'signal_id'   => MEDIA_SIGNAL_ID::AVIS_ID,
            'signal_type' => MEDIA_SIGNAL_ID::AVIS_TYPE,
            'signal_ver'  => MEDIA_SIGNAL_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        SIGNAL TYPES
    ==============================================================*/
    public static function types(): array
    {
        return [
            'SIG_UPLOAD_BEGIN'      => 'signal_upload_begin',
            'SIG_UPLOAD_COMPLETE'   => 'signal_upload_complete',
            'SIG_PROCESS_BEGIN'     => 'signal_process_begin',
            'SIG_PROCESS_COMPLETE'  => 'signal_process_complete',
            'SIG_METADATA_READY'    => 'signal_metadata_ready',
            'SIG_OUTPUT_READY'      => 'signal_output_ready',
            'SIG_ERROR'             => 'signal_error',
        ];
    }

    /*=============================================================
        SIGNAL PAYLOAD SCHEMAS
    ==============================================================*/
    public static function payloads(): array
    {
        return [
            'signal_upload_begin' => [
                'media_id'  => 'string',
                'file_name' => 'string',
                'file_size' => 'int',
            ],
            'signal_upload_complete' => [
                'media_id' => 'string',
            ],
            'signal_process_begin' => [
                'media_id'  => 'string',
                'operation' => 'string',
            ],
            'signal_process_complete' => [
                'media_id'  => 'string',
                'operation' => 'string',
                'result'    => 'string',
            ],
            'signal_metadata_ready' => [
                'media_id' => 'string',
                'metadata' => 'array',
            ],
            'signal_output_ready' => [
                'media_id' => 'string',
                'format'   => 'string',
            ],
            'signal_error' => [
                'media_id' => 'string|null',
                'error'    => 'string',
            ],
        ];
    }

    /*=============================================================
        SIGNAL ROUTING
    ==============================================================*/
    public static function routing(): array
    {
        return [
            'UPLOAD'   => [ 'SIG_UPLOAD_BEGIN', 'SIG_UPLOAD_COMPLETE' ],
            'PROCESS'  => [ 'SIG_PROCESS_BEGIN', 'SIG_PROCESS_COMPLETE' ],
            'METADATA' => [ 'SIG_METADATA_READY' ],
            'OUTPUT'   => [ 'SIG_OUTPUT_READY' ],
            'ERROR'    => [ 'SIG_ERROR' ],
        ];
    }

    /*=============================================================
        SIGNAL INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_signals'  => true,
            'immutable_descriptors'  => true,
            'law'                    => 'AVIS-LAW',
            'generation'             => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        SIGNAL SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'signal_id'   => MEDIA_SIGNAL_ID::AVIS_ID,
            'signal_type' => MEDIA_SIGNAL_ID::AVIS_TYPE,
            'signal_ver'  => MEDIA_SIGNAL_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL SIGNAL PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'types'      => self::types(),
            'payloads'   => self::payloads(),
            'routing'    => self::routing(),
            'invariants' => self::invariants(),
        ];
    }
}

class MEDIA_SIGNAL_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_SIGNAL';
    public const AVIS_TYPE = 'SIGNAL';
    public const VERSION   = '1.0.0';
}

?>
