<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_ATOM
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_ATOM
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_ATOM.php
    AVIS-TYPE: ATOM
    AVIS-DESCRIPTION:
        Canonical atom descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines sub-element atom-level operations, atom descriptors,
        atom ordering, and subsystem-wide atom invariants.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Atom descriptors ONLY
        - Deterministic, immutable, sub-element operations
=====================================================================*/

class MEDIA_ATOM
{
    /*=============================================================
        ATOM IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'atom_id'   => MEDIA_ATOM_ID::AVIS_ID,
            'atom_type' => MEDIA_ATOM_ID::AVIS_TYPE,
            'atom_ver'  => MEDIA_ATOM_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        ATOM DEFINITIONS
    ==============================================================*/
    public static function atoms(): array
    {
        return [
            'ATOM_PULL'   => 'atom_pull',
            'ATOM_TEST'   => 'atom_test',
            'ATOM_SHIFT'  => 'atom_shift',
            'ATOM_MASK'   => 'atom_mask',
            'ATOM_PARSE'  => 'atom_parse',
            'ATOM_FUSE'   => 'atom_fuse',
            'ATOM_SEAL'   => 'atom_seal',
        ];
    }

    /*=============================================================
        ATOM DESCRIPTORS
    ==============================================================*/
    public static function descriptors(): array
    {
        return [
            'atom_pull' => [
                'description' => 'Pulls a sub-element atom-segment',
                'input'       => 'element_sealed',
                'output'      => 'atom_stream',
            ],
            'atom_test' => [
                'description' => 'Validates atom-level integrity',
                'input'       => 'atom_stream',
                'output'      => 'atom_validated',
            ],
            'atom_shift' => [
                'description' => 'Applies deterministic atom-shifts',
                'input'       => 'atom_validated',
                'output'      => 'atom_shifted',
            ],
            'atom_mask' => [
                'description' => 'Masks atom-regions for isolation',
                'input'       => 'atom_shifted',
                'output'      => 'atom_masked',
            ],
            'atom_parse' => [
                'description' => 'Parses masked atoms for quecto‑metadata',
                'input'       => 'atom_masked',
                'output'      => 'atom_parsed',
            ],
            'atom_fuse' => [
                'description' => 'Fuses parsed atoms into quecto‑structures',
                'input'       => 'atom_parsed',
                'output'      => 'atom_fused',
            ],
            'atom_seal' => [
                'description' => 'Seals fused atoms into final atom-unit',
                'input'       => 'atom_fused',
                'output'      => 'atom_sealed',
            ],
        ];
    }

    /*=============================================================
        ATOM ORDER
    ==============================================================*/
    public static function order(): array
    {
        return [
            'atom_pull'  => 'atom_test',
            'atom_test'  => 'atom_shift',
            'atom_shift' => 'atom_mask',
            'atom_mask'  => 'atom_parse',
            'atom_parse' => 'atom_fuse',
            'atom_fuse'  => 'atom_seal',
        ];
    }

    /*=============================================================
        ATOM INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'subelement_operations'  => true,
            'deterministic_atoms'    => true,
            'no_atom_skipping'       => true,
            'immutable_descriptors'  => true,
            'law'                    => 'AVIS-LAW',
            'generation'             => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        ATOM SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'atom_id'   => MEDIA_ATOM_ID::AVIS_ID,
            'atom_type' => MEDIA_ATOM_ID::AVIS_TYPE,
            'atom_ver'  => MEDIA_ATOM_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL ATOM PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'    => self::identity(),
            'atoms'       => self::atoms(),
            'descriptors' => self::descriptors(),
            'order'       => self::order(),
            'invariants'  => self::invariants(),
        ];
    }
}

class MEDIA_ATOM_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_ATOM';
    public const AVIS_TYPE = 'ATOM';
    public const VERSION   = '1.0.0';
}

?>
