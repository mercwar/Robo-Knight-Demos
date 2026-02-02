<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_SCHEMA
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_SCHEMA
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_SCHEMA.php
    AVIS-TYPE: SCHEMA
    AVIS-DESCRIPTION:
        Canonical schema descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic media schemas, metadata schemas,
        validation rules, and structural invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Schema descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_SCHEMA
{
    /*=============================================================
        SCHEMA IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'schema_id'   => MEDIA_SCHEMA_ID::AVIS_ID,
            'schema_type' => MEDIA_SCHEMA_ID::AVIS_TYPE,
            'schema_ver'  => MEDIA_SCHEMA_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        MEDIA FILE SCHEMA
    ==============================================================*/
    public static function mediaFile(): array
    {
        return [
            'media_id'   => 'string',
            'file_name'  => 'string',
            'file_size'  => 'int',
            'file_type'  => 'string',
            'dimensions' => [
                'width'  => 'int',
                'height' => 'int',
            ],
            'duration'   => 'int|null',
            'checksum'   => 'string',
        ];
    }

    /*=============================================================
        METADATA SCHEMA
    ==============================================================*/
    public static function metadata(): array
    {
        return [
            'title'       => 'string|null',
            'description' => 'string|null',
            'tags'        => 'array',
            'author'      => 'string|null',
            'created_at'  => 'string',
            'updated_at'  => 'string',
        ];
    }

    /*=============================================================
        VALIDATION RULES
    ==============================================================*/
    public static function validation(): array
    {
        return [
            'max_file_size'  => 52428800,
            'allowed_types'  => [ 'jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'mp4', 'mp3' ],
            'max_dimensions' => [ 'width' => 8000, 'height' => 8000 ],
            'checksum_type'  => 'sha256',
        ];
    }

    /*=============================================================
        SCHEMA SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'schema_id'   => MEDIA_SCHEMA_ID::AVIS_ID,
            'schema_type' => MEDIA_SCHEMA_ID::AVIS_TYPE,
            'schema_ver'  => MEDIA_SCHEMA_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL SCHEMA PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'mediaFile'  => self::mediaFile(),
            'metadata'   => self::metadata(),
            'validation' => self::validation(),
        ];
    }
}

class MEDIA_SCHEMA_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_SCHEMA';
    public const AVIS_TYPE = 'SCHEMA';
    public const VERSION   = '1.0.0';
}

?>
