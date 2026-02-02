<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_CHAIN
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_CHAIN
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_CHAIN.php
    AVIS-TYPE: CHAIN
    AVIS-DESCRIPTION:
        Canonical chain descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic chained operations, chain links,
        chain invariants, and subsystem-wide chaining rules.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Chain descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_CHAIN
{
    /*=============================================================
        CHAIN IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'chain_id'   => MEDIA_CHAIN_ID::AVIS_ID,
            'chain_type' => MEDIA_CHAIN_ID::AVIS_TYPE,
            'chain_ver'  => MEDIA_CHAIN_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        CHAIN LINKS
    ==============================================================*/
    public static function links(): array
    {
        return [
            'LINK_UPLOAD'     => 'upload_link',
            'LINK_VALIDATE'   => 'validate_link',
            'LINK_PROCESS'    => 'process_link',
            'LINK_METADATA'   => 'metadata_link',
            'LINK_OUTPUT'     => 'output_link',
            'LINK_FINAL'      => 'final_link',
        ];
    }

    /*=============================================================
        LINK DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            'upload_link' => [
                'input'       => 'raw_file',
                'output'      => 'uploaded_file',
                'description' => 'Initial chain link for file intake',
            ],
            'validate_link' => [
                'input'       => 'uploaded_file',
                'output'      => 'validated_file',
                'description' => 'Ensures file meets schema + limits',
            ],
            'process_link' => [
                'input'       => 'validated_file',
                'output'      => 'processed_file',
                'description' => 'Executes deterministic processing operations',
            ],
            'metadata_link' => [
                'input'       => 'processed_file',
                'output'      => 'metadata_package',
                'description' => 'Extracts and normalizes metadata',
            ],
            'output_link' => [
                'input'       => 'metadata_package',
                'output'      => 'output_blocks',
                'description' => 'Generates canonical output blocks',
            ],
            'final_link' => [
                'input'       => 'output_blocks',
                'output'      => 'finalized_media',
                'description' => 'Terminates chain and finalizes media object',
            ],
        ];
    }

    /*=============================================================
        CHAIN ORDER
    ==============================================================*/
    public static function order(): array
    {
        return [
            'upload_link'   => 'validate_link',
            'validate_link' => 'process_link',
            'process_link'  => 'metadata_link',
            'metadata_link' => 'output_link',
            'output_link'   => 'final_link',
        ];
    }

    /*=============================================================
        CHAIN INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_chain'    => true,
            'no_link_skipping'       => true,
            'immutable_descriptors'  => true,
            'law'                    => 'AVIS-LAW',
            'generation'             => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        CHAIN SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'chain_id'   => MEDIA_CHAIN_ID::AVIS_ID,
            'chain_type' => MEDIA_CHAIN_ID::AVIS_TYPE,
            'chain_ver'  => MEDIA_CHAIN_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL CHAIN PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'links'       => self::links(),
            'descriptors' => self::descriptors(),
            'order'       => self::order(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_CHAIN_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_CHAIN';
    public const AVIS_TYPE = 'CHAIN';
    public const VERSION   = '1.0.0';
}

?>
