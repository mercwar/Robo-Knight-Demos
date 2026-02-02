<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_ROOT
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_ROOT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_ROOT.php
    AVIS-TYPE: ROOT
    AVIS-DESCRIPTION:
        Deterministic root descriptor for the COPILOT_CMS PUBLISH subsystem.
        Establishes subsystem existence, binds core identity, finalizes
        subsystem boundaries, and exposes canonical AVIS-law identity.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Root descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_CORE.php';
require_once __DIR__ . '/PUBLISH_SYSTEM.php';
require_once __DIR__ . '/PUBLISH_MANIFEST.php';
require_once __DIR__ . '/PUBLISH_REGISTER.php';
require_once __DIR__ . '/PUBLISH_INDEX.php';

class PUBLISH_ROOT
{
    /*=============================================================
        ROOT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'root_id'   => PUBLISH_ROOT_ID::AVIS_ID,
            'root_type' => PUBLISH_ROOT_ID::AVIS_TYPE,
            'root_ver'  => PUBLISH_ROOT_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        ROOT DECLARATION
    ==============================================================*/
    public static function declaration(): array
    {
        return [
            'subsystem_name' => 'COPILOT_CMS_PUBLISH',
            'generation'     => 'AVIS-CMS-GEN-1',
            'law'            => 'AVIS-LAW',
            'canonical'      => true,
        ];
    }

    /*=============================================================
        ROOT BINDINGS
    ==============================================================*/
    public static function bindings(): array
    {
        return [
            'core'     => PUBLISH_CORE::summary(),
            'system'   => PUBLISH_SYSTEM::summary(),
            'manifest' => PUBLISH_MANIFEST::summary(),
            'register' => PUBLISH_REGISTER::summary(),
            'index'    => PUBLISH_INDEX::summary(),
        ];
    }

    /*=============================================================
        ROOT BOUNDARIES
    ==============================================================*/
    public static function boundaries(): array
    {
        return [
            'includes' => [
                'ENGINE',
                'RUNTIME',
                'SCHEMA',
                'MAP',
                'CONST',
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
            ],
            'excludes' => [
                'no_rendering',
                'no_environment_access',
                'no_external_calls',
                'no_dynamic_execution',
            ],
        ];
    }

    /*=============================================================
        ROOT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'root_id'   => PUBLISH_ROOT_ID::AVIS_ID,
            'root_type' => PUBLISH_ROOT_ID::AVIS_TYPE,
            'root_ver'  => PUBLISH_ROOT_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL ROOT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'declaration' => self::declaration(),
            'bindings'    => self::bindings(),
            'boundaries'  => self::boundaries(),
            'core'        => PUBLISH_CORE::summary(),
            'system'      => PUBLISH_SYSTEM::summary(),
            'manifest'    => PUBLISH_MANIFEST::summary(),
            'register'    => PUBLISH_REGISTER::summary(),
            'index'       => PUBLISH_INDEX::summary(),
        ];
    }
}

class PUBLISH_ROOT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_ROOT';
    public const AVIS_TYPE = 'ROOT';
    public const VERSION   = '1.0.0';
}

?>
