<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_REGISTER
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_REGISTER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_REGISTER.php
    AVIS-TYPE: REGISTER
    AVIS-DESCRIPTION:
        Deterministic registration descriptor for the COPILOT_CMS PUBLISH
        subsystem. Defines structural registration blocks for subsystem
        identity, artifact registration, dependency registration, and
        canonical subsystem exposure. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Registration descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_MANIFEST.php';
require_once __DIR__ . '/PUBLISH_INDEX.php';
require_once __DIR__ . '/PUBLISH_INFO.php';

class PUBLISH_REGISTER
{
    /*=============================================================
        REGISTER IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'register_id'   => PUBLISH_REGISTER_ID::AVIS_ID,
            'register_type' => PUBLISH_REGISTER_ID::AVIS_TYPE,
            'register_ver'  => PUBLISH_REGISTER_ID::VERSION,
            'subsystem'     => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        REGISTER ARTIFACTS
    ==============================================================*/
    public static function artifacts(): array
    {
        return [
            'manifest' => PUBLISH_MANIFEST::summary(),
            'index'    => PUBLISH_INDEX::summary(),
            'info'     => PUBLISH_INFO::summary(),
        ];
    }

    /*=============================================================
        REGISTER DEPENDENCIES
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
        REGISTER SUBSYSTEM EXPOSURE
    ==============================================================*/
    public static function expose(): array
    {
        return [
            'subsystem' => 'COPILOT_CMS_PUBLISH',
            'entrypoints' => [
                'ENGINE',
                'API',
                'SCHEMA',
                'MAP',
                'OUTPUT',
            ],
            'metadata' => [
                'version' => '1.0.0',
                'law'     => 'AVIS-LAW',
            ],
        ];
    }

    /*=============================================================
        PROVIDE REGISTER SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'register_id'   => PUBLISH_REGISTER_ID::AVIS_ID,
            'register_type' => PUBLISH_REGISTER_ID::AVIS_TYPE,
            'register_ver'  => PUBLISH_REGISTER_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL REGISTER PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'artifacts'    => self::artifacts(),
            'dependencies' => self::dependencies(),
            'expose'       => self::expose(),
            'manifest'     => PUBLISH_MANIFEST::summary(),
            'index'        => PUBLISH_INDEX::summary(),
            'info'         => PUBLISH_INFO::summary(),
        ];
    }
}

class PUBLISH_REGISTER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_REGISTER';
    public const AVIS_TYPE = 'REGISTER';
    public const VERSION   = '1.0.0';
}

?>
