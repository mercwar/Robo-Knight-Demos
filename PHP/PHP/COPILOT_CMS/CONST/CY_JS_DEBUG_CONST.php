<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_JS_DEBUG_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_JS_DEBUG_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_JS_DEBUG_CONST.php
    AVIS-TYPE: CONSTANT-REGISTRY
    AVIS-DESCRIPTION:
        Canonical JavaScript debug identifier registry for COPILOT_CMS.
        Provides deterministic identifiers for JS debug channels,
        flags, event categories, and console-level mappings.
        Contains NO runtime JavaScript, NO browser calls, NO mutation.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No dynamic JS execution
        - No console access
        - Identifiers ONLY
        - Immutable, deterministic, self-identifying artifact
=====================================================================*/

class CY_JS_DEBUG_CONST
{
    /*=============================================================
        JAVASCRIPT DEBUG CHANNELS
    ==============================================================*/
    public const CHANNEL_CORE        = 'JS_DEBUG_CORE';
    public const CHANNEL_UI          = 'JS_DEBUG_UI';
    public const CHANNEL_EVENTS      = 'JS_DEBUG_EVENTS';
    public const CHANNEL_NETWORK     = 'JS_DEBUG_NETWORK';
    public const CHANNEL_STORAGE     = 'JS_DEBUG_STORAGE';
    public const CHANNEL_RENDER      = 'JS_DEBUG_RENDER';
    public const CHANNEL_TIMING      = 'JS_DEBUG_TIMING';
    public const CHANNEL_LLM         = 'JS_DEBUG_LLM';
    public const CHANNEL_ENGINE      = 'JS_DEBUG_ENGINE';

    /*=============================================================
        JAVASCRIPT DEBUG FLAGS
    ==============================================================*/
    public const FLAG_ENABLED        = 'JS_DEBUG_ENABLED';
    public const FLAG_VERBOSE        = 'JS_DEBUG_VERBOSE';
    public const FLAG_TRACE          = 'JS_DEBUG_TRACE';
    public const FLAG_TIMERS         = 'JS_DEBUG_TIMERS';
    public const FLAG_MEMORY         = 'JS_DEBUG_MEMORY';
    public const FLAG_EVENTS         = 'JS_DEBUG_EVENTS';
    public const FLAG_SANDBOX        = 'JS_DEBUG_SANDBOX';

    /*=============================================================
        JAVASCRIPT CONSOLE LEVEL IDENTIFIERS
    ==============================================================*/
    public const CONSOLE_LOG         = 'JS_CONSOLE_LOG';
    public const CONSOLE_WARN        = 'JS_CONSOLE_WARN';
    public const CONSOLE_ERROR       = 'JS_CONSOLE_ERROR';
    public const CONSOLE_INFO        = 'JS_CONSOLE_INFO';
    public const CONSOLE_DEBUG       = 'JS_CONSOLE_DEBUG';
    public const CONSOLE_TRACE       = 'JS_CONSOLE_TRACE';
    public const CONSOLE_GROUP       = 'JS_CONSOLE_GROUP';
    public const CONSOLE_GROUP_END   = 'JS_CONSOLE_GROUP_END';

    /*=============================================================
        JAVASCRIPT EVENT DEBUG CATEGORIES
    ==============================================================*/
    public const EVT_CLICK           = 'JS_EVT_CLICK';
    public const EVT_INPUT           = 'JS_EVT_INPUT';
    public const EVT_KEY             = 'JS_EVT_KEY';
    public const EVT_MOUSE           = 'JS_EVT_MOUSE';
    public const EVT_TOUCH           = 'JS_EVT_TOUCH';
    public const EVT_SCROLL          = 'JS_EVT_SCROLL';
    public const EVT_RESIZE          = 'JS_EVT_RESIZE';
    public const EVT_LOAD            = 'JS_EVT_LOAD';
    public const EVT_ERROR           = 'JS_EVT_ERROR';
    public const EVT_PROMISE         = 'JS_EVT_PROMISE';
    public const EVT_NETWORK         = 'JS_EVT_NETWORK';
}

/*=============================================================
    SELF-IDENTIFICATION
==============================================================*/
class CY_JS_DEBUG_CONST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.CONST.CY_JS_DEBUG_CONST';
    public const AVIS_TYPE = 'CONSTANT-REGISTRY';
    public const VERSION   = '1.0.0';
}

?>
