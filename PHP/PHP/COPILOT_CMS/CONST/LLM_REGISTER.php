<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_REGISTER
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_REGISTER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_REGISTER.php
    AVIS-TYPE: REGISTRY
    AVIS-DESCRIPTION:
        Final registry binder for the COPILOT_CMS LLM subsystem.
        Declares subsystem identity, manifest, and registration
        metadata in a deterministic AVIS-law compliant structure.
        Contains NO rendering, NO mutation, NO environment access,
        NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Registry ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_MANIFEST.php';
require_once __DIR__ . '/LLM_META.php';
require_once __DIR__ . '/LLM_INFO.php';

class LLM_REGISTER
{
    /*=============================================================
        PROVIDE REGISTRATION PACKAGE
    ==============================================================*/
    public static function package(): array
    {
        return [
            'register_id'   => LLM_REGISTER_ID::AVIS_ID,
            'register_type' => LLM_REGISTER_ID::AVIS_TYPE,
            'register_ver'  => LLM_REGISTER_ID::VERSION,
            'manifest'      => LLM_MANIFEST::full(),
            'meta'          => LLM_META::full(),
            'info'          => LLM_INFO::full(),
        ];
    }

    /*=============================================================
        PROVIDE MINIMAL REGISTRATION SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'id'      => LLM_REGISTER_ID::AVIS_ID,
            'version' => LLM_REGISTER_ID::VERSION,
        ];
    }
}

class LLM_REGISTER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_REGISTER';
    public const AVIS_TYPE = 'REGISTRY';
    public const VERSION   = '1.0.0';
}

?>
