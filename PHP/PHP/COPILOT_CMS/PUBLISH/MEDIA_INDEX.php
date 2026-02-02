<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_INDEX
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_INDEX
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_INDEX.php
    AVIS-TYPE: INDEX
    AVIS-DESCRIPTION:
        Canonical index descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic indexing structures, lookup tables,
        media catalog descriptors, and index invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Index descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_INDEX
{
    /*=============================================================
        INDEX IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'index_id'   => MEDIA_INDEX_ID::AVIS_ID,
            'index_type' => MEDIA_INDEX_ID::AVIS_TYPE,
            'index_ver'  => MEDIA_INDEX_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        MEDIA CATALOG STRUCTURE
    ==============================================================*/
    public static function catalog(): array
    {
        return [
            'media_items' => 'array_of_media_records',
            'total_items' => 0,
            'last_indexed'=> null,
        ];
    }

    /*=============================================================
        LOOKUP TABLES
    ==============================================================*/
    public static function lookup(): array
    {
        return [
            'by_id'       => 'lookup_media_by_id',
            'by_type'     => 'lookup_media_by_type',
            'by_tag'      => 'lookup_media_by_tag',
            'by_author'   => 'lookup_media_by_author',
            'by_checksum' => 'lookup_media_by_checksum',
        ];
    }

    /*=============================================================
        INDEX INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'max_items'       => 50000,
            'index_algorithm' => 'deterministic-linear-hash',
            'generation'      => 'AVIS-CMS-GEN-1',
            'law'             => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        INDEX SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'index_id'   => MEDIA_INDEX_ID::AVIS_ID,
            'index_type' => MEDIA_INDEX_ID::AVIS_TYPE,
            'index_ver'  => MEDIA_INDEX_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL INDEX PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'catalog'    => self::catalog(),
            'lookup'     => self::lookup(),
            'invariants' => self::invariants(),
        ];
    }
}

class MEDIA_INDEX_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_INDEX';
    public const AVIS_TYPE = 'INDEX';
    public const VERSION   = '1.0.0';
}

?>
