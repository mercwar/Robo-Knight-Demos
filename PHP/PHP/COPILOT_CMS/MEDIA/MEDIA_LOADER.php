<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_LOADER
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_LOADER.php
    AVIS-TYPE: LOADER
    AVIS-DESCRIPTION:
        Canonical loader descriptor for the COPILOT_CMS MEDIA subsystem.
        Establishes subsystem identity, load order, and invariant bindings.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Loader descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_LOADER
{
    /*=============================================================
        LOADER IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'loader_id'   => MEDIA_LOADER_ID::AVIS_ID,
            'loader_type' => MEDIA_LOADER_ID::AVIS_TYPE,
            'loader_ver'  => MEDIA_LOADER_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        LOAD ORDER
    ==============================================================*/
    public static function loadOrder(): array
    {
        return [
            'ENGINE',
            'RUNTIME',
            'BRIDGE',
            'UI',
            'API',
            'SCHEMA',
            'MAP',
            'INDEX',
            'CONST',
            'HELPER',
            'FORMAT',
            'OUTPUT',
            'DOC',
            'TEST',
            'DEBUG',
            'INFO',
            'META',
            'MANIFEST',
            'REGISTER',
            'SYSTEM',
            'CORE',
            'ROOT',
        ];
    }

    /*=============================================================
        LOADER SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'loader_id'   => MEDIA_LOADER_ID::AVIS_ID,
            'loader_type' => MEDIA_LOADER_ID::AVIS_TYPE,
            'loader_ver'  => MEDIA_LOADER_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL LOADER PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'loadOrder' => self::loadOrder(),
        ];
    }
}

class MEDIA_LOADER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_LOADER';
    public const AVIS_TYPE = 'LOADER';
    public const VERSION   = '1.0.0';
}

?>
