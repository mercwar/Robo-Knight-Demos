<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_STEP
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_STEP
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_STEP.php
    AVIS-TYPE: STEP
    AVIS-DESCRIPTION:
        Canonical step descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic atomic steps, step descriptors,
        step ordering, and subsystem-wide step invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Step descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_STEP
{
    /*=============================================================
        STEP IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'step_id'   => MEDIA_STEP_ID::AVIS_ID,
            'step_type' => MEDIA_STEP_ID::AVIS_TYPE,
            'step_ver'  => MEDIA_STEP_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        STEP DEFINITIONS
    ==============================================================*/
    public static function steps(): array
    {
        return [
            'STEP_UPLOAD_INIT'     => 'step_upload_init',
            'STEP_UPLOAD_WRITE'    => 'step_upload_write',
            'STEP_VALIDATE_SCHEMA' => 'step_validate_schema',
            'STEP_VALIDATE_LIMITS' => 'step_validate_limits',
            'STEP_PROCESS_EXEC'    => 'step_process_exec',
            'STEP_METADATA_EXTRACT'=> 'step_metadata_extract',
            'STEP_OUTPUT_BUILD'    => 'step_output_build',
            'STEP_FINALIZE'        => 'step_finalize',
        ];
    }

    /*=============================================================
        STEP DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            'step_upload_init' => [
                'description' => 'Initializes upload session and prepares file intake',
                'input'       => 'raw_file',
                'output'      => 'upload_session',
            ],
            'step_upload_write' => [
                'description' => 'Writes file to storage and completes upload',
                'input'       => 'upload_session',
                'output'      => 'uploaded_file',
            ],
            'step_validate_schema' => [
                'description' => 'Validates file structure and schema alignment',
                'input'       => 'uploaded_file',
                'output'      => 'schema_validated_file',
            ],
            'step_validate_limits' => [
                'description' => 'Validates file size, type, and system limits',
                'input'       => 'schema_validated_file',
                'output'      => 'validated_file',
            ],
            'step_process_exec' => [
                'description' => 'Executes deterministic processing operations',
                'input'       => 'validated_file',
                'output'      => 'processed_file',
            ],
            'step_metadata_extract' => [
                'description' => 'Extracts and normalizes metadata',
                'input'       => 'processed_file',
                'output'      => 'metadata_package',
            ],
            'step_output_build' => [
                'description' => 'Builds canonical output blocks',
                'input'       => 'metadata_package',
                'output'      => 'output_blocks',
            ],
            'step_finalize' => [
                'description' => 'Finalizes media object and terminates pipeline',
                'input'       => 'output_blocks',
                'output'      => 'finalized_media',
            ],
        ];
    }

    /*=============================================================
        STEP ORDER
    ==============================================================*/
    public static function order(): array
    {
        return [
            'step_upload_init'     => 'step_upload_write',
            'step_upload_write'    => 'step_validate_schema',
            'step_validate_schema' => 'step_validate_limits',
            'step_validate_limits' => 'step_process_exec',
            'step_process_exec'    => 'step_metadata_extract',
            'step_metadata_extract'=> 'step_output_build',
            'step_output_build'    => 'step_finalize',
        ];
    }

    /*=============================================================
        STEP INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_steps'   => true,
            'atomic_operations'     => true,
            'no_step_skipping'      => true,
            'immutable_descriptors' => true,
            'law'                   => 'AVIS-LAW',
            'generation'            => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        STEP SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'step_id'   => MEDIA_STEP_ID::AVIS_ID,
            'step_type' => MEDIA_STEP_ID::AVIS_TYPE,
            'step_ver'  => MEDIA_STEP_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL STEP PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'steps'       => self::steps(),
            'descriptors' => self::descriptors(),
            'order'       => self::order(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_STEP_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_STEP';
    public const AVIS_TYPE = 'STEP';
    public const VERSION   = '1.0.0';
}

?>
