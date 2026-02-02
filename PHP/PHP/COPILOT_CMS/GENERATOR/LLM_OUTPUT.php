<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_OUTPUT
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_OUTPUT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_OUTPUT.php
    AVIS-TYPE: OUTPUT-ASSEMBLER
    AVIS-DESCRIPTION:
        Final output assembler for COPILOT_CMS LLM generator subsystem.
        Uses deterministic formatting and helper utilities to produce
        AVIS-law compliant structured output. Contains NO rendering,
        NO mutation, NO environment access, NO phpinfo(), NO external calls.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Output assembly ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_FORMAT.php';
require_once __DIR__ . '/LLM_HELPER.php';

class LLM_OUTPUT
{
    /*=============================================================
        ASSEMBLE: TITLE + CONTENT BLOCK
    ==============================================================*/
    public static function block(string $title, string $content): array
    {
        return LLM_FORMAT::block($title, $content);
    }

    /*=============================================================
        ASSEMBLE: MULTIPLE BLOCKS
    ==============================================================*/
    public static function blocks(array $items): array
    {
        return LLM_FORMAT::blocks($items);
    }

    /*=============================================================
        ASSEMBLE: SUMMARY
    ==============================================================*/
    public static function summary(array $data): array
    {
        return LLM_FORMAT::summary($data);
    }

    /*=============================================================
        ASSEMBLE: PACKAGE
    ==============================================================*/
    public static function package(string $title, string $content): array
    {
        return LLM_FORMAT::package($title, $content);
    }
}

class LLM_OUTPUT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_OUTPUT';
    public const AVIS_TYPE = 'OUTPUT-ASSEMBLER';
    public const VERSION   = '1.0.0';
}

?>
