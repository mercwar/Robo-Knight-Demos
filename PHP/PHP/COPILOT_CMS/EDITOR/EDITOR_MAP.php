<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_MAP
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_MAP
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_MAP.php
    AVIS-TYPE: MAP
    AVIS-DESCRIPTION:
        Deterministic mapping descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines canonical mappings between schemas, operations, UI events,
        runtime transformations, and API payload structures.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Mapping descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_MAP
{
    /*=============================================================
        MAP IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'map_id'   => EDITOR_MAP_ID::AVIS_ID,
            'map_type' => EDITOR_MAP_ID::AVIS_TYPE,
            'map_ver'  => EDITOR_MAP_ID::VERSION,
            'subsystem'=> 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        OPERATION MAP
    ==============================================================*/
    public static function operations(): array
    {
        return [
            'LOAD'    => 'load_document',
            'SAVE'    => 'save_document',
            'CREATE'  => 'create_document',
            'EDIT'    => 'apply_edit',
            'STRUCT'  => 'apply_structure',
            'FORMAT'  => 'apply_formatting',
            'META'    => 'update_metadata',
            'HISTORY' => 'get_history',
            'REVERT'  => 'revert_history',
        ];
    }

    /*=============================================================
        UI EVENT MAP
    ==============================================================*/
    public static function uiEvents(): array
    {
        return [
            'cursor_move'     => 'runtime.cursor_update',
            'selection_change'=> 'runtime.selection_update',
            'text_input'      => 'runtime.content_update',
            'mode_switch'     => 'runtime.mode_update',
            'metadata_edit'   => 'runtime.metadata_update',
            'structure_edit'  => 'runtime.structure_update',
        ];
    }

    /*=============================================================
        RUNTIME TRANSFORM MAP
    ==============================================================*/
    public static function transforms(): array
    {
        return [
            'content_to_api'   => 'runtime.content → api.document_payload',
            'structure_to_api' => 'runtime.structure → api.structure_payload',
            'metadata_to_api'  => 'runtime.metadata → api.metadata_payload',
            'history_to_api'   => 'runtime.history → api.history_payload',
        ];
    }

    /*=============================================================
        RESULT MAP
    ==============================================================*/
    public static function results(): array
    {
        return [
            'success' => [
                'status'    => 'success',
                'timestamp' => 'ISO-8601',
            ],
            'failure' => [
                'status'    => 'failure',
                'timestamp' => 'ISO-8601',
                'errors'    => 'array_of_error_codes',
            ],
        ];
    }

    /*=============================================================
        MAP SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'map_id'   => EDITOR_MAP_ID::AVIS_ID,
            'map_type' => EDITOR_MAP_ID::AVIS_TYPE,
            'map_ver'  => EDITOR_MAP_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL MAP PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'operations' => self::operations(),
            'uiEvents'   => self::uiEvents(),
            'transforms' => self::transforms(),
            'results'    => self::results(),
        ];
    }
}

class EDITOR_MAP_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_MAP';
    public const AVIS_TYPE = 'MAP';
    public const VERSION   = '1.0.0';
}

?>
