<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_CONST
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_CONST.php
    AVIS-TYPE: CONST
    AVIS-DESCRIPTION:
        Deterministic constant descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines canonical constants for publish statuses, channel types,
        operation codes, and structural identifiers. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Constant descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class PUBLISH_CONST
{
    /*=============================================================
        CONSTANT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'const_id'   => PUBLISH_CONST_ID::AVIS_ID,
            'const_type' => PUBLISH_CONST_ID::AVIS_TYPE,
            'const_ver'  => PUBLISH_CONST_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        PUBLISH STATUS CONSTANTS
    ==============================================================*/
    public static function status(): array
    {
        return [
            'PUBLISH_PENDING'    => 'pending',
            'PUBLISH_READY'      => 'ready',
            'PUBLISH_PROCESSING' => 'processing',
            'PUBLISH_COMPLETE'   => 'complete',
            'PUBLISH_FAILED'     => 'failed',
        ];
    }

    /*=============================================================
        CHANNEL TYPE CONSTANTS
    ==============================================================*/
    public static function channels(): array
    {
        return [
            'CHANNEL_WEB'    => 'web',
            'CHANNEL_API'    => 'api',
            'CHANNEL_FEED'   => 'feed',
            'CHANNEL_CUSTOM' => 'custom',
        ];
    }

    /*=============================================================
        OPERATION CONSTANTS
    ==============================================================*/
    public static function operations(): array
    {
        return [
            'OP_CREATE'  => 'publish.create',
            'OP_PREVIEW' => 'publish.preview',
            'OP_EXECUTE' => 'publish.execute',
            'OP_STATUS'  => 'publish.status',
            'OP_HISTORY' => 'publish.history',
        ];
    }

    /*=============================================================
        STRUCTURAL IDENTIFIER CONSTANTS
    ==============================================================*/
    public static function identifiers(): array
    {
        return [
            'ID_PAYLOAD' => 'publish_payload',
            'ID_RESULT'  => 'publish_result',
            'ID_STATE'   => 'publish_state',
            'ID_CHANNEL' => 'publish_channel',
        ];
    }

    /*=============================================================
        PROVIDE CONST SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'const_id'   => PUBLISH_CONST_ID::AVIS_ID,
            'const_type' => PUBLISH_CONST_ID::AVIS_TYPE,
            'const_ver'  => PUBLISH_CONST_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL CONST PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'status'      => self::status(),
            'channels'    => self::channels(),
            'operations'  => self::operations(),
            'identifiers' => self::identifiers(),
        ];
    }
}

class PUBLISH_CONST_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_CONST';
    public const AVIS_TYPE = 'CONST';
    public const VERSION   = '1.0.0';
}

?>
