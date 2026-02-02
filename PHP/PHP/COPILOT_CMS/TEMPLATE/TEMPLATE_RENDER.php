<?php
/*=====================================================================
    AIFVS-ARTIFACT: TEMPLATE_RENDER
    AVIS-ID: COPILOT_CMS.TEMPLATE.TEMPLATE_RENDER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/TEMPLATE_RENDER.php
    AVIS-TYPE: TEMPLATE-RENDERER
    AVIS-DESCRIPTION:
        Minimal template renderer for COPILOT_CMS.
        Performs deterministic placeholder substitution with basic
        HTML-escaped values.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No template logic evaluation
        - No file inclusion
        - Deterministic string substitution only
        - Self-identifying artifact
=====================================================================*/

class TEMPLATE_RENDER
{
    public static function render(string $tpl, array $vars): string
    {
        foreach ($vars as $key => $value) {
            $tpl = str_replace('{{ ' . $key . ' }}', htmlspecialchars((string)$value), $tpl);
        }
        return $tpl;
    }
}
