<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_CONST
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_CONST.php
    AVIS-TYPE: CONST
    AVIS-DESCRIPTION:
        Deterministic constant descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines subsystem-wide constants, invariant values, and canonical
        identifiers. Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Constant descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_CONST
{
    /*=============================================================
        CONSTANT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'const_id'   => EDITOR_CONST_ID::AVIS_ID,
            'const_type' => EDITOR_CONST_ID::AVIS_TYPE,
            'const_ver'  => EDITOR_CONST_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        SUBSYSTEM CONSTANTS
    ==============================================================*/
    public static function constants(): array
    {
        return [
            'SUBSYSTEM_NAME' => 'COPILOT_CMS_EDITOR',
            'GENERATION'     => 'AVIS-CMS-GEN-1',
            'LAW'            => 'AVIS-LAW',
            'VERSION'        => '1.0.0',

            /*=====================================================
                EDITOR-SPECIFIC CONSTANTS
            =====================================================*/
            'MAX_HISTORY_ENTRIES' => 500,
            'MAX_BLOCK_SIZE'      => 65536,
            'MAX_METADATA_SIZE'   => 8192,

            'CURSOR_DEFAULT_MODE' => 'edit',
            'STRUCTURE_ROOT_NODE' => 'root',
        ];
    }

    /*=============================================================
        CONSTANT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'const_id'   => EDITOR_CONST_ID::AVIS_ID,
            'const_type' => EDITOR_CONST_ID::AVIS_TYPE,
            'const_ver'  => EDITOR_CONST_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL CONSTANT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'constants' => self::constants(),
        ];
    }
}

class EDITOR_CONST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_CONST';
    public const AVIS_TYPE = 'CONST';
    public const VERSION   = '1.0.0';
}

?>
