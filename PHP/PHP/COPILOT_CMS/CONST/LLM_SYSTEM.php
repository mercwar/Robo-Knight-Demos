<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_SYSTEM
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_SYSTEM
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_SYSTEM.php
    AVIS-TYPE: SYSTEM
    AVIS-DESCRIPTION:
        System-level aggregator for the COPILOT_CMS LLM subsystem.
        Provides deterministic AVIS-law compliant binding of all
        generator components into a unified system descriptor.
        Contains NO rendering, NO mutation, NO environment access,
        NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - System aggregator ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_REGISTER.php';
require_once __DIR__ . '/LLM_MANIFEST.php';
require_once __DIR__ . '/LLM_META.php';
require_once __DIR__ . '/LLM_INFO.php';

class LLM_SYSTEM
{
    /*=============================================================
        PROVIDE FULL SYSTEM PACKAGE
    ==============================================================*/
    public static function package(): array
    {
        return [
            'system_id'   => LLM_SYSTEM_ID::AVIS_ID,
            'system_type' => LLM_SYSTEM_ID::AVIS_TYPE,
            'system_ver'  => LLM_SYSTEM_ID::VERSION,
            'register'    => LLM_REGISTER::package(),
            'manifest'    => LLM_MANIFEST::full(),
            'meta'        => LLM_META::full(),
            'info'        => LLM_INFO::full(),
        ];
    }

    /*=============================================================
        PROVIDE MINIMAL SYSTEM SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'id'      => LLM_SYSTEM_ID::AVIS_ID,
            'version' => LLM_SYSTEM_ID::VERSION,
        ];
    }
}

class LLM_SYSTEM_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_SYSTEM';
    public const AVIS_TYPE = 'SYSTEM';
    public const VERSION   = '1.0.0';
}

?>
