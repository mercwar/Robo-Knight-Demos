<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_ROOT
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_ROOT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_ROOT.php
    AVIS-TYPE: ROOT
    AVIS-DESCRIPTION:
        Root anchor for the COPILOT_CMS LLM generator subsystem.
        Establishes the top-level identity, lineage, and canonical
        reference point for all generator artifacts. Contains NO
        rendering, NO mutation, NO environment access, NO phpinfo(),
        NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Root identity ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_CORE.php';
require_once __DIR__ . '/LLM_SYSTEM.php';
require_once __DIR__ . '/LLM_META.php';
require_once __DIR__ . '/LLM_INFO.php';
require_once __DIR__ . '/LLM_MANIFEST.php';
require_once __DIR__ . '/LLM_REGISTER.php';

class LLM_ROOT
{
    /*=============================================================
        PROVIDE ROOT IDENTITY PACKAGE
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'root_id'   => LLM_ROOT_ID::AVIS_ID,
            'root_type' => LLM_ROOT_ID::AVIS_TYPE,
            'root_ver'  => LLM_ROOT_ID::VERSION,
            'core'      => LLM_CORE::identity(),
        ];
    }

    /*=============================================================
        PROVIDE FULL ROOT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'core'     => LLM_CORE::full(),
            'system'   => LLM_SYSTEM::package(),
            'meta'     => LLM_META::full(),
            'info'     => LLM_INFO::full(),
            'manifest' => LLM_MANIFEST::full(),
            'register' => LLM_REGISTER::package(),
        ];
    }
}

class LLM_ROOT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_ROOT';
    public const AVIS_TYPE = 'ROOT';
    public const VERSION   = '1.0.0';
}

?>
