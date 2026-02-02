<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_MANIFEST
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_MANIFEST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_MANIFEST.php
    AVIS-TYPE: MANIFEST
    AVIS-DESCRIPTION:
        Deterministic manifest descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines subsystem composition, artifact inventory, version blocks,
        dependency declarations, and canonical ordering. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Manifest descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_INDEX.php';
require_once __DIR__ . '/PUBLISH_META.php';

class PUBLISH_MANIFEST
{
    /*=============================================================
        MANIFEST IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'manifest_id'   => PUBLISH_MANIFEST_ID::AVIS_ID,
            'manifest_type' => PUBLISH_MANIFEST_ID::AVIS_TYPE,
            'manifest_ver'  => PUBLISH_MANIFEST_ID::VERSION,
            'subsystem'     => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        ARTIFACT INVENTORY
    ==============================================================*/
    public static function artifacts(): array
    {
        return PUBLISH_INDEX::artifacts();
    }

    /*=============================================================
        VERSION BLOCK
    ==============================================================*/
    public static function versions(): array
    {
        return [
            'subsystem_version' => '1.0.0',
            'engine_version'    => '1.0.0',
            'runtime_version'   => '1.0.0',
            'schema_version'    => '1.0.0',
            'map_version'       => '1.0.0',
            'const_version'     => '1.0.0',
            'format_version'    => '1.0.0',
            'output_version'    => '1.0.0',
            'meta_version'      => '1.0.0',
        ];
    }

    /*=============================================================
        DEPENDENCY DECLARATIONS
    ==============================================================*/
    public static function dependencies(): array
    {
        return [
            'requires' => [
                'COPILOT_CMS.EDITOR',
                'COPILOT_CMS.SYSTEM',
            ],
            'optional' => [
                'COPILOT_CMS.MEDIA',
                'COPILOT_CMS.AUTH',
            ],
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
        SUBSYSTEM SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'identity'     => self::identity(),
            'versions'     => self::versions(),
            'dependencies' => self::dependencies(),
            'ordering'     => self::ordering(),
        ];
    }

    /*=============================================================
        PROVIDE FULL MANIFEST PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'artifacts'    => self::artifacts(),
            'versions'     => self::versions(),
            'dependencies' => self::dependencies(),
            'ordering'     => self::ordering(),
            'meta'         => PUBLISH_META::summary(),
            'index'        => PUBLISH_INDEX::summary(),
        ];
    }
}

class PUBLISH_MANIFEST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_MANIFEST';
    public const AVIS_TYPE = 'MANIFEST';
    public const VERSION   = '1.0.0';
}

?>
