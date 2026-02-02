<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_FLOW
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_FLOW
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_FLOW.php
    AVIS-TYPE: FLOW
    AVIS-DESCRIPTION:
        Canonical flow descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic flow sequences, flow transitions,
        flow invariants, and subsystem-wide flow mapping.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Flow descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_FLOW
{
    /*=============================================================
        FLOW IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'flow_id'   => MEDIA_FLOW_ID::AVIS_ID,
            'flow_type' => MEDIA_FLOW_ID::AVIS_TYPE,
            'flow_ver'  => MEDIA_FLOW_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        FLOW SEQUENCE
    ==============================================================*/
    public static function sequence(): array
    {
        return [
            'STEP_1' => 'UPLOAD_BEGIN',
            'STEP_2' => 'UPLOAD_COMPLETE',
            'STEP_3' => 'PROCESS_BEGIN',
            'STEP_4' => 'PROCESS_COMPLETE',
            'STEP_5' => 'METADATA_READY',
            'STEP_6' => 'OUTPUT_READY',
            'STEP_7' => 'FINAL',
        ];
    }

    /*=============================================================
        FLOW TRANSITIONS
    ==============================================================*/
    public static function transitions(): array
    {
        return [
            'UPLOAD_BEGIN'      => [ 'UPLOAD_COMPLETE' ],
            'UPLOAD_COMPLETE'   => [ 'PROCESS_BEGIN' ],
            'PROCESS_BEGIN'     => [ 'PROCESS_COMPLETE' ],
            'PROCESS_COMPLETE'  => [ 'METADATA_READY' ],
            'METADATA_READY'    => [ 'OUTPUT_READY' ],
            'OUTPUT_READY'      => [ 'FINAL' ],
            'ERROR'             => [ 'FINAL' ],
        ];
    }

    /*=============================================================
        FLOW DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            'UPLOAD_BEGIN'      => 'Flow enters upload initialization',
            'UPLOAD_COMPLETE'   => 'Upload finished and validated',
            'PROCESS_BEGIN'     => 'Processing pipeline begins',
            'PROCESS_COMPLETE'  => 'Processing pipeline ends',
            'METADATA_READY'    => 'Metadata extracted and validated',
            'OUTPUT_READY'      => 'Output blocks generated',
            'FINAL'             => 'Terminal flow state',
            'ERROR'             => 'Flow terminated due to error',
        ];
    }

    /*=============================================================
        FLOW INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_flow'     => true,
            'no_reverse_flow'        => true,
            'immutable_descriptors'  => true,
            'law'                    => 'AVIS-LAW',
            'generation'             => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        FLOW SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'flow_id'   => MEDIA_FLOW_ID::AVIS_ID,
            'flow_type' => MEDIA_FLOW_ID::AVIS_TYPE,
            'flow_ver'  => MEDIA_FLOW_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL FLOW PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'sequence'    => self::sequence(),
            'transitions' => self::transitions(),
            'descriptors' => self::descriptors(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_FLOW_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_FLOW';
    public const AVIS_TYPE = 'FLOW';
    public const VERSION   = '1.0.0';
}

?>
