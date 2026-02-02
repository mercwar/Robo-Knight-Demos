<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_API
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_API
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_API.php
    AVIS-TYPE: API
    AVIS-DESCRIPTION:
        Canonical API descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic API contracts for upload, processing,
        metadata extraction, optimization, and output generation.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - API descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_API
{
    /*=============================================================
        API IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'api_id'     => MEDIA_API_ID::AVIS_ID,
            'api_type'   => MEDIA_API_ID::AVIS_TYPE,
            'api_ver'    => MEDIA_API_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        UPLOAD API CONTRACTS
    ==============================================================*/
    public static function upload(): array
    {
        return [
            'begin_upload' => [
                'file_name' => 'string',
                'file_size' => 'int',
                'file_type' => 'string',
            ],
            'commit_upload' => [
                'media_id' => 'string',
            ],
            'abort_upload' => [
                'reason' => 'string',
            ],
        ];
    }

    /*=============================================================
        PROCESSING API CONTRACTS
    ==============================================================*/
    public static function processing(): array
    {
        return [
            'validate_media' => [
                'media_id' => 'string',
            ],
            'transform_media' => [
                'media_id'  => 'string',
                'operation' => 'string',
            ],
            'optimize_media' => [
                'media_id' => 'string',
            ],
            'thumbnail_media' => [
                'media_id' => 'string',
                'size'     => 'string',
            ],
        ];
    }

    /*=============================================================
        METADATA API CONTRACTS
    ==============================================================*/
    public static function metadata(): array
    {
        return [
            'extract_metadata' => [
                'media_id' => 'string',
            ],
            'update_metadata' => [
                'media_id' => 'string',
                'metadata' => 'array',
            ],
        ];
    }

    /*=============================================================
        OUTPUT API CONTRACTS
    ==============================================================*/
    public static function output(): array
    {
        return [
            'get_output' => [
                'media_id' => 'string',
                'format'   => 'string',
            ],
        ];
    }

    /*=============================================================
        API SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'api_id'   => MEDIA_API_ID::AVIS_ID,
            'api_type' => MEDIA_API_ID::AVIS_TYPE,
            'api_ver'  => MEDIA_API_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL API PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'upload'     => self::upload(),
            'processing' => self::processing(),
            'metadata'   => self::metadata(),
            'output'     => self::output(),
        ];
    }
}

class MEDIA_API_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_API';
    public const AVIS_TYPE = 'API';
    public const VERSION   = '1.0.0';
}

?>
