<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_THREADLET
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_THREADLET
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_THREADLET.php
    AVIS-TYPE: THREADLET
    AVIS-DESCRIPTION:
        Canonical threadlet descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines sub-strand threadlet-level operations, threadlet descriptors,
        threadlet ordering, and subsystem-wide threadlet invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Threadlet descriptors ONLY
        - Deterministic, immutable, sub-strand operations
=====================================================================*/

class MEDIA_THREADLET
{
    /*=============================================================
        THREADLET IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'threadlet_id'   => MEDIA_THREADLET_ID::AVIS_ID,
            'threadlet_type' => MEDIA_THREADLET_ID::AVIS_TYPE,
            'threadlet_ver'  => MEDIA_THREADLET_ID::VERSION,
            'subsystem'      => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        THREADLET DEFINITIONS
    ==============================================================*/
    public static function threadlets(): array
    {
        return [
            'THREADLET_PULL'   => 'threadlet_pull',
            'THREADLET_TEST'   => 'threadlet_test',
            'THREADLET_SHIFT'  => 'threadlet_shift',
            'THREADLET_MASK'   => 'threadlet_mask',
            'THREADLET_PARSE'  => 'threadlet_parse',
            'THREADLET_FUSE'   => 'threadlet_fuse',
            'THREADLET_SEAL'   => 'threadlet_seal',
        ];
    }

    /*=============================================================
        THREADLET DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            'threadlet_pull' => [
                'description' => 'Pulls a sub-strand threadlet-segment',
                'input'       => 'strand_sealed',
                'output'      => 'threadlet_stream',
            ],
            'threadlet_test' => [
                'description' => 'Validates threadlet-level integrity',
                'input'       => 'threadlet_stream',
                'output'      => 'threadlet_validated',
            ],
            'threadlet_shift' => [
                'description' => 'Applies deterministic threadlet-shifts',
                'input'       => 'threadlet_validated',
                'output'      => 'threadlet_shifted',
            ],
            'threadlet_mask' => [
                'description' => 'Masks threadlet-regions for isolation',
                'input'       => 'threadlet_shifted',
                'output'      => 'threadlet_masked',
            ],
            'threadlet_parse' => [
                'description' => 'Parses masked threadlets for quecto‑metadata',
                'input'       => 'threadlet_masked',
                'output'      => 'threadlet_parsed',
            ],
            'threadlet_fuse' => [
                'description' => 'Fuses parsed threadlets into quecto‑structures',
                'input'       => 'threadlet_parsed',
                'output'      => 'threadlet_fused',
            ],
            'threadlet_seal' => [
                'description' => 'Seals fused threadlets into final threadlet-unit',
                'input'       => 'threadlet_fused',
                'output'      => 'threadlet_sealed',
            ],
        ];
    }

    /*=============================================================
        THREADLET ORDER
    ==============================================================*/
    public static function order(): array
    {
        return [
            'threadlet_pull'  => 'threadlet_test',
            'threadlet_test'  => 'threadlet_shift',
            'threadlet_shift' => 'threadlet_mask',
            'threadlet_mask'  => 'threadlet_parse',
            'threadlet_parse' => 'threadlet_fuse',
            'threadlet_fuse'  => 'threadlet_seal',
        ];
    }

    /*=============================================================
        THREADLET INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'substrand_operations'     => true,
