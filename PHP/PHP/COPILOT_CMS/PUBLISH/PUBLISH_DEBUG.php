<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_DEBUG
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_DEBUG
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_DEBUG.php
    AVIS-TYPE: DEBUG
    AVIS-DESCRIPTION:
        Deterministic debug descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural debug views for schemas, maps, constants, helpers,
        formatting rules, and output structures. Contains NO execution,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Debug descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_SCHEMA.php';
require_once __DIR__ . '/PUBLISH_MAP.php';
require_once __DIR__ . '/PUBLISH_CONST.php';
require_once __DIR__ . '/PUBLISH_HELPER.php';
require_once __DIR__ . '/PUBLISH_FORMAT.php';
require_once __DIR__ . '/PUBLISH_OUTPUT.php';

class PUBLISH_DEBUG
{
    /*=============================================================
        DEBUG IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'debug_id'   => PUBLISH_DEBUG_ID::AVIS_ID,
            'debug_type' => PUBLISH_DEBUG_ID::AVIS_TYPE,
            'debug_ver'  => PUBLISH_DEBUG_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        DEBUG VIEW: SCHEMA
    ==============================================================*/
    public static function schemaView(): array
    {
        return [
            'state_schema'   => PUBLISH_SCHEMA::state(),
            'payload_schema' => PUBLISH_SCHEMA::payload(),
            'channel_schema' => PUBLISH_SCHEMA::channels(),
            'result_schema'  => PUBLISH_SCHEMA::result(),
        ];
    }

    /*=============================================================
        DEBUG VIEW: MAPS
    ==============================================================*/
    public static function mapView(): array
    {
        return [
            'operations' => PUBLISH_MAP::operations(),
            'channels'   => PUBLISH_MAP::channels(),
            'transforms' => PUBLISH_MAP::transforms(),
            'results'    => PUBLISH_MAP::results(),
        ];
    }

    /*=============================================================
        DEBUG VIEW: CONSTANTS
    ==============================================================*/
    public static function constView(): array
    {
        return [
            'status'      => PUBLISH_CONST::status(),
            'channels'    => PUBLISH_CONST::channels(),
            'operations'  => PUBLISH_CONST::operations(),
            'identifiers' => PUBLISH_CONST::identifiers(),
        ];
    }

    /*=============================================================
        DEBUG VIEW: HELPERS
    ==============================================================*/
    public static function helperView(): array
    {
        return [
            'validatePayload'  => PUBLISH_HELPER::validatePayload(),
            'normalizeChannel' => PUBLISH_HELPER::normalizeChannel(),
            'prepareMetadata'  => PUBLISH_HELPER::prepareMetadata(),
            'buildResult'      => PUBLISH_HELPER::buildResult(),
        ];
    }

    /*=============================================================
        DEBUG VIEW: FORMATTING RULES
    ==============================================================*/
    public static function formatView(): array
    {
        return [
            'payload'  => PUBLISH_FORMAT::payload(),
            'channel'  => PUBLISH_FORMAT::channel(),
            'result'   => PUBLISH_FORMAT::result(),
            'metadata' => PUBLISH_FORMAT::metadata(),
        ];
    }

    /*=============================================================
        DEBUG VIEW: OUTPUT
    ==============================================================*/
    public static function outputView(): array
    {
        return [
            'envelope'      => PUBLISH_OUTPUT::envelope(),
            'serialization' => PUBLISH_OUTPUT::serialization(),
            'metadata'      => PUBLISH_OUTPUT::metadata(),
            'normalize'     => PUBLISH_OUTPUT::normalize(),
        ];
    }

    /*=============================================================
        PROVIDE DEBUG SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'debug_id'   => PUBLISH_DEBUG_ID::AVIS_ID,
            'debug_type' => PUBLISH_DEBUG_ID::AVIS_TYPE,
            'debug_ver'  => PUBLISH_DEBUG_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL DEBUG PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'schema'     => self::schemaView(),
            'maps'       => self::mapView(),
            'constants'  => self::constView(),
            'helpers'    => self::helperView(),
            'format'     => self::formatView(),
            'output'     => self::outputView(),
        ];
    }
}

class PUBLISH_DEBUG_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_DEBUG';
    public const AVIS_TYPE = 'DEBUG';
    public const VERSION   = '1.0.0';
}

?>
