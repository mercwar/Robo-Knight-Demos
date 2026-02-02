<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_META
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_META
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_META.php
    AVIS-TYPE: META
    AVIS-DESCRIPTION:
        Deterministic metadata descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural metadata for subsystem identity, lineage, versioning,
        authorship, timestamps, and artifact relationships. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Metadata descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_INDEX.php';
require_once __DIR__ . '/PUBLISH_INFO.php';

class PUBLISH_META
{
    /*=============================================================
        META IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'meta_id'   => PUBLISH_META_ID::AVIS_ID,
            'meta_type' => PUBLISH_META_ID::AVIS_TYPE,
            'meta_ver'  => PUBLISH_META_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        VERSIONING METADATA
    ==============================================================*/
    public static function versioning(): array
    {
        return [
            'version'       => '1.0.0',
            'schema_version'=> '1.0.0',
            'map_version'   => '1.0.0',
            'const_version' => '1.0.0',
            'format_version'=> '1.0.0',
            'output_version'=> '1.0.0',
        ];
    }

    /*=============================================================
        AUTHORSHIP METADATA
    ==============================================================*/
    public static function authorship(): array
    {
        return [
            'author'      => 'Demon',
            'maintainer'  => 'Demon',
            'governance'  => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        TIMESTAMP METADATA
    ==============================================================*/
    public static function timestamps(): array
    {
        return [
            'created_at' => 'ISO-8601 timestamp placeholder',
            'updated_at' => 'ISO-8601 timestamp placeholder',
        ];
    }

    /*=============================================================
        ARTIFACT RELATIONSHIPS
    ==============================================================*/
    public static function relationships(): array
    {
        return [
            'index'   => PUBLISH_INDEX::summary(),
            'info'    => PUBLISH_INFO::summary(),
            'depends' => [
                'ENGINE',
                'RUNTIME',
                'SCHEMA',
                'MAP',
                'CONST',
                'FORMAT',
                'OUTPUT',
            ],
        ];
    }

    /*=============================================================
        SUBSYSTEM LINEAGE
    ==============================================================*/
    public static function lineage(): array
    {
        return [
            'parent_subsystem' => 'COPILOT_CMS',
            'sibling_subsystems' => [
                'EDITOR',
                'MEDIA',
                'SYSTEM',
                'AUTH',
            ],
            'generation' => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        PROVIDE META SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'meta_id'   => PUBLISH_META_ID::AVIS_ID,
            'meta_type' => PUBLISH_META_ID::AVIS_TYPE,
            'meta_ver'  => PUBLISH_META_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL META PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'      => self::identity(),
            'versioning'    => self::versioning(),
            'authorship'    => self::authorship(),
            'timestamps'    => self::timestamps(),
            'relationships' => self::relationships(),
            'lineage'       => self::lineage(),
            'index'         => PUBLISH_INDEX::summary(),
            'info'          => PUBLISH_INFO::summary(),
        ];
    }
}

class PUBLISH_META_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_META';
    public const AVIS_TYPE = 'META';
    public const VERSION   = '1.0.0';
}

?>
