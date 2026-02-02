<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_QUEUE
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_QUEUE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_QUEUE.php
    AVIS-TYPE: QUEUE
    AVIS-DESCRIPTION:
        Canonical queue descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic queue types, queue stages, queue ordering,
        and subsystem-wide queue invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Queue descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_QUEUE
{
    /*=============================================================
        QUEUE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'queue_id'   => MEDIA_QUEUE_ID::AVIS_ID,
            'queue_type' => MEDIA_QUEUE_ID::AVIS_TYPE,
            'queue_ver'  => MEDIA_QUEUE_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        QUEUE TYPES
    ==============================================================*/
    public static function types(): array
    {
        return [
            'UPLOAD_QUEUE'     => 'queue_upload',
            'PROCESS_QUEUE'    => 'queue_process',
            'METADATA_QUEUE'   => 'queue_metadata',
            'OUTPUT_QUEUE'     => 'queue_output',
            'ERROR_QUEUE'      => 'queue_error',
        ];
    }

    /*=============================================================
        QUEUE STAGES
    ==============================================================*/
    public static function stages(): array
    {
        return [
            'queue_upload' => [
                'accepts' => 'raw_file',
                'yields'  => 'uploaded_file',
            ],
            'queue_process' => [
                'accepts' => 'uploaded_file',
                'yields'  => 'processed_file',
            ],
            'queue_metadata' => [
                'accepts' => 'processed_file',
                'yields'  => 'metadata_package',
            ],
            'queue_output' => [
                'accepts' => 'metadata_package',
                'yields'  => 'output_blocks',
            ],
            'queue_error' => [
                'accepts' => 'any_stage',
                'yields'  => 'error_state',
            ],
        ];
    }

    /*=============================================================
        QUEUE ORDER
    ==============================================================*/
    public static function order(): array
    {
        return [
            'queue_upload'   => 'queue_process',
            'queue_process'  => 'queue_metadata',
            'queue_metadata' => 'queue_output',
            'queue_output'   => 'queue_final',
        ];
    }

    /*=============================================================
        QUEUE INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_queue'    => true,
            'no_out_of_order_items'  => true,
            'immutable_descriptors'  => true,
            'law'                    => 'AVIS-LAW',
            'generation'             => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        QUEUE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'queue_id'   => MEDIA_QUEUE_ID::AVIS_ID,
            'queue_type' => MEDIA_QUEUE_ID::AVIS_TYPE,
            'queue_ver'  => MEDIA_QUEUE_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL QUEUE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'types'      => self::types(),
            'stages'     => self::stages(),
            'order'      => self::order(),
            'invariants' => self::invariants(),
        ];
    }
}

class MEDIA_QUEUE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_QUEUE';
    public const AVIS_TYPE = 'QUEUE';
    public const VERSION   = '1.0.0';
}

?>
