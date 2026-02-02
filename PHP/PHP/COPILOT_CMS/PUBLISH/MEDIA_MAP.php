<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_MAP
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_MAP
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_MAP.php
    AVIS-TYPE: MAP
    AVIS-DESCRIPTION:
        Canonical mapping descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic mappings between schema, runtime, engine,
        metadata, and output structures.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Map descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_MAP
{
    /*=============================================================
        MAP IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'map_id'     => MEDIA_MAP_ID::AVIS_ID,
            'map_type'   => MEDIA_MAP_ID::AVIS_TYPE,
            'map_ver'    => MEDIA_MAP_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        SCHEMA → RUNTIME MAP
    ==============================================================*/
    public static function schemaToRuntime(): array
    {
        return [
            'media_id'   => 'runtime_media_id',
            'file_name'  => 'runtime_file_name',
            'file_size'  => 'runtime_file_size',
            'file_type'  => 'runtime_file_type',
            'dimensions' => 'runtime_dimensions',
            'duration'   => 'runtime_duration',
            'checksum'   => 'runtime_checksum',
        ];
    }

    /*=============================================================
        RUNTIME → ENGINE MAP
    ==============================================================*/
    public static function runtimeToEngine(): array
    {
        return [
            'runtime_file_name'  => 'engine_input_file',
            'runtime_file_type'  => 'engine_media_type',
            'runtime_dimensions' => 'engine_dimensions',
            'runtime_duration'   => 'engine_duration',
            'runtime_checksum'   => 'engine_checksum',
        ];
    }

    /*=============================================================
        ENGINE → METADATA MAP
    ==============================================================*/
    public static function engineToMetadata(): array
    {
        return [
            'engine_metadata_raw' => 'metadata_parsed',
            'engine_tags'         => 'metadata_tags',
            'engine_author'       => 'metadata_author',
            'engine_created_at'   => 'metadata_created_at',
            'engine_updated_at'   => 'metadata_updated_at',
        ];
    }

    /*=============================================================
        ENGINE → OUTPUT MAP
    ==============================================================*/
    public static function engineToOutput(): array
    {
        return [
            'engine_validation' => 'output_validation_block',
            'engine_transform'  => 'output_transform_block',
            'engine_thumbnail'  => 'output_thumbnail_block',
            'engine_metadata'   => 'output_metadata_block',
        ];
    }

    /*=============================================================
        MAP SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'map_id'   => MEDIA_MAP_ID::AVIS_ID,
            'map_type' => MEDIA_MAP_ID::AVIS_TYPE,
            'map_ver'  => MEDIA_MAP_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL MAP PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'         => self::identity(),
            'schemaToRuntime'  => self::schemaToRuntime(),
            'runtimeToEngine'  => self::runtimeToEngine(),
            'engineToMetadata' => self::engineToMetadata(),
            'engineToOutput'   => self::engineToOutput(),
        ];
    }
}

class MEDIA_MAP_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_MAP';
    public const AVIS_TYPE = 'MAP';
    public const VERSION   = '1.0.0';
}

?>
