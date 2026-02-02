<?php
/*=====================================================================
    AIFVS-ARTIFACT: PUBLISH_API
    AVIS-ID: COPILOT_CMS.PUBLISH.PUBLISH_API
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/PUBLISH/PUBLISH_API.php
    AVIS-TYPE: API
    AVIS-DESCRIPTION:
        Deterministic API descriptor for the COPILOT_CMS PUBLISH subsystem.
        Defines structural API endpoints, payload schemas, and deterministic
        AVIS-law compliant publishing contracts. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - API descriptor ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/PUBLISH_BRIDGE.php';
require_once __DIR__ . '/PUBLISH_RUNTIME.php';

class PUBLISH_API
{
    /*=============================================================
        API IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'api_id'   => PUBLISH_API_ID::AVIS_ID,
            'api_type' => PUBLISH_API_ID::AVIS_TYPE,
            'api_ver'  => PUBLISH_API_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_PUBLISH',
        ];
    }

    /*=============================================================
        API ENDPOINTS (STRUCTURAL)
    ==============================================================*/
    public static function endpoints(): array
    {
        return [
            'publish.create' => [
                'description' => 'Creates a new publish operation.',
                'input'       => 'publish_payload + metadata',
                'output'      => 'publish_state descriptor',
            ],
            'publish.preview' => [
                'description' => 'Requests a preview of the publish payload.',
                'input'       => 'publish_payload',
                'output'      => 'preview_descriptor',
            ],
            'publish.execute' => [
                'description' => 'Executes a publish operation.',
                'input'       => 'publish_state + target_channels',
                'output'      => 'publish_result descriptor',
            ],
            'publish.status' => [
                'description' => 'Retrieves status of a publish operation.',
                'input'       => 'publish_id',
                'output'      => 'publish_state descriptor',
            ],
            'publish.history' => [
                'description' => 'Retrieves historical publish operations.',
                'input'       => 'filters',
                'output'      => 'publish_history descriptor',
            ],
        ];
    }

    /*=============================================================
        API PAYLOAD SCHEMAS
    ==============================================================*/
    public static function payloads(): array
    {
        return [
            'publish_payload' => [
                'content'  => 'structured content block',
                'metadata' => 'publish metadata block',
                'format'   => 'payload format descriptor',
            ],
            'publish_result' => [
                'status'    => 'success|failure|partial',
                'timestamp' => 'ISO-8601 timestamp placeholder',
                'details'   => 'result metadata',
            ],
        ];
    }

    /*=============================================================
        API CONSTRAINTS
    ==============================================================*/
    public static function constraints(): array
    {
        return [
            'immutable_api_identity',
            'deterministic_contracts',
            'no_side_effects',
        ];
    }

    /*=============================================================
        PROVIDE API SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'api_id'   => PUBLISH_API_ID::AVIS_ID,
            'api_type' => PUBLISH_API_ID::AVIS_TYPE,
            'api_ver'  => PUBLISH_API_ID::VERSION,
        ];
    }

    /*=============================================================
        PROVIDE FULL API PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'endpoints'  => self::endpoints(),
            'payloads'   => self::payloads(),
            'constraints'=> self::constraints(),
            'bridge'     => PUBLISH_BRIDGE::summary(),
            'runtime'    => PUBLISH_RUNTIME::summary(),
        ];
    }
}

class PUBLISH_API_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.PUBLISH.PUBLISH_API';
    public const AVIS_TYPE = 'API';
    public const VERSION   = '1.0.0';
}

?>
