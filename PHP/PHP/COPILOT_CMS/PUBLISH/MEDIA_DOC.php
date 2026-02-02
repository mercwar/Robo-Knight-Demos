<?php
/*=====================================================================
    AIFVS-ARTIFACT: MEDIA_DOC
    AVIS-ID: COPILOT_CMS.MEDIA.MEDIA_DOC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MEDIA/MEDIA_DOC.php
    AVIS-TYPE: DOC
    AVIS-DESCRIPTION:
        Canonical documentation descriptor for the COPILOT_CMS MEDIA subsystem.
        Defines deterministic documentation blocks, subsystem summaries,
        invariant descriptions, and structural explanations.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Documentation descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class MEDIA_DOC
{
    /*=============================================================
        DOC IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'doc_id'     => MEDIA_DOC_ID::AVIS_ID,
            'doc_type'   => MEDIA_DOC_ID::AVIS_TYPE,
            'doc_ver'    => MEDIA_DOC_ID::VERSION,
            'subsystem'  => 'COPILOT_CMS_MEDIA',
        ];
    }

    /*=============================================================
        SUBSYSTEM SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'purpose' => 'Defines all canonical structures for media handling in COPILOT_CMS.',
            'scope'   => [
                'upload',
                'processing',
                'metadata',
                'output',
                'schema',
                'runtime',
                'engine',
                'ui',
                'api',
                'mapping',
            ],
            'generation' => 'AVIS-CMS-GEN-1',
            'law'        => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        INVARIANT DESCRIPTIONS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'deterministic_processing' => 'All media operations follow deterministic, AVIS-law compliant rules.',
            'immutable_descriptors'    => 'All subsystem descriptors are immutable and self-identifying.',
            'strict_schema_alignment'  => 'All media structures must align with MEDIA_SCHEMA definitions.',
            'canonical_output_format'  => 'All output must follow MEDIA_FORMAT canonical structures.',
        ];
    }

    /*=============================================================
        STRUCTURAL EXPLANATION
    ==============================================================*/
    public static function structure(): array
    {
        return [
            'loader'   => 'Defines subsystem load order and identity.',
            'engine'   => 'Defines processing invariants and descriptors.',
            'runtime'  => 'Defines session, upload, and processing state.',
            'bridge'   => 'Maps UI → runtime → engine → output.',
            'ui'       => 'Defines UI surfaces, interactions, and states.',
            'api'      => 'Defines API contracts for all media operations.',
            'schema'   => 'Defines canonical media + metadata schemas.',
            'map'      => 'Defines structural mapping between subsystem layers.',
            'index'    => 'Defines catalog + lookup structures.',
            'const'    => 'Defines subsystem constants + limits.',
            'helper'   => 'Defines helper descriptors for normalization + metadata.',
            'format'   => 'Defines canonical media representation + serialization.',
            'output'   => 'Defines output blocks + result descriptors.',
            'doc'      => 'Defines subsystem documentation.',
        ];
    }

    /*=============================================================
        DOC SUMMARY
    ==============================================================*/
    public static function docSummary(): array
    {
        return [
            'doc_id'   => MEDIA_DOC_ID::AVIS_ID,
            'doc_type' => MEDIA_DOC_ID::AVIS_TYPE,
            'doc_ver'  => MEDIA_DOC_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL DOC PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'summary'    => self::summary(),
            'invariants' => self::invariants(),
            'structure'  => self::structure(),
        ];
    }
}

class MEDIA_DOC_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.MEDIA.MEDIA_DOC';
    public const AVIS_TYPE = 'DOC';
    public const VERSION   = '1.0.0';
}

?>
