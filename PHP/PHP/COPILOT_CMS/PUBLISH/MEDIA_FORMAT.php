<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_FORMAT
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_FORMAT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_FORMAT.php
    AVIS-TYPE: FORMAT
    AVIS-DESCRIPTION:
        Canonical format descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic formatting rules, output structures,
        serialization descriptors, and canonical media representation.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Format descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_FORMAT
{
    /*=============================================================
        FORMAT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'format_id'   => MEDIA_FORMAT_ID::AVIS_ID,
            'format_type' => MEDIA_FORMAT_ID::AVIS_TYPE,
            'format_ver'  => MEDIA_FORMAT_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        CANONICAL MEDIA REPRESENTATION
    ==============================================================*/
    public static function representation(): array
    {
        return [
            'media_id'   => 'string',
            'file_name'  => 'string',
            'file_type'  => 'string',
            'file_size'  => 'int',
            'dimensions' => [
                'width'  => 'int',
                'height' => 'int',
            ],
            'duration'   => 'int|null',
            'metadata'   => 'array',
            'checksum'   => 'string',
        ];
    }

    /*=============================================================
        SERIALIZATION RULES
    ==============================================================*/
    public static function serialization(): array
    {
        return [
            'serialize_media'   => 'describes canonical media serialization',
            'serialize_metadata'=> 'describes canonical metadata serialization',
            'serialize_output'  => 'describes canonical output serialization',
        ];
    }

    /*=============================================================
        OUTPUT BLOCKS
    ==============================================================*/
    public static function outputBlocks(): array
    {
        return [
            'validation_block' => [
                'status'  => 'string',
                'details' => 'array',
            ],
            'transform_block' => [
                'operation' => 'string',
                'result'    => 'string',
            ],
            'thumbnail_block' => [
                'size'   => 'string',
                'path'   => 'string',
            ],
            'metadata_block' => [
                'metadata' => 'array',
            ],
        ];
    }

    /*=============================================================
        FORMAT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'format_id'   => MEDIA_FORMAT_ID::AVIS_ID,
            'format_type' => MEDIA_FORMAT_ID::AVIS_TYPE,
            'format_ver'  => MEDIA_FORMAT_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL FORMAT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'       => self::identity(),
            'representation' => self::representation(),
            'serialization'  => self::serialization(),
            'outputBlocks'   => self::outputBlocks(),
        ];
    }
}

class MEDIA_FORMAT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_FORMAT';
    public const AVIS_TYPE = 'FORMAT';
    public const VERSION   = '1.0.0';
}

?>
