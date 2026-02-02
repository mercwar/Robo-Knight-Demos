<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_MAP
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_MAP
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_MAP.php
    AVIS-TYPE: MAP
    AVIS-DESCRIPTION:
        Canonical mapping layer for COPILOT_CMS LLM generator system.
        Binds schema definitions to constant registries in a deterministic,
        AVIS-law compliant structure. Contains NO logic, NO mutation,
        NO environment access, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Mapping ONLY
        - No dynamic values
        - No external calls
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_SCHEMA.php';
require_once __DIR__ . '/../CONST/CY_PHP_DEBUG_CONST.php';
require_once __DIR__ . '/../CONST/CY_JS_DEBUG_CONST.php';
require_once __DIR__ . '/../CONST/CY_SERVER_CONST.php';
require_once __DIR__ . '/../CONST/CY_PHPINFO_CONST.php';

class LLM_MAP
{
    /*=============================================================
        MAP: DEBUG CONSTANTS → SCHEMA DEBUG
    ==============================================================*/
    public const DEBUG = [
        'php_debug' => [
            CY_PHP_DEBUG_CONST::FLAG_ENABLED,
            CY_PHP_DEBUG_CONST::FLAG_VERBOSE,
            CY_PHP_DEBUG_CONST::FLAG_TRACE,
            CY_PHP_DEBUG_CONST::FLAG_TIMERS,
            CY_PHP_DEBUG_CONST::FLAG_MEMORY,
            CY_PHP_DEBUG_CONST::FLAG_SANDBOX,
        ],

        'js_debug' => [
            CY_JS_DEBUG_CONST::FLAG_ENABLED,
            CY_JS_DEBUG_CONST::FLAG_VERBOSE,
            CY_JS_DEBUG_CONST::FLAG_TRACE,
            CY_JS_DEBUG_CONST::FLAG_TIMERS,
            CY_JS_DEBUG_CONST::FLAG_MEMORY,
            CY_JS_DEBUG_CONST::FLAG_EVENTS,
            CY_JS_DEBUG_CONST::FLAG_SANDBOX,
        ],
    ];

    /*=============================================================
        MAP: SYSTEM CONSTANTS → SCHEMA ENVIRONMENT
    ==============================================================*/
    public const SYSTEM = [
        'server_keys' => [
            CY_SERVER_CONST::SERVER_NAME,
            CY_SERVER_CONST::SERVER_ADDR,
            CY_SERVER_CONST::SERVER_PORT,
            CY_SERVER_CONST::SERVER_PROTOCOL,
            CY_SERVER_CONST::SERVER_SOFTWARE,
            CY_SERVER_CONST::REQUEST_METHOD,
            CY_SERVER_CONST::REQUEST_URI,
            CY_SERVER_CONST::QUERY_STRING,
        ],

        'phpinfo_keys' => [
            CY_PHPINFO_CONST::GENERAL,
            CY_PHPINFO_CONST::CONFIGURATION,
            CY_PHPINFO_CONST::MODULES,
            CY_PHPINFO_CONST::ENVIRONMENT,
            CY_PHPINFO_CONST::VARIABLES,
            CY_PHPINFO_CONST::LICENSE,
            CY_PHPINFO_CONST::CREDITS,
        ],
    ];

    /*=============================================================
        MAP: PACKAGE SCHEMA → STATIC STRUCTURE
    ==============================================================*/
    public const PACKAGE = LLM_SCHEMA::PACKAGE;

    /*=============================================================
        MAP: STATUS SCHEMA → STATIC STRUCTURE
    ==============================================================*/
    public const STATUS = LLM_SCHEMA::STATUS;
}

class LLM_MAP_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_MAP';
    public const AVIS_TYPE = 'MAP';
    public const VERSION   = '1.0.0';
}

?>
