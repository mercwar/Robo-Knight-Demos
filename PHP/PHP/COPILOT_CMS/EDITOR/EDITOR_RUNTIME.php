<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_RUNTIME
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_RUNTIME
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_RUNTIME.php
    AVIS-TYPE: RUNTIME
    AVIS-DESCRIPTION:
        Deterministic runtime descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines runtime state containers, editing session structures, and
        canonical runtime invariants. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Runtime descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_RUNTIME
{
    /*=============================================================
        RUNTIME IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'runtime_id'   => EDITOR_RUNTIME_ID::AVIS_ID,
            'runtime_type' => EDITOR_RUNTIME_ID::AVIS_TYPE,
            'runtime_ver'  => EDITOR_RUNTIME_ID::VERSION,
            'subsystem'    => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        EDITING SESSION STATE
    ==============================================================*/
    public static function session(): array
    {
        return [
            'session_id'   => 'editor_session_identifier',
            'document_id'  => 'target_document_identifier',
            'cursor_state' => 'cursor_position_descriptor',
            'selection'    => 'selection_range_descriptor',
            'mode'         => 'edit|insert|visual|structure',
        ];
    }

    /*=============================================================
        DOCUMENT STATE
    ==============================================================*/
    public static function document(): array
    {
        return [
            'content'      => 'raw_editor_content_block',
            'structure'    => 'schema_enforced_structure_block',
            'metadata'     => 'editor_metadata_block',
            'history'      => 'edit_history_descriptor',
        ];
    }

    /*=============================================================
        RUNTIME INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'schema_enforced'      => true,
            'deterministic_cursor' => true,
            'immutable_history'    => true,
            'no_side_effects'      => true,
        ];
    }

    /*=============================================================
        RUNTIME SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'runtime_id'   => EDITOR_RUNTIME_ID::AVIS_ID,
            'runtime_type' => EDITOR_RUNTIME_ID::AVIS_TYPE,
            'runtime_ver'  => EDITOR_RUNTIME_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL RUNTIME PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'session'   => self::session(),
            'document'  => self::document(),
            'invariants'=> self::invariants(),
        ];
    }
}

class EDITOR_RUNTIME_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_RUNTIME';
    public const AVIS_TYPE = 'RUNTIME';
    public const VERSION   = '1.0.0';
}

?>
