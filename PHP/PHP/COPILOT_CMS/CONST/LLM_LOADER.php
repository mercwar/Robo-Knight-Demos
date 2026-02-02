<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_LOADER
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_LOADER.php
    AVIS-TYPE: LOADER
    AVIS-DESCRIPTION:
        Primary loader for COPILOT_CMS LLM generator environment.
        Loads debug constants FIRST, then system constants, then
        any additional AVIS registries required by the engine.
        Contains NO logic, NO mutation, NO side effects.
    AVIS-VERSION: 1.1.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Debug constants MUST load before all others
        - Loader performs no logic and no mutation
        - Deterministic include order is mandatory
        - Self-identifying artifact
=====================================================================*/

/*=============================================================
    DEBUG CONSTANTS (MUST LOAD FIRST)
==============================================================*/
require_once __DIR__ . '/../CONST/CY_PHP_DEBUG_CONST.php';
require_once __DIR__ . '/../CONST/CY_JS_DEBUG_CONST.php';

/*=============================================================
    SYSTEM CONSTANTS
==============================================================*/
require_once __DIR__ . '/../CONST/CY_SERVER_CONST.php';
require_once __DIR__ . '/../CONST/CY_PHPINFO_CONST.php';

/*=============================================================
    FUTURE REGISTRIES (SAFE TO EXTEND)
==============================================================*/
/* Example:
require_once __DIR__ . '/../CONST/CY_HTML_CONST.php';
require_once __DIR__ . '/../CONST/CY_ENGINE_CONST.php';
*/

class LLM_LOADER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_LOADER';
    public const AVIS_TYPE = 'LOADER';
    public const VERSION   = '1.1.0';
}

?>
