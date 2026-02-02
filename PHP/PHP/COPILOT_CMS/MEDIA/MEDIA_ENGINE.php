<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_ENGINE
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_ENGINE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_ENGINE.php
    AVIS-TYPE: ENGINE
    AVIS-DESCRIPTION:
        Canonical engine descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines subsystem engine invariants, media processing descriptors,
        and deterministic media operation structures.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Engine descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_ENGINE
{
    /*=============================================================
        ENGINE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'engine_id'   => MEDIA_ENGINE_ID::AVIS_ID,
            'engine_type' => MEDIA_ENGINE_ID::AVIS_TYPE,
            'engine_ver'  => MEDIA_ENGINE_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        MEDIA ENGINE INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'max_file_size'      => 52428800,   // 50MB
            'max_dimensions'     => [ 'width' => 8000, 'height' => 8000 ],
            'allowed_types'      => [ 'jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'mp4', 'mp3' ],
            'requires_schema'    => true,
            'requires_runtime'   => true,
            'requires_output'    => true,
            'generation'         => 'AVIS-CMS-GEN-1',
            'law'                => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        MEDIA PROCESSING DESCRIPTORS
    ==============================================================*/
    public static function processing(): array
    {
        return [
            'validate_media'   => 'ensures media file matches schema + invariants',
            'extract_metadata' => 'describes metadata extraction process',
            'transform_media'  => 'describes deterministic transform operations',
            'optimize_media'   => 'describes canonical optimization rules',
            'thumbnail_media'  => 'describes thumbnail generation descriptor',
        ];
    }

    /*=============================================================
        ENGINE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'engine_id'   => MEDIA_ENGINE_ID::AVIS_ID,
            'engine_type' => MEDIA_ENGINE_ID::AVIS_TYPE,
            'engine_ver'  => MEDIA_ENGINE_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL ENGINE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'invariants'  => self::invariants(),
            'processing'  => self::processing(),
        ];
    }
}

class MEDIA_ENGINE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_ENGINE';
    public const AVIS_TYPE = 'ENGINE';
    public const VERSION   = '1.0.0';
}

?>
