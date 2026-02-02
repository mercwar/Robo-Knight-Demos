<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_DEBUG_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_DEBUG_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_DEBUG_CONST.php
    AVIS-TYPE: CONSTANT-REGISTRY
    AVIS-DESCRIPTION:
        Canonical PHP debug identifier registry for COPILOT_CMS.
        Provides deterministic identifiers for debug channels,
        debug flags, error levels, and diagnostic categories.
        Contains NO phpinfo(), NO ini reads, NO runtime values.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No dynamic environment access
        - No phpinfo()
        - No ini_get()
        - No runtime mutation
        - Identifiers ONLY, immutable, deterministic
=====================================================================*/

class CY_PHP_DEBUG_CONST
{
    /*=============================================================
        DEBUG CHANNELS
    ==============================================================*/
    public const CHANNEL_CORE       = 'DEBUG_CORE';
    public const CHANNEL_ENGINE     = 'DEBUG_ENGINE';
    public const CHANNEL_ROUTER     = 'DEBUG_ROUTER';
    public const CHANNEL_RENDER     = 'DEBUG_RENDER';
    public const CHANNEL_SECURITY   = 'DEBUG_SECURITY';
    public const CHANNEL_STORAGE    = 'DEBUG_STORAGE';
    public const CHANNEL_LLM        = 'DEBUG_LLM';
    public const CHANNEL_CMS        = 'DEBUG_CMS';

    /*=============================================================
        DEBUG FLAGS
    ==============================================================*/
    public const FLAG_ENABLED       = 'DEBUG_ENABLED';
    public const FLAG_VERBOSE       = 'DEBUG_VERBOSE';
    public const FLAG_TRACE         = 'DEBUG_TRACE';
    public const FLAG_TIMERS        = 'DEBUG_TIMERS';
    public const FLAG_MEMORY        = 'DEBUG_MEMORY';
    public const FLAG_SANDBOX       = 'DEBUG_SANDBOX';

    /*=============================================================
        PHP ERROR LEVEL IDENTIFIERS (NOT VALUES)
    ==============================================================*/
    public const ERR_ERROR          = 'E_ERROR';
    public const ERR_WARNING        = 'E_WARNING';
    public const ERR_PARSE          = 'E_PARSE';
    public const ERR_NOTICE         = 'E_NOTICE';
    public const ERR_CORE_ERROR     = 'E_CORE_ERROR';
    public const ERR_CORE_WARNING   = 'E_CORE_WARNING';
    public const ERR_COMPILE_ERROR  = 'E_COMPILE_ERROR';
    public const ERR_COMPILE_WARN   = 'E_COMPILE_WARNING';
    public const ERR_USER_ERROR     = 'E_USER_ERROR';
    public const ERR_USER_WARNING   = 'E_USER_WARNING';
    public const ERR_USER_NOTICE    = 'E_USER_NOTICE';
    public const ERR_STRICT         = 'E_STRICT';
    public const ERR_RECOVERABLE    = 'E_RECOVERABLE_ERROR';
    public const ERR_DEPRECATED     = 'E_DEPRECATED';
    public const ERR_USER_DEPRECATED= 'E_USER_DEPRECATED';

    /*=============================================================
        DIAGNOSTIC CATEGORIES
    ==============================================================*/
    public const DIAG_ENVIRONMENT   = 'DIAG_ENVIRONMENT';
    public const DIAG_RUNTIME       = 'DIAG_RUNTIME';
    public const DIAG_MEMORY        = 'DIAG_MEMORY';
    public const DIAG_TIMING        = 'DIAG_TIMING';
    public const DIAG_IO            = 'DIAG_IO';
    public const DIAG_SECURITY      = 'DIAG_SECURITY';
    public const DIAG_LLM           = 'DIAG_LLM';
}

/*=============================================================
    SELF-IDENTIFICATION
==============================================================*/
class CY_PHP_DEBUG_CONST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.CONST.CY_PHP_DEBUG_CONST';
    public const AVIS_TYPE = 'CONSTANT-REGISTRY';
    public const VERSION   = '1.0.0';
}

?>
