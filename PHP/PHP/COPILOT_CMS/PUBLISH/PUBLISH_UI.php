<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_UI
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_UI
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_UI.php
    AVIS-TYPE: UI
    AVIS-DESCRIPTION:
        Deterministic UI descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural UI surfaces, UI states, and UI interaction maps
        for publishing operations. Contains NO rendering, NO HTML, NO CSS,
        NO JS, NO mutation, NO environment access, NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - UI descriptor ONLY
        - No dynamic execution
        - No rendering or markup
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_BRIDGE.php';
require_once __DIR__ . '/PUBLISH_RUNTIME.php';

class PUBLISH_UI
{
    /*=============================================================
        UI IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'ui_id'   => PUBLISH_UI_ID::AVIS_ID,
            'ui_type' => PUBLISH_UI_ID::AVIS_TYPE,
            'ui_ver'  => PUBLISH_UI_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        UI SURFACES
    ==============================================================*/
    public static function surfaces(): array
    {
        return [
            'PUBLISH_DASHBOARD' => [
                'description' => 'High-level overview of publishable items and status.',
                'elements' => [
                    'publish_queue_list',
                    'publish_status_summary',
                    'channel_overview',
                ],
            ],
            'PUBLISH_DETAIL' => [
                'description' => 'Detailed view of a single publish operation.',
                'elements' => [
                    'payload_preview',
                    'metadata_panel',
                    'target_channel_list',
                ],
            ],
            'PUBLISH_HISTORY' => [
                'description' => 'Historical record of past publish operations.',
                'elements' => [
                    'history_table',
                    'status_filters',
                    'timestamp_filters',
                ],
            ],
        ];
    }

    /*=============================================================
        UI STATES
    ==============================================================*/
    public static function states(): array
    {
        return [
            'STATE_IDLE'       => 'UI is idle and awaiting user interaction.',
            'STATE_PREVIEW'    => 'UI is previewing publish payload.',
            'STATE_READY'      => 'UI indicates publish operation is ready.',
            'STATE_PROCESSING' => 'UI indicates publish operation is in progress.',
            'STATE_COMPLETE'   => 'UI indicates publish operation is complete.',
        ];
    }

    /*=============================================================
        UI INTERACTION MAP
    ==============================================================*/
    public static function interactions(): array
    {
        return [
            'open_publish_detail' => 'Opens detailed view for a publish item.',
            'preview_payload'     => 'Requests preview of publish payload.',
            'select_channels'     => 'Selects publishing channels.',
            'confirm_publish'     => 'Confirms publishing operation.',
            'view_history'        => 'Navigates to publish history.',
        ];
    }

    /*=============================================================
        PROVIDE UI SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'ui_id'   => PUBLISH_UI_ID::AVIS_ID,
            'ui_type' => PUBLISH_UI_ID::AVIS_TYPE,
            'ui_ver'  => PUBLISH_UI_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL UI PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'surfaces'     => self::surfaces(),
            'states'       => self::states(),
            'interactions' => self::interactions(),
            'bridge'       => PUBLISH_BRIDGE::summary(),
            'runtime'      => PUBLISH_RUNTIME::summary(),
        ];
    }
}

class PUBLISH_UI_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_UI';
    public const AVIS_TYPE = 'UI';
    public const VERSION   = '1.0.0';
}

?>
