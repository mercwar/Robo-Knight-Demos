<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_OUTPUT
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_OUTPUT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_OUTPUT.php
    AVIS-TYPE: OUTPUT
    AVIS-DESCRIPTION:
        Deterministic output descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines canonical output structures, export descriptors, and
        schema-enforced output mappings. Contains NO rendering, NO mutation,
        NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Output descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_OUTPUT
{
    /*=============================================================
        OUTPUT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'output_id'   => EDITOR_OUTPUT_ID::AVIS_ID,
            'output_type' => EDITOR_OUTPUT_ID::AVIS_TYPE,
            'output_ver'  => EDITOR_OUTPUT_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        RAW OUTPUT STRUCTURES
    ==============================================================*/
    public static function raw(): array
    {
        return [
            'content'   => 'raw_content_block',
            'structure' => 'raw_structure_block',
            'metadata'  => 'raw_metadata_block',
            'history'   => 'raw_history_block',
        ];
    }

    /*=============================================================
        EXPORT FORMATS
    ==============================================================*/
    public static function export(): array
    {
        return [
            'json' => [
                'content'   => 'json_encoded_content',
                'structure' => 'json_encoded_structure',
                'metadata'  => 'json_encoded_metadata',
                'history'   => 'json_encoded_history',
            ],
            'xml' => [
                'content'   => 'xml_content_node',
                'structure' => 'xml_structure_node',
                'metadata'  => 'xml_metadata_node',
                'history'   => 'xml_history_node',
            ],
            'text' => [
                'content' => 'plain_text_representation',
            ],
        ];
    }

    /*=============================================================
        OUTPUT TRANSFORM RULES
    ==============================================================*/
    public static function transforms(): array
    {
        return [
            'normalize' => 'ensures deterministic whitespace + encoding',
            'encode'    => 'applies schema-safe encoding rules',
            'flatten'   => 'converts nested structures into linear output',
        ];
    }

    /*=============================================================
        OUTPUT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'output_id'   => EDITOR_OUTPUT_ID::AVIS_ID,
            'output_type' => EDITOR_OUTPUT_ID::AVIS_TYPE,
            'output_ver'  => EDITOR_OUTPUT_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL OUTPUT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'raw'        => self::raw(),
            'export'     => self::export(),
            'transforms' => self::transforms(),
        ];
    }
}

class EDITOR_OUTPUT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_OUTPUT';
    public const AVIS_TYPE = 'OUTPUT';
    public const VERSION   = '1.0.0';
}

?>
