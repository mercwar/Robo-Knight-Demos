<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_CONST
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_CONST.php
    AVIS-TYPE: CONST
    AVIS-DESCRIPTION:
        Canonical constant descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic constants, invariant values, limits,
        and subsystem-wide static identifiers.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Constant descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_CONST
{
    /*=============================================================
        CONSTANT IDENTITY
    ==============================================================*/
    public const IDENTITY = [
        'const_id'   => MEDIA_CONST_ID::AVIS_ID,
        'const_type' => MEDIA_CONST_ID::AVIS_TYPE,
        'const_ver'  => MEDIA_CONST_ID::VERSION,
        'subsystem'  => 'COPILOT_CMS_MEDIA',
    ];

    /*=============================================================
        MEDIA LIMITS
    ==============================================================*/
    public const LIMITS = [
        'MAX_FILE_SIZE'      => 52428800, // 50MB
        'MAX_WIDTH'          => 8000,
        'MAX_HEIGHT'         => 8000,
        'MAX_TAGS'           => 50,
        'MAX_METADATA_SIZE'  => 65536,
        'MAX_OPERATIONS'     => 10,
    ];

    /*=============================================================
        MEDIA TYPES
    ==============================================================*/
    public const TYPES = [
        'IMAGE' => [ 'jpg', 'jpeg', 'png', 'gif', 'webp', 'svg' ],
        'VIDEO' => [ 'mp4' ],
        'AUDIO' => [ 'mp3' ],
    ];

    /*=============================================================
        CHECKSUM
    ==============================================================*/
    public const CHECKSUM = [
        'ALGORITHM' => 'sha256',
    ];

    /*=============================================================
        GENERATION + LAW
    ==============================================================*/
    public const META = [
        'GENERATION' => 'AVIS-CMS-GEN-1',
        'LAW'        => 'AVIS-LAW',
    ];

    /*=============================================================
        CONSTANT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return self::IDENTITY;
    }

    /*=============================================================
        FULL CONSTANT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity' => self::IDENTITY,
            'limits'   => self::LIMITS,
            'types'    => self::TYPES,
            'checksum' => self::CHECKSUM,
            'meta'     => self::META,
        ];
    }
}

class MEDIA_CONST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_CONST';
    public const AVIS_TYPE = 'CONST';
    public const VERSION   = '1.0.0';
}

?>
