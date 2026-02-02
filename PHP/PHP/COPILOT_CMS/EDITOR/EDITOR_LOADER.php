<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_LOADER
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_LOADER.php
    AVIS-TYPE: LOADER
    AVIS-DESCRIPTION:
        Deterministic loader descriptor for the COPILOT_CMS EDITOR subsystem.
        Establishes subsystem identity, canonical load order, and structural
        bindings. Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Loader descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_LOADER
{
    /*=============================================================
        LOADER IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'loader_id'   => EDITOR_LOADER_ID::AVIS_ID,
            'loader_type' => EDITOR_LOADER_ID::AVIS_TYPE,
            'loader_ver'  => EDITOR_LOADER_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        CANONICAL LOAD ORDER
    ==============================================================*/
    public static function order(): array
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
        SUBSYSTEM DECLARATION
    ==============================================================*/
    public static function declaration(): array
    {
        return [
            'name'       => 'COPILOT_CMS_EDITOR',
            'generation' => 'AVIS-CMS-GEN-1',
            'law'        => 'AVIS-LAW',
            'canonical'  => true,
        ];
    }

    /*=============================================================
        PROVIDE LOADER SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'loader_id'   => EDITOR_LOADER_ID::AVIS_ID,
            'loader_type' => EDITOR_LOADER_ID::AVIS_TYPE,
            'loader_ver'  => EDITOR_LOADER_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL LOADER PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'order'       => self::order(),
            'declaration' => self::declaration(),
        ];
    }
}

class EDITOR_LOADER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_LOADER';
    public const AVIS_TYPE = 'LOADER';
    public const VERSION   = '1.0.0';
}

?>
