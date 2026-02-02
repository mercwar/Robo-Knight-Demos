<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_UNIT
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_UNIT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_UNIT.php
    AVIS-TYPE: UNIT
    AVIS-DESCRIPTION:
        Canonical unit descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines sub-fraction unit-level operations, unit descriptors,
        unit ordering, and subsystem-wide unit invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Unit descriptors ONLY
        - Deterministic, immutable, sub-fraction operations
=====================================================================*/

class MEDIA_UNIT
{
    /*=============================================================
        UNIT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'unit_id'   => MEDIA_UNIT_ID::AVIS_ID,
            'unit_type' => MEDIA_UNIT_ID::AVIS_TYPE,
            'unit_ver'  => MEDIA_UNIT_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        UNIT DEFINITIONS
    ==============================================================*/
    public static function units(): array
    {
        return [
            'UNIT_PULL'   => 'unit_pull',
            'UNIT_TEST'   => 'unit_test',
            'UNIT_SHIFT'  => 'unit_shift',
            'UNIT_MASK'   => 'unit_mask',
            'UNIT_PARSE'  => 'unit_parse',
            'UNIT_FUSE'   => 'unit_fuse',
            'UNIT_SEAL'   => 'unit_seal',
        ];
    }

    /*=============================================================
        UNIT DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            'unit_pull' => [
                'description' => 'Pulls a sub-fraction unit-segment',
                'input'       => 'fraction_sealed',
                'output'      => 'unit_stream',
            ],
            'unit_test' => [
                'description' => 'Validates unit-level integrity',
                'input'       => 'unit_stream',
                'output'      => 'unit_validated',
            ],
            'unit_shift' => [
                'description' => 'Applies deterministic unit-shifts',
                'input'       => 'unit_validated',
                'output'      => 'unit_shifted',
            ],
            'unit_mask' => [
                'description' => 'Masks unit-regions for isolation',
                'input'       => 'unit_shifted',
                'output'      => 'unit_masked',
            ],
            'unit_parse' => [
                'description' => 'Parses masked units for quecto‑metadata',
                'input'       => 'unit_masked',
                'output'      => 'unit_parsed',
            ],
            'unit_fuse' => [
                'description' => 'Fuses parsed units into quecto‑structures',
                'input'       => 'unit_parsed',
                'output'      => 'unit_fused',
            ],
            'unit_seal' => [
                'description' => 'Seals fused units into final unit‑unit',
                'input'       => 'unit_fused',
                'output'      => 'unit_sealed',
            ],
        ];
    }

    /*=============================================================
        UNIT ORDER
    ==============================================================*/
    public static function order(): array
    {
        return [
            'unit_pull'  => 'unit_test',
            'unit_test'  => 'unit_shift',
            'unit_shift' => 'unit_mask',
            'unit_mask'  => 'unit_parse',
            'unit_parse' => 'unit_fuse',
            'unit_fuse'  => 'unit_seal',
        ];
    }

    /*=============================================================
        UNIT INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'subfraction_operations' => true,
            'deterministic_units'    => true,
            'no_unit_skipping'       => true,
            'immutable_descriptors'  => true,
            'law'                    => 'AVIS-LAW',
            'generation'             => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        UNIT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'unit_id'   => MEDIA_UNIT_ID::AVIS_ID,
            'unit_type' => MEDIA_UNIT_ID::AVIS_TYPE,
            'unit_ver'  => MEDIA_UNIT_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL UNIT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'units'       => self::units(),
            'descriptors' => self::descriptors(),
            'order'       => self::order(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_UNIT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_UNIT';
    public const AVIS_TYPE = 'UNIT';
    public const VERSION   = '1.0.0';
}

?>
