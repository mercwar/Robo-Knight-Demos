<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_UI
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_UI
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_UI.php
    AVIS-TYPE: UI
    AVIS-DESCRIPTION:
        Canonical UI descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic UI surfaces, interaction descriptors,
        and UI → runtime mapping structures.
        Contains NO rendering, NO HTML, NO CSS, NO JS, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - UI descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_UI
{
    /*=============================================================
        UI IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'ui_id'     => MEDIA_UI_ID::AVIS_ID,
            'ui_type'   => MEDIA_UI_ID::AVIS_TYPE,
            'ui_ver'    => MEDIA_UI_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        UI SURFACES
    ==============================================================*/
    public static function surfaces(): array
    {
        return [
            'upload_panel'   => 'surface_upload_controls',
            'preview_panel'  => 'surface_media_preview',
            'metadata_panel' => 'surface_metadata_editor',
            'process_panel'  => 'surface_processing_controls',
            'history_panel'  => 'surface_operation_history',
        ];
    }

    /*=============================================================
        UI INTERACTIONS
    ==============================================================*/
    public static function interactions(): array
    {
        return [
            'click_upload'     => 'ui_trigger_upload',
            'click_process'    => 'ui_trigger_process',
            'click_preview'    => 'ui_trigger_preview',
            'click_delete'     => 'ui_trigger_delete',
            'edit_metadata'    => 'ui_edit_metadata',
            'select_media'     => 'ui_select_media_item',
        ];
    }

    /*=============================================================
        UI STATES
    ==============================================================*/
    public static function states(): array
    {
        return [
            'idle'        => 'ui_state_idle',
            'uploading'   => 'ui_state_uploading',
            'processing'  => 'ui_state_processing',
            'previewing'  => 'ui_state_previewing',
            'error'       => 'ui_state_error',
        ];
    }

    /*=============================================================
        UI SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'ui_id'   => MEDIA_UI_ID::AVIS_ID,
            'ui_type' => MEDIA_UI_ID::AVIS_TYPE,
            'ui_ver'  => MEDIA_UI_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL UI PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'surfaces'     => self::surfaces(),
            'interactions' => self::interactions(),
            'states'       => self::states(),
        ];
    }
}

class MEDIA_UI_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_UI';
    public const AVIS_TYPE = 'UI';
    public const VERSION   = '1.0.0';
}

?>
