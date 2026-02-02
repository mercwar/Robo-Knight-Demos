<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_INFO
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_INFO
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_INFO.php
    AVIS-TYPE: INFO
    AVIS-DESCRIPTION:
        Deterministic informational descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines subsystem metadata, versioning information, identity blocks,
        and canonical informational structures.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Informational descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_INFO
{
    /*=============================================================
        INFO IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'info_id'   => EDITOR_INFO_ID::AVIS_ID,
            'info_type' => EDITOR_INFO_ID::AVIS_TYPE,
            'info_ver'  => EDITOR_INFO_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        VERSION INFORMATION
    ==============================================================*/
    public static function version(): array
    {
        return [
            'subsystem_version' => '1.0.0',
            'generation'        => 'AVIS-CMS-GEN-1',
            'law'               => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        SUBSYSTEM METADATA
    ==============================================================*/
    public static function metadata(): array
    {
        return [
            'name'        => 'COPILOT_CMS_EDITOR',
            'description' => 'Provides deterministic editing, schema enforcement, and canonical content manipulation.',
            'author'      => 'Demon',
            'category'    => 'CMS Subsystem',
        ];
    }

    /*=============================================================
        ARTIFACT SUMMARY
    ==============================================================*/
    public static function artifacts(): array
    {
        return [
            'total_artifacts' => 23,
            'core_artifacts'  => [
                'LOADER', 'ENGINE', 'RUNTIME', 'BRIDGE', 'UI', 'API',
                'SCHEMA', 'MAP', 'INDEX', 'CONST', 'HELPER', 'FORMAT',
                'OUTPUT', 'DOC', 'TEST', 'DEBUG', 'INFO', 'META',
                'MANIFEST', 'REGISTER', 'SYSTEM', 'CORE', 'ROOT'
            ],
        ];
    }

    /*=============================================================
        INFO SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'info_id'   => EDITOR_INFO_ID::AVIS_ID,
            'info_type' => EDITOR_INFO_ID::AVIS_TYPE,
            'info_ver'  => EDITOR_INFO_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL INFO PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'version'   => self::version(),
            'metadata'  => self::metadata(),
            'artifacts' => self::artifacts(),
        ];
    }
}

class EDITOR_INFO_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_INFO';
    public const AVIS_TYPE = 'INFO';
    public const VERSION   = '1.0.0';
}

?>
