<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_RENDER
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.RENDER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_RENDER.php
    AVIS-TYPE: TEMPLATE_RENDERER
=====================================================================*/

class COPILOT_CMS_TEMPLATE_RENDER
{
    public static function render(string $content, array $vars, ?string $layout = null): string
    {
        // 0. Sandbox enforcement
        $safe = COPILOT_CMS_TEMPLATE_SANDBOX::enforce($content);
        if (!$safe['ok']) {
            return "<!-- SANDBOX VIOLATION: {$safe['token']} -->";
        }
        $content = $safe['content'];

        // 1. Merge + sanitize variables
        $vars = COPILOT_CMS_TEMPLATE_VAR_MERGE::merge($vars);

        // 2. Resolve includes
        $content = self::resolveIncludes($content);

        // 3. Substitute variables
        foreach ($vars as $key => $value) {
            $content = str_replace('{{ ' . $key . ' }}', $value, $content);
        }

        // 4. Apply layout
        if ($layout !== null) {
            $layoutContent = self::loadLayout($layout);
            $content = str_replace('{{ content }}', $content, $layoutContent);
        }

        return $content;
    }

    // include + layout helpers remain unchanged
}
?>
