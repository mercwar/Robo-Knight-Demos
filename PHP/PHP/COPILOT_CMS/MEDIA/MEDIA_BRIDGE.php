<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_BRIDGE
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_BRIDGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_BRIDGE.php
    AVIS-TYPE: BRIDGE
    AVIS-DESCRIPTION:
        Canonical bridge descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic mappings between UI, runtime, engine,
        schema, and output structures. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Bridge descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_BRIDGE
{
    /*=============================================================
        BRIDGE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'bridge_id'   => MEDIA_BRIDGE_ID::AVIS_ID,
            'bridge_type' => MEDIA_BRIDGE_ID::AVIS_TYPE,
            'bridge_ver'  => MEDIA_BRIDGE_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        UI → RUNTIME MAP
    ==============================================================*/
    public static function uiToRuntime(): array
    {
        return [
            'upload_button'   => 'trigger_upload',
            'process_button'  => 'trigger_process',
            'preview_button'  => 'trigger_preview',
            'delete_button'   => 'trigger_delete',
            'metadata_panel'  => 'runtime_metadata_state',
        ];
    }

    /*=============================================================
        RUNTIME → ENGINE MAP
    ==============================================================*/
    public static function runtimeToEngine(): array
    {
        return [
            'validate'   => 'validate_media',
            'transform'  => 'transform_media',
            'optimize'   => 'optimize_media',
            'thumbnail'  => 'thumbnail_media',
            'extract'    => 'extract_metadata',
        ];
    }

    /*=============================================================
        ENGINE → OUTPUT MAP
    ==============================================================*/
    public static function engineToOutput(): array
    {
        return [
            'validation_result' => 'output_validation_block',
            'metadata_result'   => 'output_metadata_block',
            'transform_result'  => 'output_transform_block',
            'thumbnail_result'  => 'output_thumbnail_block',
        ];
    }

    /*=============================================================
        BRIDGE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'bridge_id'   => MEDIA_BRIDGE_ID::AVIS_ID,
            'bridge_type' => MEDIA_BRIDGE_ID::AVIS_TYPE,
            'bridge_ver'  => MEDIA_BRIDGE_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL BRIDGE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'       => self::identity(),
            'uiToRuntime'    => self::uiToRuntime(),
            'runtimeToEngine'=> self::runtimeToEngine(),
            'engineToOutput' => self::engineToOutput(),
        ];
    }
}

class MEDIA_BRIDGE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_BRIDGE';
    public const AVIS_TYPE = 'BRIDGE';
    public const VERSION   = '1.0.0';
}

?>
