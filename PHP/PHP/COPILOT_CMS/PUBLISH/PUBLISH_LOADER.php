<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_LOADER
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_LOADER.php
    AVIS-TYPE: LOADER
    AVIS-DESCRIPTION:
        Deterministic loader descriptor for the COPILOT_CMS PUBLISH subsystem.
        Establishes subsystem identity, load order, and structural entrypoint.
        Contains NO rendering, NO mutation, NO environment access,
        NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Loader descriptor ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class PUBLISH_LOADER
{
    /*=============================================================
        SUBSYSTEM IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'loader_id'   => PUBLISH_LOADER_ID::AVIS_ID,
            'loader_type' => PUBLISH_LOADER_ID::AVIS_TYPE,
            'loader_ver'  => PUBLISH_LOADER_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_PUBLISH',
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
        PROVIDE LOADER SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'loader_id'   => PUBLISH_LOADER_ID::AVIS_ID,
            'loader_type' => PUBLISH_LOADER_ID::AVIS_TYPE,
            'loader_ver'  => PUBLISH_LOADER_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL LOADER PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'load_order' => self::loadOrder(),
        ];
    }
}

class PUBLISH_LOADER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_LOADER';
    public const AVIS_TYPE = 'LOADER';
    public const VERSION   = '1.0.0';
}

?>
