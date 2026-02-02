<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_RUNTIME
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_RUNTIME
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_RUNTIME.php
    AVIS-TYPE: RUNTIME
    AVIS-DESCRIPTION:
        Deterministic runtime descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines media session state, upload state, processing state,
        and canonical runtime invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Runtime descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_RUNTIME
{
    /*=============================================================
        RUNTIME IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'runtime_id'   => MEDIA_RUNTIME_ID::AVIS_ID,
            'runtime_type' => MEDIA_RUNTIME_ID::AVIS_TYPE,
            'runtime_ver'  => MEDIA_RUNTIME_ID::VERSION,
            'subsystem'    => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        SESSION STATE
    ==============================================================*/
    public static function session(): array
    {
        return [
            'active_upload'   => false,
            'active_process'  => false,
            'active_preview'  => false,
            'last_media_id'   => null,
            'last_operation'  => null,
        ];
    }

    /*=============================================================
        UPLOAD STATE
    ==============================================================*/
    public static function upload(): array
    {
        return [
            'file_name'     => 'pending_file_name',
            'file_size'     => 0,
            'file_type'     => 'unknown',
            'upload_status' => 'idle',
        ];
    }

    /*=============================================================
        PROCESSING STATE
    ==============================================================*/
    public static function processing(): array
    {
        return [
            'operation'     => 'none',
            'progress'      => 0,
            'result_status' => 'idle',
        ];
    }

    /*=============================================================
        RUNTIME INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'max_file_size'      => 52428800,
            'max_dimensions'     => [ 'width' => 8000, 'height' => 8000 ],
            'allowed_types'      => [ 'jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'mp4', 'mp3' ],
            'max_operations'     => 10,
            'generation'         => 'AVIS-CMS-GEN-1',
            'law'                => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        RUNTIME SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'runtime_id'   => MEDIA_RUNTIME_ID::AVIS_ID,
            'runtime_type' => MEDIA_RUNTIME_ID::AVIS_TYPE,
            'runtime_ver'  => MEDIA_RUNTIME_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL RUNTIME PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'session'     => self::session(),
            'upload'      => self::upload(),
            'processing'  => self::processing(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_RUNTIME_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_RUNTIME';
    public const AVIS_TYPE = 'RUNTIME';
    public const VERSION   = '1.0.0';
}

?>
