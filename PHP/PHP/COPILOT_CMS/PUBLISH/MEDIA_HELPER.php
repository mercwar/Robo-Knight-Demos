<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_HELPER
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_HELPER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_HELPER.php
    AVIS-TYPE: HELPER
    AVIS-DESCRIPTION:
        Canonical helper descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic helper utilities, normalization routines,
        checksum helpers, type helpers, and metadata helpers.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Helper descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_HELPER
{
    /*=============================================================
        HELPER IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'helper_id'   => MEDIA_HELPER_ID::AVIS_ID,
            'helper_type' => MEDIA_HELPER_ID::AVIS_TYPE,
            'helper_ver'  => MEDIA_HELPER_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        TYPE HELPERS
    ==============================================================*/
    public static function typeHelpers(): array
    {
        return [
            'is_image' => 'checks if media type is image',
            'is_video' => 'checks if media type is video',
            'is_audio' => 'checks if media type is audio',
        ];
    }

    /*=============================================================
        NORMALIZATION HELPERS
    ==============================================================*/
    public static function normalization(): array
    {
        return [
            'normalize_filename' => 'ensures filename follows canonical rules',
            'normalize_tags'     => 'ensures tags follow schema + limits',
            'normalize_metadata' => 'ensures metadata follows schema rules',
        ];
    }

    /*=============================================================
        CHECKSUM HELPERS
    ==============================================================*/
    public static function checksum(): array
    {
        return [
            'compute_checksum' => 'describes checksum computation descriptor',
            'verify_checksum'  => 'describes checksum verification descriptor',
        ];
    }

    /*=============================================================
        METADATA HELPERS
    ==============================================================*/
    public static function metadata(): array
    {
        return [
            'extract_basic_metadata' => 'describes basic metadata extraction',
            'merge_metadata'         => 'describes deterministic metadata merge',
            'sanitize_metadata'      => 'describes metadata sanitization rules',
        ];
    }

    /*=============================================================
        HELPER SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'helper_id'   => MEDIA_HELPER_ID::AVIS_ID,
            'helper_type' => MEDIA_HELPER_ID::AVIS_TYPE,
            'helper_ver'  => MEDIA_HELPER_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL HELPER PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'typeHelpers'  => self::typeHelpers(),
            'normalization'=> self::normalization(),
            'checksum'     => self::checksum(),
            'metadata'     => self::metadata(),
        ];
    }
}

class MEDIA_HELPER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_HELPER';
    public const AVIS_TYPE = 'HELPER';
    public const VERSION   = '1.0.0';
}

?>
