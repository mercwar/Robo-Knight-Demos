<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_DOC
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_DOC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_DOC.php
    AVIS-TYPE: DOC
    AVIS-DESCRIPTION:
        Deterministic documentation descriptor for the COPILOT_CMS PUBLISH
        subsystem. Defines structural documentation for subsystem purpose,
        layers, flows, schemas, maps, and relationships. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Documentation descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_INDEX.php';
require_once __DIR__ . '/PUBLISH_SCHEMA.php';
require_once __DIR__ . '/PUBLISH_MAP.php';
require_once __DIR__ . '/PUBLISH_OUTPUT.php';

class PUBLISH_DOC
{
    /*=============================================================
        DOC IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'doc_id'   => PUBLISH_DOC_ID::AVIS_ID,
            'doc_type' => PUBLISH_DOC_ID::AVIS_TYPE,
            'doc_ver'  => PUBLISH_DOC_ID::VERSION,
            'subsystem'=> 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        SUBSYSTEM PURPOSE
    ==============================================================*/
    public static function purpose(): array
    {
        return [
            'description' => 'The PUBLISH subsystem governs deterministic, structured distribution of content.',
            'objectives' => [
                'Define publish payload structures',
                'Normalize metadata and channels',
                'Provide deterministic publish flows',
                'Ensure AVIS-law compliant output',
            ],
        ];
    }

    /*=============================================================
        LAYER OVERVIEW
    ==============================================================*/
    public static function layers(): array
    {
        return [
            'primary' => [
                'ENGINE'  => 'Defines subsystem engine identity',
                'RUNTIME' => 'Defines runtime state containers',
                'BRIDGE'  => 'Adapts runtime to UI/API',
                'UI'      => 'Defines structural UI surfaces',
                'API'     => 'Defines structural API contracts',
            ],
            'structural' => [
                'SCHEMA' => 'Defines canonical publish schemas',
                'MAP'    => 'Defines deterministic mapping structures',
                'INDEX'  => 'Defines subsystem registry',
                'CONST'  => 'Defines canonical constants',
            ],
            'support' => [
                'HELPER' => 'Defines helper structures',
                'FORMAT' => 'Defines formatting rules',
                'OUTPUT' => 'Defines output envelopes and serialization',
            ],
            'meta' => [
                'DOC'      => 'Subsystem documentation',
                'TEST'     => 'Subsystem test descriptors',
                'DEBUG'    => 'Subsystem debug descriptors',
                'INFO'     => 'Subsystem info descriptors',
                'META'     => 'Subsystem metadata',
                'MANIFEST' => 'Subsystem manifest',
                'REGISTER' => 'Subsystem registration',
                'SYSTEM'   => 'Subsystem system descriptor',
                'CORE'     => 'Subsystem core descriptor',
                'ROOT'     => 'Subsystem root descriptor',
            ],
        ];
    }

    /*=============================================================
        FLOW DOCUMENTATION
    ==============================================================*/
    public static function flows(): array
    {
        return [
            'CREATE_FLOW' => [
                'steps' => [
                    'Receive payload',
                    'Validate payload',
                    'Normalize metadata',
                    'Prepare channels',
                    'Construct publish_state',
                ],
            ],
            'EXECUTE_FLOW' => [
                'steps' => [
                    'Load publish_state',
                    'Apply channel transforms',
                    'Generate publish_result',
                    'Normalize output',
                ],
            ],
        ];
    }

    /*=============================================================
        RELATIONSHIP DOCUMENTATION
    ==============================================================*/
    public static function relationships(): array
    {
        return [
            'ENGINE → RUNTIME' => 'Runtime depends on engine identity',
            'RUNTIME → BRIDGE' => 'Bridge adapts runtime structures',
            'BRIDGE → UI'      => 'UI depends on bridge descriptors',
            'UI → API'         => 'API contracts map from UI events',
            'API → SCHEMA'     => 'Schemas define API payload structures',
            'SCHEMA → MAP'     => 'Maps define schema usage patterns',
            'MAP → INDEX'      => 'Index aggregates maps and schemas',
        ];
    }

    /*=============================================================
        PROVIDE DOC SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'doc_id'   => PUBLISH_DOC_ID::AVIS_ID,
            'doc_type' => PUBLISH_DOC_ID::AVIS_TYPE,
            'doc_ver'  => PUBLISH_DOC_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL DOC PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'      => self::identity(),
            'purpose'       => self::purpose(),
            'layers'        => self::layers(),
            'flows'         => self::flows(),
            'relationships' => self::relationships(),
            'index'         => PUBLISH_INDEX::summary(),
            'schema'        => PUBLISH_SCHEMA::summary(),
            'map'           => PUBLISH_MAP::summary(),
            'output'        => PUBLISH_OUTPUT::summary(),
        ];
    }
}

class PUBLISH_DOC_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_DOC';
    public const AVIS_TYPE = 'DOC';
    public const VERSION   = '1.0.0';
}

?>
