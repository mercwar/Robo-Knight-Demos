<?php
/*=====================================================================
    AIFVS-ARTIFACT: LLM_FORMAT
    AVIS-ID: COPILOT_CMS.GENERATOR.LLM_FORMAT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/GENERATOR/LLM_FORMAT.php
    AVIS-TYPE: FORMATTER
    AVIS-DESCRIPTION:
        Deterministic formatting utilities for COPILOT_CMS LLM output.
        Provides AVIS-law compliant formatting for blocks, arrays,
        summaries, and structured payloads. Contains NO rendering,
        NO mutation, NO environment access, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Formatting ONLY
        - No dynamic execution
        - No environment mutation
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/LLM_HELPER.php';

class LLM_FORMAT
{
    /*=============================================================
        FORMAT: TITLE + CONTENT BLOCK
    ==============================================================*/
    public static function block(string $title, string $content): array
    {
        return [
            'title'   => LLM_HELPER::normalize($title),
            'content' => LLM_HELPER::normalize($content),
        ];
    }

    /*=============================================================
        FORMAT: ARRAY OF BLOCKS
    ==============================================================*/
    public static function blocks(array $items): array
    {
        $out = [];
        foreach ($items as $title => $content) {
            $out[] = self::block($title, $content);
        }
        return $out;
    }

    /*=============================================================
        FORMAT: KEYED SUMMARY
    ==============================================================*/
    public static function summary(array $data): array
    {
        $out = [];
        foreach ($data as $key => $value) {
            $out[] = LLM_HELPER::package($key, $value);
        }
        return $out;
    }

    /*=============================================================
        FORMAT: PACKAGE WRAPPER
    ==============================================================*/
    public static function package(string $title, string $content): array
    {
        return [
            'meta' => [
                'title' => LLM_HELPER::normalize($title),
            ],
            'payload' => LLM_HELPER::normalize($content),
        ];
    }
}

class LLM_FORMAT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.GENERATOR.LLM_FORMAT';
    public const AVIS_TYPE = 'FORMATTER';
    public const VERSION   = '1.0.0';
}

?>
