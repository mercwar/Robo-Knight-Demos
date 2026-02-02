<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_SCHEMA
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_SCHEMA
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_SCHEMA.php
    AVIS-TYPE: SCHEMA
    AVIS-DESCRIPTION:
        Deterministic schema descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines canonical schemas for editor documents, content blocks,
        structure blocks, metadata blocks, and history entries.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Schema descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_SCHEMA
{
    /*=============================================================
        SCHEMA IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'schema_id'   => EDITOR_SCHEMA_ID::AVIS_ID,
            'schema_type' => EDITOR_SCHEMA_ID::AVIS_TYPE,
            'schema_ver'  => EDITOR_SCHEMA_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        DOCUMENT SCHEMA
    ==============================================================*/
    public static function document(): array
    {
        return [
            'document_id' => 'string',
            'content'     => 'array_of_content_blocks',
            'structure'   => 'array_of_structure_blocks',
            'metadata'    => 'metadata_block',
            'history'     => 'array_of_history_entries',
        ];
    }

    /*=============================================================
        CONTENT BLOCK SCHEMA
    ==============================================================*/
    public static function contentBlock(): array
    {
        return [
            'block_id'   => 'string',
            'type'       => 'paragraph|heading|list|code|media|custom',
            'text'       => 'string_or_null',
            'attributes' => 'key_value_map',
        ];
    }

    /*=============================================================
        STRUCTURE BLOCK SCHEMA
    ==============================================================*/
    public static function structureBlock(): array
    {
        return [
            'node_id'    => 'string',
            'node_type'  => 'root|section|block|inline',
            'children'   => 'array_of_node_ids',
            'attributes' => 'key_value_map',
        ];
    }

    /*=============================================================
        METADATA SCHEMA
    ==============================================================*/
    public static function metadata(): array
    {
        return [
            'title'       => 'string',
            'author'      => 'string',
            'created_at'  => 'ISO-8601',
            'updated_at'  => 'ISO-8601',
            'tags'        => 'array_of_strings',
        ];
    }

    /*=============================================================
        HISTORY ENTRY SCHEMA
    ==============================================================*/
    public static function historyEntry(): array
    {
        return [
            'history_id' => 'string',
            'timestamp'  => 'ISO-8601',
            'action'     => 'edit|structure|metadata',
            'payload'    => 'action_specific_payload',
        ];
    }

    /*=============================================================
        SCHEMA SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'schema_id'   => EDITOR_SCHEMA_ID::AVIS_ID,
            'schema_type' => EDITOR_SCHEMA_ID::AVIS_TYPE,
            'schema_ver'  => EDITOR_SCHEMA_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL SCHEMA PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'      => self::identity(),
            'document'      => self::document(),
            'contentBlock'  => self::contentBlock(),
            'structureBlock'=> self::structureBlock(),
            'metadata'      => self::metadata(),
            'historyEntry'  => self::historyEntry(),
        ];
    }
}

class EDITOR_SCHEMA_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_SCHEMA';
    public const AVIS_TYPE = 'SCHEMA';
    public const VERSION   = '1.0.0';
}

?>
