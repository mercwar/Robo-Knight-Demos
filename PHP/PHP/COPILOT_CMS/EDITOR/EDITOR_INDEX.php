<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_INDEX
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_INDEX
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_INDEX.php
    AVIS-TYPE: INDEX
    AVIS-DESCRIPTION:
        Deterministic index descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines the canonical artifact inventory, subsystem ordering,
        and structural index map. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Index descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_INDEX
{
    /*=============================================================
        INDEX IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'index_id'   => EDITOR_INDEX_ID::AVIS_ID,
            'index_type' => EDITOR_INDEX_ID::AVIS_TYPE,
            'index_ver'  => EDITOR_INDEX_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        ARTIFACT INVENTORY
    ==============================================================*/
    public static function artifacts(): array
    {
        return [
            'LOADER'   => 'EDITOR_LOADER.php',
            'ENGINE'   => 'EDITOR_ENGINE.php',
            'RUNTIME'  => 'EDITOR_RUNTIME.php',
            'BRIDGE'   => 'EDITOR_BRIDGE.php',
            'UI'       => 'EDITOR_UI.php',
            'API'      => 'EDITOR_API.php',
            'SCHEMA'   => 'EDITOR_SCHEMA.php',
            'MAP'      => 'EDITOR_MAP.php',
            'INDEX'    => 'EDITOR_INDEX.php',
            'CONST'    => 'EDITOR_CONST.php',
            'HELPER'   => 'EDITOR_HELPER.php',
            'FORMAT'   => 'EDITOR_FORMAT.php',
            'OUTPUT'   => 'EDITOR_OUTPUT.php',
            'DOC'      => 'EDITOR_DOC.php',
            'TEST'     => 'EDITOR_TEST.php',
            'DEBUG'    => 'EDITOR_DEBUG.php',
            'INFO'     => 'EDITOR_INFO.php',
            'META'     => 'EDITOR_META.php',
            'MANIFEST' => 'EDITOR_MANIFEST.php',
            'REGISTER' => 'EDITOR_REGISTER.php',
            'SYSTEM'   => 'EDITOR_SYSTEM.php',
            'CORE'     => 'EDITOR_CORE.php',
            'ROOT'     => 'EDITOR_ROOT.php',
        ];
    }

    /*=============================================================
        CANONICAL ORDERING
    ==============================================================*/
    public static function ordering(): array
    {
        return [
            'LOADER',
            'ENGINE',
            'RUNTIME',
            'BRIDGE',
            'UI',
            'API',
            'SCHEMA',
            'MAP',
            'INDEX',
            'CONST',
            'HELPER',
            'FORMAT',
            'OUTPUT',
            'DOC',
            'TEST',
            'DEBUG',
            'INFO',
            'META',
            'MANIFEST',
            'REGISTER',
            'SYSTEM',
            'CORE',
            'ROOT',
        ];
    }

    /*=============================================================
        INDEX SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'index_id'   => EDITOR_INDEX_ID::AVIS_ID,
            'index_type' => EDITOR_INDEX_ID::AVIS_TYPE,
            'index_ver'  => EDITOR_INDEX_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL INDEX PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'artifacts' => self::artifacts(),
            'ordering'  => self::ordering(),
        ];
    }
}

class EDITOR_INDEX_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_INDEX';
    public const AVIS_TYPE = 'INDEX';
    public const VERSION   = '1.0.0';
}

?>
