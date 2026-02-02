<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_CORE
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_CORE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_CORE.php
    AVIS-TYPE: CORE
    AVIS-DESCRIPTION:
        Deterministic core descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines subsystem-wide invariants, foundational identity, canonical
        constants, and binding relationships across all structural layers.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Core descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_SYSTEM.php';
require_once __DIR__ . '/PUBLISH_MANIFEST.php';
require_once __DIR__ . '/PUBLISH_REGISTER.php';
require_once __DIR__ . '/PUBLISH_INDEX.php';
require_once __DIR__ . '/PUBLISH_CONST.php';

class PUBLISH_CORE
{
    /*=============================================================
        CORE IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'core_id'   => PUBLISH_CORE_ID::AVIS_ID,
            'core_type' => PUBLISH_CORE_ID::AVIS_TYPE,
            'core_ver'  => PUBLISH_CORE_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        SUBSYSTEM INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_schemas'   => true,
            'immutable_constants'     => true,
            'strict_avislaw_outputs'  => true,
            'no_side_effects'         => true,
            'no_external_dependencies'=> true,
        ];
    }

    /*=============================================================
        CORE CONSTANTS
    ==============================================================*/
    public static function constants(): array
    {
        return [
            'SUBSYSTEM_NAME' => 'COPILOT_CMS_PUBLISH',
            'GENERATION'     => 'AVIS-CMS-GEN-1',
            'LAW'            => 'AVIS-LAW',
            'VERSION'        => '1.0.0',
        ];
    }

    /*=============================================================
        CORE RELATIONSHIPS
    ==============================================================*/
    public static function relationships(): array
    {
        return [
            'system'   => PUBLISH_SYSTEM::summary(),
            'manifest' => PUBLISH_MANIFEST::summary(),
            'register' => PUBLISH_REGISTER::summary(),
            'index'    => PUBLISH_INDEX::summary(),
            'const'    => PUBLISH_CONST::summary(),
        ];
    }

    /*=============================================================
        CORE SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'core_id'   => PUBLISH_CORE_ID::AVIS_ID,
            'core_type' => PUBLISH_CORE_ID::AVIS_TYPE,
            'core_ver'  => PUBLISH_CORE_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL CORE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'      => self::identity(),
            'invariants'    => self::invariants(),
            'constants'     => self::constants(),
            'relationships' => self::relationships(),
            'system'        => PUBLISH_SYSTEM::summary(),
            'manifest'      => PUBLISH_MANIFEST::summary(),
            'register'      => PUBLISH_REGISTER::summary(),
            'index'         => PUBLISH_INDEX::summary(),
        ];
    }
}

class PUBLISH_CORE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_CORE';
    public const AVIS_TYPE = 'CORE';
    public const VERSION   = '1.0.0';
}

?>
