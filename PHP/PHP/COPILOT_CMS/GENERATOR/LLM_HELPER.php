<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_HELPER
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_HELPER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_HELPER.php
    AVIS-TYPE: HELPER
    AVIS-DESCRIPTION:
        Helper utilities for COPILOT_CMS LLM generator subsystem.
        Provides deterministic formatting, normalization, and
        structural helpers. Contains NO rendering, NO mutation,
        NO environment access, NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Helpers ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class LLM_HELPER
{
    /*=============================================================
        NORMALIZE STRING
        Ensures consistent formatting for generator output.
    ==============================================================*/
    public static function normalize(string $value): string
    {
        return trim(str_replace(["\r", "\n", "\t"], ' ', $value));
    }

    /*=============================================================
        WRAP TEXT BLOCK
        Provides deterministic block formatting.
    ==============================================================*/
    public static function block(string $title, string $content): array
    {
        return [
            'title'   => $title,
            'content' => $content,
        ];
    }

    /*=============================================================
        SAFE ARRAY MERGE
        Deterministic merge with no mutation of inputs.
    ==============================================================*/
    public static function merge(array $a, array $b): array
    {
        return array_merge($a, $b);
    }

    /*=============================================================
        SAFE KEYED PACKAGE
        Deterministic key/value packaging.
    ==============================================================*/
    public static function package(string $key, $value): array
    {
        return [
            'key'   => $key,
            'value' => $value,
        ];
    }
}

class LLM_HELPER_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_HELPER';
    public const AVIS_TYPE = 'HELPER';
    public const VERSION   = '1.0.0';
}

?>
