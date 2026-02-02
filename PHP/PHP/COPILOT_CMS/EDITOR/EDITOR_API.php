<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_API
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_API
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_API.php
    AVIS-TYPE: API
    AVIS-DESCRIPTION:
        Deterministic API descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines structural API contracts for editing operations, document
        manipulation, metadata updates, and schema-enforced transformations.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - API descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_API
{
    /*=============================================================
        API IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'api_id'   => EDITOR_API_ID::AVIS_ID,
            'api_type' => EDITOR_API_ID::AVIS_TYPE,
            'api_ver'  => EDITOR_API_ID::VERSION,
            'subsystem'=> 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        DOCUMENT OPERATIONS
    ==============================================================*/
    public static function documentOps(): array
    {
        return [
            'load_document' => [
                'input'  => ['document_id'],
                'output' => ['content', 'structure', 'metadata'],
            ],
            'save_document' => [
                'input'  => ['content', 'structure', 'metadata'],
                'output' => ['status', 'timestamp'],
            ],
            'create_document' => [
                'input'  => ['template', 'metadata'],
                'output' => ['document_id', 'status'],
            ],
        ];
    }

    /*=============================================================
        EDIT OPERATIONS
    ==============================================================*/
    public static function editOps(): array
    {
        return [
            'apply_edit' => [
                'input'  => ['edit_payload'],
                'output' => ['updated_content', 'updated_structure'],
            ],
            'apply_structure' => [
                'input'  => ['structure_payload'],
                'output' => ['updated_structure'],
            ],
            'apply_formatting' => [
                'input'  => ['format_payload'],
                'output' => ['updated_content'],
            ],
        ];
    }

    /*=============================================================
        METADATA OPERATIONS
    ==============================================================*/
    public static function metadataOps(): array
    {
        return [
            'update_metadata' => [
                'input'  => ['metadata_payload'],
                'output' => ['updated_metadata'],
            ],
            'fetch_metadata' => [
                'input'  => ['document_id'],
                'output' => ['metadata'],
            ],
        ];
    }

    /*=============================================================
        HISTORY OPERATIONS
    ==============================================================*/
    public static function historyOps(): array
    {
        return [
            'get_history' => [
                'input'  => ['document_id'],
                'output' => ['history_entries'],
            ],
            'revert_history' => [
                'input'  => ['document_id', 'history_id'],
                'output' => ['content', 'structure', 'metadata'],
            ],
        ];
    }

    /*=============================================================
        API SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'api_id'   => EDITOR_API_ID::AVIS_ID,
            'api_type' => EDITOR_API_ID::AVIS_TYPE,
            'api_ver'  => EDITOR_API_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL API PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'      => self::identity(),
            'documentOps'   => self::documentOps(),
            'editOps'       => self::editOps(),
            'metadataOps'   => self::metadataOps(),
            'historyOps'    => self::historyOps(),
        ];
    }
}

class EDITOR_API_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_API';
    public const AVIS_TYPE = 'API';
    public const VERSION   = '1.0.0';
}

?>
