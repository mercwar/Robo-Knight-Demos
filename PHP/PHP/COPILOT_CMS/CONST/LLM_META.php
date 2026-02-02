<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_META
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_META
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_META.php
    AVIS-TYPE: META
    AVIS-DESCRIPTION:
        Meta-descriptor for the COPILOT_CMS LLM subsystem.
        Provides deterministic AVIS-law compliant metadata for
        identity, structure, lineage, and subsystem composition.
        Contains NO rendering, NO mutation, NO environment access,
        NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Meta descriptor ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_INFO.php';
require_once __DIR__ . '/LLM_CONST.php';

class LLM_META
{
    /*=============================================================
        PROVIDE SUBSYSTEM IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'subsystem' => 'COPILOT_CMS_LLM',
            'version'   => '1.0.0',
            'author'    => 'Demon',
            'type'      => 'GENERATOR-SUBSYSTEM',
        ];
    }

    /*=============================================================
        PROVIDE SUBSYSTEM STRUCTURE
    ==============================================================*/
    public static function structure(): array
    {
        return [
            'layers' => LLM_INFO::layers(),
            'roles'  => [
                LLM_CONST::ROLE_INPUT,
                LLM_CONST::ROLE_OUTPUT,
                LLM_CONST::ROLE_ADAPTER,
                LLM_CONST::ROLE_RUNTIME,
                LLM_CONST::ROLE_ENGINE,
                LLM_CONST::ROLE_SCHEMA,
                LLM_CONST::ROLE_MAP,
            ],
        ];
    }

    /*=============================================================
        PROVIDE SUBSYSTEM LINEAGE
    ==============================================================*/
    public static function lineage(): array
    {
        return [
            'root'      => 'COPILOT_CMS',
            'component' => 'LLM_GENERATOR',
            'version'   => '1.0.0',
        ];
    }

    /*=============================================================
        PROVIDE FULL META PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'structure' => self::structure(),
            'lineage'   => self::lineage(),
            'info'      => LLM_INFO::full(),
        ];
    }
}

class LLM_META_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_META';
    public const AVIS_TYPE = 'META';
    public const VERSION   = '1.0.0';
}

?>
