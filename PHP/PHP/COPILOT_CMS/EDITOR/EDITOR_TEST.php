<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_TEST
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_TEST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_TEST.php
    AVIS-TYPE: TEST
    AVIS-DESCRIPTION:
        Deterministic test descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines canonical test cases, invariant checks, schema validation
        tests, and subsystem-level diagnostic structures.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Test descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_TEST
{
    /*=============================================================
        TEST IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'test_id'   => EDITOR_TEST_ID::AVIS_ID,
            'test_type' => EDITOR_TEST_ID::AVIS_TYPE,
            'test_ver'  => EDITOR_TEST_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        SCHEMA TESTS
    ==============================================================*/
    public static function schema(): array
    {
        return [
            'validate_document_schema'  => 'ensures document schema matches EDITOR_SCHEMA::document()',
            'validate_block_schema'     => 'ensures content blocks match EDITOR_SCHEMA::contentBlock()',
            'validate_structure_schema' => 'ensures structure nodes match EDITOR_SCHEMA::structureBlock()',
            'validate_metadata_schema'  => 'ensures metadata matches EDITOR_SCHEMA::metadata()',
        ];
    }

    /*=============================================================
        RUNTIME TESTS
    ==============================================================*/
    public static function runtime(): array
    {
        return [
            'cursor_state_test'   => 'ensures cursor state invariants hold',
            'selection_state_test'=> 'ensures selection invariants hold',
            'content_state_test'  => 'ensures content blocks remain deterministic',
            'history_state_test'  => 'ensures history entries follow MAX_HISTORY_ENTRIES',
        ];
    }

    /*=============================================================
        API TESTS
    ==============================================================*/
    public static function api(): array
    {
        return [
            'load_document_test'   => 'validates load_document API contract',
            'save_document_test'   => 'validates save_document API contract',
            'apply_edit_test'      => 'validates edit payload structure',
            'metadata_update_test' => 'validates metadata update payload',
        ];
    }

    /*=============================================================
        FORMAT TESTS
    ==============================================================*/
    public static function format(): array
    {
        return [
            'text_format_test'     => 'ensures text formatting rules are deterministic',
            'block_format_test'    => 'ensures block formatting rules follow schema',
            'structure_format_test'=> 'ensures structural formatting rules are valid',
        ];
    }

    /*=============================================================
        TEST SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'test_id'   => EDITOR_TEST_ID::AVIS_ID,
            'test_type' => EDITOR_TEST_ID::AVIS_TYPE,
            'test_ver'  => EDITOR_TEST_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL TEST PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'schema'   => self::schema(),
            'runtime'  => self::runtime(),
            'api'      => self::api(),
            'format'   => self::format(),
        ];
    }
}

class EDITOR_TEST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_TEST';
    public const AVIS_TYPE = 'TEST';
    public const VERSION   = '1.0.0';
}

?>
