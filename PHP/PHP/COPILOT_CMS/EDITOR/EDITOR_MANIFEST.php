<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_MANIFEST
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_MANIFEST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_MANIFEST.php
    AVIS-TYPE: MANIFEST
    AVIS-DESCRIPTION:
        Deterministic manifest descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines canonical artifact declarations, subsystem inventory,
        dependency declarations, and manifest integrity structures.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Manifest descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_MANIFEST
{
    /*=============================================================
        MANIFEST IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'manifest_id'   => EDITOR_MANIFEST_ID::AVIS_ID,
            'manifest_type' => EDITOR_MANIFEST_ID::AVIS_TYPE,
            'manifest_ver'  => EDITOR_MANIFEST_ID::VERSION,
            'subsystem'     => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        ARTIFACT DECLARATIONS
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
        DEPENDENCY DECLARATIONS
    ==============================================================*/
    public static function dependencies(): array
    {
        return [
            'requires' => [
                'EDITOR_SCHEMA',
                'EDITOR_FORMAT',
                'EDITOR_CONST',
            ],
            'optional' => [
                'EDITOR_DEBUG',
                'EDITOR_TEST',
            ],
        ];
    }

    /*=============================================================
        MANIFEST INTEGRITY
    ==============================================================*/
    public static function integrity(): array
    {
        return [
            'hash_algorithm' => 'SHA256',
            'artifact_count' => 23,
            'generation'     => 'AVIS-CMS-GEN-1',
            'law'            => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        MANIFEST SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'manifest_id'   => EDITOR_MANIFEST_ID::AVIS_ID,
            'manifest_type' => EDITOR_MANIFEST_ID::AVIS_TYPE,
            'manifest_ver'  => EDITOR_MANIFEST_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL MANIFEST PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'artifacts'    => self::artifacts(),
            'dependencies' => self::dependencies(),
            'integrity'    => self::integrity(),
        ];
    }
}

class EDITOR_MANIFEST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_MANIFEST';
    public const AVIS_TYPE = 'MANIFEST';
    public const VERSION   = '1.0.0';
}

?>
