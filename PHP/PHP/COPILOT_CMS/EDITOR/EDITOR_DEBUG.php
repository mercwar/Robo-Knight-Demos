<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_DEBUG
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_DEBUG
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_DEBUG.php
    AVIS-TYPE: DEBUG
    AVIS-DESCRIPTION:
        Deterministic debug descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines canonical debug structures, diagnostic descriptors,
        invariant inspection descriptors, and subsystem-level debug maps.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Debug descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_DEBUG
{
    /*=============================================================
        DEBUG IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'debug_id'   => EDITOR_DEBUG_ID::AVIS_ID,
            'debug_type' => EDITOR_DEBUG_ID::AVIS_TYPE,
            'debug_ver'  => EDITOR_DEBUG_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        DEBUG CHANNELS
    ==============================================================*/
    public static function channels(): array
    {
        return [
            'runtime'   => 'runtime state inspection',
            'schema'    => 'schema validation diagnostics',
            'api'       => 'API contract inspection',
            'format'    => 'formatting rule inspection',
            'history'   => 'history chain inspection',
            'metadata'  => 'metadata validation diagnostics',
        ];
    }

    /*=============================================================
        DEBUG STRUCTURES
    ==============================================================*/
    public static function structures(): array
    {
        return [
            'state_dump' => [
                'cursor'    => 'cursor_state_snapshot',
                'selection' => 'selection_state_snapshot',
                'content'   => 'content_state_snapshot',
                'structure' => 'structure_state_snapshot',
                'metadata'  => 'metadata_state_snapshot',
                'history'   => 'history_state_snapshot',
            ],
            'schema_check' => [
                'document'  => 'document_schema_validation',
                'block'     => 'block_schema_validation',
                'structure' => 'structure_schema_validation',
                'metadata'  => 'metadata_schema_validation',
            ],
            'api_check' => [
                'load'      => 'load_document_contract_check',
                'save'      => 'save_document_contract_check',
                'edit'      => 'apply_edit_contract_check',
                'metadata'  => 'metadata_update_contract_check',
            ],
        ];
    }

    /*=============================================================
        DEBUG SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'debug_id'   => EDITOR_DEBUG_ID::AVIS_ID,
            'debug_type' => EDITOR_DEBUG_ID::AVIS_TYPE,
            'debug_ver'  => EDITOR_DEBUG_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL DEBUG PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'channels'   => self::channels(),
            'structures' => self::structures(),
        ];
    }
}

class EDITOR_DEBUG_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_DEBUG';
    public const AVIS_TYPE = 'DEBUG';
    public const VERSION   = '1.0.0';
}

?>
