<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_MANIFEST
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_MANIFEST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_MANIFEST.php
    AVIS-TYPE: MANIFEST
    AVIS-DESCRIPTION:
        Canonical manifest descriptor for the COPILOT_CMS LLM subsystem.
        Declares deterministic ordering, identity, and composition of all
        generator artifacts. Contains NO rendering, NO mutation, NO
        environment access, NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Manifest ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_META.php';
require_once __DIR__ . '/LLM_INFO.php';
require_once __DIR__ . '/LLM_CONST.php';

class LLM_MANIFEST
{
    /*=============================================================
        PROVIDE CANONICAL ORDER OF ALL GENERATOR ARTIFACTS
    ==============================================================*/
    public static function order(): array
    {
        return [
            'LLM_LOADER',
            'LLM_ENGINE',
            'LLM_RUNTIME',
            'LLM_BRIDGE',
            'LLM_UI',
            'LLM_API',
            'LLM_SCHEMA',
            'LLM_MAP',
            'LLM_INDEX',
            'LLM_CONST',
            'LLM_HELPER',
            'LLM_FORMAT',
            'LLM_OUTPUT',
            'LLM_DOC',
            'LLM_TEST',
            'LLM_DEBUG',
            'LLM_INFO',
            'LLM_META',
            'LLM_MANIFEST',
        ];
    }

    /*=============================================================
        PROVIDE MANIFEST METADATA
    ==============================================================*/
    public static function meta(): array
    {
        return [
            'manifest_id'   => LLM_MANIFEST_ID::AVIS_ID,
            'manifest_type' => LLM_MANIFEST_ID::AVIS_TYPE,
            'manifest_ver'  => LLM_MANIFEST_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL MANIFEST PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'meta'   => self::meta(),
            'order'  => self::order(),
            'system' => LLM_META::full(),
        ];
    }
}

class LLM_MANIFEST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_MANIFEST';
    public const AVIS_TYPE = 'MANIFEST';
    public const VERSION   = '1.0.0';
}

?>
