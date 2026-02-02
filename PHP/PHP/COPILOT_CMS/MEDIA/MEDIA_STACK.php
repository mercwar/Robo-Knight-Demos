<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_STACK
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_STACK
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_STACK.php
    AVIS-TYPE: STACK
    AVIS-DESCRIPTION:
        Canonical stack descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic LIFO stack layers, push/pop descriptors,
        stack invariants, and subsystem-wide stack behavior.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Stack descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_STACK
{
    /*=============================================================
        STACK IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'stack_id'   => MEDIA_STACK_ID::AVIS_ID,
            'stack_type' => MEDIA_STACK_ID::AVIS_TYPE,
            'stack_ver'  => MEDIA_STACK_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        STACK LAYERS
    ==============================================================*/
    public static function layers(): array
    {
        return [
            'LAYER_UPLOAD'     => 'upload_layer',
            'LAYER_VALIDATE'   => 'validate_layer',
            'LAYER_PROCESS'    => 'process_layer',
            'LAYER_METADATA'   => 'metadata_layer',
            'LAYER_OUTPUT'     => 'output_layer',
            'LAYER_FINAL'      => 'final_layer',
        ];
    }

    /*=============================================================
        LAYER DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            'upload_layer' => [
                'description' => 'Initial layer for file intake',
                'accepts'     => 'raw_file',
                'produces'    => 'uploaded_file',
            ],
            'validate_layer' => [
                'description' => 'Validation layer for schema + limits',
                'accepts'     => 'uploaded_file',
                'produces'    => 'validated_file',
            ],
            'process_layer' => [
                'description' => 'Processing layer for deterministic operations',
                'accepts'     => 'validated_file',
                'produces'    => 'processed_file',
            ],
            'metadata_layer' => [
                'description' => 'Metadata extraction + normalization layer',
                'accepts'     => 'processed_file',
                'produces'    => 'metadata_package',
            ],
            'output_layer' => [
                'description' => 'Output block generation layer',
                'accepts'     => 'metadata_package',
                'produces'    => 'output_blocks',
            ],
            'final_layer' => [
                'description' => 'Terminal layer for finalized media',
                'accepts'     => 'output_blocks',
                'produces'    => 'finalized_media',
            ],
        ];
    }

    /*=============================================================
        STACK OPERATIONS (DESCRIPTORS ONLY)
    ==============================================================*/
    public static function operations(): array
    {
        return [
            'push' => 'describes pushing a layer onto the stack',
            'pop'  => 'describes popping a layer from the stack',
            'peek' => 'describes inspecting the top layer',
        ];
    }

    /*=============================================================
        STACK INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_stack'    => true,
            'lifo_behavior'          => true,
            'immutable_descriptors'  => true,
            'law'                    => 'AVIS-LAW',
            'generation'             => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        STACK SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'stack_id'   => MEDIA_STACK_ID::AVIS_ID,
            'stack_type' => MEDIA_STACK_ID::AVIS_TYPE,
            'stack_ver'  => MEDIA_STACK_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL STACK PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'layers'      => self::layers(),
            'descriptors' => self::descriptors(),
            'operations'  => self::operations(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_STACK_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_STACK';
    public const AVIS_TYPE = 'STACK';
    public const VERSION   = '1.0.0';
}

?>
