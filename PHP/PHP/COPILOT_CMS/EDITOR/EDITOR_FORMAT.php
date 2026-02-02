<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_FORMAT
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_FORMAT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_FORMAT.php
    AVIS-TYPE: FORMAT
    AVIS-DESCRIPTION:
        Deterministic formatting descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines canonical formatting rules, structural formatting operations,
        and schema-enforced formatting descriptors. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Formatting descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_FORMAT
{
    /*=============================================================
        FORMAT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'format_id'   => EDITOR_FORMAT_ID::AVIS_ID,
            'format_type' => EDITOR_FORMAT_ID::AVIS_TYPE,
            'format_ver'  => EDITOR_FORMAT_ID::VERSION,
            'subsystem'   => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        TEXT FORMATTING RULES
    ==============================================================*/
    public static function text(): array
    {
        return [
            'bold'       => ['marker' => 'strong', 'schema' => 'inline'],
            'italic'     => ['marker' => 'em',     'schema' => 'inline'],
            'underline'  => ['marker' => 'u',      'schema' => 'inline'],
            'strikethrough' => ['marker' => 's',   'schema' => 'inline'],
            'code_inline'   => ['marker' => 'code','schema' => 'inline'],
        ];
    }

    /*=============================================================
        BLOCK FORMATTING RULES
    ==============================================================*/
    public static function block(): array
    {
        return [
            'paragraph' => [
                'type'       => 'paragraph',
                'attributes' => ['align' => 'left|center|right|justify'],
            ],
            'heading' => [
                'type'       => 'heading',
                'attributes' => ['level' => '1|2|3|4|5|6'],
            ],
            'list' => [
                'type'       => 'list',
                'attributes' => ['style' => 'ordered|unordered'],
            ],
            'code_block' => [
                'type'       => 'code',
                'attributes' => ['language' => 'string_or_null'],
            ],
        ];
    }

    /*=============================================================
        STRUCTURAL FORMATTING RULES
    ==============================================================*/
    public static function structure(): array
    {
        return [
            'wrap_block' => 'wraps content into a new block type',
            'unwrap_block' => 'removes block wrapper while preserving content',
            'promote_block' => 'raises block level (e.g., H3 → H2)',
            'demote_block'  => 'lowers block level (e.g., H2 → H3)',
        ];
    }

    /*=============================================================
        FORMAT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'format_id'   => EDITOR_FORMAT_ID::AVIS_ID,
            'format_type' => EDITOR_FORMAT_ID::AVIS_TYPE,
            'format_ver'  => EDITOR_FORMAT_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL FORMAT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'text'      => self::text(),
            'block'     => self::block(),
            'structure' => self::structure(),
        ];
    }
}

class EDITOR_FORMAT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_FORMAT';
    public const AVIS_TYPE = 'FORMAT';
    public const VERSION   = '1.0.0';
}

?>
