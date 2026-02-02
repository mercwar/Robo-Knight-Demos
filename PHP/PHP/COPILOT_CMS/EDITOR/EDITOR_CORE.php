<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_CORE
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_CORE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_CORE.php
    AVIS-TYPE: CORE
    AVIS-DESCRIPTION:
        Deterministic core descriptor for the COPILOT_CMS EDITOR subsystem.
        Provides AVIS-law compliant structural metadata for subsystem core
        identity, core relationships, and core structural maps.
        Contains NO rendering, NO mutation, NO environment access,
        NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Core descriptors ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/EDITOR_SYSTEM.php';
require_once __DIR__ . '/EDITOR_MANIFEST.php';
require_once __DIR__ . '/EDITOR_INDEX.php';

class EDITOR_CORE
{
    /*=============================================================
        CORE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'core_id'   => EDITOR_CORE_ID::AVIS_ID,
            'core_type' => EDITOR_CORE_ID::AVIS_TYPE,
            'core_ver'  => EDITOR_CORE_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        CORE STRUCTURAL MAP
    ==============================================================*/
    public static function structure(): array
    {
        return [
            'core_layers' => [
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
            ],
        ];
    }

    /*=============================================================
        CORE RELATIONSHIPS
    ==============================================================*/
    public static function relationships(): array
    {
        return [
            'SYSTEM → CORE' => 'Core finalizes subsystem structural identity.',
            'CORE → ROOT'   => 'Core prepares handoff to ROOT layer.',
        ];
    }

    /*=============================================================
        CORE METADATA
    ==============================================================*/
    public static function metadata(): array
    {
        return [
            'system'   => EDITOR_SYSTEM::summary(),
            'manifest' => EDITOR_MANIFEST::summary(),
            'index'    => EDITOR_INDEX::summary(),
        ];
    }

    /*=============================================================
        PROVIDE CORE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'core_id'   => EDITOR_CORE_ID::AVIS_ID,
            'core_type' => EDITOR_CORE_ID::AVIS_TYPE,
            'core_ver'  => EDITOR_CORE_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL CORE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'      => self::identity(),
            'structure'     => self::structure(),
            'relationships' => self::relationships(),
            'metadata'      => self::metadata(),
            'system'        => EDITOR_SYSTEM::full(),
            'manifest'      => EDITOR_MANIFEST::full(),
            'index'         => EDITOR_INDEX::full(),
        ];
    }
}

class EDITOR_CORE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_CORE';
    public const AVIS_TYPE = 'CORE';
    public const VERSION   = '1.0.0';
}

?>
