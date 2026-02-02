<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE_TEMPLATE_STAGE
    AVIS-ID: COPILOT_CMS.RUNTIME.PIPELINE.TEMPLATE_STAGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_PIPELINE_TEMPLATE_STAGE.php
    AVIS-TYPE: RUNTIME_PIPELINE_STAGE
=====================================================================*/

class COPILOT_CMS_PIPELINE_TEMPLATE_STAGE
{
    public static function run(array $handlerOutput): array
    {
        // If no template requested → return raw
        if (!isset($handlerOutput['template'])) {
            return [
                'ok'   => true,
                'type' => 'raw',
                'data' => $handlerOutput,
            ];
        }

        // Load template
        $tpl = COPILOT_CMS_TEMPLATE_LOADER::load($handlerOutput['template']);
        if (!$tpl['ok']) {
            return [
                'ok'   => false,
                'type' => 'template_error',
                'data' => $tpl,
            ];
        }

        // Render template
        $vars = $handlerOutput['vars'] ?? [];
        $html = COPILOT_CMS_TEMPLATE_RENDER::render($tpl['content'], $vars);

        return [
            'ok'   => true,
            'type' => 'template',
            'html' => $html,
        ];
    }
}
?>
