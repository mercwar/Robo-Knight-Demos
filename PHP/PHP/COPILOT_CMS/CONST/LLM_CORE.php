<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_CORE
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_CORE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_CORE.php
    AVIS-TYPE: CORE
    AVIS-DESCRIPTION:
        Core identity binder for the COPILOT_CMS LLM subsystem.
        Establishes deterministic subsystem identity, lineage,
        and structural constants. Contains NO rendering, NO mutation,
        NO environment access, NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Core identity ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_SYSTEM.php';
require_once __DIR__ . '/LLM_META.php';
require_once __DIR__ . '/LLM_INFO.php';

class LLM_CORE
{
    /*=============================================================
        PROVIDE CORE IDENTITY PACKAGE
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'core_id'   => LLM_CORE_ID::AVIS_ID,
            'core_type' => LLM_CORE_ID::AVIS_TYPE,
            'core_ver'  => LLM_CORE_ID::VERSION,
            'system'    => LLM_SYSTEM::summary(),
            'meta'      => LLM_META::identity(),
        ];
    }

    /*=============================================================
        PROVIDE FULL CORE PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'meta'     => LLM_META::full(),
            'info'     => LLM_INFO::full(),
            'system'   => LLM_SYSTEM::package(),
        ];
    }
}

class LLM_CORE_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_CORE';
    public const AVIS_TYPE = 'CORE';
    public const VERSION   = '1.0.0';
}

?>
