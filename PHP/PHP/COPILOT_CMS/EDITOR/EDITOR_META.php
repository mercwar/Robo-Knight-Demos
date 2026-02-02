<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_META
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_META
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_META.php
    AVIS-TYPE: META
    AVIS-DESCRIPTION:
        Deterministic meta-descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines subsystem relationships, identity chains, lineage blocks,
        and canonical meta-structures for introspection and system binding.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Meta descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_META
{
    /*=============================================================
        META IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'meta_id'   => EDITOR_META_ID::AVIS_ID,
            'meta_type' => EDITOR_META_ID::AVIS_TYPE,
            'meta_ver'  => EDITOR_META_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        SUBSYSTEM RELATIONSHIPS
    ==============================================================*/
    public static function relationships(): array
    {
        return [
            'parent_system' => 'COPILOT_CMS',
            'siblings' => [
                'PUBLISH',
                'MEDIA',
                'AUTH',
                'SYSTEM',
            ],
            'dependencies' => [
                'EDITOR_SCHEMA',
                'EDITOR_FORMAT',
                'EDITOR_RUNTIME',
            ],
            'dependents' => [
                'EDITOR_OUTPUT',
                'EDITOR_API',
            ],
        ];
    }

    /*=============================================================
        IDENTITY CHAIN
    ==============================================================*/
    public static function identityChain(): array
    {
        return [
            'root'      => 'AVIS',
            'universe'  => 'COPILOT_CMS',
            'subsystem' => 'EDITOR',
            'artifact'  => 'META',
        ];
    }

    /*=============================================================
        META STRUCTURES
    ==============================================================*/
    public static function structures(): array
    {
        return [
            'introspection' => [
                'artifact_map'   => 'maps all EDITOR artifacts',
                'schema_map'     => 'maps schema relationships',
                'format_map'     => 'maps formatting relationships',
                'runtime_map'    => 'maps runtime invariants',
            ],
            'lineage' => [
                'generation' => 'AVIS-CMS-GEN-1',
                'law'        => 'AVIS-LAW',
                'author'     => 'Demon',
            ],
        ];
    }

    /*=============================================================
        META SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'meta_id'   => EDITOR_META_ID::AVIS_ID,
            'meta_type' => EDITOR_META_ID::AVIS_TYPE,
            'meta_ver'  => EDITOR_META_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL META PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'      => self::identity(),
            'relationships' => self::relationships(),
            'identityChain' => self::identityChain(),
            'structures'    => self::structures(),
        ];
    }
}

class EDITOR_META_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_META';
    public const AVIS_TYPE = 'META';
    public const VERSION   = '1.0.0';
}

?>
