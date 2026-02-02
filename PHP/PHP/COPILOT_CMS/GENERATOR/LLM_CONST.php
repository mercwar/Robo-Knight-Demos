<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_CONST
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_CONST.php
    AVIS-TYPE: CONSTANT-REGISTRY
    AVIS-DESCRIPTION:
        Canonical constant registry for the COPILOT_CMS LLM generator
        subsystem. Defines deterministic identifiers for generator
        layers, roles, and structural components. Contains NO logic,
        NO mutation, NO environment access, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Identifiers ONLY
        - No dynamic values
        - No external calls
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class LLM_CONST
{
    /*=============================================================
        GENERATOR LAYER IDENTIFIERS
    ==============================================================*/
    public const LAYER_LOADER   = 'LLM_LAYER_LOADER';
    public const LAYER_ENGINE   = 'LLM_LAYER_ENGINE';
    public const LAYER_RUNTIME  = 'LLM_LAYER_RUNTIME';
    public const LAYER_BRIDGE   = 'LLM_LAYER_BRIDGE';
    public const LAYER_UI       = 'LLM_LAYER_UI';
    public const LAYER_API      = 'LLM_LAYER_API';
    public const LAYER_SCHEMA   = 'LLM_LAYER_SCHEMA';
    public const LAYER_MAP      = 'LLM_LAYER_MAP';
    public const LAYER_INDEX    = 'LLM_LAYER_INDEX';

    /*=============================================================
        GENERATOR ROLE IDENTIFIERS
    ==============================================================*/
    public const ROLE_INPUT     = 'LLM_ROLE_INPUT';
    public const ROLE_OUTPUT    = 'LLM_ROLE_OUTPUT';
    public const ROLE_ADAPTER   = 'LLM_ROLE_ADAPTER';
    public const ROLE_RUNTIME   = 'LLM_ROLE_RUNTIME';
    public const ROLE_ENGINE    = 'LLM_ROLE_ENGINE';
    public const ROLE_SCHEMA    = 'LLM_ROLE_SCHEMA';
    public const ROLE_MAP       = 'LLM_ROLE_MAP';

    /*=============================================================
        GENERATOR STRUCTURAL IDENTIFIERS
    ==============================================================*/
    public const STRUCT_STATUS  = 'LLM_STRUCT_STATUS';
    public const STRUCT_ENV     = 'LLM_STRUCT_ENVIRONMENT';
    public const STRUCT_DEBUG   = 'LLM_STRUCT_DEBUG';
    public const STRUCT_PACKAGE = 'LLM_STRUCT_PACKAGE';
}

class LLM_CONST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_CONST';
    public const AVIS_TYPE = 'CONSTANT-REGISTRY';
    public const VERSION   = '1.0.0';
}

?>
