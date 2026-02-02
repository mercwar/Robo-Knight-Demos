<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_STATE
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_STATE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_STATE.php
    AVIS-TYPE: STATE
    AVIS-DESCRIPTION:
        Canonical state descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic state machines, state transitions,
        state invariants, and subsystem-wide state descriptors.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - State descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_STATE
{
    /*=============================================================
        STATE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'state_id'   => MEDIA_STATE_ID::AVIS_ID,
            'state_type' => MEDIA_STATE_ID::AVIS_TYPE,
            'state_ver'  => MEDIA_STATE_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        STATE MACHINE
    ==============================================================*/
    public static function machine(): array
    {
        return [
            'INITIAL'          => [ 'UPLOAD_PENDING' ],
            'UPLOAD_PENDING'   => [ 'UPLOAD_COMPLETE', 'ERROR' ],
            'UPLOAD_COMPLETE'  => [ 'PROCESSING', 'ERROR' ],
            'PROCESSING'       => [ 'PROCESS_COMPLETE', 'ERROR' ],
            'PROCESS_COMPLETE' => [ 'METADATA_READY', 'ERROR' ],
            'METADATA_READY'   => [ 'OUTPUT_READY', 'ERROR' ],
            'OUTPUT_READY'     => [ 'FINAL', 'ERROR' ],
            'ERROR'            => [ 'FINAL' ],
            'FINAL'            => [],
        ];
    }

    /*=============================================================
        STATE DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            'INITIAL'          => 'Media object created, no upload yet',
            'UPLOAD_PENDING'   => 'Upload initiated',
            'UPLOAD_COMPLETE'  => 'Upload finished successfully',
            'PROCESSING'       => 'Media is being processed',
            'PROCESS_COMPLETE' => 'Processing finished successfully',
            'METADATA_READY'   => 'Metadata extracted and ready',
            'OUTPUT_READY'     => 'Output blocks generated',
            'ERROR'            => 'An error occurred',
            'FINAL'            => 'Terminal state',
        ];
    }

    /*=============================================================
        STATE INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_transitions' => true,
            'no_backwards_transitions'  => true,
            'immutable_descriptors'     => true,
            'law'                       => 'AVIS-LAW',
            'generation'                => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        STATE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'state_id'   => MEDIA_STATE_ID::AVIS_ID,
            'state_type' => MEDIA_STATE_ID::AVIS_TYPE,
            'state_ver'  => MEDIA_STATE_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL STATE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'machine'     => self::machine(),
            'descriptors' => self::descriptors(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_STATE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_STATE';
    public const AVIS_TYPE = 'STATE';
    public const VERSION   = '1.0.0';
}

?>
