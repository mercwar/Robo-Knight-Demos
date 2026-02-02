<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_DOC
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_DOC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_DOC.php
    AVIS-TYPE: DOC
    AVIS-DESCRIPTION:
        Deterministic documentation descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines canonical documentation blocks, subsystem descriptions,
        artifact summaries, and structural documentation mappings.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Documentation descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_DOC
{
    /*=============================================================
        DOC IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'doc_id'   => EDITOR_DOC_ID::AVIS_ID,
            'doc_type' => EDITOR_DOC_ID::AVIS_TYPE,
            'doc_ver'  => EDITOR_DOC_ID::VERSION,
            'subsystem'=> 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        SUBSYSTEM OVERVIEW
    ==============================================================*/
    public static function overview(): array
    {
        return [
            'name'        => 'COPILOT_CMS_EDITOR',
            'description' => 'Provides deterministic editing capabilities, schema-enforced content structures, and canonical editing workflows.',
            'generation'  => 'AVIS-CMS-GEN-1',
            'law'         => 'AVIS-LAW',
        ];
    }

    /*=============================================================
        ARTIFACT DESCRIPTIONS
    ==============================================================*/
    public static function artifacts(): array
    {
        return [
            'LOADER'   => 'Defines subsystem identity and canonical load order.',
            'ENGINE'   => 'Defines subsystem engine invariants and core logic descriptors.',
            'RUNTIME'  => 'Defines editing session state, document state, and runtime invariants.',
            'BRIDGE'   => 'Maps UI, runtime, and API structures deterministically.',
            'UI'       => 'Defines UI surfaces, interactions, and editing states.',
            'API'      => 'Defines editing, metadata, structure, and history API contracts.',
            'SCHEMA'   => 'Defines canonical schemas for documents, blocks, metadata, and history.',
            'MAP'      => 'Defines operation maps, event maps, and transform maps.',
            'INDEX'    => 'Defines subsystem artifact inventory and canonical ordering.',
            'CONST'    => 'Defines subsystem constants and invariant values.',
            'HELPER'   => 'Defines deterministic helper routines for content, structure, metadata, and history.',
            'FORMAT'   => 'Defines formatting rules for text, blocks, and structure.',
            'OUTPUT'   => 'Defines output structures, export formats, and transform rules.',
            'DOC'      => 'Defines subsystem documentation descriptors.',
            'TEST'     => 'Defines canonical test descriptors and test case structures.',
            'DEBUG'    => 'Defines debug descriptors and diagnostic structures.',
            'INFO'     => 'Defines informational descriptors and subsystem metadata.',
            'META'     => 'Defines meta-descriptors for subsystem identity and relationships.',
            'MANIFEST' => 'Defines subsystem manifest and artifact declarations.',
            'REGISTER' => 'Defines subsystem registration descriptors.',
            'SYSTEM'   => 'Defines system-level bindings for the EDITOR subsystem.',
            'CORE'     => 'Defines core logic descriptors for editing operations.',
            'ROOT'     => 'Defines root-level subsystem identity and canonical entrypoint.',
        ];
    }

    /*=============================================================
        DOC SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'doc_id'   => EDITOR_DOC_ID::AVIS_ID,
            'doc_type' => EDITOR_DOC_ID::AVIS_TYPE,
            'doc_ver'  => EDITOR_DOC_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL DOC PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'overview'  => self::overview(),
            'artifacts' => self::artifacts(),
        ];
    }
}

class EDITOR_DOC_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_DOC';
    public const AVIS_TYPE = 'DOC';
    public const VERSION   = '1.0.0';
}

?>
