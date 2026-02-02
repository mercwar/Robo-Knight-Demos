<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_STATUS
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_STATUS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_STATUS.php
    AVIS-TYPE: STATUS
    AVIS-DESCRIPTION:
        Canonical status descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic status codes, state descriptors,
        error classes, and subsystem-wide status invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Status descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_STATUS
{
    /*=============================================================
        STATUS IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'status_id'   => MEDIA_STATUS_ID::AVIS_ID,
            'status_type' => MEDIA_STATUS_ID::AVIS_TYPE,
            'status_ver'  => MEDIA_STATUS_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        STATUS CODES
    ==============================================================*/
    public static function codes(): array
    {
        return [
            'OK'                => 0,
            'UPLOAD_PENDING'    => 10,
            'UPLOAD_COMPLETE'   => 11,
            'PROCESSING'        => 20,
            'PROCESS_COMPLETE'  => 21,
            'METADATA_READY'    => 30,
            'OUTPUT_READY'      => 40,
            'ERROR'             => 99,
        ];
    }

    /*=============================================================
        STATUS DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            0  => 'Operation completed successfully',
            10 => 'Upload initiated and pending',
            11 => 'Upload completed successfully',
            20 => 'Media is currently being processed',
            21 => 'Media processing completed',
            30 => 'Metadata extraction completed',
            40 => 'Output is ready for retrieval',
            99 => 'An error occurred during media operations',
        ];
    }

    /*=============================================================
        ERROR CLASSES
    ==============================================================*/
    public static function errors(): array
    {
        return [
            'UPLOAD_ERROR'      => 'Error during upload',
            'PROCESS_ERROR'     => 'Error during processing',
            'METADATA_ERROR'    => 'Error during metadata extraction',
            'OUTPUT_ERROR'      => 'Error during output generation',
            'SCHEMA_ERROR'      => 'Schema mismatch or invalid structure',
            'RUNTIME_ERROR'     => 'Runtime state violation',
            'ENGINE_ERROR'      => 'Engine invariant violation',
        ];
    }

    /*=============================================================
        STATUS INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_status' => true,
            'immutable_descriptors'=> true,
            'law'                  => 'AVIS-LAW',
            'generation'           => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        STATUS SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'status_id'   => MEDIA_STATUS_ID::AVIS_ID,
            'status_type' => MEDIA_STATUS_ID::AVIS_TYPE,
            'status_ver'  => MEDIA_STATUS_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL STATUS PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'codes'       => self::codes(),
            'descriptors' => self::descriptors(),
            'errors'      => self::errors(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_STATUS_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_STATUS';
    public const AVIS_TYPE = 'STATUS';
    public const VERSION   = '1.0.0';
}

?>
