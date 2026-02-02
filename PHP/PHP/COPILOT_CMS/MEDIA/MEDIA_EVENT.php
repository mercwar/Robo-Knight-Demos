<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_EVENT
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_EVENT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_EVENT.php
    AVIS-TYPE: EVENT
    AVIS-DESCRIPTION:
        Canonical event descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic event types, event payload schemas,
        event categories, and subsystem-wide event invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Event descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_EVENT
{
    /*=============================================================
        EVENT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'event_id'   => MEDIA_EVENT_ID::AVIS_ID,
            'event_type' => MEDIA_EVENT_ID::AVIS_TYPE,
            'event_ver'  => MEDIA_EVENT_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        EVENT TYPES
    ==============================================================*/
    public static function types(): array
    {
        return [
            'UPLOAD_BEGIN'      => 'event_upload_begin',
            'UPLOAD_COMPLETE'   => 'event_upload_complete',
            'PROCESS_BEGIN'     => 'event_process_begin',
            'PROCESS_COMPLETE'  => 'event_process_complete',
            'METADATA_READY'    => 'event_metadata_ready',
            'OUTPUT_READY'      => 'event_output_ready',
            'ERROR'             => 'event_error',
        ];
    }

    /*=============================================================
        EVENT PAYLOAD SCHEMAS
    ==============================================================*/
    public static function payloads(): array
    {
        return [
            'event_upload_begin' => [
                'media_id'  => 'string',
                'file_name' => 'string',
                'file_size' => 'int',
            ],
            'event_upload_complete' => [
                'media_id' => 'string',
            ],
            'event_process_begin' => [
                'media_id'  => 'string',
                'operation' => 'string',
            ],
            'event_process_complete' => [
                'media_id'  => 'string',
                'operation' => 'string',
                'result'    => 'string',
            ],
            'event_metadata_ready' => [
                'media_id' => 'string',
                'metadata' => 'array',
            ],
            'event_output_ready' => [
                'media_id' => 'string',
                'format'   => 'string',
            ],
            'event_error' => [
                'media_id' => 'string|null',
                'error'    => 'string',
            ],
        ];
    }

    /*=============================================================
        EVENT CATEGORIES
    ==============================================================*/
    public static function categories(): array
    {
        return [
            'UPLOAD'   => [ 'UPLOAD_BEGIN', 'UPLOAD_COMPLETE' ],
            'PROCESS'  => [ 'PROCESS_BEGIN', 'PROCESS_COMPLETE' ],
            'METADATA' => [ 'METADATA_READY' ],
            'OUTPUT'   => [ 'OUTPUT_READY' ],
            'ERROR'    => [ 'ERROR' ],
        ];
    }

    /*=============================================================
        EVENT INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_events' => true,
            'immutable_descriptors'=> true,
            'law'                  => 'AVIS-LAW',
            'generation'           => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        EVENT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'event_id'   => MEDIA_EVENT_ID::AVIS_ID,
            'event_type' => MEDIA_EVENT_ID::AVIS_TYPE,
            'event_ver'  => MEDIA_EVENT_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL EVENT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'types'       => self::types(),
            'payloads'    => self::payloads(),
            'categories'  => self::categories(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_EVENT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_EVENT';
    public const AVIS_TYPE = 'EVENT';
    public const VERSION   = '1.0.0';
}

?>
