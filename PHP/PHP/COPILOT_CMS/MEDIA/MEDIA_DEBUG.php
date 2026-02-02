<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_DEBUG
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_DEBUG
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_DEBUG.php
    AVIS-TYPE: DEBUG
    AVIS-DESCRIPTION:
        Canonical debug descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic debug channels, flags, categories,
        invariant checks, and debug mapping structures.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Debug descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_DEBUG
{
    /*=============================================================
        DEBUG IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'debug_id'   => MEDIA_DEBUG_ID::AVIS_ID,
            'debug_type' => MEDIA_DEBUG_ID::AVIS_TYPE,
            'debug_ver'  => MEDIA_DEBUG_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        DEBUG CHANNELS
    ==============================================================*/
    public static function channels(): array
    {
        return [
            'UPLOAD'     => 'debug_upload',
            'PROCESS'    => 'debug_process',
            'METADATA'   => 'debug_metadata',
            'OUTPUT'     => 'debug_output',
            'SCHEMA'     => 'debug_schema',
            'RUNTIME'    => 'debug_runtime',
            'ENGINE'     => 'debug_engine',
            'MAP'        => 'debug_map',
            'UI'         => 'debug_ui',
            'API'        => 'debug_api',
        ];
    }

    /*=============================================================
        DEBUG FLAGS
    ==============================================================*/
    public static function flags(): array
    {
        return [
            'ENABLE_UPLOAD_TRACE'     => false,
            'ENABLE_PROCESS_TRACE'    => false,
            'ENABLE_METADATA_TRACE'   => false,
            'ENABLE_OUTPUT_TRACE'     => false,
            'ENABLE_SCHEMA_TRACE'     => false,
            'ENABLE_RUNTIME_TRACE'    => false,
            'ENABLE_ENGINE_TRACE'     => false,
            'ENABLE_MAP_TRACE'        => false,
            'ENABLE_UI_TRACE'         => false,
            'ENABLE_API_TRACE'        => false,
        ];
    }

    /*=============================================================
        DEBUG CATEGORIES
    ==============================================================*/
    public static function categories(): array
    {
        return [
            'STATE'      => 'debug_state_changes',
            'INVARIANT'  => 'debug_invariant_checks',
            'MAPPING'    => 'debug_mapping_resolution',
            'SCHEMA'     => 'debug_schema_alignment',
            'OUTPUT'     => 'debug_output_blocks',
            'ENGINE'     => 'debug_engine_descriptors',
        ];
    }

    /*=============================================================
        DEBUG INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_debug' => true,
            'immutable_descriptors' => true,
            'law' => 'AVIS-LAW',
            'generation' => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        DEBUG SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'debug_id'   => MEDIA_DEBUG_ID::AVIS_ID,
            'debug_type' => MEDIA_DEBUG_ID::AVIS_TYPE,
            'debug_ver'  => MEDIA_DEBUG_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL DEBUG PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'channels'    => self::channels(),
            'flags'       => self::flags(),
            'categories'  => self::categories(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_DEBUG_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_DEBUG';
    public const AVIS_TYPE = 'DEBUG';
    public const VERSION   = '1.0.0';
}

?>
